<?php
/**
 * Ideal admin page functions and definitions.
 *
 * @package Ideal
 * @since 1.0
 */
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/*
if ( ! class_exists( 'Redux' ) ) {
  function ideal_no_redux_maintenance_mode() {
    get_template_part('includes/admin/inc/welcome/site-maintenance');
    }
add_action('get_header', 'ideal_no_redux_maintenance_mode');

} 
*/

require_once IDEAL_THEME_DIRECTORY . '/includes/admin/inc/welcome/first-setup.php';
require_once  IDEAL_THEME_DIRECTORY . '/includes/admin/inc/js-dynamic.php';
require_once IDEAL_THEME_DIRECTORY . '/includes/admin/notices/notices.php';

 
  
function ideal_setup_theme_options(){
  // creat ideal theme options 
  $ideal_creat_theme_options = array(
  
    'foo' => 'bar',
    'hello' => 'hello worldhello worldhello worldhello world',
    'taman' => 'Hello world mohamed',

  );
  //Update entire array
  update_option('ideal', $ideal_creat_theme_options);
}
add_action( 'after_setup_theme', 'ideal_setup_theme_options' );



$ideal_options = get_ideal_theme_options();



$ideal_core_options = get_ideal_theme_daynamic_options();

//=========================================================

 //Create Admin theme Page
function ideal_theme_page() {

  add_theme_page( 'Ideal WP Theme Settings', 'Ideal Settings', 'edit_theme_options', 'ideal-theme-options', 'ideal_option_page',10);
}
add_action( 'admin_menu', 'ideal_theme_page' );

function ideal_option_page() {
    echo 'This is a test theme options page!';
}
