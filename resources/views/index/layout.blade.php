@extends('general.public')

@section('stylesheet')
    <link rel="stylesheet" href= "{{ asset('css/index/slider.css') }}" />
@endsection

@section('script')
    <script src="{{ asset('js/slider/modernizr.custom.79639.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('js/slider/jquery.ba-cond.min.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('js/slider/jquery.slitslider.js') }}" type="text/javascript" ></script>

<script type="text/javascript">
			$(function() {

    				var Page = (function() {

    					var $navArrows = $( '#nav-arrows' ),
    						$nav = $( '#nav-dots > span' ),
    						slitslider = $( '#slider' ).slitslider( {
    							onBeforeChange : function( slide, pos ) {

    								$nav.removeClass( 'nav-dot-current' );
    								$nav.eq( pos ).addClass( 'nav-dot-current' );

    							}
    						} ),

    						init = function() {

    							initEvents();

    						},
    						initEvents = function() {

    							// add navigation events
    							$navArrows.children( ':last' ).on( 'click', function() {

    								slitslider.next();
    								return false;

    							} );

    							$navArrows.children( ':first' ).on( 'click', function() {

    								slitslider.previous();
    								return false;

    							} );

    							$nav.each( function( i ) {

    								$( this ).on( 'click', function( event ) {

    									var $dot = $( this );

    									if( !slitslider.isActive() ) {

    										$nav.removeClass( 'nav-dot-current' );
    										$dot.addClass( 'nav-dot-current' );

    									}

    									slitslider.jump( i + 1 );
    									return false;

    								} );

    							} );

    						};

    						return { init : init };

    				})();

    				Page.init();

    				/**
    				 * Notes:
    				 *
    				 * example how to add items:
    				 */

    				/*

    				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');

    				// call the plugin's add method
    				ss.add($items);

    				*/

    			});
		</script>
@endsection

@section('body')
    <div id="slider" class="sl-slider-wrapper">
		<div class="sl-slider">
		    @foreach ($slides as $slide)
                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="{{ rand(-25, 25) }}" data-slice2-rotation="{{ rand(-25, 25) }}" data-slice1-scale="{{ rand(1, 2) }}" data-slice2-scale="{{ rand(1, 2) }}">
                    <div class="sl-slide-inner">
                        <div class="bg-img"><img alt="{{ $slide->alt }}" src="{{ asset(Config::get('image.pathSlider') . $slide->url) }}" /></div>
                        <h2>{{ $slide->title  }} </h2>
                        <p>{{ $slide->content }}</p>
                    </div>
                </div>
            @endforeach

			{{--<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
				<div class="sl-slide-inner">
					<div class="bg-img"><img alt="paysage" src="{{ asset(Config::get('image.pathSlider') . 'banniere.png') }}" /></div>
					<h2>Bienvenue !!!</h2>
					<p>Echyzen de l'informatique à l'infographie tout y passe</p>
				</div>
			</div>

			<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
				<div class="sl-slide-inner">
					<div class="bg-img"><img alt="paysage" src="{{ asset(asset(Config::get('image.pathSlider') . '2.jpg')) }}" /></div>
					<h2>Regula aurea.</h2>
					<p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
				</div>
			</div>

			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
				<div class="sl-slide-inner">

					<div class="bg-img"><img alt="paysage" src="{{ asset(Config::get('image.pathSlider') . '3.jpg') }}" /></div>
					<h2>Dum spiro, spero.</h2>
					<p>Thousands of people who say they 'love' animals sit down once or twice a day to enjoy the flesh of creatures who have been utterly deprived of everything that could make their lives worth living and who endured the awful suffering and the terror of the abattoirs.</p>
				</div>
			</div>

			<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
				<div class="sl-slide-inner">
					<div class="bg-img"><img alt="paysage" src="{{ asset(Config::get('image.pathSlider') . '4.jpg') }}" /></div>
					<h2>Donna nobis pacem.</h2>
					<p>The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.</p>
				</div>
			</div>

			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
				<div class="sl-slide-inner">
					<div class="bg-img"><img alt="paysage" src="{{ asset(Config::get('image.pathSlider') . '5.jpg') }}" /></div>
					<h2>Acta Non Verba.</h2>
					<p>I think if you want to eat more meat you should kill it yourself and eat it raw so that you are not blinded by the hypocrisy of having it processed for you.</p>
				</div>
			</div>

				<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="60" data-slice1-scale="2" data-slice2-scale="1">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-4"></div>
					<!--<h2>Donna nobis pacem.</h2>
					<h3>lol</h3>
					The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.</p>
				--></div>
			</div>--}}
		</div><!-- /sl-slider -->

		<nav id="nav-arrows" class="nav-arrows">
			<span class="nav-arrow-prev">Previous</span>
			<span class="nav-arrow-next">Next</span>
		</nav>

		<nav id="nav-dots" class="nav-dots">
		    <span class="nav-dot-current"></span>
		    @for ($i = 1; $i < count($slides); $i++)
                <span></span>
            @endfor
		</nav>

	</div><!-- /slider-wrapper -->

    <div id="last_activity">
        <div id="website_activity">
            <section id="section_new">
                <h2>Dernières News</h2>
                <a href="">
                    <article>
                        <div class="hex_icon">
                            <div class="hexagon hexagon2">
                                <div class="hexagon-in1">
                                    <div class="hexagon-in2" style="background-image: url(images/add.png);">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Nouvelle composition : Smooth &amp flat</p>
                        <hr />
                        <p>Samedi 1er Mars -16HOO-</p>
                    </article>
                </a>
                <a href="">
                    <article>
                        <div class="hex_icon">
                        <div class="hexagon hexagon2">
                            <div class="hexagon-in1">
                                <div class="hexagon-in2" style="background-image: url(images/add.png);">
                                </div>
                             </div>
                         </div>
                    </div>
                <p>Nouvelle composition : Smooth &amp flat</p>
                <hr />
                <p>Samedi 1er Mars -16HOO-</p>
                    </article>
                </a>
            </section>

            <section id="section_tuto">
                <h2>Derniers tutoriels</h2>
                <p>
                    Aucun tutoriel pour le moment!
                </p>
            </section>

            <section id="section_test">
                <h2>Derniers tests</h2>
                <p>
                    Aucun test pour le moment!
                </p>
                <!--<div class="com">
                    <img src="images/add.png" />
                    <span class="pseudo">Echyzen</span>
                    <span class="date">Samedi 1er Mars -16HOO-</span>
                    <span class="contenu">Très sympa vraiment j'adore et adhere :)</contenu>
                    <a class="repondre" href="test">Repondre</a>
                </div>-->
            </section>
        </div>
        <div id="flow_activity">
            <section id="section_com">
                <h2>Derniers commentaires</h2>
                <p>
                    Aucun commentaire pour le moment!
                </p>
            </section>
            <section id="section_social" >
                <h2>Mes derniers tweets</h2>
                    <p>
						{!! Form::custom_link(array('link' => Twitter::linkUser(Config::get('social.twitter.username')), 'name' => '@EchyzenWebsite')) !!}
                    </p>

                    @foreach ($tweets as $tweet)
                        <p style="margin-bottom : 35px;">
                            {{ $tweet->text }}
                            <br>
                            <span style="font-size : 0.8em; color: grey;">
                                {{ Twitter::ago($tweet->created_at) }}
                            </span>
                            {{--
                            <a href="{{ Twitter::linkTweet($tweet)  }}">

                            </a>
                            --}}
                        </p>
                    @endforeach
            </section>
        </div>
    </div>

@endsection
