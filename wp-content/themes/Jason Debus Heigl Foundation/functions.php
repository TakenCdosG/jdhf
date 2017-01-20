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
	wp_enqueue_script( 'global', get_template_directory_uri() . '/includes/js/global.js', array ( 'jquery' ), true);

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
        'name' => __( 'Copyright', 'theme-slug' ),
        'id' => 'sidebar-6',
        'description' => __( 'Sidebar for footer contents', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>',
    ) );
}

/*Get Global Modules ID*/
// get_id_by_slug('any-page-slug');

function get_id_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}

/*Dog CPT*/

function cptui_register_my_cpts_dog() {

    /**
     * Post Type: Dogs.
     */

    $labels = array(
        "name" => __( 'Dogs', '' ),
        "singular_name" => __( 'Dog', '' ),
        "menu_name" => __( 'Dogs', '' ),
        "all_items" => __( 'All dogs', '' ),
        "add_new" => __( 'Add new', '' ),
        "add_new_item" => __( 'Add new dog', '' ),
        "edit_item" => __( 'Edit Dog', '' ),
        "new_item" => __( 'New dog', '' ),
        "view_item" => __( 'View dog', '' ),
        "view_items" => __( 'View dogs', '' ),
        "search_items" => __( 'Search dog', '' ),
        "not_found" => __( 'No dogs found', '' ),
        "not_found_in_trash" => __( 'No dogs found in trash', '' ),
        "parent_item_colon" => __( 'Parent dog', '' ),
        "featured_image" => __( 'Dog image', '' ),
        "set_featured_image" => __( 'Set dog image', '' ),
        "remove_featured_image" => __( 'Remove dog image', '' ),
        "use_featured_image" => __( 'Use dog image', '' ),
        "archives" => __( 'All dogs', '' ),
        "insert_into_item" => __( 'Insert into dog', '' ),
        "uploaded_to_this_item" => __( 'Uploaded to this dog', '' ),
        "filter_items_list" => __( 'Filter dog list', '' ),
        "items_list_navigation" => __( 'Dogs list navigation', '' ),
        "items_list" => __( 'Dogs list', '' ),
        "attributes" => __( 'Dogs attributes', '' ),
        "parent_item_colon" => __( 'Parent dog', '' ),
    );

    $args = array(
        "label" => __( 'Dogs', '' ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "dog", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "editor", "thumbnail"),
    );

    register_post_type( "dog", $args );
}

add_action( 'init', 'cptui_register_my_cpts_dog' );
