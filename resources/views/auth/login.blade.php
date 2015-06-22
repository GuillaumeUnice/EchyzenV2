 <h3>Connexion</h3><br/>

<form role="form" method="POST" action="{{ url('/auth/login') }}">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="input-group">
		<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
		<input class="form-control" type="email" name="email" id="username" required="required" placeholder="Adresse email" value="{{ old('email') }}"/>
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

	<p class="login button">
		<input type="submit" class="login button btn btn-success" value="Me connecter"/>
		<a class="btn btn-link"  href="{{ url('/password/email') }}">Mot de passe oublié ?</a>
	</p>

</form>