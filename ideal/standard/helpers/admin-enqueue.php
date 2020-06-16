<?php
/**
 * Ideal admin enqueue
 *
 * @package Ideal WordPress Theme
 * @subpackage helpers
 * @version 1.0.0
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Registers a stylesheets.
 * @since 1.0.0
 */

function ideal_load_admin_style()
{

    wp_register_style('ideal_uikit', get_template_directory_uri() . '/includes/admin/assets/css/uikit.css', array(), '3.4.3', 'all');

    wp_register_style('ideal_admin_style', get_template_directory_uri() . '/includes/admin/assets/css/style.css', array(), time(), 'all');

    wp_enqueue_style('ideal_uikit');
    wp_style_add_data('ideal_uikit', 'rtl', 'replace');

    wp_enqueue_style('ideal_admin_style');

}

add_action('admin_enqueue_scripts', 'ideal_load_admin_style');

/**
 * Enqueue admin Js scripts
 *
 * @since 1.0
 */

function ideal_load_admin_scripts()
{

    wp_register_script('ideal_uikit_js', get_template_directory_uri() . '/assets/js/uikit.min.js', array(), '3.4.3', true);

    wp_register_script('ideal_uikit_icon_js', get_template_directory_uri() . '/assets/js/uikit-icons.min.js', array(), '3.4.3', true);

    wp_enqueue_script('ideal_uikit_js');
    wp_enqueue_script('ideal_uikit_icon_js');

}

add_action('admin_enqueue_scripts', 'ideal_load_admin_scripts');

/**
 *Remove uikit css styles from Ideal Admin Dashboard
 *
 *
 * @since 1.0
 */
function ideal_remove_scripts()
{

    // Check for the page ideal redux
    $screen = get_current_screen();
    if (in_array($screen->id, array('toplevel_page_Ideal'))) {
        //Remove uikit css Styles from redux page
        wp_dequeue_style('ideal_uikit');
        wp_dequeue_script('ideal_uikit_js');
        wp_dequeue_script('ideal_uikit_icon_js');

    }

}
add_action('admin_enqueue_scripts', 'ideal_remove_scripts');
