<?php
/**
 * Ideal functions and definitions.
 *
 * @package Ideal
 * @since 1.0
 */
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


define( 'IDEAL_THEME_DIRECTORY', get_template_directory() );
define( 'IDEAL_THEME_DIR_URI', get_template_directory_uri() );

/**
 * Load text domain.
 */
add_action( 'after_setup_theme', 'ideal_lang_setup' );

if ( ! function_exists( 'ideal_lang_setup' ) ) {

	function ideal_lang_setup() {
		
		load_theme_textdomain( 'ideal', get_template_directory() . '/lang' );
	}
}
/**
 * Ideal Options Control.
 */

require_once IDEAL_THEME_DIRECTORY . '/ideal/options-control.php';

/**
 * Ideal Admin Theme Function and Options.
 */

require_once IDEAL_THEME_DIRECTORY . '/includes/admin/inc/function-admin.php';

/**
 * 
 * call TGM Plugin Activation
 */
require_once IDEAL_THEME_DIRECTORY . '/includes/admin/tgm-plugin/class-tgm-plugin-activation.php';
require_once IDEAL_THEME_DIRECTORY .'/includes/admin/tgm-plugin/plugins-activation.php';

/**
 * Ideal Admin Theme options Page & Panel For (Redux).
 */
require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/redux-ideal.php';

/**
 * Standrad Ideal theme helpers
 */

require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/style-enqueue.php';
require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/script-enqueue.php';
require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/admin-enqueue.php';
require_once IDEAL_THEME_DIRECTORY . '/standard/dynamic-options/daynamic-style.php';
require_once IDEAL_THEME_DIRECTORY . '/standard/dynamic-options/dynamic-js.php';

/**
 * 
 *Sets up theme defaults and registers support for various WordPress features.
 */
require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/all-wp-support.php';


/**
 *  Ideal theme hooks and actions.
 */
function ideal_hooks_init() {
	
	require_once IDEAL_THEME_DIRECTORY . '/ideal/hooks/hooks.php';
  require_once IDEAL_THEME_DIRECTORY . '/standard/dynamic-options/ideal-action.php';
	
} 

add_action( 'after_setup_theme', 'ideal_hooks_init', 10 );