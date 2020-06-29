<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

if ( ! function_exists( 'ideal_is_woocommerce_activated' ) ) {
	function ideal_is_woocommerce_activated() {
		if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
	}
}

/**
 * add the hero section control.
 *@since v 1.0.0
 */
require_once IDEAL_THEME_DIRECTORY .'/includes/partials/home-hero-section/hero-section-control.php';


/**
 * Get Ideal theme version.
 *@since v 1.0.0
 */

if (!function_exists('ideal_theme_version')) {
    function ideal_theme_version()
    {
        $ver = wp_get_theme('Ideal')->get('Version');
        return $ver;
    }
}



/**
 * Get Ideal theme options.
 *@since v 1.0.0
 */


function ideal_get_theme_options()
{

    $ideal_daynamic_options = get_option('ideal');
    $current_options        = get_option('ideal_options_control');

    if (!empty($current_options)) {

        return $current_options;

    } elseif (!empty($ideal_daynamic_options)) {

        return $ideal_daynamic_options;
    } else {

        return $current_options;
    }

}

$ideal_options      = ideal_get_theme_options();
$ideal_get_template_directory_uri = get_template_directory_uri();

