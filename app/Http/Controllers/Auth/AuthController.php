<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\RegisterRequest;
use App\Entreprise;
use App\User;
use App\Etudiant;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\InscriptionEntrepriseRequest;
use App\Role;
use App\Moderateur;
use App\Token;
use App\Administrateur;

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

        return View::make('general/public');
    }

    /**
     * Affiche le formulaire d'inscription avec vérification du token
     *
     * @return View
     */
    public function getEtudiantInscription($token)
    {
        if (!$token) return'Error 404';
        $token = Token::whereToken($token)->first();
        if (!$token) return 'Error 404';

        return View::make('auth/register');
    }

    /**
     * Affiche le formulaire d'inscription avec vérification du token
     *
     * @return View
     */
    public function getModerateurInscription($token)
    {
        if (!$token) return 'Error 404';
        $token = Token::whereToken($token)->first();
        if (!$token) return 'Error 404';

        return View::make('auth/register');
    }

    /**
     * Affiche le formulaire d'inscription
     *
     * @return View
     */
    public function getEntrepriseInscription()
    {
        return View::make('auth/entreprise_inscription');
    }

    private function inscrire($user_type, $type, $role, $isValide)
    {

        $user = new User;
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->role_id = $role;
        if ($isValide) $user->valide = 1;
        $user->user_type = $user_type;

        DB::transaction(function () use ($user, $type) {
            $type->save();
            $user->user_id = $type->id;
            $user->save();
        });
    }

    /**
     * Traitement du formulaire d'inscription
     *
     * @return Redirect
     */
    public function postEntrepriseInscription(InscriptionEntrepriseRequest $request)
    {
        $user_type = 'App\Entreprise';
        $entreprise = new Entreprise;
        $entreprise->nom = Input::get('nom_entreprise');
        $role = Role::whereNom('entreprise')->first();

        $this->inscrire($user_type, $entreprise, $role->id, false);

        return Redirect::refresh()->with('flash_success', 'Votre demande d\'inscription a été prise en compte! Un moderateur va valider et activer le compte vous serez informé par mail dans les plus bref delais');
    }

    public function postEtudiantInscription($token, RegisterRequest $request)
    {
        if (!$token) return 'Error 404';
        $token = Token::whereToken($token)->first();
        if (!$token) return 'Error 404';

        $user_type = 'App\Etudiant';
        $etudiant = new Etudiant;
        $role = Role::whereNom('etudiant')->first();
        $this->inscrire($user_type, $etudiant, $role->id, true);
        Token::whereToken($token->token)->delete();

        return Redirect::route('index')->with('flash_success', 'Votre inscription est effectuée vous pouvez vous connecter!!!');
    }

    public function postModerateurInscription($token, RegisterRequest $request)
    {
        if (!$token) return 'Error 404';
        $token = Token::whereToken($token)->first();
        if (!$token) return 'Error 404';

        $user_type = 'App\Moderateur';
        $moderateur = new Moderateur;
        $role = Role::whereNom('moderateur')->first();
        $this->inscrire($user_type, $moderateur, $role->id, true);
        Token::whereToken($token->token)->delete();

        return Redirect::route('index')->with('flash_success', 'Votre inscription est effectuée vous pouvez vous connecter!!!');
    }


    /**
     * Traitement du formulaire de login
     *
     * @return Redirect
     */
    public function postLogin()
    {
        $email = Input::get('email');
        $passe = Input::get('password');

        if (Auth::attempt(array('email' => $email, 'password' => $passe, 'valide' => 1), Input::get('souvenir'))) {

            $role = Auth::user()->role;
            Session::put('role_nom', $role->nom);
            Session::put('role_autorisation', $role->id);

            return $this->getAccueil();

        } else {
            return Redirect::refresh()->with('flash_error', 'Pseudo/mot de passe non correct ou mail non validé !')->withInput();
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
        return Redirect::route('index')->with('flash_notice', 'Vous avez été correctement déconnecté.');
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
}
