<?php
namespace App\Management\Impl;



use App\Management\ImageManagementInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ImageManagement implements ImageManagementInterface {
  protected $user;
  private $errorMessage = '';
  private $url = '';
  private $fileName = '';

  public function getErrorMessage() {
    return $this->errorMessage;
  }
  public function getUrl() {
    return $this->url;
  }

  public function getfileName() {
    return $this->fileName;
  }

  function __construct() {
    $this->user = Auth::user();
  }

  /**
   * permettant d'uploader une image dans le compte utilisateur
   * Ou app si utilisateur de type admin
   * @param $image image
   * @return bool
   */
  public function save($image, $destinationPath = null, $crop = null, $resize = null) {
    if($destinationPath == null){
      $destinationPath = $this->getDestinationPath($image->getSize());
    }

    if($destinationPath != false) {
      $fileName = $this->getFileNameAvailable($destinationPath, $image);
      $interventionImage = Image::make( $image->getRealPath());
      if($resize) {
        $interventionImage->resize($resize['width'], $resize['height']);
      }
      if($crop) {
        $interventionImage->crop($crop['width'], $crop['height']);
      }

      //enregistrement nouvelle taille autorise a utilisateur
      if(!Auth::user()->role >= config('role.administrator')) {
        $this->user->image_size += $image->getSize();
        $this->user->save();
      }

      // enregistrement image ficher tmp -> destination
      $interventionImage->save($destinationPath . $fileName)->destroy();

      // param retour
      $this->fileName = $fileName;
      $this->url = $destinationPath . '/' . $fileName;
      return true;
    } else {
      $this->errorMessage = 'L\'upload n\'est pas possible votre espace autorisee est plein!';
      return false;
    }
  }

  /**
   * Cette fonction permet de renommer le nom d'une image
   * si cette dernière possède un nom déjà existant.
   * Le rennomage s'effectue en prefixant le nom pas un chiffre.
   * @param $destinationPath repertoire final de destination de l'image uploadé
   *
   * @return mixed
   */
  private function getFileNameAvailable($destinationPath, $file) {

    $fileName =  $file->getClientOriginalName(); // full name + extension

    if(file_exists($destinationPath . '/' . $fileName)) {
      $i = 1;
      $fileName = substr_replace($fileName, (string)$i, 0, 0);
      while(file_exists($destinationPath . '/' . $fileName)) {
        $fileName = substr_replace($fileName, (string)$i, 0, 1);
        $i++;
      }
    }
    return $fileName;
  }
  /*
   * Cette fonction evalue s'il reste assez d'espace autorisee par l'application
   * pour permettre a l'utilisateur d'uploader son image
   * @param $user User utilisateur concernee
   * @param $sizeFile taille en Ko de l'image devant être uploadee
   *
   * @return boolean true si l'utilisateur dispose de l'espace requis
   */
  private function isSpaceAvailable($user, $sizeFile) {
    return (($user->image_size + $sizeFile) <= config('upload.maxSizeByUser'));
  }

  private function getDestinationPath($sizeFile) {


    if(Auth::user()->role >= config('role.administrator')) {
      $destinationPath = config('upload.pathApp') . config('upload.pathImages');
    } else {

      $destinationPath = config('upload.pathUser') . $this->user->username . '/' . config('upload.pathImages');
      if(!$this->isSpaceAvailable($this->user, $sizeFile))
        return false;
    }
    return $destinationPath;
  }

  /**
   * permettant de supprimer une image
   * @param $pathFilename string
   * @return boolean
   */
  public function delete($pathFilename) {
    File::delete($pathFilename);
    return !File::exists($pathFilename);
  }
}
