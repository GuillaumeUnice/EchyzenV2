<?php namespace App\Http\Controllers\Project;


use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use App\Management\ImageManagementInterface;
use App\Http\Controllers\Controller;
use App\Model\Project;
use App\Model\CommentProject;
use App\Http\Requests\Project\ProjectRequest;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Request;
use App\Model\Keyword;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class CommentProjectController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | CommentProject
    |--------------------------------------------------------------------------
    |
    | Ce controller permet la gestion des commentaires des projets
    |
    */
	protected $auth;
    /**
     * Crée une nouvelle instance du controller de commentaire de projet
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
		$this->auth = $auth;

    }

    /**
     * Affiche la liste des commentaires d'un projet
     *
     * @return View
     */
    public function index($projectId)
    {
		
		$array['comments']  = Project::where('projects.id',$projectId)
        ->join('commentprojects', 'commentprojects.project_id', '=', 'projects.id')
		->join('users', 'commentprojects.user_id', '=', 'users.id')
        ->select('commentprojects.content as content', 'commentprojects.created_at as created_at', 'commentprojects.updated_at as updated_at', 'users.username as username', 'users.id as user_id', 'commentprojects.id as comment_id')
		->get();
		//dd($array['comments'] [0]->comment_id);
      $array['id'] = Auth::user()->username;
      if (Request::wantsJson()) {
        return Response::json($array);
      }



	  return null; 
		
		return Redirect::route('project.index', $projectId)->with('flash_success', 'Vous n\'avez pas accès a cette page!!');
	  
    }

  /**
   * Affiche le contenu d'un commentaire du projet
   *
   * @return View
   */
  public function show($projectId, $commentId)
  {
		$array['comment']  = Commentproject::where('commentprojects.id',$commentId)
		->join('users', 'commentprojects.user_id', '=', 'users.id')
        ->select('commentprojects.content as content', 'commentprojects.created_at as created_at', 'commentprojects.updated_at as updated_at', 'users.username as username', 'users.id as user_id', 'commentprojects.id as comment_id')
		->first();
		
		
		//dd($array['comment'] ->comment_id);

      if (Request::wantsJson()) {
        return Response::json($array);
      } 
  }

    /**
     * Affiche la liste des projets dans la vue admin
     *
     * @return View
     */
    public function adminIndex()
    {
      $projects = Project::orderBy('created_at', 'DESC')->get();
      return View::make('admin/project/index')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('project/comment/create');
    }

    /**
     * Formulaire d'édition du projet.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($projectId, $commentId)
    {

      $keywords = Keyword::all();

        $project = Project::find($id);//->with('keywords')->lists('keywords.name');

      $keywordsName = Project::where('projects.id',$id)
        ->join('keyword_project', 'keyword_project.project_id', '=', 'projects.id')
        ->join('keywords', 'keywords.id', '=', 'keyword_project.keyword_id')
        ->select('keywords.name as name')
        ->lists('name');
      //dd($);
       // dd($project->keywords[0]->name);
        if($project != null){
            return View::make('admin/project/edit')->with('project', $project)->with('keywordsName', $keywordsName)->with('keywords', $keywords);
        } else{
            Session::flash('flash_error', 'Une erreur s\'est produite, aucun projet ne correspond avec les données.');
            return  Redirect::back();
        }
    }

    /**
     * Delete the project in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        if($project != null){
          if($this->imageManagement->delete(Config::get('image.pathProject') . $project->url_image_first))
          {
            if($this->imageManagement->delete(Config::get('image.pathProject') . $project->url_image_title))
            {
              $project->delete();
              return Redirect::route('admin.project.index')->with('flash_success', 'Suppression du projet effectuée!');
            } else {
              return Redirect::back()->withInput()->withErrors('L\'image de titre du projet n\'a pas pu être supprimée!');
            }
          } else {
            return Redirect::back()->withInput()->withErrors('La première images du projet n\'a pas pu être supprimée!');
          }
        } else{
            Session::flash('flash_error', 'Une erreur s\'est produite, le projet que vous tentez de supprimer ne correspond a aucune de nos données.');
            return  Redirect::back();
        }
    }


  /**
   * Update the project in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    $project = Project::find($id);

    if($project == null){
      return Redirect::back()->withInput()->withErrors('Aucun projet ne correspond on ne peut éditer!');
    }

    if (Input::file('url_image_first')) {
      if ($this->imageManagement->delete(Config::get('image.pathProject') . $project->url_image_first)) {
        if ($this->imageManagement->save(Input::file('url_image_first'), Config::get('image.pathProject'))) {
          $project->url_image_first = $this->imageManagement->getfileName();
          $project->save();
        } else {
          return Redirect::back()->withInput()->withErrors('La nouvelle première image du projet n\'a pas pu être ajoutée!');
        }
      } else {
        return Redirect::back()->withInput()->withErrors('L\'ancienne première d\'image du projet n\'a pas pu être supprimée!');
      }
    }

    if (Input::file('url_image_title')) {
      if ($this->imageManagement->delete(Config::get('image.pathProject') . $project->url_image_first)) {
        if ($this->imageManagement->save(Input::file('url_image_title'), Config::get('image.pathProject'))) {
          $project->url_image_title = $this->imageManagement->getfileName();
          $project->save();
        } else {
          return Redirect::back()->withInput()->withErrors('La nouvelle image de titre du projet n\'a pas pu être ajoutée!');
        }
      } else {
        return Redirect::back()->withInput()->withErrors('L\'ancienne image de titre du projet n\'a pas pu être supprimée!');
      }
    }


    $project->save();
    $this->updateKeyword($project, Input::get('keywords'));

    return Redirect::route('admin.project.edit', $project->id)->with('flash_success', 'Modification du projet effectuée!');

  }

    /**
     * Store a newly created project in storage.
     *
     * @return Response
     */
    public function store(ProjectRequest $request, Project $project)
    {

      // upload images
      if($this->imageManagement->save(Input::file('url_image_first'), Config::get('image.pathProject'))) {
        $project->url_image_first = $this->imageManagement->getfileName();
      } else {
        return Redirect::back()->withInput()->withErrors('L\'image de présentation du project n\'a pas pu être ajouté!');
      }

      if($this->imageManagement->save(Input::file('url_image_title'), Config::get('image.pathProject'))) {
        $project->url_image_title = $this->imageManagement->getfileName();
      } else {
        $this->imageManagement->delete($project->url_image_first);
        return Redirect::back()->withInput()->withErrors('L\'image du titre n\'a pas pu être ajouté!');
      }

      //hydratation object
      $project->title = Input::get('title');
      $project->alt_image_first = Input::get('alt_image_first');
      $project->preamble = Input::get('preamble');
      $project->introduction = Input::get('introduction');
      $project->level = Input::get('level');
      $project->progress = Input::get('progress');
      $project->priority = Input::get('priority');
      $project->software = Input::get('software');
      $project->goal = Input::get('goal');
      if(Input::get('start_day')) { $project->start_day = Input::get('start_day'); }
      $project->end_day = Input::get('end_day');
      $project->alt_image_title = Input::get('alt_image_title');
      $project->content = Input::get('content');
      $project->conclusion = Input::get('conclusion');

      $project->save();
      $this->updateKeyword($project, Input::get('keywords'));

      return Redirect::route('admin.project.edit', $project->id)->with('flash_success', 'Projet enregistré!');

    }

    protected function updateKeyword($project, $keywordsName){
      $keywords = array();
      foreach ($keywordsName as $keywordName){
        array_push($keywords, Keyword::firstOrCreate(array('name' => $keywordName))->id);
      }
      $project->keywords()->sync($keywords);
    }
}
