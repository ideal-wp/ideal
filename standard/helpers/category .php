<?php
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}
function get_primary_category($ideal_category)
{
    $useCatLink = true;
    // If post has a category assigned.
    if ($ideal_category) {
        $ideal_category_display = '';
        $ideal_category_link = '';
        if (class_exists('WPSEO_Primary_Term')) {
            // Show the post's 'Primary' category, if this Yoast feature is available, & one is set
            $wpseo_primary_term = new WPSEO_Primary_Term('category', get_the_id());
            $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
            $term = get_term($wpseo_primary_term);
            if (is_wp_error($term)) {
                // Default to first category (not Yoast) if an error is returned
                $ideal_category_display = $ideal_category[0]->name;
                $ideal_category_link = get_category_link($ideal_category[0]->term_id);
            } else {
                // Yoast Primary category
                $ideal_category_display = $term->name;
                $ideal_category_link = get_category_link($term->term_id);
            }
        } else {
            // Default, display the first category in WP's list of assigned categories
            $ideal_category_display = $ideal_category[0]->name;
            $ideal_category_link = get_category_link($ideal_category[0]->term_id);
        }
        // Display category
        if (!empty($ideal_category_display)) {
            if ($useCatLink == true && !empty($ideal_category_link)) {
                return '<a href="' . esc_url($ideal_category_link) . '">' . esc_html($ideal_category_display) . '</a>';
            } else {
                return '' . esc_html($ideal_category_display) . '';
            }
        }
    }
}

function ideal_get_cattegory()
{

    $categories = get_the_category();

    $output = null;

    if (!empty($categories)) {

        foreach ($categories as $ideal_category) {

            $output .= '<div id="cat-post-header"> <a  class="cat-post-header uk-link-reset uk-button' . esc_attr($ideal_category->slug) . '" href="' . esc_url(get_category_link($ideal_category->term_id)) . '" alt="' . esc_attr(sprintf(__('View all posts in %s', 'ideal'), $ideal_category->name)) . '" uk-tooltip="' . esc_attr(sprintf(__('View all posts in %s', 'ideal'), $ideal_category->name)) . '" >' . esc_html($ideal_category->name) . '</a> </div>';
        }

    }

    echo trim($output);

    return;
}
