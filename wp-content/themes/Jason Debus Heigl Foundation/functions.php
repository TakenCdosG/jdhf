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

/*Menu Registering*/

function register_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_menus' );

/*Sidebars*/
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer widget area 1', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Sidebar for footer contents', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer widget area 2', 'theme-slug' ),
        'id' => 'sidebar-2',
        'description' => __( 'Sidebar for footer contents', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer widget area 3', 'theme-slug' ),
        'id' => 'sidebar-3',
        'description' => __( 'Sidebar for footer contents', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer widget area 4', 'theme-slug' ),
        'id' => 'sidebar-4',
        'description' => __( 'Sidebar for footer contents', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer widget area 5', 'theme-slug' ),
        'id' => 'sidebar-5',
        'description' => __( 'Sidebar for footer contents', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'copyright', 'theme-slug' ),
        'id' => 'sidebar-6',
        'description' => __( 'Sidebar for footer contents', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>',
    ) );
}