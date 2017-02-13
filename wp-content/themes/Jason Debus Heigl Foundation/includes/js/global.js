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
		/*Dorpdown support for mobile*/
	    $(".dropdown-toggle").one("click", false);
		/*Gallery*/
		$("a.group").fancybox({
			'transitionIn'	:	'elastic',
			'transitionOut'	:	'elastic',
			'speedIn'		:	600,
			'speedOut'		:	200,
			'overlayShow'	:	false
		});
		/*donate scroll*/
		function checkOffset() {
		    if($('.donate-button').offset().top + $('.donate-button').height() >= $('#footer').offset().top - 10)
		        $('.donate-button').css('top', '30%');
		    if($(document).scrollTop() + window.innerHeight < $('#footer').offset().top)
		        if($(window).width() < 480){
		        	$('.donate-button').css('top', '54.3%');
		        }else{
		        	$('.donate-button').css('top', '40%');
		        }
		}
		$(document).scroll(function() {
		    checkOffset();
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
