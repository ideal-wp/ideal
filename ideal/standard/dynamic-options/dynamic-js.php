<?php
/**
 * Ideal Dynamic Js Generator.
 *
 * @package Ideal
 * @since 1.0
 */
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$ideal_options = get_ideal_theme_options();
/**
 * 
 * loading Dynamic js via WP ajax
 *  
 * */

  $random_number = rand( 0, 99999 );
  $ideal_theme = wp_get_theme();

  if (!empty ( $ideal_options['force-dynamic-cache'] ) && $ideal_options['force-dynamic-cache'] == '1' ){
    $cc_v = $random_number + $ideal_theme->get( 'Version' );
  }else{
    $cc_v = $ideal_theme->get( 'Version' );
  }
  define( 'IDEAL_ATHEME_VERSION', $cc_v );

  function ideal_dynamic_js_enqueue() {
      wp_enqueue_script( 'ideal-dynamic-js', admin_url( 'admin-ajax.php' ).'?action=dynamic_js&_wpnonce=' . wp_create_nonce( 'dynamic-js-nonce' ), array('jquery'),  IDEAL_ATHEME_VERSION,true );
  }
  function ideal_dynamic_js() { 

      $nonce = $_REQUEST['_wpnonce'];
      if ( ! wp_verify_nonce( $nonce, 'dynamic-js-nonce' ) ) {
        die( 'invalid nonce' );
      } else { 
      
        include IDEAL_THEME_DIRECTORY . '/assets/js/dynamic/dynamic-js.php'; 
      }
      exit;
  }
  add_action( 'wp_ajax_dynamic_js', 'ideal_dynamic_js' );
  add_action( 'wp_ajax_nopriv_dynamic_js', 'ideal_dynamic_js' );
  add_action( 'wp_enqueue_scripts', 'ideal_dynamic_js_enqueue' ); 

