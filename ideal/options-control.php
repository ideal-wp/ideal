<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
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
 * Install Ideal theme options.
 *@since v 1.0.0
 */

if(! class_exists('Kirki')){
    
    function ideal_setup_theme_options_befour_Kirki(){
        // creat ideal theme options 
        $ideal_creat_theme_options = array(
        
        'is_post_sidebar' => true,
        'is-page-sidebar' => true,
        'post-imge-in'    => true,

        );
        //Update entire array
        update_option('ideal', $ideal_creat_theme_options);
    }
    add_action( 'after_setup_theme', 'ideal_setup_theme_options_befour_Kirki' );
}

/**
 * Get Ideal theme options.
 *@since v 1.0.0
 */


function get_ideal_theme_options()
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

$ideal_options      = get_ideal_theme_options();
$ideal_get_template_directory_uri = get_template_directory_uri();
