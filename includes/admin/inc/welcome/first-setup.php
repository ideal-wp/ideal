<?php
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/*
$current_options = get_option('ideal_redux');
$current_options = get_option('before_redux');

if (!class_exists('Redux') && empty( $current_options ) ) {

    add_action('after_setup_theme', 'ideal_first_setup_theme_options');
}


function ideal_first_setup_theme_options()
{
    // creat ideal theme options
    $ideal_creat_first_theme_options =
    array(
        'id-archives-switch-header' => '',
        'post-imge-in' => '',
        'post-img-background' => '',
        'post-cards' => '',
        'switch-blog-header' => '',
        'add-scrollspy' => '',
        'select-header-mod' => '',
        'mobile-o-c-flip' => '',
        'mobile-o-c-modes' => '',
        'reveal-header' => '',
        'sticky-header' => '',
        'sticky-header' => '',
        'user-nav' => '',
        'header-layout' => '',
        'is-post-sidebar' => '',
        'i-sticky-sidebar' => '',
        'sidebar-position' => '',
        'id-scroll-animations' => '',
        'repeat-scrollspy' => '',
        'repeat-scrollspy' => '',
        'transparent-header' => '',
        'switch-emojis-wp' => '',
        'svag-allow-s' => '',
        'switch-admin-bar' => 0,
        'add-cards-blog' => '',
        'last_tab' =>
        '',
        'body-b-color' =>
        '#f0eeee',
        'body-f-color' =>
        '#232323',
        'id-primary-color' =>
        '#241df0',
        'id-secondary-color' =>
        '#f0631d',
        'id-sub-additional-color' =>
        '#1ef0f0',
        'id-sub-plus-color' =>
        '#f01e87',
        'id-color-gradient' => array(
            'from' => '#1e87f0',
        ), array(
            'to' => '#f01e87',
        ),
        'id-sub-color-gradient' => array(
            'from' => '#1ef0f0',
        ), array(
            'to' => '#1e87f0',
        ),
        'weqe-allow-s' =>
        '',
        'html-editor-ace' =>
        '',
        'css_editor-css' =>
        '',
        'css_editor-js' =>
        '',
        'style-dynamic-load' =>
        1,
        'shutdown-dynamic-file' =>
        0,
        'minify-dynamic-allow' =>
        0,
        'force-dynamic-cache' =>
        1,
        'svag-allow-s' =>
        1,
        'switch-admin-bar' =>
        0,
        'switch-emojis-wp' =>
        1,
        'ideal_body_font_family' => array(
            'font-family' => 'Varela Round',
        ), array(
            'font-options' => '',
        ), array(
            'google' => 'true',
        ), array(
            'font-weight' => '400',
        ), array(
            'font-style' => '',
        ), array(
            'subsets' => 'latin',
        ), array(
            'text-align' => 'left',
        ), array(
            'font-size' => '14px',
        ), array(
            'line-height' => '25px',
        ), array(
            'letter-spacing' => '',
        ),
        'ideal_h1_family' => array(
            'font-family' => 'Roboto',
        ), array(
            'font-options' => '',
        ), array(
            'google' => 'true',
        ), array(
            'font-weight' => '700',
        ), array(
            'font-style' => '',
        ), array(
            'subsets' => 'latin',
        ), array(
            'text-align' => 'inherit',
        ), array(
            'font-size' => '55px',
        ), array(
            'line-height' => '75px',
        ), array(
            'letter-spacing' => '',
        ),
        'ideal_h2_family' => array(
            'font-family' => '',
        ), array(
            'font-options' => '',
        ), array(
            'google' => 1,
        ), array(
            'font-weight' => '',
        ), array(
            'font-style' => '',
        ), array(
            'subsets' => '',
        ), array(
            'text-align' => '',
        ), array(
            'font-size' => '',
        ), array(
            'line-height' => '',
        ), array(
            'letter-spacing' => '',
        ),
        'ideal_h3_family' => array(
            'font-family' => '',
        ), array(
            'font-options' => '',
        ), array(
            'google' => 1,
        ), array(
            'font-weight' => '',
        ), array(
            'font-style' => '',
        ), array(
            'subsets' => '',
        ), array(
            'text-align' => '',
        ), array(
            'font-size' => '',
        ), array(
            'line-height' => '',
        ), array(
            'letter-spacing' => '',
        ),
        'ideal_h4_family' => array(
            'font-family' => '',
        ), array(
            'font-options' => '',
        ), array(
            'google' => 1,
        ), array(
            'font-weight' => '',
        ), array(
            'font-style' => '',
        ), array(
            'subsets' => '',
        ), array(
            'text-align' => '',
        ), array(
            'font-size' => '',
        ), array(
            'line-height' => '',
        ), array(
            'letter-spacing' => '',
        ),
        'ideal_h5_family' => array(
            'font-family' => '',
        ), array(
            'font-options' => '',
        ), array(
            'google' => 1,
        ), array(
            'font-weight' => '',
        ), array(
            'font-style' => '',
        ), array(
            'subsets' => '',
        ), array(
            'text-align' => '',
        ), array(
            'font-size' => '',
        ), array(
            'line-height' => '',
        ), array(
            'letter-spacing' => '',
        ),
        'ideal_h6_family' => array(
            'font-family' => '',
        ), array(
            'font-options' => '',
        ), array(
            'google' => 1,
        ), array(
            'font-weight' => '',
        ), array(
            'font-style' => '',
        ), array(
            'subsets' => '',
        ), array(
            'text-align' => '',
        ), array(
            'font-size' => '',
        ), array(
            'line-height' => '',
        ), array(
            'letter-spacing' => '',
        ),
        'h1-small-desktop-font-size' =>
        '75',
        'h1-tablet-font-size' =>
        '70',
        'h1-phone-font-size' =>
        '65',
        'h2-small-desktop-font-size' =>
        '85',
        'h2-tablet-font-size' =>
        '80',
        'h2-phone-font-size' =>
        '70',
        'h3-small-desktop-font-size' =>
        '85',
        'h3-tablet-font-size' =>
        '80',
        'h3-phone-font-size' =>
        '70',
        'h4-small-desktop-font-size' =>
        '100',
        'h4-tablet-font-size' =>
        '90',
        'h4-phone-font-size' =>
        '90',
        'h5-small-desktop-font-size' =>
        '100',
        'h5-tablet-font-size' =>
        '95',
        'h5-phone-font-size' =>
        '95',
        'h6-small-desktop-font-size' =>
        '100',
        'h6-tablet-font-size' =>
        '95',
        'h6-phone-font-size' =>
        '95',
        'full-width-h' =>
        1,
        'header-layout' =>
        '4',
        'logo-img-menu' =>
        0,
        'logo-font-no-img' => array(
            'font-family' => 'Nova Flat',
        ), array(
            'font-options' => '',
        ), array(
            'google' => 1,
        ), array(
            'font-weight' => '400',
        ), array(
            'font-style' => '',
        ), array(
            'subsets' => 'latin',
        ), array(
            'text-align' => 'right',
        ), array(
            'text-transform' => 'uppercase',
        ), array(
            'font-size' => '25px',
        ), array(
            'line-height' => '30px',
        ), array(
            'letter-spacing' => '.5px',
        ), array(
            'color' => '#000000',
        ),
        'header-s-logo' => array(
            'url' => '',
        ), array(
            'id' => '148',
        ), array(
            'height' => '',
        ), array(
            'width' => '',
        ), array(
            'thumbnail' => '',
        ), array(
            'title' => 'ideal-logo-b-1',
        ), array(
            'caption' => '',
        ), array(
            'alt' => '',
        ), array(
            'description' => '',
        ),
        'logo-ss-height' => array(
            'height' => '24px',
        ), array(
            'units' => 'px',
        ),
        'mobile-s-logo' => array(
            'url' => '',
        ), array(
            'id' => '',
        ), array(
            'height' => '',
        ), array(
            'width' => '',
        ), array(
            'thumbnail' => '',
        ), array(
            'title' => '',
        ), array(
            'caption' => '',
        ), array(
            'alt' => '',
        ), array(
            'description' => '',
        ),
        'nav-ideal-height' => array(
            'height' => '80px',
        ), array(
            'units' => 'px',
        ),
        'header-m-b-color' => array(
            'background-color' => '#ffffff',
        ),
        'header-shadow-b' =>
        'larg',
        'header-font-f' => array(
            'font-family' => 'Roboto',
        ), array(
            'font-options' => '',
        ), array(
            'google' => 1,
        ), array(
            'font-weight' => '500',
        ), array(
            'font-style' => '',
        ), array(
            'subsets' => 'latin',
        ), array(
            'text-align' => 'center',
        ), array(
            'text-transform' => 'none',
        ), array(
            'font-size' => '14px',
        ), array(
            'line-height' => '18px',
        ), array(
            'letter-spacing' => '.2px',
        ), array(
            'color' => '#3d3d3d',
        ),
        'under-line-menu' =>
        1,
        'menu-header-link-hover' => array(
            'hover' => '#241df0',
        ), array(
            'active' => '',
        ),
        'mobile-select-menu' =>
        'off-canvas',
        'mobile-o-c-flip' =>
        'right',
        'mobile-o-c-modes' =>
        'slide',
        'off-canvas-b-color' =>
        '#000000',
        'off-canvas-overlay-color' => array(
            'color' => '#ffffff',
        ), array(
            'alpha' => '0.68',
        ), array(
            'rgba' => 'rgba(255,255,255,0.68)',
        ),
        'font-offcanvas' => array(
            'font-family' => 'Roboto',
        ), array(
            'font-options' => '',
        ), array(
            'google' => 1,
        ), array(
            'font-backup' => 'Arial, Helvetica, sans-serif',
        ), array(
            'font-weight' => '500',
        ), array(
            'font-style' => '',
        ), array(
            'subsets' => 'latin',
        ), array(
            'text-align' => 'left',
        ), array(
            'text-transform' => '',
        ), array(
            'font-size' => '18px',
        ), array(
            'line-height' => '29px',
        ), array(
            'letter-spacing' => '',
        ), array(
            'color' => '#ffffff',
        ),
        'reveal-header' =>
        1,
        'sticky-header' =>
        1,
        'transparent-header' =>
        0,
        'select-header-mod' =>
        'uk-light',
        'navbar-light-color-moode' =>
        '#ffffff',
        'navbar-dark-color-moode' =>
        '#333333',
        'header-t-logo-light-kmod' => array(
            'url' => '',
        ), array(
            'id' => '147',
        ), array(
            'height' => '',
        ), array(
            'width' => '',
        ), array(
            'thumbnail' => '',
        ), array(
            'title' => 'ideal-logo-wight-1',
        ), array(
            'caption' => '',
        ), array(
            'alt' => '',
        ), array(
            'description' => '',
        ),
        'header-t-logo-dark-kmod' => array(
            'url' => '',
        ), array(
            'id' => '149',
        ), array(
            'height' => '',
        ), array(
            'width' => '',
        ), array(
            'thumbnail' => '',
        ), array(
            'title' => 'ideal-logo-b-1',
        ), array(
            'caption' => '',
        ), array(
            'alt' => '',
        ), array(
            'description' => '',
        ),
        'user-nav' =>
        1,
        'navbar-b-color' => array(
            'background-color' => '#333333',
        ),
        'navbar-f-color' =>
        '#ffffff',
        'link-b-color' => array(
            'hover' => '#1e73be',
        ), array(
            'active' => '#8224e3',
        ),
        'search-icon-nav' =>
        1,
        'shearch-nav-mod' =>
        'modal',
        'switch-page-header' =>
        1,
        'switch-blog-header' =>
        1,
        'switch-to-background' =>
        0,
        's-post-header-bg' => array(
            'background-color' => '',
        ), array(
            'background-repeat' => '',
        ), array(
            'background-size' => '',
        ), array(
            'background-attachment' => '',
        ), array(
            'background-position' => '',
        ), array(
            'background-image' => '',
        ),

        array(
            'media' => 'Array',

            array(
                'id' => '',
            ),

            array(
                'height' => '',
            ),

            array(
                'width' => '',
            ),

            array(
                'thumbnail' => '',
            ),

        ),
        'post-header-hight' => array(
            'padding-top' => '70px',
        ), array(
            'padding-bottom' => '70px',
        ),
        'post-img-background' =>
        1,
        'blog-color-rgba-header-overlay' => array(
            'color' => '#130f0f',
        ), array(
            'alpha' => '0.55',
        ), array(
            'rgba' => 'rgba(19,15,15,0.55)',
        ),
        'header-text-color' =>
        '#ffffff',
        'blog-header-font' => array(
            'font-family' => 'Roboto',
        ), array(
            'font-options' => '',
        ), array(
            'google' => 1,
        ), array(
            'font-weight' => '700',
        ), array(
            'font-style' => '',
        ), array(
            'subsets' => '',
        ), array(
            'text-align' => '',
        ), array(
            'text-transform' => '',
        ), array(
            'font-size' => '42px',
        ), array(
            'line-height' => '55px',
        ), array(
            'word-spacing' => '',
        ), array(
            'letter-spacing' => '',
        ), array(
            'color' => '#ffffff',
        ),
        'id-archives-switch-header' =>
        1,
        'archives-header-bg' => array(
            'background-color' => '',
        ), array(
            'background-repeat' => 'no-repeat',
        ), array(
            'background-size' => 'cover',
        ), array(
            'background-attachment' => 'fixed',
        ), array(
            'background-position' => 'center center',
        ), array(
            'background-image' => '',
        ),
        array(
            'media' => 'Array',

            array(
                'id' => '301',
            ),

            array(
                'height' => '1280',
            ),

            array(
                'width' => '1920',
            ),

            array(
                'thumbnail' => '',
            ),

        ),
        'archives-color-rgba-header-overlay' => array(
            'color' => '#130f0f',
        ), array(
            'alpha' => '0.55',
        ), array(
            'rgba' => 'rgba(19,15,15,0.55)',
        ),
        'archives-header-font' => array(
            'font-family' => 'Roboto',
        ), array(
            'font-options' => '',
        ), array(
            'google' => 1,
        ), array(
            'font-weight' => '500',
        ), array(
            'font-style' => '',
        ), array(
            'subsets' => 'latin',
        ), array(
            'text-align' => 'center',
        ), array(
            'text-transform' => 'capitalize',
        ), array(
            'font-size' => '55px',
        ), array(
            'line-height' => '66px',
        ), array(
            'word-spacing' => '',
        ), array(
            'letter-spacing' => '',
        ), array(
            'color' => '#ffffff',
        ),
        'archives-header-hight' => array(
            'padding-top' => '70px',
        ), array(
            'padding-bottom' => '70px',
        ),
        'ar-header-text-color' =>
        '#ffffff',
        'is-post-sidebar' =>
        0,
        'is-page-sidebar' =>
        0,
        'is-wooc-sidebar' =>
        0,
        'sidebar-position' =>
        'right',
        'i-sticky-sidebar' =>
        1,
        'add-cards-blog' =>
        0,
        'add-scrollspy' =>
        0,
        'id-scroll-animations' =>
        '',
        'repeat-scrollspy' =>
        0,
        'post-imge-in' =>
        1,
        'post-cards' =>
        1,
        'page-container-width' =>
        '1200',
        'page-padding-top-bottom' => array(
            'padding-top' => '50px',
        ), array(
            'padding-bottom' => '50px',
        ),
        'add-cards-page' =>
        0,

    );
//Update entire array
    update_option('before_redux', $ideal_creat_first_theme_options);
}

*/