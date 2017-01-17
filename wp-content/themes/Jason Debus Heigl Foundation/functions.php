<?php
/*Boostrap mobile menu*/
require_once('includes/functions/wp_bootstrap_navwalker.php');


/*Thumbnail support*/
add_theme_support('post-thumbnails');
add_post_type_support( 'dogs', 'thumbnail' );


/*Scripts and styles*/

function add_theme_scripts() {
	/*theme css*/
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', null,'all');
	/*Boostrap css*/
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/includes/css/bootstrap.min.css', null,'all');
	/*Boostrap js*/
	wp_enqueue_script( 'script', get_template_directory_uri() . '/includes/js/bootstrap.min.js', array ( 'jquery' ), true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );