<?php namespace App\Http\Controllers;


use Illuminate\Support\Facades\View;

class IndexController extends Controller {


    public function index()
    {
        return View::make('general/public');
    }

}