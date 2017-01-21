$ = jQuery;

$(document).ready(function(){
	/*Setting type of header*/
	if($('.main-header').next().is('.header')){
	}
	else if ($('.main-header').next().is('.header-ow')) {
	}
	else{
		$( "<div class='no-header'></div>" ).insertAfter( $( ".main-header" ) );
	}

});
$(window).resize(function(){

});
