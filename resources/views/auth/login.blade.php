 <h3>Connexion</h3><br/>

<form role="form" class="ajax_form" method="POST" action="{{ url('/auth/login') }}">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="input-group">
		<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
		<input class="form-control" type="text" name="username" id="username" required="required" placeholder="Pseudo" value="{{ old('email') }}"/>
	</div>
	<br/>
	<div class="input-group">
		<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
		<input class="form-control" id="password" type="password" placeholder="Mot de passe" name="password"/>
	</div>
	<br/>

	<div class="form-group rememberme">
			<div class="checkbox">
				<label for="loginkeeping">
					<input type="checkbox" name="remember" id="loginkeeping" />
					Se souvenir de moi
				</label>
			</div>
	</div>
<div class="input-group">
    <span class="input input--minoru">
        <input class="input__field input__field--minoru" type="text" id="test" />
        <label class="input__label input__label--minoru" for="test">
            <span class="input__label-content input__label-content--minoru">First Name</span>
        </label>
    </span>
</div>
	<p class="login button">
		<input type="submit" class="login button btn btn-success" value="Me connecter"/>
		<a class="btn btn-link"  href="{{ url('/password/email') }}">Mot de passe oublié ?</a>
		<a class="ajax_modal btn btn-link"  href="{{ url(route('register')) }}">M'inscrire ?</a>
	</p>

</form>
