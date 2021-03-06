<?php namespace App\Http\Controllers;


use Illuminate\Support\Facades\View;
use App\Management\SocialManagementInterface;

class IndexController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Index
    |--------------------------------------------------------------------------
    |
    | Ce controller permet l'affichage de l'index du site
    |
    */

    /**
     * Crée une nouvelle instance du controller de l'index
     *
     * @param  App\Management\SocialManagementInterface
     * @return void
     */
    public function __construct(SocialManagementInterface $socialManagement)
    {
        $this->socialManagement = $socialManagement;

    }

    /**
     * Affiche l'index du site
     *
     * @return View
     */
    public function index()
    {
        $tweets = $this->socialManagement->getMyLastTweet(4);
        /*$tweets = Twitter::getUserTimeline(
            ['screen_name' => 'echyzenwebsite',
                'count' => 4,
                'format' => 'object']);*/

        return View::make('index/layout')->with('tweets', $tweets);
    }

}
