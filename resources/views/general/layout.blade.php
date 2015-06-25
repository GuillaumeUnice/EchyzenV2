<!DOCTYPE html>
<html>
	<head>
		<title>Echyzen - Portfolio @yield('title')</title>
		<meta name="description" content="portofolio, Tutoriels/astuces et galerie 3D/2D!!!" />
		<meta name="keywords" content="portofolio, galerie, infographie, informatique, programmation, zbrush, blender, html, css, php, ..." />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link rel="stylesheet" href= "{{ asset('css/bootstrap.css') }}" />
        <link rel="stylesheet" href= "{{ asset('css/libraries/notif_box_spinner.css') }}" />

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
		<script src="js/classie.js"></script>
        <script src="js/modernizr.custom.js"></script>

        {{-- Js bootstrap--}}
        <script src="{{ asset('js/laroute.js') }}" type="text/javascript" ></script>

		{{-- Js progressBar --}}
		<script src="{{ asset('js/progress_bar.js') }}" type="text/javascript" ></script>
		
		{{-- Js Routing --}}
		<script src="{{ asset('js/laroute.js') }}"></script>

        {{-- Js Notification --}}
        <script src="{{ asset('js/notificationFx.js') }}"></script>

		<script>
		    //alert('http://localhost/Echyzen/public' + laroute.route('upload_image'));
			jQuery(document).ready(function ($) {
			    $('#my_modal').delegate('.ajax_form','submit',function(e) {
			   // $('.ajax_form').submit (function(e) {
                    // empecher la soumission du submit
                    e.preventDefault();

                    $('input+small').text('');
                    $('input').parent().removeClass('has-error');

                    // pour pouvoir sélectionner plus facilement les attr du form
                    var $this = $(this);

                    var formdata = $($this).serialize();
                    $.ajax({
                        url: $this.attr('action'),
                        type: $this.attr('method'),
                        data: formdata,
                        dataType: "json",
                        success: function(data) {

                            $('#myModal').modal('hide');
                            // create the notification
                            new NotificationFx({
                                message : data.success,
                                layout : 'other',
                                effect : 'boxspinner',
                                ttl : 9000,
                                type : 'success'// notice, warning or error
                            }).show();

                        },
                        error: function (data) {

                            var errors = $.parseJSON(data.responseText);

                            $.each(errors, function (key, value) {
                                    var input = '#formRegister input[name=' + key + ']';
                                    $(input + '+small').text(value);
                                    $(input).parent().addClass('has-error');
                            });

                           // create the notification
                            /*new NotificationFx({
                                message : 'La requête n\'a pas abouti',
                                layout : 'other',
                                effect : 'boxspinner',
                                ttl : 9000,
                                type : 'success'
                            }).show();*/

                        }




                    });

                });
				$('.ajax_modal').click(function(e) {
                    // empecher la soumission du submit
                    e.preventDefault();

                   $.ajax({
                        type: 'GET',
                        url: $(this).attr('href'),
                        timeout: 4000,
                        success: function (data) {
                            $('#my_modal').html(data);
                            $('#myModal').modal();
                        },
                        error: function () {
                            alert('La requête n\'a pas abouti');
                        }
                    });
				});
			});
		</script>
        {{-- Js TinyMCE --}}
        <script type="text/javascript" src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
        <script>
            tinymce.init({
                menubar : false,
                selector: "textarea",
                plugins: [
                    "link image code fullscreen imageupload"
                ],
                toolbar: "undo redo | bold italic | bullist numlist outdent indent | link image | imageupload | code | fullscreen",
                relative_urls: false
            });
        </script>
        <textarea></textarea>
		@yield('script')
	</body>


</html>
