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
if (!defined('ABSPATH')) {
    exit;
}

$ideal_options = get_ideal_theme_options();

//content width  defined
if (!isset($content_width)) {
    $content_width = 900;
}

function ideal_wp_theme_setup()
{

    add_theme_support('title-tag');
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');
    //Post Thumbnails
    add_theme_support('post-thumbnails');
    //Post Formats
    add_theme_support('post-formats', array(
        'link',
        'gallery',
        'quote',
        'image',
        'video',
    ));

    //widgets support
    add_theme_support('widgets');

    //Add theme support for Yoast SEO breadcrumbs
    add_theme_support('yoast-seo-breadcrumbs');

}
add_action('after_setup_theme', 'ideal_wp_theme_setup');

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

//Filters the maximum number of words in a post excerpt.
function ideal_custom_excerpt_length($length)
{
    return 35;
}
add_filter('excerpt_length', 'ideal_custom_excerpt_length', 999);

//Continue reading' link prepended with an ellipsis


if ( ! function_exists( 'ideal_theme_excerpt_more' ) && ! is_admin() ) :
    
    function ideal_theme_excerpt_more( $more ) {

        $link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading %s', 'ideal' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
		);
	return ' &hellip; ' . $link;

    }
    add_filter( 'excerpt_more', 'ideal_theme_excerpt_more' );
    
endif;
 

// allow SVG files to be uploaded
if (!empty($ideal_options['svag-allow-s']) && $ideal_options['svag-allow-s'] == true) {

    function ideal_svg_support($mime_types = array())
    {
        $mime_types['svg'] = 'image/svg+xml'; // Adding svg extension
        return $mime_types;
    }
    add_filter('upload_mimes', 'ideal_svg_support', 1, 1);
}


//Adding Page Number Pagination

if (!function_exists('ideal_pagination_bar')) {

    function ideal_pagination_bar()
    {
        global $wp_query;

        $total_pages = $wp_query->max_num_pages;

        if ($total_pages > 1) {
            $current_page = max(1, get_query_var('paged'));

            echo paginate_links(array(
                'base' => get_pagenum_link(1) . '%_%',
                'format' => 'page/%#%',
                'current' => $current_page,
                'total' => $total_pages,
            ));
        }
    }
}

//Filtering frontpage_template

function ideal_filter_front_page_template( $template ) {

    return is_front_page() ? '' : $template;
}
add_filter( 'frontpage_template', 'ideal_filter_front_page_template' );