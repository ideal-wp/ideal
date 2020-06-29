<?php
/**
 *
 *  Ideal Header Dynamic Options.
 *
 * @package Ideal Theme
 * @subpackage Standrad/Dynamic
 * @since V1.0.0
 * @version 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

$ideal_options = ideal_get_theme_options();
global $ideal_transparent_header,$ideal_select_header_mod;
$ideal_transparent_header = null;
$ideal_is_transparent_header = get_post_meta(get_the_ID(), 'is_header_trans', true);
 
if(ideal_is_woocommerce_activated() == true){
if( is_woocommerce() && is_product() || is_cart() || is_checkout() || is_account_page()){
    $ideal_is_transparent_header = 'off';
}
}

if (!empty($ideal_options['transparent-header'])) {
    $ideal_transparent_header = $ideal_options['transparent-header'];
}

if (!empty($ideal_options['select-header-mod'])) {
    $ideal_select_header_mod = $ideal_options['select-header-mod'];
} else { $ideal_select_header_mod = null;}

if ($ideal_is_transparent_header == 'off') {
    $ideal_transparent_header = 0;
} elseif ($ideal_is_transparent_header == 'on') {
    $ideal_transparent_header = 1;
}

//Reveal a Sticky Header
if (!empty($ideal_options['reveal-header']) && $ideal_options['reveal-header'] == true) {

    add_action('ideal_hook_before_header', 'ideal_reveal_header_top');
    add_action('ideal_hook_after_header', 'ideal_reveal_header_after');

    function ideal_reveal_header_top()
    {
        global $ideal_options;
        global $ideal_transparent_header,$ideal_select_header_mod;
        
        $mode = $ideal_select_header_mod;

        if ($ideal_transparent_header == true) {

            echo '<div uk-sticky="media: 960; show-on-up: true; animation: uk-animation-slide-top; cls-active uk-navbar-sticky; sel-target: .uk-navbar-container; cls-inactive: cls-inactive: uk-navbar-transparent ' . $mode . '; "class="uk-sticky" style="">';
        } else {
            echo '<div uk-sticky="media: 960; show-on-up: true; animation: uk-animation-slide-top; cls-active uk-navbar-sticky; sel-target: .uk-navbar-container;"
    class="uk-sticky" style="">';

        }

    }
    function ideal_reveal_header_after()
    {
        echo '</div>';
    }
}

//Sticky Navbar fixed
if (!empty($ideal_options['sticky-header']) && $ideal_options['sticky-header'] == true && empty($ideal_options['reveal-header']) && $ideal_options['reveal-header'] == false) {
    add_action('ideal_hook_before_header', 'ideal_reveal_header_top', 1, 10);
    add_action('ideal_hook_after_header', 'ideal_reveal_header_after', 1, 10);

    function ideal_reveal_header_top()
    {

        global $ideal_transparent_header,$ideal_select_header_mod;
        global $ideal_options;

        if (!empty($ideal_options['sticky-header']) && $ideal_options['sticky-header'] == true && $ideal_transparent_header == true) {

            echo '<div class="ideal-top-sticky" uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent ' . $ideal_select_header_mod . ' ; top: 200" class= "kimo">
        ';
        } elseif (!empty($ideal_options['sticky-header']) && $ideal_options['sticky-header'] == true && !$ideal_transparent_header == true) {

            echo '<div class="ideal-top-sticky" uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky;  top: 200">';

        } else {
            echo '<div class="ideal-top-sticky" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">';
        }
    }
    function ideal_reveal_header_after()
    {
        echo '</div>';
    }
} elseif (!empty($ideal_options['sticky-header']) && $ideal_options['sticky-header'] == true && !empty($ideal_options['reveal-header']) && $ideal_options['reveal-header'] == true) {
    /* do nothing */
}

// bg Header with Transparent Header
if ($ideal_transparent_header == true) {
    add_action('ideal_hook_page_header_close', 'ideal_page_header_after');

    function ideal_page_header_after()
    {
        echo '<div class="header-hero"> </div>';
    }

}
