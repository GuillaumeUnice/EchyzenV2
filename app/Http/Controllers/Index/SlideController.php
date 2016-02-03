<?php namespace App\Http\Controllers\Index;

/**
TODO : Test existance update/delete depuis Request +
 * Pas de Redirect ou Route dans DB Transaction seulement des Sessions flash avec boolean si ok ou non
 */
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use App\Management\ImageManagementInterface;
use App\Http\Controllers\Controller;
use App\Model\Slide;
use App\Http\Requests\Slide\SlideRequest;

class SlideController extends Controller {

  /*
  |--------------------------------------------------------------------------
  | Slide
  |--------------------------------------------------------------------------
  |
  | Ce controller permet la gestion du slider de l'index du site
  |
  */

  /**
   * Crée une nouvelle instance du controller de slide
   *
   * @param  App\Management\SocialManagementInterface
   * @return void
   */
  public function __construct(ImageManagementInterface $imageManagement)
  {
    $this->imageManagement = $imageManagement;

  }

  /**
   * Affiche la liste des slides
   *
   * @return View
   */
  public function index()
  {
    $slides = Slide::orderBy('updated_at', 'DESC')->get();
    return View::make('admin/slide/index')->with('slides', $slides);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return View::make('rubric.create');
  }

  /**
   * Formulaire d'édition du slide.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $slide = Slide::find($id);

    if($slide != null){
      return View::make('admin/slide/edit')->with('slide', $slide);
    } else{
      Session::flash('flash_error', 'Une erreur s\'est produite, aucun slide ne correspond dans nos données.');
      return  Redirect::back();
    }
  }

  /**
   * Delete the slide in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $slide = Slide::find($id);
    if($slide != null){
      $this->imageManagement->delete(Config::get('image.pathSlider') . $slide->url);
      $slide->delete();
      return Redirect::route('admin.slide.index')->with('flash_success', 'Suppression du slide effectuée!');
    } else{
      Session::flash('flash_error', 'Une erreur s\'est produite, aucun slide ne correspond dans nos données.');
      return  Redirect::back();
    }

  }


  private function registerSlideImage($image) {
    return $this->imageManagement->save($image, Config::get('image.pathSlider'),
      Config::get('image.slide.crop'), Config::get('image.slide.resize'));
  }

  /**
   * Update the slide in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    $slide = Slide::find($id);

    if($slide == null){
      return Redirect::back()->withInput()->withErrors('Aucun slide ne correspond on ne peut éditer!');
    }

    $slide->alt = Input::get('alt');
    $slide->content = Input::get('content');
    $slide->title = Input::get('title');


    if (Input::file('imageSlide')) {
      $this->imageManagement->delete(Config::get('image.pathSlider') . $slide->url);
      if($this->registerSlideImage(Input::file('imageSlide'))) {
        $slide->url = $this->imageManagement->getfileName();
      } else {
        return Redirect::back()->withInput()->withErrors('L\'image du slide n\'a pas pu être ajoutée!');
      }
    }
    $slide->save();

    return Redirect::route('admin.slide.edit', $slide->id)->with('flash_success', 'Modification du slide effectuée!');

  }

  /**
   * Store a newly created slide in storage.
   *
   * @return Response
   */
  public function store(SlideRequest $request, Slide $slide)
  {
    $slide->alt = Input::get('alt');
    $slide->title = Input::get('title');
    $slide->content = Input::get('content');

    if($this->registerSlideImage(Input::file('imageSlide'))) {
      $slide->url = $this->imageManagement->getfileName();
    } else {
      return Redirect::back()->withInput()->withErrors('L\'image du slide n\'a pas pu être ajouté!');
    }
    $slide->save();

    return Redirect::route('admin.slide.edit', $slide->id)->with('flash_success', 'Slide enregistré!');

  }


}
