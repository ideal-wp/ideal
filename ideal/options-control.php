<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Get Ideal theme version.
 * 
 */
if ( ! class_exists( 'Redux' ) ) {
  return;
} 

if ( ! function_exists( 'ideal_theme_version' ) ) {
	function ideal_theme_version() {
    $ver = wp_get_theme('Ideal')->get( 'Version' );
		return $ver;
	}
}

/**
 * Get Ideal theme options.
 * 
 */
function get_ideal_theme_daynamic_options() {

	$ideal_daynamic_options = get_option( 'ideal' );
	if ( ! empty( $ideal_daynamic_options ) ) {

		return $ideal_daynamic_options;
  }
}
function get_ideal_theme_options() {

	$ideal_daynamic_options = get_option( 'ideal' );
	$current_options = get_option( 'ideal_redux' );
	

		if ( ! empty( $current_options ) ) {
			return $current_options;
		} elseif (!  empty( $ideal_daynamic_options) ) {
			return $ideal_daynamic_options;
		} else {
			return $current_options;
		}

	
}


$ideal_core_options = get_ideal_theme_daynamic_options();
$ideal_options = get_ideal_theme_options();
$ideal_get_template_directory_uri = get_template_directory_uri();