@extends('project.layout')

@section('stylesheet')
  <link rel="stylesheet" href= "{{ asset('css/project/reset.css') }}" />
  <link rel="stylesheet" href= "{{ asset('css/project/project_tile.css') }}" />

  <!--<link rel="stylesheet" href= "{{-- asset('css/article/first_image_article.css') --}}" />-->
  <!--<link rel="stylesheet" href= "{{-- asset('css/article/article.css') --}}" />-->
    <link rel="stylesheet" href= "{{ asset('css/test/reset.css') }}" />
    <link rel="stylesheet" href= "{{ asset('css/test/style.css') }}" />
    <link rel="stylesheet" href= "{{ asset('css/test/scotch.css') }}" />





	<script src="{{ asset('js/project/modernizr.js') }}" type="text/javascript" ></script>
@endsection

@section('script')
  @parent
  <script src="{{ asset('js/project/jquery-2.1.1.js') }}" type="text/javascript" ></script>
	{{--<script src="{{ asset('js/project/project_tile.js') }}" type="text/javascript" ></script>--}}
	{{--<script src="{{ asset('js/article/article.js') }}" type="text/javascript" ></script>
	--}}<script src="{{ asset('js/article/first_image_article.js') }}" type="text/javascript" ></script>

@endsection

@section('body_content')
   	<main class="cd-main"  ng-class="foldIsOpen">

		<ul class="cd-gallery">
			@foreach($projects as $project)
        <li class="cd-item">
          <a ng-click="showProject()" href="#/project/{{ $project->id }}" style='display: block; padding: 0; height: 100%;'>
         	  <div class="page-hero ">
              <div id="hero" class="page-hero-cover">
         	      <div class="page-hero-cover-lg">
         		      <div class="page-hero-cover-img " style="background-image: url(&#39;https://scotch.io/wp-content/uploads/2015/06/angular-laravel-token-auth-1.png&#39;);">
                    <h2 style="background-color: #C40D0D;"><% sejf %>{{ $project->title }}</h2>
                    <p>
                      @if ($project->introduction)
                        {{ str_limit($project->introduction, $limit = 150, $end = '...') }}
                      @else
                        {{ str_limit($project->content, $limit = 150, $end = '...') }}
                      @endif
                    </p>
                    <b style="background-color: rgba(192, 52, 30, 0.5);">La suite!</b>
         		      </div>
         	      </div>
              </div>
            </div>
          </a>
        </li>
			@endforeach
		</ul> <!-- .cd-gallery -->
	</main> <!-- .cd-main -->

	<div class="cd-folding-panel" ng-class="isOpen" style="width: 100%;">
		<div class="fold-left"></div> <!-- this is the left fold -->
		<div class="fold-right"></div> <!-- this is the right fold -->
		<div class="cd-fold-content">

        <div ng-view></div>

		</div>

		<a class="cd-close" href="#/" ng-click="hideProject()" ></a>
	</div> <!-- .cd-folding-panel -->

@endsection
