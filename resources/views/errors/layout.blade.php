@extends('general.public')


@section('stylesheet')
        <link type="text/css" href="{{ asset('css/error/custom.css') }}" rel="stylesheet">  <!--CUSTOM CSS FILE-->
        <link type="text/css" href="{{ asset('css/error/animate.css') }}" rel="stylesheet">  <!--animate.css FILE-->

        <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

		<!-- css svg bot -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/error/robot_styles.css') }}">
@endsection

@section('script')
		<!--ADDING THE REQUIRED SCRIPT FILES-->
        <script type="text/javascript" src="{{ asset('js/error/countUp.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/error/wow.js') }}"></script>



        <!--Initiating the Wow Script-->
        <script>
				"use strict";
				var wow = new WOW(
				{
					animateClass: 'animated',
					offset:       50
				}
			);
				wow.init();
        </script>

    <script type="text/javascript" src="{{ asset('js/libraries/TweenMax.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/error/brokebot.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/libraries/snap.js') }}" ></script>

<script>
	var isHeadless = true;
</script>
@endsection


@section('body')

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center capital wow fadeInLeft animated" data-wow-duration="2s" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">Erreur! Quelque chose a mal tourné !</h1>

                        <div class="robotpage-top-half wow fadeIn animated" data-wow-delay="1000ms" style="visibility: visible;-webkit-animation-delay: 1000ms; -moz-animation-delay: 1000ms; animation-delay: 1000ms;">
                          <div id="robot_holder">
                            <!--?xml version="1.0" encoding="utf-8"?-->
                            <svg id="brokebotSVG" version="1.1" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 551 300" enable-background="new 0 0 551 300" xml:space="preserve" preserveAspectRatio="xMidYMax">
                              <text  style="opacity: 1;" id="errorCodeTxt"  transform="matrix(1 0 0 1 6.7231 240.0011)" class="error_code">403</text>
                              <g id="robotHead">
                                <rect x="359.2" y="173.1" class="robot_limbs_and_ears" width="6.4" height="23.3"></rect>
                                <rect x="348.1" y="185.4" class="robot_body" width="28.5" height="11"></rect>
                                <path class="robot_limbs_and_ears" d="M392,197.7h-59.2l0,0c0-3.7,3-6.8,6.8-6.8h45.6C388.9,190.9,392,193.9,392,197.7L392,197.7z"></path>
                                <rect x="288.5" y="207.5" class="robot_limbs_and_ears" width="147.7" height="18.7"></rect>
                                <path class="robot_body" d="M419.3,238.9H305.5c-5.5,0-10-4.5-10-10V207c0-5.5,4.5-10,10-10h113.8c5.5,0,10,4.5,10,10v21.9
                                  C429.3,234.4,424.8,238.9,419.3,238.9z"></path>
                                <circle class="robot_eye_whites" cx="317" cy="216.4" r="11.7"></circle>
                                <circle class="robot_eye_whites" cx="407.7" cy="216.4" r="11.7"></circle>
                                <g transform="matrix(1,0,0,1,0,0)" data-svg-origin="311 210.39999389648438" id="eyesMove">
                                  <g transform="matrix(1,0,0,0.69905,0,65.12389505208358)" data-svg-origin="311 216.39999389648438" id="eyesBlink">
                                    <rect x="311" y="210.4" class="robot_eyes" width="12.1" height="12.1"></rect>
                                    <polygon class="robot_eyes_highlight" points="323.1,210.4 311,210.4 323.1,222.5 			"></polygon>
                                    <rect x="401.7" y="210.4" class="robot_eyes" width="12.1" height="12.1"></rect>
                                    <polygon class="robot_eyes_highlight" points="413.7,210.4 401.7,210.4 413.7,222.5 			"></polygon>
                                  </g>
                                </g>
                                <rect x="339" y="219.9" class="robot_limbs_and_ears" width="5.3" height="9.8"></rect>
                                <rect x="347.3" y="219.9" class="robot_limbs_and_ears" width="5.3" height="9.8"></rect>
                                <rect x="355.6" y="219.9" class="robot_limbs_and_ears" width="5.3" height="9.8"></rect>
                                <rect x="363.9" y="219.9" class="robot_limbs_and_ears" width="5.3" height="9.8"></rect>
                                <rect x="372.2" y="219.9" class="robot_limbs_and_ears" width="5.3" height="9.8"></rect>
                                <rect x="380.5" y="219.9" class="robot_limbs_and_ears" width="5.3" height="9.8"></rect>
                                <circle class="robot_antenna" cx="362.4" cy="167.9" r="10"></circle>
                                <circle class="robot_antenna_highlight" cx="363.4" cy="165.9" r="5.5"></circle>
                              </g>
                              <g id="robotbody">
                                <rect x="154.3" y="184.1" class="robot_limbs_and_ears" width="7" height="16.7"></rect>
                                <path class="robot_limbs_and_ears" d="M162.6,234.1h-9.7c-2.8,0-5-2.2-5-5v-22.7c0-2.8,2.2-5,5-5h9.7c2.8,0,5,2.2,5,5v22.7
                                  C167.6,231.8,165.3,234.1,162.6,234.1z"></path>
                                <path class="robot_hands_feet" d="M172.7,238.9c0-8.2-6.7-14.9-14.9-14.9c-8.2,0-14.9,6.7-14.9,14.9H172.7z"></path>
                                <circle class="robot_joints_and_belly" cx="157.8" cy="203.1" r="5.1"></circle>
                                <path class="robot_limbs_and_ears" d="M221.3,234.1h-9.7c-2.8,0-5-2.2-5-5v-22.7c0-2.8,2.2-5,5-5h9.7c2.8,0,5,2.2,5,5v22.7
                                  C226.3,231.8,224,234.1,221.3,234.1z"></path>
                                <path class="robot_hands_feet" d="M231.3,238.9c0-8.2-6.7-14.9-14.9-14.9c-8.2,0-14.9,6.7-14.9,14.9H231.3z"></path>
                                <circle id="leftKnee" class="robot_joints_and_belly" cx="216.4" cy="203.1" r="5.1"></circle>

                                <g transform="matrix(0.9981,-0.06149,0.06149,0.9981,-11.62405663861847,10.491834145853318)" data-svg-origin="164.6484375 194.1015625" id="upperBody">

                                  <rect x="146" y="143" transform="matrix(-0.968 -0.2511 0.2511 -0.968 362.8447 338.4026)" class="robot_limbs_and_ears" width="114" height="6.1"></rect>
                                  <g transform="matrix(0.99984,0.01742,-0.01742,0.99984,2.655068824630206,-4.479501134226638)" data-svg-origin="258.34765625 150.10000610351562" id="leftArm">
                                    <path transform="matrix(1,0,0,1,0,0)" data-svg-origin="258.69921875 223.17578125" id="leftOuterClaw" class="robot_hands_feet" d="M247.7,212.6l21.1,21.1c5.8-5.8,5.8-15.3,0-21.1C262.9,206.7,253.5,206.7,247.7,212.6
                                      z"></path>
                                    <path transform="matrix(1,0,0,1,0,0)" data-svg-origin="258.34765625 223.17578125" id="leftInnerClaw" class="robot_hands_feet" d="M247.7,212.6c-5.8,5.8-5.8,15.3,0,21.1l21.1-21.1
                                      C262.9,206.7,253.5,206.7,247.7,212.6z"></path>
                                    <rect x="254.7" y="161.1" class="robot_limbs_and_ears" width="7" height="25"></rect>
                                    <path class="robot_limbs_and_ears" d="M263,217.5l-9.7,0c-2.8,0-5-2.3-5-5l0-22.7c0-2.8,2.3-5,5-5l9.7,0c2.7,0,5,2.3,5,5l0,22.7
                                      C268,215.3,265.7,217.5,263,217.5z"></path>
                                    <circle class="robot_joints_and_belly" cx="258.2" cy="186.5" r="5.1"></circle>
                                  </g>
                                  <path class="robot_body" d="M270.4,163.5c1.7-6.7-2.3-13.6-9-15.4c-6.7-1.7-13.6,2.3-15.4,9c-1.7,6.7,2.3,13.6,9,15.4
                                    C261.8,174.3,268.7,170.3,270.4,163.5z"></path>

                                    <rect x="130" y="138.3" transform="matrix(0.8845 0.4666 -0.4666 0.8845 83.8309 -45.3494)" class="robot_limbs_and_ears" width="7" height="16.7"></rect>
                                  <g transform="matrix(0.99999,0.00234,-0.00234,0.99999,0.3608541267356884,-0.30393844907021617)" data-svg-origin="129.59765625 153.5" id="rightLowerArm">
                                    <path transform="matrix(0.94064,0.33939,-0.33939,0.94064,72.86407436371815,-32.72830255647298)" data-svg-origin="130 191.94921875" id="rightInnerClaw" class="robot_hands_feet" d="M119,181.3l21.1,21.1c5.8-5.8,5.8-15.3,0-21.1C134.2,175.5,124.8,175.5,119,181.3z"></path>
                                    <path transform="matrix(0.94064,-0.33939,0.33939,0.94064,-57.451904072191724,55.39636411672643)" data-svg-origin="129.6484375 191.94921875" id="rightOuterClaw" class="robot_hands_feet" d="M119,181.3c-5.8,5.8-5.8,15.3,0,21.1l21.1-21.1C134.2,175.5,124.8,175.5,119,181.3z"></path>
                                    <path class="robot_limbs_and_ears" d="M134.5,186.2l-9.7,0.1c-2.7,0-5-2.2-5-5l-0.2-22.7c0-2.7,2.2-5,5-5l9.7-0.1c2.7,0,5,2.2,5,5l0.2,22.7
                                      C139.5,183.9,137.3,186.2,134.5,186.2z"></path>
                                  </g>
                                  <circle class="robot_joints_and_belly" cx="129.4" cy="154.3" r="5.1"></circle>
                                  <path class="robot_body" d="M154.3,133.4c1.7-6.7-2.3-13.6-9-15.4c-6.7-1.7-13.6,2.3-15.4,9c-1.7,6.7,2.3,13.6,9,15.4
                                    C145.7,144.2,152.6,140.2,154.3,133.4z"></path>
                                  <path class="robot_hands_feet" d="M210.2,119.6l-1.4-1.5c0.1-0.1,9.1-8.7,7.2-15.5l1.9-0.5C220.2,110,210.6,119.2,210.2,119.6z"></path>
                                  <path class="robot_hands_feet" d="M215.9,117.4l-1.3-1.5c0.4-0.3,9.3-7.5,17.2-7.7l0,2C224.6,110.3,216,117.3,215.9,117.4z"></path>
                                  <path class="robot_body" d="M210,116l-0.7-1.9c0.1,0,11.8-4.5,12.6-11.5l2,0.3C222.9,111.1,210.5,115.8,210,116z"></path>

                                  <rect x="203.8" y="108.1" transform="matrix(0.7809 0.6246 -0.6246 0.7809 121.0947 -105.8214)" class="robot_limbs_and_ears" width="15.2" height="23.2"></rect>
                                  <path class="robot_body" d="M217.3,207.9l-62.6-16.2c-5.3-1.4-8.5-6.9-7.2-12.2l19.6-58.3c1.4-5.3,6.4-8.7,11.2-7.4l56.2,14.6
                                    c4.8,1.2,7.6,6.6,6.2,11.9l-11.2,60.5C228.1,206,222.6,209.3,217.3,207.9z"></path>
                                  <path class="robot_joints_and_belly" d="M211.5,184.8l-40.4-10.5c-3.4-0.9-5.5-4.4-4.6-7.9l12.7-37.6c0.9-3.4,4.1-5.6,7.2-4.8l36.3,9.4
                                    c3.1,0.8,4.9,4.3,4,7.7l-7.2,39.1C218.5,183.6,214.9,185.6,211.5,184.8z"></path>
                                </g>
                              </g>
                            <defs></defs></svg>
                          </div>
                        </div>
                        <p class="font-size-2 text-center wow bounceIn animated" data-wow-delay="2s" style="visibility: visible;-webkit-animation-delay: 2s; -moz-animation-delay: 2s; animation-delay: 2s;">
                          <strong>
                            @yield('error_message')
                          </strong>
                        </p>
                    </div>
                </div>

                <div class="row"> <!--Search Form Start-->
                    <div class="col-md-12">
                        <div class="col-md-6 col-md-offset-3 search-form wow fadeInUp animated" data-wow-delay="4000ms" style="visibility: visible;-webkit-animation-delay: 4000ms; -moz-animation-delay: 4000ms; animation-delay: 4000ms;">
                            <form action="#" method="get">
                                <input type="text" placeholder="Search" class="col-md-9 col-xs-12">
                                <input type="submit" value="Search" class="col-md-3 col-xs-12">
                            </form>
                        </div>
                    </div>
                </div> <!--Search Form End-->

                <div class="row"> <!--Links Start-->
                    <div class="col-md-12">
                        <div style="margin-bottom: 30px;" class="text-center col-md-6 col-md-offset-3">

                          <a href="javascript:history.back()" data-hover="Précédent" class="link wow fadeInRight animated" data-wow-delay="4200ms" style="visibility: visible;-webkit-animation-delay: 4200ms; -moz-animation-delay: 4200ms; animation-delay: 4200ms;">
                            <span>
                                Précédent
                            </span>
                          </a>

                          <a href="{{ route('index') }}" data-hover="Accueil" class="link wow fadeInRight animated" data-wow-delay="4300ms" style="visibility: visible;-webkit-animation-delay: 4300ms; -moz-animation-delay: 4300ms; animation-delay: 4300ms;">
                            <span>
                                Accueil
                            </span>
                          </a>

                          <a href="#" data-hover="Contact" class="link wow fadeInRight animated" data-wow-delay="4400ms" style="visibility: visible;-webkit-animation-delay: 4400ms; -moz-animation-delay: 4400ms; animation-delay: 4400ms;">
                            <span>
                                Contact
                            </span>
                          </a>

                        </div>
                    </div>
                </div> <!-- Links End-->

				    </div>
        </section>

@endsection


