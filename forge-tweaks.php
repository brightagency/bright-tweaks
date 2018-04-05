<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://bitbucket.org/forgecollective/forge-tweaks
 * @since             2.1.0
 * @package           Forge_Tweaks
 *
 * @wordpress-plugin
 * Plugin Name:       Forge Tweaks
 * Plugin URI:        https://bitbucket.org/forgecollective/forge-tweaks
 * Description:       The WordPress customisation plugin of Forge Collective. Now completely re-written.
 * Version:           2.1.0
 * Author:            Forge Collective
 * Author URI:        http://frge.co
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-forge-tweaks.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    2.0.0
 */
function run_forge_tweaks() {

	$forge_tweaks = new Forge_Tweaks();
	$forge_tweaks->run();

}
run_forge_tweaks();