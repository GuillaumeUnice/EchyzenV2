<!DOCTYPE html>
<html>
	<head>
		<title>Echyzen - Portfolio @yield('title')</title>
		<meta name="description" content="portofolio, Tutoriels/astuces et galerie 3D/2D!!!" />
		<meta name="keywords" content="portofolio, galerie, infographie, informatique, programmation, zbrush, blender, html, css, php, ..." />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link rel="stylesheet" href= "{{ asset('css/bootstrap.css') }}" />
        <link rel="stylesheet" href= "{{ asset('css/libraries/notif_box_spinner.css') }}" />

        <link rel="stylesheet" href= "{{ asset('fonts/font-awesome-4.3.0/css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href= "{{ asset('css/libraries/send/send.css') }}" />

        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

		@yield('stylesheet')
		
	</head>

	<body>
        
		@include('general.form_notification')
		@include('general.flash_message')
		@if(Auth::check())
		<li><span data-effect="st-effect-2">Profil</span></li>
		<li><span data-effect="st-effect-3">Paramètres</span></li>
		<li><a  href="#">Messagerie</a></li>
		<li><a  href="{{ url(route('logout')) }}">Déconnexion</a></li>
		@else
			@include('auth.login')
		@endif
		
		@yield('body')


		<div id="my_modal"></div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		{{-- Js bootstrap--}}
		<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript" ></script>
		<script src="{{ asset('js/classie.js') }}"></script>
        <script src="{{ asset('js/modernizr.custom.js') }}"></script>

        {{-- Js laroute --}}
        <script src="{{ asset('js/laroute.js') }}" type="text/javascript" ></script>

		{{-- Js progressBar --}}
		<script src="{{ asset('js/progress_bar.js') }}" type="text/javascript" ></script>

        {{-- Js Notification --}}
        <script src="{{ asset('js/libraries/notificationFx.js') }}"></script>

        {{-- Js gestion fenetre modal/ajax --}}
        <script src="{{ asset('js/modal.js') }}"></script>

        {{-- Js TinyMCE --}}
        <script type="text/javascript" src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/tinymce/tinymce_init.js') }}"></script>

		@yield('script')
	</body>


</html>
