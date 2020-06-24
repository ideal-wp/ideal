<?php
/**
 *
 *  Ideal Breadcrumb.
 *
 * @package Ideal Theme
 * @subpackage Ideal helpers breadcrumb
 * @since V1.0.0
 * @version 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

function ideal_get_breadcrumb()
{
    echo '<a href="' . esc_url(home_url()) . '" rel="nofollow">' . esc_html__('Home', 'ideal') . '</a>';
    if (is_category() || is_single()) {
        echo esc_html(' &#8811; ');
        the_category(', ');
        if (is_single()) {
            echo esc_html(' &#8811; ');
            the_title();
        }
    } elseif (is_page()) {

        echo esc_html(' &#8811; ');
				echo the_title();
				
    } elseif (is_search()) {
			
        echo esc_html(' &#8811; ');
        esc_html_e( 'Search Results: ', 'ideal' );
        echo ('<em>');
        the_search_query();
        echo ('</em>');
    }
}
