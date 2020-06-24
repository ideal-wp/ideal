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
 * @since 1.0.0
 */
add_action( 'after_setup_theme', 'ideal_lang_setup' );

if ( ! function_exists( 'ideal_lang_setup' ) ) {

	function ideal_lang_setup() {
		
		load_theme_textdomain( 'ideal', get_template_directory() . '/lang' );
	}
}
/**
 * Ideal classes Control.
 * @since 1.0.0
 */
require IDEAL_THEME_DIRECTORY .'/ideal/classes/classes-control.php';

/**
 * Ideal Options Control.
 * @since 1.0.0
 */

require_once IDEAL_THEME_DIRECTORY . '/ideal/options-control.php';

/**
 * 
 * call TGM Plugin Activation
 * @since 1.0.0
 */
require_once IDEAL_THEME_DIRECTORY . '/includes/admin/tgm-plugin/class-tgm-plugin-activation.php';
require_once IDEAL_THEME_DIRECTORY .'/includes/admin/tgm-plugin/plugins-activation.php';

/**
 * Ideal Theme options For (Kirki).
 * @since 1.0.0
 */
require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/kirki-ideal.php';

/**
 * Standrad Ideal theme helpers
 * @since 1.0.0
 */

require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/style-enqueue.php';
require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/script-enqueue.php';
require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/admin-enqueue.php';
require_once IDEAL_THEME_DIRECTORY . '/standard/dynamic-options/daynamic-style.php';
require_once IDEAL_THEME_DIRECTORY . '/standard/dynamic-options/dynamic-js.php';

/**
 * Ideal Admin Theme Function and Options.
 * @since 1.0.0
 */

require_once IDEAL_THEME_DIRECTORY . '/includes/admin/inc/function-admin.php';


/**
 * 
 *Sets up theme defaults and registers support for various WordPress features.
 *@since 1.0.0
 */
require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/all-wp-support.php';
/**
 * 
 * Woocommerce Supourt features.
 * @since 1.0.0
 */
require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/woocommerce.php';
/**
 *  Ideal theme hooks and actions.
 * @since 1.0.0
 */
function ideal_hooks_init() {
	
	require_once IDEAL_THEME_DIRECTORY . '/ideal/hooks/hooks.php';
  require_once IDEAL_THEME_DIRECTORY . '/standard/dynamic-options/ideal-action.php';
	
} 

add_action( 'after_setup_theme', 'ideal_hooks_init', 10 );