<?php
/*Boostrap mobile menu*/
require_once('includes/functions/wp_bootstrap_navwalker.php');

/*Thumbnail support*/
add_theme_support('post-thumbnails');
add_post_type_support( 'dogs', 'thumbnail' );

/**
 * Enqueue Scripts and Styles
 */
function add_theme_scripts() {

	/*Boostrap css*/
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/includes/css/bootstrap.min.css', null,'all');
	/*theme css*/
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', null,'all');
	/*FancyBox Css*/
	wp_enqueue_style( 'fancybox-css', get_stylesheet_directory_uri() .'/includes/js/libraries/fancybox/jquery.fancybox.css');
	/*FancyBox Js*/
	wp_enqueue_script( 'fancybox-js', get_stylesheet_directory_uri() .'/includes/js/libraries/fancybox/jquery.fancybox.js');
	/*Masonry js*/
	wp_enqueue_script( 'masonry', get_template_directory_uri() . '/includes/js/libraries/masonry/masonry.pkgd.min.js', array ( 'jquery' ), true);
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
		"rewrite" => array( "slug" => "%adopt%", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail"),
	);
	register_post_type( "dog", $args );
}

add_action( 'init', 'cptui_register_my_cpts_dog' );

/*Custom Taxonomies*/
function cptui_register_my_taxes_dog_status() {
/**
 * Taxonomy: Dog Status.
 */
	$labels = array(
		"name" => __( 'Dog Status', '' ),
		"singular_name" => __( 'Dog Status', '' ),
	);

	$args = array(
		"label" => __( 'Dog Status', '' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Dog Status",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'dog_status', 'with_front' => false, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "dog_status", array( "dog" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes_dog_status' );



/*Custom Thumb Size*/

function custom_image_sizes() {
	add_theme_support('post-thumbnails');
	add_image_size('medium_custom', 300, 225, true);
	add_image_size('medium_custom', 300, 225, true);
}
add_action('after_setup_theme', 'custom_image_sizes');
function add_custom_sizes( $imageSizes ) {
	$my_sizes = array(
		'medium_custom' => 'Medium-small'
	);
	return array_merge( $imageSizes, $my_sizes );
}
add_filter( 'image_size_names_choose', 'add_custom_sizes' );

/*slug*/
function wpa_course_post_link( $post_link, $id = 0 ){
	$post = get_post($id);
	if ( is_object( $post ) ){
		$terms = wp_get_object_terms( $post->ID, 'dog_status' );
		foreach ($terms as $term) {
			if( $term->slug == 'adopted'){
				return str_replace( '%adopt%' , 'success-stories' , $post_link );
			}else{
			   return str_replace( '%adopt%' , 'adopt' , $post_link );
			}
		}
	}
	return $post_link;
}
add_filter( 'post_type_link', 'wpa_course_post_link', 1, 3 );

/**
 * Rewrite tags for plugin
 */
function dcc_rewrite_tags() {
	add_rewrite_tag('%dog%', '([^&]+)');
}
add_action('init', 'dcc_rewrite_tags', 10, 0);

/**
 * Rewrite rules for plugin
 */
function dcc_rewrite_rules() {
	add_rewrite_rule(
		'^success-stories/([^/]*)$',
		'index.php?post_type=dog&dog=page-slug&dog=$matches[1]',
		'top'
	);
	add_rewrite_rule(
		'adopt/(.+?)(/page/([0-9]+))?/?$',
		'index.php?post_type=dog&dog=page-slug&dog=$matches[1]',
		'top'
	);
	//add_rewrite_rule('^[^/]*/([^/]*)/?','success-stories/page/2/','top');
	// add_rewrite_rule(
	//     'success-stories(\/page\/([0-9]+)\/?)$',
	//     'index.php?pagename=success-stories&pageds=$matches[1]',
	//     'top'
	// );
	//flush_rewrite_rules();
}
add_action('init', 'dcc_rewrite_rules', 10, 0);

/**
* Login & Logout Menu
**/
function add_login_logout_register_menu( $items, $args ) {
	if ( $args->theme_location != 'main-menu' ) {
		return $items;
	}

	if ( is_user_logged_in() ) {
		$items .=
			'<li class="dropdown">
				<a class="dropdown-toggle" href="'. get_site_url() .'/give-landing/">My Account
					<span class="caret"></span>
				</a>
				<ul role="menu" class=" dropdown-menu">
					<li>
						<a href="' . wp_logout_url() . '">' . __( 'Log Out' ) . '</a>
					</li>
				</ul>
			</li>';
	} else {
		$items .= '<li><a href="' . wp_login_url() . '">' . __( 'Log In' ) . '</a></li>';
	}
	return $items;
}
add_filter( 'wp_nav_menu_items', 'add_login_logout_register_menu', 10, 2 );

/**
 * Redirect non-admins to the homepage after logging into the site.
 */
function admin_default_page() {
	if (!current_user_can('administrator') && !is_admin()) {
		return '/give-landing';
	}
}
add_filter('login_redirect', 'admin_default_page');

/**
* Disable_WP_Toolbar
**/
function disable_toolbar() {
	if (!current_user_can('administrator') && !is_admin()) {
		show_admin_bar(false);
	}
}
add_action('after_setup_theme', 'disable_toolbar');

/**
 * Give Form Require Fields
 */

function give_form_req_fields( $required_fields ) {
	//First Name
	$required_fields['give_first'] = array(
		'error_id' => 'invalid_last_name',
		'error_message' => __( 'Please enter your first name.', 'give' )
	);

	//Last Name
	$required_fields['give_last'] = array(
		'error_id' => 'invalid_last_name',
		'error_message' => __( 'Please enter your last name.', 'give' )
	);
	return $required_fields;
}
add_filter( 'give_purchase_form_required_fields', 'give_form_req_fields' );

/**
* Set default wp email
**/
function new_mail_from($old) {
	return 'webmaster@kheigl.com';
}
function new_mail_from_name($old) {
	return 'Jason Debus Heigl Foundation Webmaster';
}
add_filter('wp_mail_from', 'new_mail_from');
add_filter('wp_mail_from_name', 'new_mail_from_name');

/**
* Change default notif email body
**/
function emails_custom_copy( $pass_change_mail, $user, $userdata ) {
	$new_message_txt = __( 'Hi,

This notice confirms that your password was changed on Jason Debus Heigl Foundation.

If you did not change your password, please contact the Site Administrator at:
keith@kheigl.com

Regards,
All at Jason Debus Heigl Foundation');
	$pass_change_mail[ 'message' ] = $new_message_txt;
	return $pass_change_mail;
}
add_filter( 'password_change_email', 'emails_custom_copy', 10, 3 );

/*Current Year Shortcode*/
function year_shortcode() {
	$year = date('Y');
	return $year;
}
add_shortcode('current_year', 'year_shortcode');

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

//mu-plugins_Debugger
// add_action('wp_footer', 'displayHelloWorld');

/**
* Support for voluntary charging credit card fee
*/

/**
 * Adds plugin settings.
 *
 * @param $settings
 *
 * @return array
 */
function give_basic_fees_add_settings( $settings ) {
	$basic_fee_settings = array(
		array(
			'name'       => __( 'Fee Percentage', 'give-basic-fees' ),
			'desc'       => __( 'Adds a gateways fee percentage to the donation. Value should be a number, without a percentage sign.', 'give-basic-fees' ),
			'attributes' => array(
				'placeholder' => '2',
			),
			'id'         => 'basic_fee_percentage',
			'type'       => 'text'
		),
	);

	return give_settings_array_insert(
		$settings,
		'default_gateway',
		$basic_fee_settings
	);
}

add_filter( 'give_settings_gateways', 'give_basic_fees_add_settings', 10, 1 );

/**
 * Displays the fee percentage HTML below the form's top donation amount.
 */
function give_basic_fees_display_percentage() {

	$fee_percentage = give_get_option( 'basic_fee_percentage' );

	echo '<div class="offset-charge"><input type="checkbox"><label>Offset Credit Card Surcharge</label></div>';
	echo '<p style="display:none" class="offset-charge-message">' . sprintf( __( 'Plus an additional (<span class="give-basic-fee-amount"></span>).', 'give-basic-fees' ), $fee_percentage . '%' ) . '</p>';
}
add_action( 'give_after_donation_amount', 'give_basic_fees_display_percentage', 999 );


/**
 * Outputs JS in the footer.
 *
 * Requires jQuery.
 */
function give_basic_fees_js() {
	?>
	<script>
		var give_global_vars;
		//JS for Basic Fee calculation on the fly.
		jQuery(function ($) {

			/**
			 * Event Triggers
			 */
			//When document runs.
			$(document).ready(give_basic_update_percentage());

			$(document).on('change', '.offset-charge input', function (e) {
				var checked = $('.offset-charge input:checked').length > 0;

				if(checked == true){
					$(".offset-charge-message").css('display','block');
					give_basic_update_percentage();
				}else{
					$(".offset-charge-message").css('display','none');
					give_basic_update_percentage();
				}
			});

			//If donation amount update is triggered.
			$(document).on('give_donation_value_updated', function () {
				give_basic_update_percentage();
			});

			//If the donation.
			$(document).on('blur', '.give-donation-amount .give-text-input', function (e) {
				give_basic_update_percentage();
			});

			/**
			 * JS update logic - Basic update percentage JS.
			 */
			function give_basic_update_percentage() {
				//Set vars
				var percentage = <?php echo give_get_option( 'basic_fee_percentage' ); ?>;
				var current_total = $('input[name="give-amount"]').val();

				//Unformat current total so fee calculation is correct for larger donations.
				current_total = Math.abs(parseFloat(accounting.unformat(current_total, give_global_vars.decimal_separator)));

				if($('.offset-charge input:checked').length > 0){
					var fee = current_total * (percentage / 100);
				}else{
					var fee = 0;
				}

				var new_total = current_total + fee;

				//Set the custom amount input value format properly
				var format_args = {
					symbol: give_global_vars.currency_sign,
					decimal: give_global_vars.decimal_separator,
					thousand: give_global_vars.thousands_separator,
					precision: give_global_vars.number_decimals
				};

				fee = accounting.formatMoney(fee, format_args);
				new_total = accounting.formatMoney(new_total, format_args);

				//Update fee information text.
				$('span.give-basic-fee-amount').text(fee);

				//Update final total text.
				$('.give-final-total-amount').text(new_total);

		});
	</script>
<?php }
add_action( 'wp_print_footer_scripts', 'give_basic_fees_js' );

/**
 * Adds the fee to the donation upon submit.
 *
 * @param $sanitized_amount
 *
 * @return string
 */
function give_basic_fees_add_fee( $sanitized_amount ) {

	$fee_percentage = (int) give_get_option( 'basic_fee_percentage' );
	$fee            = $sanitized_amount * ( $fee_percentage / 100 );
	$new_total      = $fee + $sanitized_amount;

	return $new_total;

}
add_filter( 'give_donation_total', 'give_basic_fees_add_fee', 1, 1 );

/**
 * Custom pagination for CPT
 * @param  @string $the_query "Get CPT query"
 * @return @array            Numbered pagination of posts
 */
function post_pagination($the_query) {
	global $wp_rewrite;
	$big = 999999999; // need an unlikely integer
	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $the_query->max_num_pages,
		'prev_text' => __('« Previous'),
		'next_text' => __('Next »')
	));
}

/**
 * Validate ReCAPTCHA
 *
 * @param $valid_data
 * @param $data
 */
function give_jdhf_validate_recaptcha($valid_data, $data) {
	$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
	$recaptcha_secret_key = '6LezEBgUAAAAAJOArFOUDDEF_NAs3mYdHDpt50CB';
	$recaptcha_response = wp_remote_post($recaptcha_url . "?secret=" . $recaptcha_secret_key . "&response=" . $data['g-recaptcha-response'] . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
	$recaptcha_data = wp_remote_retrieve_body($recaptcha_response);
	if (!isset($recaptcha_data->success) && !$recaptcha_data->success == true) {
		//User must have validated the reCAPTCHA to proceed with donation
		if (!isset($data['g-recaptcha-response']) || empty($data['g-recaptcha-response'])) {
			give_set_error('g-recaptcha-response', __('Please verify that you are not a robot.', 'give'));
		}
	}
	return $valid_data;
}
add_action('give_checkout_error_checks', 'give_jdhf_validate_recaptcha', 10, 2);

/**
 * Enqueue ReCAPTCHA Scripts
 */
function give_jdhf_recaptcha_scripts() {
	wp_register_script('give-captcha-js', 'https://www.google.com/recaptcha/api.js');
	//If you only want to enqueue on single form pages then uncomment if statement
	//if ( is_singular( 'give_forms' ) ) {
	wp_enqueue_script('give-captcha-js');
	//}
}
add_action('wp_enqueue_scripts', 'give_jdhf_recaptcha_scripts');

/**
 * Print Necessary Inline JS for ReCAPTCHA
 *
 * @description: This function outputs the appropriate inline js ReCAPTCHA scripts in the footer
 */
function give_jdhf_print_my_inline_script()
{
	//Uncomment if statement to control output
	//if ( is_singular( 'give_forms' ) ) {
	?>
	<script type="text/javascript">
		jQuery(document).on('give_gateway_loaded', function () {
			grecaptcha.render('give-recaptcha-element', {
				'sitekey': '6LezEBgUAAAAAEPkXPGy1odaOcpQbsgVWLk5ROwy' //ADD YOU OWN Google API Sitekey here
			});
		});
	</script>
	<?php
	//}
}
add_action('wp_footer', 'give_jdhf_print_my_inline_script');


/**
 * Custom ReCAPTCHA Form Field
 *
 * @description: This function adds the reCAPTCHA field above the "Donation Total" field
 *
 * Don't forget to update the sitekey!
 *
 * @param $form_id
 */
function give_jdhf_custom_form_fields($form_id) {
	//Add you own google API Site key
	?>
	<div id="give-recaptcha-element" class="g-recaptcha" data-sitekey="6LezEBgUAAAAAEPkXPGy1odaOcpQbsgVWLk5ROwy"
		 style="margin-bottom:1em"></div>
	<?php
}
add_action('give_donation_form_before_submit', 'give_jdhf_custom_form_fields', 10, 1);
