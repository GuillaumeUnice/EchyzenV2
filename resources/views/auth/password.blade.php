
    @include('general.form_notification')
    @include('general.flash_message')

    <h3>Mot de passe oublié</h3><br/>

    <form class="form-inline" role="form" method="POST" action="{{ url('/password/email') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">


        <div class="input-group">
            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
            <input class="form-control" type="email" id="emailsignup" name="email" placeholder="Adresse email du compte" value="{{ old('email') }}"/>
        </div>
        <input class="btn btn-default" type="submit" value="Réinitialiser"/>

	</form>

