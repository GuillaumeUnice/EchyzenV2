<?php namespace App\Http\Controllers\Auth;

use Illuminate\Mail\Message;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\File;
use App\Model\User;

class AuthController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Inscription & authentification Controller
    |--------------------------------------------------------------------------
    |
    | Ce controller permet la gestion des nouveaux utilisateurs
    |
    */

    /**
     * Crée une nouvelle instance du controller d'authentification
     *
     * @param  \Illuminate\Contracts\Auth\Guard $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;

        $this->middleware('guest', ['except' => ['getLogout']]);
    }

    /**
     * Affiche le formulaire d'inscription
     *
     * @return View
     */
    public function getLogin()
    {

        return View::make('auth/login');
    } // getLogin()

    /**
     * Traitement du formulaire de login
     *
     * @return Redirect
     */
    public function postLogin()
    {
        $username = Input::get('username');
        $passe = Input::get('password');

        if (Auth::attempt(array('username' => $username, 'password' => $passe, 'confirmed' => 1), Input::get('souvenir'))) {

            return Redirect::intended()->with('flash_success', 'Vous êtes connecté !');

        } else {
            return Redirect::intended()->with('flash_error', 'Pseudo/mot de passe non correct ou mail non validé !')->withInput();
        }
    } // postLogin()

    /**
     * Effectue le logout
     *
     * @return Redirect
     */
    public function getLogout()
    {
        Auth::logout();
        return Redirect::intended()->with('flash_notice', 'Vous avez été correctement déconnecté.');
    } // logout()


    /**
     * Affiche le formulaire d'inscription
     *
     * @return View
     */
    public function getRegister()
    {
        if (Request::ajax()) {
            return View::make('modal.register');
        } else {
            return View::make('auth.register');
        }

    } // getRegister()

    /**
     * Traitement du formulaire d'inscription
     *
     * @return Redirect si requête HTML
     * @return Response si requête Ajax Json
     */
    public function postRegister( RegisterRequest $registerRequest)
    {

        $user = new User;
        $user->username = Input::get('username');
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));

        $user->token = str_random(30);
        $data = array(  'token' => $user->token,
                        'username' => Input::get('username'));
        Mail::send('mail.register', $data, function(Message $message) {
            $message->to(Input::get('email'), Input::get('username'))
                ->subject('Echyzen : Verify your email address');
        });
        $path = public_path() . '/uploads/users/' . strtolower(Input::get('username'));
        File::makeDirectory($path, $mode = 0777, true, true);
        File::makeDirectory($path . '/profil', $mode = 0777, true, true);
        File::makeDirectory($path . '/images', $mode = 0777, true, true);

        $user->save();

        if (Request::ajax()) {
            $array = array('success' => 'Vous êtes inscris! Un email de confirmation vous a été envoyé');
            return Response::json($array);
        } else {
            return Redirect::back()->with('flash_success', 'Vous êtes inscris! Un email de confirmation vous a été envoyé');
        }
    } // postRegister()

    /**
     * Effectue la verification de mail pour confirmer le compte utilisateur
     *
     * @return Redirect
     */
    public function getVerify($token)
    {
        if (!$token) return'Error 404';
        $user = User::whereToken($token)->first();
        if (!$user) return 'Error 404';
        $user->confirmed = 1;
        $user->token = null;
        $user->save();
        return Redirect::route('index')->with('flash_success', 'Votre inscription est confirmée vous pouvez vous connecter!!!');
    } // getVerify()

}
