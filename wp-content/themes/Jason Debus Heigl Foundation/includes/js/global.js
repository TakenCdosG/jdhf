(function ($) {

	$(document).ready(function(){
		/*Setting type of header*/
		if($('.main-header').next().is('.header')){
		}
		else if ($('.main-header').next().is('.header-ow')) {
		}
		else{
			$( "<div class='no-header'></div>" ).insertAfter( $( ".main-header" ) );
		}
		/*Gallery*/
		$("a.group").fancybox({
			'transitionIn'	:	'elastic',
			'transitionOut'	:	'elastic',
			'speedIn'		:	600, 
			'speedOut'		:	200, 
			'overlayShow'	:	false
		});
	});
	$(window).on('load', function () {
			/*Masonry*/
		var $grid = $('.grid');
		$grid.masonry({
	          // options
	          itemSelector: '.grid-item',
	          // use element for option
	          columnWidth: '.grid-sizer',
	          percentPosition: true
	         /* stamp: '.grid-item:nth-child(2), .grid-item:nth-child(3)'*/
	      });
	});
})(jQuery); 