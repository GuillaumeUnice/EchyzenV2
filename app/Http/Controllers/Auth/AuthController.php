<?php namespace App\Http\Controllers\Auth;

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
    }

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
    }

    /**
     * Effectue le logout
     *
     * @return Redirect
     */
    public function getLogout()
    {
        Auth::logout();
        return Redirect::intended()->with('flash_notice', 'Vous avez été correctement déconnecté.');
    }


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

    }

    /**
     * Traitement du formulaire d'inscription
     *
     * @return Redirect
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
        Mail::send('mail.register', $data, function($message) {
            $message->from( 'echyzen.website@gmail.com', 'Echyzen' )
                ->to(Input::get('email'), Input::get('username'))
                ->subject('Echyzen : Verify your email address');
        });
        $path = public_path() . '/uploads/users/' . strtolower(Input::get('username'));
        File::makeDirectory($path, $mode = 0777, true, true);
        File::makeDirectory($path . '/profil', $mode = 0777, true, true);
        File::makeDirectory($path . '/images', $mode = 0777, true, true);

        $user->save();
        $array = array('success' => 'Vous êtes inscris !');
        return Response::json($array);
        //return Redirect::back()->with('flash_notice', 'Votre compte a été créé.');

        //return Redirect::refresh()->withErrors($v)->withInput();
    }

    /**
     * Effectue la verification de mail pour confirmer le compte utilisateur
     *
     * @return View
     */
    public function getVerify($token)
    {
        if (!$token) return'Error 404';
        $user = User::whereToken($token)->first();
        if (!$user) return 'Error 404';
        $user->confirmed = 1;
        $user->token = null;
        $user->save();
        return Redirect::route('index')->with('flash_success', 'Votre inscription est effectuée vous pouvez vous connecter!!!');
    }

















    public function getAccueil()
    {

        if (Auth::user()->user_type == get_class(new Entreprise())) {
            return Redirect::route('accueil-entreprise')->with('flash_success', 'Bonjour' . Auth::user()->username . ' !');
        } elseif (Auth::user()->user_type == get_class(new Etudiant())) {
            return Redirect::route('accueil-etudiant')->with('flash_success', 'Bonjour' . Auth::user()->username . ' !');
        } elseif (Auth::user()->user_type == get_class(new Moderateur())) {
            return Redirect::route('accueil-moderateur')->with('flash_success', 'Bonjour' . Auth::user()->username . ' !');
        } elseif (Auth::user()->user_type == get_class(new Administrateur())) {
            return Redirect::route('accueil-administrateur')->with('flash_success', 'Bonjour' . Auth::user()->username . ' !');
        }

        return "Error 404";
    }




    /*private function view($array) {
        if (Request::wantsJson()) {
            return Response::json($array);
        } else {
            return  Redirect::route('accueil-etudiant')->with('flash_error', 'Accès refusée!!!');
        }
    } // view()
    //$array = array('success' => 'Vous êtes connecté !');
            //return Response::json($array);
           // return Redirect::to('/')->with('flash_error', 'Vous êtes connecté !');
*/
}
