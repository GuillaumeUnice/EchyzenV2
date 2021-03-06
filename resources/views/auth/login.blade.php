<h5 ng-if="$root.authenticated">Welcome, <% $root.currentUser.username %></h5>
<form>
<input type="text" class="form-control" placeholder="username" ng-model="username">
<% username%>
<input type="password" class="form-control" placeholder="password" ng-model="password">
<button class="btn btn-primary" ng-click="login()">Submit</button>

</form>

<h3 xmlns="http://www.w3.org/1999/html">Connexion</h3><br/>

<form role="form" class="ajax_form  " method="POST" action="{{ url('/auth/login') }}">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

    {{--<div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
        <span class="input input--minoru">
        <input class="form-control input__field input__field--minoru" type="text" id="username" name="username" placeholder="Pseudo" value="{{ old('username') }}" required="required"/>
        <label class="input__label input__label--minoru" ></label>
        </span>
    </div>
    <br>--}}
	{{--<div class="input-group">
		<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
		<input class="form-control" type="text" name="username" id="username" required="required" placeholder="Pseudo" value="{{ old('email') }}"/>
	</div>
	<br/>
	<div class="input-group">
		<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
		<input class="form-control" id="password" type="password" placeholder="Mot de passe" name="password"/>
	</div>
	<br/>--}}
  {!!
    Form::customInput( array(
                          'type'        => 'text',
                          'name'        => 'username',
                          'placeholder' => 'Pseudo',
                          'glyphicon'   => 'glyphicon-user',
                          'required'    => 'required',
                          'old'         => old('username')))
  !!}
  <br/>
    {!!
      Form::customInput( array(
                            'type'        => 'password',
                            'name'        => 'password',
                            'placeholder' => 'Mot de passe',
                            'glyphicon'   => 'glyphicon-lock',
                            'required'    => 'required'))
    !!}
    <br/>
    {{--
    <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
        <span class="input input--minoru">
        <input class="form-control input__field input__field--minoru" type="password" id="password" name="password" placeholder="Mot de passe" required="required"/>
        <label class="input__label input__label--minoru" ></label>
        </span>
    </div>
    <br>--}}
	<!--<div class="form-group rememberme">
			<div class="checkbox">
				<label for="loginkeeping">
					<input type="checkbox" name="remember" id="loginkeeping" />
					Se souvenir de moi
				</label>
			</div>
	</div>-->
    {!!
      Form::customCheckbox( array(
                              'name'        => 'remember',
                              'placeholder' => 'Se souvenir de moi',
                              'old'         => Input::old('remember')))
    !!}

	{{--<div class="form-group rememberme">
	<div class="checkbox">
    <ul>
        <li>
            <input id="loginkeeping" name="remember" type="checkbox">
            <label for="loginkeeping">Se souvenir de moi</label>
        </li>
    </ul>
    </div>
    </div>--}}
    {!! Form::buttonSubmit( array('text' => 'Me connecter') ) !!}
	<!--<p class="login button">
		<input type="submit" class="login button btn btn-success" value="Me connecter"/>
	</p>-->

</form>

<ul>
    <li>
        <a  class="btn btn-link" href="{{ url('/password/email') }}">
            Mot de passe oublié ?
        </a>
    </li>
    <li>
        <a class="ajax_modal btn btn-link"  href="{{ url(route('register')) }}">
            M'inscrire ?
        </a>
    </li>
</ul>