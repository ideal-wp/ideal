<?php
/**
* Redux Framework options Ideal Standrad helpers
*
* @package Ideal WP Theme
* @subpackage helpers Redux - ideal 
* @version 1.0.0
*/
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// Load redux and options.

if ( ! class_exists( 'ReduxFramework' ) && file_exists( IDEAL_THEME_DIRECTORY . '/includes/admin/redux-framework/ReduxCore/framework.php' ) ) {
	require_once IDEAL_THEME_DIRECTORY . '/includes/admin/framework/ReduxCore/framework.php';
}
// Allow child theme to disable AJAX saving.
if( !function_exists('ideal_set_theme_options_ajax') ) {
	function ideal_set_theme_options_ajax() {
		return true;
	}
}
$ideal_redux_ajax_saving = ideal_set_theme_options_ajax();
$ideal_redux_ajax_saving_bool = ( false === $ideal_redux_ajax_saving ) ? false : true;

if ( ! isset( $redux_demo ) && file_exists( IDEAL_THEME_DIRECTORY . '/includes/admin/options/options-config.php' ) ) {
	require_once IDEAL_THEME_DIRECTORY . '/includes/admin/framework/config/options-config.php';
}

/**
 * Removes the redux demo.
 *
 * @since 1.0
 */
function ideal_remove_demo_modeLink() { 
	
	if ( class_exists('ReduxFrameworkPlugin') ) {
			remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
	}
	if ( class_exists('ReduxFrameworkPlugin') ) {
			remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
	}
}

add_action( 'init', 'ideal_remove_demo_modeLink' );
add_action( 'admin_menu', 'ideal_remove_redux_menu', 12 );

function ideal_remove_redux_menu() {
	remove_submenu_page( 'tools.php', 'redux-about' );
}


if ( class_exists( 'ReduxFramework' ) ) {
	function ideal_redux_remove_dashboard_widget() {
		remove_meta_box( 'redux_dashboard_widget', 'dashboard', 'side' );
	}
	add_action( 'wp_dashboard_setup', 'ideal_redux_remove_dashboard_widget', 100 );
}