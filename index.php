<?php

/*
Plugin Name: Forge Tweaks
Description: Our lovingly-made WP Customisation Plugin.
Author: Forge Collective
Version: 1.0.1
Author URI: http://frge.co
Network: True
*/

/*
|--------------------------------------------------------------------------
| DASHBOARD FOOTER
|--------------------------------------------------------------------------
*/
function forge_dashboard_footer()
{
	if ( is_admin() ) {
		wp_enqueue_style( 'dashboard', plugin_dir_url( __FILE__ ) . 'css/dashboard.css', array(), '1.0' );
		wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
	}
	echo 'Made with <i class="fa fa-heart"></i> by <a href="http://weareforge.co" target="_blank">Forge</a>.';
}

add_filter('admin_footer_text', 'forge_dashboard_footer');

/*
|--------------------------------------------------------------------------
| LOGIN PAGE
|--------------------------------------------------------------------------
*/

function forge_login_css() {
    echo '<link rel="stylesheet" type="text/css" href="' . plugin_dir_url( __FILE__ ) . 'css/wp-login.css">';
}

add_action('login_head', 'forge_login_css');
