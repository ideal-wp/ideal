<?php
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}

if ( ! class_exists( 'Redux' ) ) {

    if ( ! function_exists( 'ideal_theme_version' ) ) {

        function ideal_theme_version()
        {
            $ver = wp_get_theme('Ideal')->get('Version');
            return $ver;
        }
    }
}

add_action('wp_enqueue_scripts', 'ideal_wp_register_enqueue_style');
add_action('wp_enqueue_scripts', 'ideal_elements_register_enqueue_style');
add_action('wp_enqueue_scripts', 'ideal_fonts_register_enqueue_style');

/**
 * Registers a stylesheets.
 * @since 1.0
 */

function ideal_wp_register_enqueue_style()
{

    wp_register_style('ideal_uikit', get_template_directory_uri() . '/assets/css/uikit.min.css', ideal_theme_version(), '1.0.0', 'all');

    wp_register_style('ideal_select2', get_template_directory_uri() . '/assets/css/select2/select2.min.css', array(), time(), 'all');
    
    wp_register_style('ideal_select2_bootstrap', get_template_directory_uri() . '/assets/css/select2/select2-bootstrap.min.css', array(), time(), 'all');


    wp_register_style('ideal_style', get_template_directory_uri() . '/assets/css/style.css', array(), time(), 'all');

    wp_enqueue_style('ideal_uikit');
    wp_style_add_data('ideal_uikit', 'rtl', 'replace');

    wp_enqueue_style('ideal_select2');
    wp_enqueue_style('ideal_select2_bootstrap');

    wp_enqueue_style('ideal_style');
    wp_style_add_data('ideal_style', 'rtl', 'replace');


}

function ideal_elements_register_enqueue_style()
{

    wp_register_style('ideal_widget_calendar', get_template_directory_uri() . '/assets/css/eElements/widget/calendar/calendar.css', array(), ideal_theme_version(), 'all');

    wp_register_style('ideal_editor_color', get_template_directory_uri() . '/assets/css/eElements/gutenberg/editor-color.css', array(), ideal_theme_version(), 'all');

    wp_enqueue_style('ideal_widget_calendar');
    wp_enqueue_style('ideal_editor_color');
}

function ideal_fonts_register_enqueue_style()
{
    wp_register_style('ideal_fontawesome', get_template_directory_uri() . '/assets/fonts/fontawesome/css/all.min.css', array(), ideal_theme_version(), 'all');

    wp_register_style('ideal-google-raleway', get_template_directory_uri() . '/assets/fonts/Raleway/Raleway-style/style.css', array(),ideal_theme_version(), 'all');

    wp_enqueue_style('ideal_fontawesome');
    wp_enqueue_style('ideal-google-raleway');
}
