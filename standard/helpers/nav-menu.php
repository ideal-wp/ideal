<?php
/**
 * Navigation Menus
 *
 * @package Ideal
 * @subpackage helpers
 * @since 1.0.0
 * @version 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
require_once IDEAL_THEME_DIRECTORY . '/standard/helpers/menu-walker.php';
/**
 * Registers navigation menu locations for a theme.
 */
function ideal_register_nav_menus()
{
    register_nav_menus(array(

        'top-menu'      => esc_html__('Top menu', 'ideal'),
        'modal-menu'    => esc_html__('mobile Modal menu', 'ideal'),
        'mobile-menu'   => esc_html__('mobile Menu offcanvas', 'ideal'),
        'footer-menu'   => esc_html__('Footer Menu', 'ideal'),
    ));

}
add_action('after_setup_theme', 'ideal_register_nav_menus');

function ideal_menu_notitle($menu)
{
    return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu);

}
add_filter('wp_nav_menu', 'ideal_menu_notitle');
add_filter('wp_page_menu', 'ideal_menu_notitle');
add_filter('wp_list_categories', 'ideal_menu_notitle');