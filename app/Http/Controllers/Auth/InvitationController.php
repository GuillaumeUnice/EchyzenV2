<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Token;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests\RegisterRequest;
use App\Entreprise;
use App\User;
use App\Http\Requests\InscriptionRequest;
use App\Etudiant;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\InscriptionEntrepriseRequest;
use App\Role;
use App\Moderateur;
use SoapBox\Formatter\Formatter;


class InvitationController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Invitation Controller
	|--------------------------------------------------------------------------
	|
	| Ce controller permet la gestion des invitations des différents utilisateurs
	|
	*/

	/**
	 * Crée une nouvelle instance du controller d'invitation
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth.moderateur', ['except' => ['postInvitationModerateur', 'getInvitationModerateur']]);
	}

    /**
     *  Affiche formulaire d'invitation
     *
     * @return View
     */
    public function getInvitationEtudiant(){
        return View::make('auth/invitation');
    }

    /**
     *  Affiche formulaire d'invitation
     *
     * @return View
     */
    public function getInvitationModerateur(){
        return View::make('auth/invitation');
    }


    /**
     * Traitement du formulaire d'invitation
     *
     * @return Redirect
     */
    public function postInvitationModerateur(InscriptionRequest $request) {

        $this->invitation('mail.inscription_moderateur', Input::get('nom'), Input::get('email'));
        return Redirect::refresh()->with('flash_success', 'Invitation envoyée !');

    }


    /**
     * Traitement du formulaire d'invitation
     *
     * @return Redirect
     */
    public function postInvitationEtudiant(InscriptionRequest $request) {

        $this->invitation('mail.inscription_etudiant', Input::get('nom'), Input::get('email'));
        return Redirect::refresh()->with('flash_success', 'Invitation envoyée !');

    }


    /**
     * Envoie d'invitations multiples admin->moderateurs
     * @return mixed
     */
    public function postInvitationModerateurMultiple()
    {

        $this->invitationsMultiples('mail.inscription_moderateur');
        return Redirect::back()->with('flash_success', 'Invitations envoyées !');

    }


    /**
     * Envoie d'invitations multiples moderateur->etudiants
     * @return mixed
     */
    public function postInvitationEtudiantMultiple()
    {

        $this->invitationsMultiples('mail.inscription_etudiant');
        return Redirect::back()->with('flash_success', 'Invitations envoyées !');

    }



    /**
     * Traitement du formulaire d'invitation
     *
     * @return Redirect
     */
    private function invitation($vue, $nom, $email ) {
        $token = new Token;
        $token->token = str_random(30);
        $token->save();

        $data = array( 'token' => $token->token, 'nom' => $nom);

        Mail::send($vue, $data, function ($message) use ($nom, $email) {
            $message->from('no-reply@adopteunstage.fr')
                ->to($email, $nom)
                ->subject('Inscription adopteunstage');
        });
    }

    /**
     * Lecture d'un fichier csv avec les noms et emails, puis envoie des emails.
     * @param $vue
     */
    private function invitationsMultiples($vue)
    {
        $file = Input::file('file');
        $path = $file->getRealPath();
        $type = $file->getClientOriginalExtension();

        $content = file_get_contents($path);


        if($file->isValid())
        {
            switch (strtoupper($type))
            {
                case 'CSV' :

                    $formatter = Formatter::make($content, Formatter::CSV);
                    $responses = $formatter->toArray();

                    break;
            }
        }

        foreach($responses as $response){
            $this->invitation($vue, $response['prenom'].' '.$response['nom'], $response['email']);
        }
    }
}
