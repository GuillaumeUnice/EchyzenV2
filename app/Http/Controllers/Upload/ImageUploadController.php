<?php namespace App\Http\Controllers\Upload;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use App\Management\ImageManagementInterface;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class ImageUploadController extends Controller {


    public function getUpload()
    {
        return View::make('tinyMCE/image_dialog');
    }

    /**
     * TODO verifier taille total de l'utilisateur + si admin
     * @param ImageRequest $imageRequest
     * @return mixed
     */
    public function postUpload(ImageRequest $imageRequest, ImageManagementInterface $imageManagement)
    {
        if(Input::file('imagefile')->isValid()) {

            /*$user = Auth::user();

            if(Auth::user()->role >= config('role.administrator')) {
                $destinationPath = config('upload.pathApp') . config('upload.pathImages');
            } else {

                $destinationPath = config('upload.pathUser') . $user->username . '/' . config('upload.pathImages');
                if(!$this->isSpaceAvailable($user, Input::file('imagefile')->getSize()))
                    return Redirect::refresh()
                        ->with('flash_error', 'L\'upload n\'est pas possible votre espace autorisee est plein!');
            }*/


            //$fileName = $this->getFileNameAvailable($destinationPath, Input::file('imagefile'));

            /*if(Auth::user()->role >= config('role.administrator')) {
                Input::file('imagefile')->move($destinationPath, $fileName); // uploading file to given path
            } else {
                DB::transaction(function() use ($destinationPath, $fileName, $user)
                {
                    $user->image_size += Input::file('imagefile')->getSize();
                    $user->save();
                    Input::file('imagefile')->move($destinationPath, $fileName); // uploading file to given path
                });

            }


            $array['file_path'] = $destinationPath . '/' . $fileName;*/
            if($imageManagement->save(Input::file('imagefile'))) {
                $array['file_path'] = $imageManagement->getSuccessMessage();
                return View::make('tinyMCE/image_upload')->with($array);
            } else {
                Redirect::refresh()->with('flash_error', $imageManagement->getErrorMessage());
            }
        } else {
            return Redirect::refresh()->with('flash_error', 'upload a rencontré un problème!');
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
    /*private function getFileNameAvailable($destinationPath, $file) {

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
    }*/
    /*
     * Cette fonction evalue s'il reste assez d'espace autorisee par l'application
     * pour permettre a l'utilisateur d'uploader son image
     * @param $user User utilisateur concernee
     * @param $sizeFile taille en Ko de l'image devant être uploadee
     *
     * @return boolean true si l'utilisateur dispose de l'espace requis
     */
    /*private function isSpaceAvailable($user, $sizeFile) {
        return (($user->image_size + $sizeFile) <= config('upload.maxSizeByUser'));
    }*/

}
