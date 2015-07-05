<!DOCTYPE html>
<html>
	<head>
		<title>Echyzen - Portfolio @yield('title')</title>
		<meta name="description" content="portofolio, Tutoriels/astuces et galerie 3D/2D!!!" />
		<meta name="keywords" content="portofolio, galerie, infographie, informatique, programmation, zbrush, blender, html, css, php, ..." />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link rel="stylesheet" href= "{{ asset('css/bootstrap.css') }}" />
        <link rel="stylesheet" href= "{{ asset('css/design.css') }}" />
        <link rel="stylesheet" href= "{{ asset('css/sidebar_effect.css') }}" />
        <link rel="stylesheet" href= "{{ asset('css/link.css') }}" />
        <link rel="stylesheet" href= "{{ asset('css/button.css') }}" />
        <link rel="stylesheet" href= "{{ asset('css/checkbox.css') }}" />
        <link rel="stylesheet" href= "{{ asset('css/input.css') }}" />
        <link rel="stylesheet" href= "{{ asset('css/lightbox.css') }}" />

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
		{{--@if(Auth::check())
		<li><span data-effect="st-effect-2">Profil</span></li>
		<li><span data-effect="st-effect-3">Paramètres</span></li>
		<li><a  href="#">Messagerie</a></li>
		<li><a  href="{{ url(route('logout')) }}">Déconnexion</a></li>
		@else
			@include('auth.login')
		@endif--}}























        <div id="st-container" class="st-container">
            <div class="st-pusher">
                <div class="st-content"><!-- this is the wrapper for the content -->
                        <header>
                            <nav class="responsive-menu clearfix" id="responsive-menu">
                                    <div id="st-trigger-effects">
                                        <button data-effect="st-effect-1"></button>
                                    </div>
                              <ul>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Galerie</a></li>
                                    <li><a href="#">Projet</a></li>
                                    <li><a href="#">Tuto</a></li>
                                    <li><a href="#">Test</a></li>
                                    <li><a href="#">Site</a></li>
                              </ul>
                            </nav>
                        </header>
                    <div id="corps">
                        <div id="progressBar"><div id="progressBarInside"></div></div>
                            <div id="bandeau"><h1 class="bandeau_titre">News</h1><div id="bandeau_centre"></div></div>
                        <h1>Ceci est un h1</h1>
                        <h2>Ceci est un h2</h2>
                        <h3>Ceci est un h3</h3>
                        <h4>Ceci est un h4</h4>
                        <h5>Ceci est un h5</h5>
                        <p>sfsefef</p><br>
                        <em>ceci est em!!!</em><strong>strong</strong>
                        <hr>
                        <blockquote>
                            sefsfe
                            <p> dans le p</p><strong>loll strong</strong>
                        </blockquote>
                        	avant <a href="#" data-hover="Ceci est un link"><span>Ceci est un link</span></a> après
                        <p>
                            Avant <a href="#" data-hover="Clique ICI"><span>Clique ICI</span></a> après.....

                        </p>
                        <pre>dans le pre</pre>
                        <br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br>
                        <br><br><br><br><br>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br>qdsdfzfefesfez
                        <div id="corps_bis">
                            <button>loldfgrdgrdgrgrdgreegregre</button>
                        </div>

                        <span class="input input--minoru">
                            <input required class="input__field input__field--minoru" type="text" id="input-13" />
                            <label class="input__label input__label--minoru" for="input-13">

                            </label>
                        </span>
				<form autocomplete="off">
					<div class="radio">
					<ul>
						<li><input id="r1" name="r1" type="radio"><label for="r1">Seamlessly visualize quality intellectual capital</label></li>
						<li><input id="r2" name="r1" type="radio"><label for="r2">Collaboratively administrate turnkey channels</label></li>
						<li><input id="r3" name="r1" type="radio"><label for="r3">Objectively seize scalable metrics</label></li>
						<li><input id="r4" name="r1" type="radio"><label for="r4">Energistically scale future-proof core competencies</label></li>
					</ul>
					</div>
				</form>

				<div class="image-gallery group">
					<figure tabindex="0" contenteditable="false">
					    <img src="{{ asset('images/test.png') }}"  />
					    <figcaption contenteditable="false">
					        Ceci est une description
					    </figcaption>
					</figure>
				</div>
<div class="image-gallery group">
                <figure tabindex="0" >
                  <img src="{{ asset('images/test.png') }}" alt="" />
                  <figcaption>Légende associée</figcaption>
                </figure>
                                <figure tabindex="0" >
                                  <img src="{{ asset('images/test.png') }}" alt="" />
                                  <figcaption>Légende associée</figcaption>
                                </figure>
                                                <figure tabindex="0" >
                                                  <img src="{{ asset('images/test.png') }}" alt="" />
                                                  <figcaption>Légende associée</figcaption>
                                                </figure>
</div>
                        @yield('body')
                    </div>
                </div><!-- /st-content -->
            </div>
            <nav class="st-menu st-effect-1" id="menu-1">
                <h2>Espace membre</h2>
                <div id="st-trigger-effects">
                    @if(Auth::check())
                        <ul>
                            <li><span data-effect="st-effect-2">Profil</span></li>
                            <li><span data-effect="st-effect-3">Paramètres</span></li>
                            <li><a  href="#">Messagerie</a></li>
                            <li><a  href="{{ url(route('logout')) }}">Déconnexion</a></li>
                        </ul>
                    @else
                        @include('auth.login')
                    @endif
                </div>
            </nav>
            </div><!-- /st-container -->

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

        {{-- Js Checkbox --}}
        <script src="{{ asset('js/svgcheckbx.js') }}"></script>

        {{-- Js gestion fenetre modal/ajax --}}
        <script src="{{ asset('js/modal.js') }}"></script>

        {{-- Js TinyMCE --}}
        <script type="text/javascript" src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/tinymce/tinymce_init.js') }}"></script>


        {{-- Js du menu espace membre --}}
        <script src="{{ asset('js/sidebarEffects.js') }}" type="text/javascript" ></script>

        {{-- Js du menu principal --}}
        <script src="{{ asset('js/responsiveMenu.js') }}" type="text/javascript" ></script>
        <script type="text/javascript" >
            jQuery(document).ready(function ($) {
                $('#responsive-menu').responsiveMenu();
            });
        </script>
		@yield('script')
	</body>


</html>
