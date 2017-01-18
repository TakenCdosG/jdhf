$ = jQuery;
$(document).ready(function(){
	if($('.main-header').next().is('.header')){
	}else{
		
		$( "<div class='no-header'></div>" ).insertAfter( $( ".main-header" ) );
	}
});