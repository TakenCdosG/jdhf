(function ($) {

	$(document).ready(function(){
		/*Setting type of header*/
		/*if($('.main-header').next().is('.header')){
		}
		else if ($('.main-header').next().is('.header-ow')) {
		}
		else{
			$( "<div class='no-header'></div>" ).insertAfter( $( ".main-header" ) );
		}*/
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
			itemSelector:    '.grid-item',
			// use element for option
			columnWidth:     '.grid-sizer',
			percentPosition: true
			/* stamp: '.grid-item:nth-child(2), .grid-item:nth-child(3)'*/
		});
		$(window).scroll(function() {
			if ($(this).scrollTop() === 0) {
				$('header').css({
						'box-shadow':         'none',
						'-moz-box-shadow':    'none',
						'-webkit-box-shadow': 'none',
						'background-color':   'transparent',
						'transition':         'background-color 0.1s ease-out',
						'-webkit-transition': 'background-color 0.1s ease-out',
						'-moz-transition': 'background-color 0.1s ease-out',
						'-o-transition': 'background-color 0.1s ease-out'

					 });
			}
			else {
				$('header').css({
						'background-color': '#333',
						'transition':       'background-color 0.1s ease-out',
						'-webkit-transition': 'background-color 0.1s ease-out',
						'-moz-transition': 'background-color 0.1s ease-out',
						'-o-transition': 'background-color 0.1s ease-out',
						'top':              '0px',
						'height':           '160px',
						'padding-top':      '50px'

				 });
			}
		});
	});

})(jQuery);
