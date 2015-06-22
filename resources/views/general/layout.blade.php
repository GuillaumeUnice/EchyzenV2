<!DOCTYPE html>
<html>
	<head>
		<title>Echyzen - Portfolio @yield('title')</title>
		<meta name="description" content="portofolio, Tutoriels/astuces et galerie 3D/2D!!!" />
		<meta name="keywords" content="portofolio, galerie, infographie, informatique, programmation, zbrush, blender, html, css, php, ..." />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link rel="stylesheet" href= "{{ asset('css/bootstrap.css') }}" />

		@yield('stylesheet')
		
	</head>

	<body>
        
		@include('general.form_notification')
		@include('general.flash_message')
		@if(Auth::check())
		<li><span data-effect="st-effect-2">Profil</span></li>
		<li><span data-effect="st-effect-3">Paramètres</span></li>
		<li><a  href="#">Messagerie</a></li>
		@else
			@include('auth.login')
		@endif
		
		@yield('body')

		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		{{-- Js bootstrap--}}
		<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript" ></script>
		
		<script src="js/classie.js"></script>

		{{-- Js progressBar --}}
		<script src="{{ asset('js/progress_bar.js') }}" type="text/javascript" ></script>
		
		{{-- Js Routing --}}
		<script src="{{ asset('js/laroute.js') }}"></script>
		<script>
			 $('#register').click(function() {
				$('#myModal').modal();
			});
		</script>
		@yield('script')
	</body>


</html>