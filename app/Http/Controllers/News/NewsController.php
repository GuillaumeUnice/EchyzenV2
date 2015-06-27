<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Model\News;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class NewsController extends Controller {


    public function getTest()  {
        return 'lol';
    }

    public function create()  {
        return View::make('news.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $news = new News();
        $news->titre = Input::get('title');
        $news->contenu = Input::get('contenu');
        $news->intro = Input::get('intro');
        $news->rubrique_id = 2;
        $news->image_id = 4;


        if ($news->save()) {
            return Redirect::to(route('news_create'))->with('flash_success', 'News publié!');
        } else {
            return Redirect::back()->withInput()->withErrors('La création de la news a échoué!');
        }


    }
}
