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
  update_option('myideal', $ideal_creat_theme_options);
}
add_action( 'after_setup_theme', 'ideal_setup_theme_options' );



$ideal_options = get_ideal_theme_options();





//=========================================================

 //Create Admin theme Page
function ideal_theme_page() {

  add_theme_page( 'Ideal WP Theme Settings', 'Ideal Settings', 'edit_theme_options', 'ideal-theme-options', 'ideal_option_page',10);
}
add_action( 'admin_menu', 'ideal_theme_page' );

function ideal_option_page() {
    echo 'This is a test theme options page! <br />';



    $ideal_options     = get_ideal_theme_options();

    


    var_dump($ideal_options['switch-blog-header']); 

    echo '<br />';
}
