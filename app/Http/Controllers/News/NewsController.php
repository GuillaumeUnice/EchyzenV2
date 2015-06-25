<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;

class NewsController extends Controller {

    /**
     * Create a new NewsController controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->beforeFilter('auth.administrator');
    }

    public function getTest()  {
        return 'lol';
    }
}
