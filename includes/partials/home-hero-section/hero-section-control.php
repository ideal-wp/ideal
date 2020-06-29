<?php
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}

$ideal_options = ideal_get_theme_options();
$ideal_en_hero_theme = get_theme_mod('ideal_hero_select_en');
$ideal_en_hero = null;

if(! empty($ideal_options['blog_hero_en'])){
    $ideal_blog_hero_select_en = $ideal_options['blog_hero_en'];
}else{
    $ideal_blog_hero_select_en = false;   
}


if(! empty($ideal_options['hero_select_en'])){
     $ideal_get_hero_en = $ideal_options['hero_select_en'];
}else{
    $ideal_blog_hero_select_en = false;  
}
if(! empty($ideal_options['fornt_hero_select_en'])){
     $ideal_fornt_hero_select_en = $ideal_options['fornt_hero_select_en'];
}else{
    $ideal_fornt_hero_select_en= false; 
}
if (!empty($ideal_en_hero_theme) && $ideal_en_hero_theme == 'Yes') {
    $ideal_en_hero = true;
}
if (empty($ideal_en_hero_theme) && $ideal_en_hero_theme == 'No') {
    $ideal_en_hero = false;
}

if (!empty($ideal_get_hero_en) && $ideal_get_hero_en == true) {

    $ideal_en_hero = true;
}

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
        global $ideal_en_hero, $ideal_fornt_hero_select_en; global$ideal_blog_hero_select_en;

        if (is_front_page() && $ideal_en_hero == false) {
            if ( $ideal_fornt_hero_select_en == false) {

                get_template_part('includes/partials/home-hero-section/herro-section');
            }
        }elseif (is_home() &&  $ideal_en_hero == false && $ideal_blog_hero_select_en == false) {

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
{wp_enqueue_style('ideal-custom-style',
    get_template_directory_uri() . '/assets/css/hero-section.css'
);
    $color = esc_html(get_theme_mod('hero_text_color'));
    $but_p_backg = esc_html(get_theme_mod('hero_primary_button_bg_color'));
    $but_p_backg_hov = esc_html(get_theme_mod('hero_primary_button_hover_color'));
    $but_p_color = esc_html(get_theme_mod('hero_primary_button_text_color'));
    $but_p_color_hov = esc_html(get_theme_mod('hero_primary_button_text_h_color'));
    $background = esc_html(get_theme_mod('hero_bacground_color'));
    $custom_css = "
              #hero-section-content,#hero-section-content h1,button#hero-secondary,#hero-section-content p{color: {$color};}
              #hero-section{background-color: {$background};}
              button#hero-primary{background: {$but_p_backg};color: {$but_p_color};}
              button#hero-primary:hover{background: {$but_p_backg_hov}; color: {$but_p_color_hov}; }
              ";
    wp_add_inline_style('ideal-custom-style', $custom_css);
}
