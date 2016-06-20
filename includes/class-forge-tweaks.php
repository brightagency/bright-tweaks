<?php

class Forge_Tweaks {

    /**
	 * The unique identifier of this plugin.
	 *
	 * @since    2.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
    protected $plugin_name;

    /**
	 * The current version of the plugin.
	 *
	 * @since    2.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
    protected $version;

    /**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    2.0.0
	 */
    public function __construct() {

        $this->plugin_name = "Forge Tweaks";
        $this->version = "2.1.0";

        $this->define_admin_hooks();
        $this->define_public_hooks();

    }

    /**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    2.0.0
	 * @access   private
	 */
    private function define_admin_hooks() {

        function forge_dashboard_footer()
        {

        	if ( is_admin() ) {
                wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/92d1da124e.js', null, null, null );
        		wp_enqueue_style( 'dashboard-css', plugin_dir_url( __FILE__ ) . '../assets/css/dashboard.css' );
        	}
        	echo 'Made with <i class="fa fa-heart"></i> by <a href="http://weareforge.co" target="_blank">Forge</a>.';
        }

        add_filter('admin_footer_text', 'forge_dashboard_footer');

    }

    /**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    2.0.0
	 * @access   private
	 */
    private function define_public_hooks() {

        function forge_login_css() {
            echo '<link rel="stylesheet" type="text/css" href="' . plugin_dir_url( __FILE__ ) . '../assets/css/wp-login.css">';
        }

        add_action('login_head', 'forge_login_css');

    }

    /**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    2.0.0
	 */
    public function run() {

    }

    /**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     2.0.0
	 * @return    string    The name of the plugin.
	 */
    public function get_plugin_name() {
        return $this->plugin_name;
    }

    /**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     2.0.0
	 * @return    string    The version number of the plugin.
	 */
    public function get_version() {
        return $this->version;
    }

}