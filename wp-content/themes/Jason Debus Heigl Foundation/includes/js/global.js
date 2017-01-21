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
		
		$("a.group").fancybox({
			'transitionIn'	:	'elastic',
			'transitionOut'	:	'elastic',
			'speedIn'		:	600, 
			'speedOut'		:	200, 
			'overlayShow'	:	false
		});
		
	});

})(jQuery); 