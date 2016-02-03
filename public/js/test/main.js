jQuery(document).ready(function($){
	var introSection = $('#cd-intro-background'),
		introSectionHeight = introSection.height(),
		contentSection = $('.cd-content'),
		test = 270,
		//change scaleSpeed if you want to change the speed of the scale effect
		scaleSpeed = 0.7,
		//change opacitySpeed if you want to change the speed of opacity reduction effect
		opacitySpeed = 1; 
	
	//update this value if you change this breakpoint in the style.css file (or _layout.scss if you use SASS)
	var MQ = 1170;

	triggerAnimation();
	$('.cd-fold-content').on('resize', function(){
		triggerAnimation();
	});

	//bind the scale event to window scroll if window width > $MQ (unbind it otherwise)
	function triggerAnimation(){
		if($('.cd-fold-content').width()>= MQ) {
			$('.cd-fold-content').on('scroll', function(){
				//The window.requestAnimationFrame() method tells the browser that you wish to perform an animation- the browser can optimize it so animations will be smoother
				window.requestAnimationFrame(animateIntro);
			});
		} else {
			$('.cd-fold-content').off('scroll');
		}
	}
	//assign a scale transformation to the introSection element and reduce its opacity
	function animateIntro () {
		var scrollPercentage = ($('.cd-fold-content').scrollTop()/introSectionHeight).toFixed(5),
			scaleValue = 1 - scrollPercentage*scaleSpeed ;
			scaleTest= 1 - scrollPercentage*0.3 ;
		//check if the introSection is still visible
		if( $('.cd-fold-content').scrollTop() < introSectionHeight) {
			introSection.css({
			    '-moz-transform': 'scale(' + scaleValue + ') translateZ(0)',
			    '-webkit-transform': 'scale(' + scaleTest + ', ' + scaleValue + ') translateZ(0)',
				'-ms-transform': 'scale(' + scaleValue + ') translateZ(0)',
				'-o-transform': 'scale(' + scaleValue + ') translateZ(0)',
				'transform': 'scale(' + scaleTest + ', ' + scaleValue + ') translateZ(0)',
				'opacity': 1 - scrollPercentage*opacitySpeed
			});
			//test -= 20;
			console.log(scaleValue);
			test = Math.log(scaleValue) * 400  ;
			contentSection.css('margin-top', test );
		}
	}

	/********************************
		open/close submenu on mobile
	********************************/
	$('.cd-main-nav').on('click', function(event){
		if($(event.target).is('.cd-main-nav')) $(this).children('ul').toggleClass('is-visible');
	});
});