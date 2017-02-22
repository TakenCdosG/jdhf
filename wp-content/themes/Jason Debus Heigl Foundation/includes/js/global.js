(function ($) {
	function sticky() {
		/* Fixed navbar with styles */
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
	/* Hide sassy share on success stories */
	function sassyShare() {
		if (window.location.href.indexOf("success-stories") != -1) {
			$(".heateor_sss_horizontal_sharing").css({
				'visibility': 'hidden'
			});
		}
	}
	$(document).ready(function(){
		/* Dropdown support for mobile */
		if($(window).width() < 560){
			$(".dropdown-toggle").one("click", false);
			$(".donate-button").one("click", false);
		}
		/* Gallery */
		$("a.group").fancybox({
			'transitionIn'	:	'elastic',
			'transitionOut'	:	'elastic',
			'speedIn'		:	600,
			'speedOut'		:	200,
			'overlayShow'	:	false
		});

		/* Donate scroll */
		function buttonDonate(){
			if($('.donate-button').offset().top + $('.donate-button').height() >= $('header').offset().top + 100){
				$('.donate-button').css('right', '-112px');
				$('.donate-button i').css('display', 'inline-block');
			}
			if($(document).scrollTop() <= 150){
				$('.donate-button').css('right', '0');
				$('.donate-button i').css('display', 'none');
			}
		}
		$(document).scroll(function() {
			buttonDonate();
		});

		/* MailChimpPro plugin form*/
		function mail_chimp_pro() {
			$('#mce-EMAIL').on('input', function() {
				var value=$.trim($("#mce-EMAIL").val());
				if( value.length === 0 ) {
					$('.mc_pro_hide').css({
						'display': 'none'
					});
				} else {
					$('.mc_pro_hide').css({
						'display': 'block'
					});
				}
			});
		}

		sticky();
		sassyShare();
		mail_chimp_pro();
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
