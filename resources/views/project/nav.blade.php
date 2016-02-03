<h1><% test %></h1>

<p><%  getSrcImg %></p>



<div class="cd-secondary-nav" style="z-index: 1">
	<a ng-href="#0" class="cd-secondary-nav-trigger">Menu<span></span></a> <!-- button visible on small devices -->
	<nav>
		<ul >
			
			<li ng-repeat=" r in reza" >
				<a href="http://localhost/Echyzen/public/project#/project/7#testa" ng-click="TODO000000000">
					<b><% r %></b>
					<span></span><!-- icon -->
				</a>
			</li>
		</ul>
	</nav>
</div> <!-- .cd-secondary-nav -->


<script src="{{ asset('js/article/first_image_article.js') }}" type="text/javascript" ></script>
