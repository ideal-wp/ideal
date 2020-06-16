<?php

/**
 * control hero section to the front page is in file
 * ideal/option-control.php
 *@since v 1.0.0
 */

/**
 * add the hero section to the front page
 *@since v 1.0.0
 */
if (!function_exists('ideal_home_hero_section')) {
//check if is the front page so add hero section

    function ideal_home_hero_section()
    {
        if (is_front_page()) {
            get_template_part('includes/partials/home-hero-section/herro-section');
        }
    }
}

add_action('ideal_hook_after_header_tag', 'ideal_home_hero_section', 1, 10);

add_action('wp_enqueue_scripts', 'ideal_hero_section_styles_method');

/**
 * hero section output inline style
 *
 *@since v 1.0.0
 */
function ideal_hero_section_styles_method()
{ wp_enqueue_style('ideal-custom-style',
  get_template_directory_uri() . '/assets/css/hero-section.css'
);
    $color = get_theme_mod('hero_text_color');
    $background = get_theme_mod('hero_bacground_color'); //E.g. #FF0000
    $custom_css = "
              #hero-section-content,#hero-section-content h1,button#hero-secondary{
                      color: {$color};
              }
              #hero-section{
                background: {$background};
              }


              ";
    wp_add_inline_style('ideal-custom-style', $custom_css);
}
