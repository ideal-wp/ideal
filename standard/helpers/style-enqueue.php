<?php
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
add_action( 'wp_enqueue_scripts','ideal_load_style' );
add_action( 'wp_enqueue_scripts','ideal_elements_style' );
add_action( 'wp_enqueue_scripts','ideal_fonts_style' );
/**
 * Registers a stylesheets.
 * @since 1.0
 */
function ideal_load_style(){
  
  wp_register_style( 'ideal_uikit', get_template_directory_uri() . '/assets/css/uikit.min.css', ideal_theme_version(), '1.0.0', 'all' );

  wp_register_style( 'ideal_style', get_template_directory_uri() . '/assets/css/style.css', array(), time(), 'all' );


  wp_enqueue_style('ideal_uikit');
  wp_style_add_data( 'ideal_uikit', 'rtl', 'replace' );

  wp_enqueue_style('ideal_style');
  wp_style_add_data('ideal_style', 'rtl', 'replace' );

}


function ideal_elements_style(){

  wp_register_style( 'ideal_widget_calendar', get_template_directory_uri() . '/assets/css/eElements/widget/calendar/calendar.css', array(), ideal_theme_version(), 'all' );

  wp_register_style( 'ideal_editor_color', get_template_directory_uri() . '/assets/css/eElements/gutenberg/editor-color.css', array(), ideal_theme_version() , 'all' );

  wp_enqueue_style('ideal_widget_calendar');
  wp_enqueue_style('ideal_editor_color');
}

function ideal_fonts_style(){
  wp_register_style( 'ideal_fontawesome', get_template_directory_uri() . '/assets/fonts/fontawesome/css/all.min.css', array(), ideal_theme_version(), 'all' );




  wp_enqueue_style('ideal_fontawesome');
}