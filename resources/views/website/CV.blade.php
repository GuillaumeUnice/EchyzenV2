<!doctype html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=2">
	<title>Resume Guillaume BORG</title>
	    <link rel="stylesheet" href= "{{ asset('css/CV/CV.css') }}" />
	    <script src="{{ asset('js/CV/modernizr.js') }}"></script>
</head>
<body>

    <nav id="cd-vertical-nav">
		<ul>
			<li>
				<a href="#intro" data-number="1">
					<span class="cd-dot"></span>
					<span class="cd-label" data-localize="menu-intro">Intro</span>
				</a>
			</li>
			<li>
				<a href="#about_me" data-number="2">
					<span class="cd-dot"></span>
					<span class="cd-label" data-localize="menu-about-me">A propos de moi</span>
				</a>
			</li>
			<li>
				<a href="#citation1" data-number="3">
					<span class="cd-dot"></span>
					<span class="cd-label" data-localize="menu-quote1">Citation 1</span>
				</a>
			</li>
			<li>
				<a href="#diplome" data-number="4">
					<span class="cd-dot"></span>
					<span class="cd-label" data-localize="menu-diploma">Diplôme</span>
				</a>
			</li>
			<li>
				<a href="#cmpt_specs" data-number="5">
					<span class="cd-dot"></span>
					<span class="cd-label" data-localize="menu-skill">Compétence</span>
				</a>
			</li>
			<li>
				<a href="#act_prof" data-number="6">
					<span class="cd-dot"></span>
					<span class="cd-label" data-localize="menu-professional-experience">Activité professionnelle</span>
				</a>
			</li>
			<li>
				<a href="#citation2" data-number="7">
					<span class="cd-dot"></span>
					<span class="cd-label" data-localize="menu-quote2">Citation 2</span>
				</a>
			</li>
			<li>
				<a href="#pastime" data-number="8">
					<span class="cd-dot"></span>
					<span class="cd-label" data-localize="menu-personal-interest">Centre d'interêt</span>
				</a>
			</li>
		</ul>
	</nav>
	<a class="cd-nav-trigger cd-img-replace">Open navigation<span></span></a>

	<section id="intro" class="cd-section container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>
					<h1 class="main-title">Guillaume BORG
						<hr>
						<span><span id="main_title_informaticien" data-localize="computer-scientist">Informaticien</span> & <span id="main_title_infographiste" data-localize="computer-graphist">Infographiste</span></span>
						<p>
		                    Translate to :
		                </p>
		                <img data-localize="img1" src="{{ asset('images/CV/flag/united_kingdom.png') }}" alt="english_flag">
		                <img data-localize="img2" src="{{ asset('images/CV/flag/italy.png') }}" alt="italy_flag">
					</h1>
				</div>
			</div>
		<a href="#about_me" class="cd-scroll-down cd-img-replace">scroll down</a>
	</section><!-- cd-section -->


	<section id="about_me" class="cd-section">
		<h2 data-localize="about-me">A propos de moi</h2>
		<div  class="grid effect-4"  id="grid">
			<li data-localize="about-me-goal" id="about_me_goal">Actuellement, étudiant en École d’ingénierie avec DUT informatique terminé je recherche un stage de fin d’année dans le développement informatique à compté du 30 Juin 2015 jusqu’au 31 Août 2015.
			</li>
		</div>

		<div  class="grid effect-6" id="grid">

			<li >
				<img src="{{ asset('images/CV/section2_aboutMe/name.png') }}" />
				<span data-localize="name">Nom : BORG </span>
			</li>
			<li >
				<img src="{{ asset('images/CV/section2_aboutMe/first_name.png') }}" />
				<span data-localize="first-name">Prénom : Guillaume</span>
			</li>
			<li >
				<img src="{{ asset('images/CV/section2_aboutMe/adresse.png') }}" />
				<span data-localize="adress">Adresse : 443 chemin Saint Sébastien, 13105 MIMET</span>
			</li>
			<li >
				<img src="{{ asset('images/CV/section2_aboutMe/mail.png') }}" />
				<span data-localize="email">E-Mail : guillaume.unice@gmail.com</span>
			</li>
			<li >
				<img src="{{ asset('images/CV/section2_aboutMe/phone2.png') }}" />
				<span data-localize="phone">Téléphone : 04 42 58 90 62</span>
			</li>
			<li >
				<img src="{{ asset('images/CV/section2_aboutMe/mobile_phone.png') }}" />
				<span data-localize="cell-phone">Portable : 07 77 06 48 83</span>
			</li>
			<li >
				<img src="{{ asset('images/CV/section2_aboutMe/car.png') }}" />
				<span data-localize="licence">Véhicule : Permis B </span>
			</li>
		</div>

		<a href="#citation1" class="cd-scroll-down cd-img-replace">scroll down</a>
	</section><!-- cd-section -->




	<section id="citation1" class="cd-section">
		<p data-localize="quote1">&ldquo;Le succès c’est tomber sept fois, se relever huit.&rdquo;</p>
		<a href="#diplome" class="cd-scroll-down cd-img-replace">scroll down</a>
	</section><!-- cd-section -->




	<section id="diplome" class="cd-section">
		<h2 data-localize="diploma">Diplômes</h2>
		<div id="cd-timeline" class="cd-container"><!-- section replace par un div timeline original-->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-green">
				<img src="{{ asset('images/CV/diplomes/brevet.svg') }}" alt="brevet_icon_svg">
			</div> <!-- cd-timeline-img -->
			<div class="cd-timeline-content">
				<h2 data-localize="brevet">Brevet des Collèges avec mention</h2>
				<p data-localize="brevet-place">Collège Le Pesquier à Gardanne</p>
				<span class="cd-date">2008</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-yellow">
				<img src="{{ asset('images/CV/diplomes/bac.svg') }}" alt="bac_icon_svg">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2 data-localize="bac">Baccalauréat Série S avec mention</h2>
				<p data-localize="bac-place">Lycée Marie-Madeleine Fourcade à Gardanne</p>
				<span class="cd-date">2011</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-red">
				<img src="{{ asset('images/CV/diplomes/dut.svg') }}" alt="dut_icon_svg">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2 data-localize="dut">D.U.T Informatique Générale | Top 15/125</h2>
				<p data-localize="dut-place">
					Institut Universitaire de Technologie (I.U.T), Université de la Méditerranée à Aix-En-Provence
				</p>
				<span class="cd-date">2013</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-red">
				<img src="{{ asset('images/CV/diplomes/etude_ingenieur.svg') }}" alt="student_engineering_icon_svg">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2 data-localize="engineer">2eme année d’École d’Ingénieur (Polytech Nice)</h2>
				<p data-localize="engineer-place">
					En sciences de l'informatique.
				</p>
				<span class="cd-date">2015</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
		</div>
		<a href="#cmpt_specs" class="cd-scroll-down cd-img-replace">scroll down</a>
	</section><!-- cd-section -->



	<section id="cmpt_specs" class="cd-section"><!--cmpt_specs-->
		<div id="cmpt-spec-list">
            <ul class="active">
                <li class="dev_web" style="top: 0px;">
                    <div  style="margin-top: 0px;">
                        <img src="{{ asset('images/CV/competence/icn-dev.png') }}" alt="developper_icon">
                        <h3 data-localize="web-skill">Programation Web</h3>
                        <p data-localize="about-web-skill">Développement web front-end & back-end</p>
                        <ul>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="html-web-skill">HTML5/CSS3 (Compass : Scss)</span>
                                    <div id="bar" style=" width: 85%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">85%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="php-web-skill">PHP 5.x</span>
                                    <div id="bar" style=" width: 50%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">50%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="javascript-web-skill">Javascript, JQuery, notion AngularJs</span>
                                    <div id="bar" style=" width: 40%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">40%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="data-web-skill">MySQL, PSql (Wamp, PHPMyAdmin, Apache2)</span>
                                    <div id="bar" style=" width: 40%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">40%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="symfony-web-skill">Notion Symfony2</span>
                                    <div id="bar" style=" width: 20%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">20%</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="creation" style="top: 0px;">
                    <div style="margin-top: 0px;">
                        <img src="{{ asset('images/CV/competence/icn-creation.png') }}" alt="graphisme_icon">
                        <h3 data-localize="computer-graphic-skill">Graphisme 2D & 3D</h3>
                        <p data-localize="about-computer-graphic-skill">Infographie les logiciels et les compétences associées</p>
                        <ul>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="toshop-computer-graphic-skill">Photoshop CC (matte painting, compositing)</span>
                                    <div id="bar" style=" width: 50%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">50%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="zbrush-computer-graphic-skill">ZBrush 4R6(sculpting, texturing, lighting)</span>
                                    <div id="bar" style=" width: 75%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">75%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="blender-computer-graphic-skill">Blender 2.7x(modelling, texturing, lighting, notion animation)</span>
                                    <div id="bar" style=" width: 35%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">35%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="after-effect-computer-graphic-skill">Adobe After Effect CC</span>
                                    <div id="bar" style=" width: 20%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">20%</span>
                                    </div>
                                </div>
                            </li>
                                <div id="progress">
                                    <span id="percent" data-localize="video-computer-graphic-skill">Adobe Premier Pro CC, Video Pad</span>
                                    <div id="bar" style=" width: 30%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">30%</span>
                                    </div>
                                </div>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="">
                <li class="dev_app" style="top: -667px;">
                    <div style="margin-top: 0px;">
                        <img src="{{ asset('images/CV/competence/icn-strategy.png') }}" alt="dev_application_software_icon">
                        <h3 data-localize="soft-skill">Développement Application/Logiciel</h3>
                        <p data-localize="about-soft-skill">Développement logiciel conception/architecture/programmation/test</p>
                        <ul>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="c-soft-skill">Base solide C & C++11 (POSIX, ANSI)</span>
                                    <div id="bar" style=" width: 75%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">75%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="java-soft-skill">Java (Bibliothèque Swing & AWT + Programmation réseau & répartie)</span>
                                    <div id="bar" style=" width: 50%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">50%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="net-soft-skill">.Net (Visual Basic notamment Windows Forms + DLL)</span>
                                    <div id="bar" style=" width: 25%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">25%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="agile-soft-skill">Méthode Agile (KanBan, Scrum)</span>
                                    <div id="bar" style=" width: 50%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">50%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="git-soft-skill">Gestionnaire de version : Git (GitHub, Stash)</span>
                                    <div id="bar" style=" width: 50%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">50%</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="other" style="top: 667px;">
                    <div style="margin-top: 0px;">
                        <img src="{{ asset('images/CV/competence/icn-brand.png') }}" alt="langue_gestion_math_icon">
                        <h3 data-localize="other-skill">Langue, Mathématique & Gestion</h3>
                        <p data-localize="about-other-skill">
                            Langues pratiqués, orientation mathématique et matières abordées concernant le monde de l'entreprise
                        </p>
                        <ul>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="english-skill">Anglais</span>
                                    <div id="bar" style=" width: 55%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">55%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="italian-other-skill">Italien</span>
                                    <div id="bar" style=" width: 50%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">50%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="complex-other-skill">Complexité</span>
                                    <div id="bar" style=" width: 50%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">50%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="math-other-skill">Algèbre linéaires, Probabilités, Cryptographie</span>
                                    <div id="bar" style=" width: 65%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">65%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="compagny-other-skill">Comptabilité & gestion d'entreprise</span>
                                    <div id="bar" style=" width: 80%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">80%</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div id="progress">
                                    <span id="percent" data-localize="law-other-skill">Droit travail & informatique</span>
                                    <div id="bar" style=" width: 50%;">
                                        <span style="position: absolute; right: 0px;  margin-top: 2px;">50%</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

            <!-- navigation -->
            <div class="pager">
                <ul>
                    <li><a href="#" class="active">1</a></li>
                    <li class="active"><a href="#" class="">2</a></li>
                </ul>
            </div>
            <a href="#" class="arr left in finl isin"></a>
            <a href="#" class="arr right in finr isin"></a>
        </div>

		<a href="#act_prof" class="cd-scroll-down cd-img-replace">scroll down</a>
	</section><!-- cd-section -->




	<section id="act_prof" class="cd-section ">
		<h2 data-localize="professional-experience">Activité professionnelle</h2>
		<div id="cd-timeline" class="cd-container"><!-- section replace par un div -->

    		<div class="cd-timeline-block">
    			<div class="cd-timeline-img cd-green">
    				<img src="{{ asset('images/CV/location.svg') }}" alt="location_icon_svg">
    			</div> <!-- cd-timeline-img -->
    			<div class="cd-timeline-content">
    				<img src="{{ asset('images/CV/nerys.png') }}" alt="nerys_logo">
    				<h2 data-localize="nerys-compagny">Nérys Entreprise</h2>
    				<p data-localize="about-nerys-compagny">Stage de 10 semaines dans l’Entreprise industrielle Nérys à Gardanne : conception de Base de Données, gestionnaire web et interface homme-machine.</p>
    				<span class="cd-date" data-localize="date-nerys-compagny">Mai à Juin 2013</span>
    			</div> <!-- cd-timeline-content -->
    		</div> <!-- cd-timeline-block -->

    		<div class="cd-timeline-block">
    			<div class="cd-timeline-img cd-yellow">
    				<img src="{{ asset('images/CV/location.svg') }}" alt="location_icon_svg">
    			</div> <!-- cd-timeline-img -->
    			<div class="cd-timeline-content">
    				<img src="{{ asset('images/CV/hopital.png') }}" alt="hospital_european_logo">
    				<h2 data-localize="european-hospital">Hôpital Européen</h2>
    				<p data-localize="about-european-hospital">Déploiement du parc informatique hospitalier. Maintenance et dépannage dans différents services médicaux.</p>
    				<span class="cd-date" data-localize="date-european-hospital">Juillet à Août 2013</span>
    			</div> <!-- cd-timeline-content -->
    		</div> <!-- cd-timeline-block -->

    		<div class="cd-timeline-block">
    			<div class="cd-timeline-img cd-red">
    				<img src="{{ asset('images/CV/location.svg') }}" alt="location_icon_svg">
    			</div> <!-- cd-timeline-img -->
    			<div class="cd-timeline-content">
    				<img src="{{ asset('images/CV/echyzen.png') }}" alt="echyzen_website_logo">
    				<h2 data-localize="my-website">Mon Website autour de l'informatique & infographie</h2>
    				<p data-localize="about-my-website">
    					Réalisation d'un site web (en cours) autour de l'informatique et de l'infographie : Utilisant HTML5/CSS3, JQuery, Symfony2 --> http://echyzen.alwaysdata.net/
    				</p>
    				<span class="cd-date" data-localize="date-my-website">En cours</span>
    			</div> <!-- cd-timeline-content -->
    		</div> <!-- cd-timeline-block -->

    		<div class="cd-timeline-block">
    			<div class="cd-timeline-img cd-red">
    				<img src="{{ asset('images/CV/location.svg') }}" alt="location_icon_svg">
    			</div> <!-- cd-timeline-img -->
    			<div class="cd-timeline-content">
    				<h2 data-localize="self-employment">Mise en place du régime d'auto-entrepreneur</h2>
    				<p data-localize="about-self-employment">
    					Auto-entreprenariat pour création inforgraphie (couverture de livre, asset 3D, sculpt 3D, affiche/plaquette, mariage...) et informatique (website single page, micro application web).
    				</p>
    				<span class="cd-date" data-localize="date-self-employment">Dans un futur proche</span>
    			</div> <!-- cd-timeline-content -->
    		</div> <!-- cd-timeline-block -->

	   </div>
	   <a href="#citation2" class="cd-scroll-down cd-img-replace">scroll down</a>
	</section><!-- cd-section -->


	<section id="citation2" class="cd-section">
		<p>
            <span data-localize="quote2">&ldquo;Savoir écouter, c'est posséder, outre le sien, le cerveau des autres.&rdquo;</span>

        </p>
        <span style="font-size: 1.5em; float: right; margin-right: 20%; margin-top : 10px;">Leonardo Da Vinci</span>

		<a href="#pastime" class="cd-scroll-down cd-img-replace">scroll down</a>
	</section><!-- cd-section -->
	<section id="pastime" class="cd-section">
		<h2 data-localize="personal-interest">Centre d'interêt</h2>

		<div  class="grid effect-6" id="grid">

			<li>
				<img src="{{ asset('images/CV/centre_interet/infographie1.png') }}" alt="computer_graphics_icon"/>
                <h3 data-localize="personal-interest1">infographie</h3>
				<p data-localize="about-personal-interest1">
				    Je fais de l'infographie depuis maintenant 3 ans. Passionner par la sculpture numérique qui procure une réelle liberté dans le workflow de conception d'une création.
                </p>
			</li>
			<li >
				<img src="{{ asset('images/CV/centre_interet/lecture1.png') }}" alt="reading_icon"/>
                <h3 data-localize="personal-interest2">Lecture</h3>
                <p data-localize="about-personal-interest2">
				    J'adore lire spécialement des ouvrages historiques/mythologiques ainsi que des romans d'enquêtes. Grand fan de la période des années 1920 jusqu'à 1940( la belle époque, l'ère victorien, les années folles, la grande dépression).
                </p>
			</li>
			<li >
				<img src="{{ asset('images/CV/centre_interet/carte.png') }}" alt="card_manipulation_icon"/>

                    <h3 data-localize="personal-interest3">Cartomagie & mentalisme</h3>
                    <p data-localize="about-personal-interest3">
                    Ce qui m'interresse c'est le close-up consiste a réaliser des tours de manière impromptu sans préparation ni trucage.
                    Le mentalisme est intéressant aussi d'un point de vue social.
                    J'adore aussi le XCM ou le card flourish qui consiste uniquement en la manipulation de carte de manière artistique (éventail, coupe de carte, saut de carte...).
                </p>
			</li>
		</div>
	</section><!-- cd-section -->

	<footer>
		<h2 data-localize="get-touch">Rester en contact</h2>
		<div>
			<a href="https://github.com/GuillaumeUnice" target="_blank"><img src="{{ asset('images/CV/lien_sociaux/github.png') }}" alt="github_icon" /></a>
			<a href="https://www.youtube.com/user/EchyzenChannel" target="_blank"><img src="{{ asset('images/CV/lien_sociaux/youtube.png') }}" alt="youtube_icon" /></a>
			<a href="https://twitter.com/EchyzenWebsite" target="_blank"><img src="{{ asset('images/CV/lien_sociaux/twitter.png') }}" alt="twitter_icon" /></a>
			<a href="https://vimeo.com/user13696089" target="_blank"><img src="{{ asset('images/CV/lien_sociaux/vimeo.png') }}" alt="vimeo_icon" /></a>
			<div>
                <p>
                    Translate to :
                </p>
                <img data-localize="img1" src="{{ asset('images/CV/flag/united_kingdom.png') }}" alt="english_flag">
                <img data-localize="img2" src="{{ asset('images/CV/flag/italy.png') }}" alt="italy_flag">
            </div>
		</div>

	</footer>

        <!-- Chargement des Js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <!-- Mise en place de la traduction -->
        <script src="{{ asset('js/CV/translate/localize.js') }}"></script>
        <script type="text/javascript">

        	$("[data-localize]").localize("application", { pathPrefix: "../js/CV/translate" });

        	$( "footer, #intro" ).delegate('img[alt="english_flag"]', "click", function() {
        		$("[data-localize]").localize("application", { language: "en", pathPrefix: "../js/CV/translate" });
			});
			$( "footer, #intro" ).delegate('img[alt="italian_flag"]', "click", function() {
        		$("[data-localize]").localize("application", { language: "it", pathPrefix: "../js/CV/translate" });
			});
			$( "footer, #intro" ).delegate('img[alt="french_flag"]', "click", function() {
        		$("[data-localize]").localize("application", { language: "fr", pathPrefix: "../js/CV/translate" });
			});
        </script>
        {{--<script src="{{ asset('js/CV/translate/translate.js') }}"></script>--}}
		<script src="{{ asset('js/CV/loading_effect/modernizr.custom.js') }}"></script>
		<script src="{{ asset('js/CV/main.js') }}"></script>
		<script src="{{ asset('js/CV/smooth_timeline.js') }}"></script>
		<script src="{{ asset('js/CV/first_page_effect/TweenLite.min.js') }}"></script>
		<script src="{{ asset('js/CV/first_page_effect/EasePack.min.js') }}"></script>
		<script src="{{ asset('js/CV/first_page_effect/demo-1.js') }}"></script>
		<script src="{{ asset('js/CV/loading_effect/masonry.pkgd.min.js') }}"></script>
		<script src="{{ asset('js/CV/loading_effect/imagesloaded.js') }}"></script>
		<script src="{{ asset('js/CV/loading_effect/classie.js') }}"></script>
		<script src="{{ asset('js/CV/loading_effect/AnimOnScroll.js') }}"></script>
		<script>
			new AnimOnScroll( document.getElementById( 'grid' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
		</script>
		<script src="{{ asset('js/CV/competence/pagespeed3.js') }}"></script>
		<script src="{{ asset('js/CV/competence/pagespeed4.js') }}"></script>

</body>
</html>
