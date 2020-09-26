<?php
/**
 * Plugin Name: atozsites Redirect URL
 * Plugin URI: https://github.com/atozsites/redirect-url
 * Description: Easily and safely manage HTTP redirects.
 * Author: atozsites
 * Version: 1.0
 * Text Domain: redirect-url
 * Author URI: https://atozsites.com
 */
function atozsites_textdomain() {
	load_plugin_textdomain( 'redirect-url', false, dirname( __FILE__ ) . '/lang' );
}
add_action( 'plugins_loaded', 'atozsites_textdomain' );

require_once dirname( __FILE__ ) . '/inc/functions.php';
require_once dirname( __FILE__ ) . '/inc/classes/class-atozsites-post-type.php';
require_once dirname( __FILE__ ) . '/inc/classes/class-atozsites-redirect.php';


if ( defined( 'WP_CLI' ) && WP_CLI ) {
	require_once dirname( __FILE__ ) . '/inc/classes/class-atozsites-wp-cli.php';
	WP_CLI::add_command( 'redirect-url', 'atozsites_WP_CLI' );
}

atozsites_Post_Type::factory();
atozsites_Redirect::factory();
