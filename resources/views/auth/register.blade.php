@extends('general.public')

@section('body')
    <div>
        Pour vous inscrire veuillez remplir ce formulaire :
    </div>
    <div>
        <div>
            <form  role="form" method="POST" action="{{ Request::url() }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                        <input class="form-control" type="text" id="usernamesignup" name="username" placeholder="Votre nom" value="{{ old('username') }}"/>
                    </div>
                    <br/>

                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                        <input class="form-control" type="email" id="emailsignup" name="email" placeholder="Adresse email" value="{{ old('email') }}"/>
                    </div>
                    <br/>

                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input class="form-control" id="passwordsignup" name="password" required="required" type="password" placeholder="Mot de passe"/>
                    </div>
                    <br/>

                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input class="form-control" id="passwordsignup_confirm" name="password_confirmation" required="required" type="password" placeholder="Confirmation du mot de passe"/>
                    </div>
                    <br/>

                    {!! Form::button_submit('Envoyer !') !!}
                <!--<p class="signin button">
                    <input class="btn-form" type="submit" value="S'inscrire"/>
                </p>-->
            </form>
        </div>
    </div>
@endsection
