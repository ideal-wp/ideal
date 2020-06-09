<?php
/** 
*
* Theme Setup activate recommended WordPress features
* @package Ideal
* @subpackage helpers / WP support
* @since 1.0.0
* @version 1.0.0
*
*/
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ideal_options  = get_ideal_theme_options();

//content width  defined
if ( ! isset( $content_width ) ){
  $content_width = 900;
} 

function ideal_wp_theme_setup() {

  add_theme_support( 'title-tag' );
  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );
  //Post Thumbnails
  add_theme_support( 'post-thumbnails' );
  //Post Formats
  add_theme_support( 'post-formats',  array ( 
    'link', 
    'gallery', 
    'quote', 
    'image',
    'video'
    ) );

    //widgets support
  add_theme_support( 'widgets' );

    //Add theme support for Yoast SEO breadcrumbs
  add_theme_support( 'yoast-seo-breadcrumbs' );

}
add_action( 'after_setup_theme', 'ideal_wp_theme_setup' );

/**
 * Register Navigation menus
 */
require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/nav-menu.php';

/**
 * Register sidebars
 */
require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/sidebar.php';

/**
 * 
 *   Register sidebars Footer Widget Areas 
 */ 
require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/footer-w.php';
/**
 * comments walker
 */
require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/comment-walker.php';
/**
 * Branded Colors for WP editor color palette
 * Branded Gradient Background Options
 */
require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/editor-color.php';
/**
 * get the primary category for a post
 */
require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/category .php';
/**
 * the breadcrumb
 */
require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/breadcrumb.php';

//disable the toolbar for the entire site no matter the user role or settings.

if ( class_exists('Redux') && $ideal_options['switch-admin-bar'] == 0 ){
  add_filter('show_admin_bar', '__return_false');

}elseif( class_exists('Redux') && $ideal_options['switch-admin-bar'] == 1 ){

  add_filter('show_admin_bar', '__return_true');
}


//Filters the maximum number of words in a post excerpt.
function ideal_custom_excerpt_length( $length ) {
  return 35;
}
add_filter( 'excerpt_length', 'ideal_custom_excerpt_length', 999 );

// allow SVG files to be uploaded 
if ( !empty($ideal_options['svag-allow-s']) && $ideal_options['svag-allow-s'] == 1){

  function ideal_svg_support( $mime_types = array() ){
    $mime_types['svg'] = 'image/svg+xml'; // Adding svg extension
    return $mime_types;
  }
  add_filter('upload_mimes', 'ideal_svg_support', 1, 1);
}

/**
 * Disable Emojis in WordPress for Better Speed.
 * user can control to Disable it or enable from theme option control panel.
 * 
 */
if ( ! function_exists( 'ideal_disable_emoji_feature' ) ) {

    function ideal_disable_emoji_feature() {

    // Prevent Emoji from loading on the front-end
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );

    // Remove from admin area also
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );

    // Remove from RSS feeds also
    remove_filter( 'the_content_feed', 'wp_staticize_emoji');
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji');

    // Remove from Embeds
    remove_filter( 'embed_head', 'print_emoji_detection_script' );

    // Remove from emails
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

    // Disable from TinyMCE editor. Currently disabled in block editor by default
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );

    /** Finally, prevent character conversion too
    ** without this, emojis still work 
    ** if it is available on the user's device
    */

    add_filter( 'option_use_smilies', '__return_false' );

    }

    function disable_emojis_tinymce( $plugins ) {
    if( is_array($plugins) ) {
      $plugins = array_diff( $plugins, array( 'wpemoji' ) );
    }
    return $plugins;
    }
}

if (!empty( $ideal_options['switch-emojis-wp'] ) && $ideal_options['switch-emojis-wp'] == 1){
  add_action('init', 'ideal_disable_emoji_feature');
}

//Adding Page Number Pagination

if( ! function_exists('ideal_pagination_bar') ){

  function ideal_pagination_bar() {
    global $wp_query;

    $total_pages = $wp_query->max_num_pages;

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total'   => $total_pages,
        ));
    }
  }
}