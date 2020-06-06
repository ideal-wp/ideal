<?php
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Registers a scripts.
 * @since 1.0
 */

add_action( 'wp_enqueue_scripts','ideal_fonts_scripts' );
add_action( 'wp_enqueue_scripts','ideal_load_scripts' );


function ideal_load_scripts(){
  
  wp_register_script( 'ideal_uikit_js', get_template_directory_uri() . '/assets/js/uikit.min.js', array(), ideal_theme_version(), true );
  
  wp_register_script( 'ideal_uikit_icon_js', get_template_directory_uri() . '/assets/js/uikit-icons.min.js', array(), ideal_theme_version(), true );

  wp_register_script( 'ideal_js', get_template_directory_uri() . '/assets/js/ideal.js', array(), time(), true );


  wp_enqueue_script('ideal_uikit_js');
  wp_enqueue_script('ideal_uikit_icon_js');
  wp_enqueue_script('ideal_js');
  wp_enqueue_script('jquery');
}


function ideal_fonts_scripts(){
  
  wp_register_script( 'ideal_fontawesome_js', get_template_directory_uri() . '/assets/fonts/fontawesome/js/all.min.js', array(), ideal_theme_version(), true );
  
  
 wp_enqueue_script('ideal_fontawesome_js');
}