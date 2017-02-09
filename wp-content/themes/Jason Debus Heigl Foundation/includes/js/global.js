(function ($) {

	function sticky() {
		if ($(this).scrollTop() === 0) {
			$('header').css({
					'box-shadow':         'none',
					'-moz-box-shadow':    'none',
					'-webkit-box-shadow': 'none',
					'background-color':   'transparent',
					'transition':         'all 0.4s ease-out',
					'-webkit-transition': 'all 0.4s ease-out',
					'-moz-transition':    'all 0.4s ease-out',
					'-o-transition':      'all 0.4s ease-out',
					'padding-top':        '50px',
					'height':             '190px'

				});
			$('.menu img').css({
					'height': 'initial',
					'width':  '335px'
			});
		}
		else {
			$('header').css({
					'background-color':   '#333',
					'transition':         'all 0.4s ease-out',
					'-webkit-transition': 'all 0.4s ease-out',
					'-moz-transition':    'all 0.4s ease-out',
					'-o-transition':      'all 0.4s ease-out',
					'height':             '102px',
					'padding-top':        '12px',
			});
			$('.menu img').css({
					'height': 'auto',
					'width':  '268px'
			});
		}
	};
	function sassyShare() {
		if (window.location.href.indexOf("success-stories") != -1) {
			$(".heateor_sss_horizontal_sharing").css({
				'visibility': 'hidden'
			});
		}
	}
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

		sticky();
		sassyShare();
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
		sticky();
	});
	$(window).scroll(function(){
		sticky();
	});

})(jQuery);
