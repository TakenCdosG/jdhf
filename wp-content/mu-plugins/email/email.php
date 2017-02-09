<?php
/*
Plugin Name: Custom email notifications
Description: Changes the email new users get
Version: 1.0
Author: Think Creative Group
Author URI: https://www.thinkcreativegroup.com/
*/
if ( !function_exists( 'wp_new_user_notification' ) ) {
	function wp_new_user_notification( $user_id, $plaintext_pass = '' ) {

		// enable content type to html
		add_filter( 'wp_mail_content_type', 'wpmail_content_type' );

		// user
		$user = new WP_User( $user_id );
		$userEmail = stripslashes( $user->user_email );
		$siteUrl = get_site_url();
		$logoUrl = plugin_dir_url( __FILE__ ).'/sitelogo.gif';

		$subject = 'Welcome to Jason Debus Heigl Foundation';
		$headers = 'From: Jason Debus Heigl Foundation Webmaster <webmaster@kheigl.com>';

		// admin email
		$message  = "A new user has been created"."\r\n\r\n";
		$message .= 'Email: '.$userEmail."\r\n";
		@wp_mail( get_option( 'admin_email' ), 'New User Created', $message, $headers );

		ob_start();
		include plugin_dir_path( __FILE__ ).'/mail_template.php';
		$message = ob_get_contents();
		ob_end_clean();

		@wp_mail( $userEmail, $subject, $message, $headers );

		// remove html content type
		remove_filter ( 'wp_mail_content_type', 'wpmail_content_type' );
	}
}

function wpmail_content_type() {
	return 'text/html';
}

?>
