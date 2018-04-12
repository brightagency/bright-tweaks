<?php

/**
 * Plugin Name:       Bright Tweaks
 * Plugin URI:        https://bitbucket.org/forgecollective/forge-tweaks
 * Description:       A WordPress customisation plugin by Bright Agency
 * Version:           1.0.0
 * Author:            Bright Agency
 * Author URI:        https://brightagency.com.au
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function change_dashboard_footer_text() {
	
	if ( is_admin() ) {
		wp_enqueue_style( 'dashboard-css', plugin_dir_url( __FILE__ ) . './assets/css/dashboard.css' );
	}

	echo 'Made with <span class="heart">♥</span> by <a href="https://brightagency.com.au" target="_blank">Bright Agency</a>.';

}

add_filter('admin_footer_text', 'change_dashboard_footer_text');

function insert_login_css() {
	echo '<link rel="stylesheet" type="text/css" href="' . plugin_dir_url( __FILE__ ) . './assets/css/wp-login.css?v=2">';
}
 
add_action('login_head', 'insert_login_css');