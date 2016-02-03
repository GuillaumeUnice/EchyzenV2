<?php namespace App\Http\Controllers;


use Illuminate\Support\Facades\View;
use App\Management\SocialManagementInterface;

class WebSiteController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | CV, Contact, Mention Legal
    |--------------------------------------------------------------------------
    |
    | Ce controller permet l'affichage des différentes vues obligatoire pour tout site
    | ainsi qu'une présentation de moi meme : CV, Autoentrepreneur...
    |
    */

    /**
     * Affiche du CV
     *
     * @return View
     */
    public function getCV()
    {
        return View::make('website/CV');
    }

    /**
     * Affiche du formulaire de contact
     *
     * @return View
     */
    public function getContact()
    {
        return View::make('website/CV');
    }

    /**
     * Tratiemtent du formulaire de contact
     *
     * @return View
     */
    public function postContact()
    {
        return View::make('website/CV');
    }


}
