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

 //Create Admin Page
function ideal_add_admin_page(){

  add_menu_page( 'Ideal Option', 'IDEAL', 'manage_options', 'ideal_theme_options', 'ideal_theme_create_page', 'dashicons-smiley
  ', 105 );
}

add_action( 'admin_menu','ideal_add_admin_page' );

function ideal_theme_create_page(){
  // Generation Ideal Admin Options Page
      
$taman = get_option('ideal'); 
 var_dump($taman['foo']);
 




}

