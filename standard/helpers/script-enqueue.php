<?php
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Registers a scripts.
 * @since 1.0
 */

add_action('wp_enqueue_scripts', 'ideal_fonts_scripts');
add_action('wp_enqueue_scripts', 'ideal_load_scripts');

function ideal_load_scripts()
{

    wp_register_script('ideal_uikit_js', get_template_directory_uri() . '/assets/js/uikit/uikit.min.js', array(), ideal_theme_version(), true);

    wp_register_script('ideal_uikit_icon_js', get_template_directory_uri() . '/assets/js/uikit/uikit-icons.min.js', array(), ideal_theme_version(), true);

    wp_register_script('ideal_select2_js', get_template_directory_uri() . '/assets/js/select2/select2.min.js', array(), ideal_theme_version(), true);


    wp_register_script('ideal_js', get_template_directory_uri() . '/assets/js/ideal.js', array(), ideal_theme_version(), true);

   
   
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script('ideal_uikit_js');
    wp_enqueue_script('ideal_uikit_icon_js');

    wp_enqueue_script('ideal_select2_js');
    wp_enqueue_script('ideal_js');

   
    
}

function ideal_fonts_scripts()
{

    wp_register_script('ideal_fontawesome_js', get_template_directory_uri() . '/assets/fonts/fontawesome/js/all.min.js', array(), ideal_theme_version(), true);

    wp_enqueue_script('ideal_fontawesome_js');
} 

// Enqueue js comment-reply
if (!function_exists('ideal_theme_comment_replay_scripts')) {

    function ideal_theme_comment_replay_scripts()
    {



        if (!is_admin()) {

            if (is_singular() && get_option('thread_comments')) {

                wp_enqueue_script('comment-reply');

            }
        }
    }
}
add_action('wp_enqueue_scripts', 'ideal_theme_comment_replay_scripts');