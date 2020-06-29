<?php
/**
 * Ideal Dynamic Style Generator.
 *
 * @package Ideal
 * @since 1.0
 */
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$ideal_options = ideal_get_theme_options();
/**
 * 
 * loading Dynamic Style via WP ajax
 *  
 * */
if (!empty($ideal_options['style-dynamic-load']) && $ideal_options['style-dynamic-load'] == '2' ){

  $random_number = rand( 0, 99999 );
  $ideal_theme = wp_get_theme();

  if (  !empty($ideal_options['force-dynamic-cache']) && $ideal_options['force-dynamic-cache'] == true ){
    $cc_v = $random_number + $ideal_theme->get( 'Version' );
  }else{
    $cc_v = $ideal_theme->get( 'Version' );
  }
  define( 'IDEAL_THEME_VERSION', $cc_v );

  function ideal_dynamic_css_enqueue() {
      wp_enqueue_style( 'ideal-dynamic-style', admin_url( 'admin-ajax.php' ).'?action=dynamic_css&_wpnonce=' . wp_create_nonce( 'dynamic-css-nonce' ), false,  IDEAL_THEME_VERSION );
  }

  function ideal_dynamic_css() { 

      $nonce = $_REQUEST['_wpnonce'];
      if ( ! wp_verify_nonce( $nonce, 'dynamic-css-nonce' ) ) {
        die( 'invalid nonce' );
      } else { 
      
        include IDEAL_THEME_DIRECTORY . '/standard/dynamic-options/style-output.php'; 
      }
      exit;
  }
  add_action( 'wp_ajax_dynamic_css', 'ideal_dynamic_css' );
  add_action( 'wp_ajax_nopriv_dynamic_css', 'ideal_dynamic_css' );
  add_action( 'wp_enqueue_scripts', 'ideal_dynamic_css_enqueue' ); 
}

/**
 * get the style output
 */
function ideal_dynamic_css_output(){
  get_template_part( '/assets/css/dynamic/daynamic' , 'color' );
  get_template_part( '/assets/css/dynamic/daynamic' , 'font' );
  get_template_part( '/assets/css/dynamic/daynamic' , 'option' );
}
// switching quick dynamic css minify

if (  empty($ideal_options['minify-dynamic-allow']) || $ideal_options['minify-dynamic-allow'] == false){

  function dynamic_ideal_minify( $css ) {

    $css = preg_replace( '/\s+/', ' ', $css );
    
    $css = preg_replace( '/\/\*[^\!](.*?)\*\//', '', $css );
    
    $css = preg_replace( '/(,|:|;|\{|}) /', '$1', $css );
    
    $css = preg_replace( '/ (,|;|\{|})/', '$1', $css );
    
    $css = preg_replace( '/(:| )0\.([0-9]+)(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}.${2}${3}', $css );
    
    $css = preg_replace( '/(:| )(\.?)0(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}0', $css );
    
    return trim( $css );
  
  }
}
/*
 * Enqueues dynamic theme option CSS in head using wp_add_inline_style.
 *
 * 
 */
if(empty($ideal_options['style-dynamic-load'])){

  $ideal_lod_min_css_dynnamic = '1';
}else{
  $ideal_lod_min_css_dynnamic = $ideal_options['style-dynamic-load'];
}

if ($ideal_lod_min_css_dynnamic == '1' ){

  function dynamic_css_styles_method() {

    global $ideal_options ;
  
      ob_start(); 
      
      // Include css.
      ideal_dynamic_css_output();
      
      $ideal_dynamic_css = ob_get_contents();
      ob_end_clean();

      if ( empty($ideal_options['minify-dynamic-allow']) || $ideal_options['minify-dynamic-allow'] == false ){
      
        $ideal_dynamic_css = dynamic_ideal_minify($ideal_dynamic_css);     
      }
      wp_register_style( 'dynamic_css', false );
      wp_enqueue_style( 'dynamic_css' );
      wp_add_inline_style( 'dynamic_css', $ideal_dynamic_css );
  }
  add_action( 'wp_enqueue_scripts', 'dynamic_css_styles_method' );
}
/**
 * Writes the dynamic Style into a file 
 * 
 * 
 * @since 1.0
 */

/**
 * dir is writable??
 * @since 1.0.0
 */
function ideal_check_assets_dir_writable() {
	
	global $wp_filesystem;
	
	if ( empty($wp_filesystem) || ! function_exists( 'request_filesystem_credentials' ) ) {	
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
	}
	// checking the directory ( /assets/css/dynamic/ )is writable or not 
	$path = IDEAL_THEME_DIRECTORY . '/assets/css/dynamic/';
	
	// ask have direct access?
	if( get_filesystem_method(array(), $path) === "direct" ) {
		return true;
	} 
	
	if ( ! function_exists( 'submit_button' ) ) {
		require_once( ABSPATH . 'wp-admin/includes/template.php' );
	}
	
	ob_start();
	$fs_stored_credentials = request_filesystem_credentials('', '', false, false, null);
	ob_end_clean();

	
	if ( $fs_stored_credentials && WP_Filesystem( $fs_stored_credentials ) ) {
		return true;
	}
	
	return false;
	
}

/**
 * Writes the dynamic CSS into a file
 * 
 */

if (! empty($ideal_options['style-dynamic-load']) && $ideal_options['style-dynamic-load'] == '3' ){

  function ideal_generate_file_css() {
    
    if( ideal_check_assets_dir_writable() === true) {

      $css_dir = get_template_directory() . '/assets/css/dynamic/'; 
      ob_start(); 

      // Include css.
      ideal_dynamic_css_output();

      $css = ob_get_clean(); 
      
      // Write css to file.
      global $wp_filesystem;
      
      if ( empty($wp_filesystem) ) {	
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
      }

      WP_Filesystem();
      
      $file_chmod = ( defined('FS_CHMOD_FILE') ) ? FS_CHMOD_FILE : false;
      
      if ( is_multisite() ) {
        if( !$wp_filesystem->put_contents($css_dir . 'ideal-dynamic-styles-multi-id-'. get_current_blog_id() .'.css', $css, $file_chmod)) { 
          // Filesystem can not write.
          update_option('ideal_dynamic_css_success', 'false');
        } else {
          update_option('ideal_dynamic_css_success', 'true');
        }
      } else {
        if( !$wp_filesystem->put_contents($css_dir . 'ideal-dynamic-styles.css', $css, $file_chmod)) {
          // Filesystem can not write.
          update_option('ideal_dynamic_css_success', 'false');
        } else {
          update_option('ideal_dynamic_css_success', 'true');
        }
      }
      // Update version number for cache busting.
      $random_number = rand( 0, 99999 );
      update_option('ideal_dynamic_css_version', $random_number);
    } // endif CSS dir is writable.
    else {
      // Filesystem can not write.
      update_option('ideal_dynamic_css_success', 'false');
    }  
  }
}
/**
 * 
 * write and chutdown
 * 
 */

/**
 * 
 * checking the user permission to write the file if is enable by ideal options
 * to write or not 
 */

if ( ! empty($ideal_options['shutdown-dynamic-file']) && $ideal_options['shutdown-dynamic-file'] == true ){

  remove_action( 'ideal_off_write', 'ideal_generate_file_css', 1 );

}elseif( ! empty($ideal_options['shutdown-dynamic-file']) && $ideal_options['shutdown-dynamic-file'] == false &&
! empty($ideal_options['style-dynamic-load']) &&
$ideal_options['style-dynamic-load'] == '3')
{
  
  ideal_generate_file_css(); // Start to write the file

}

function shutdown_dynamic_file(){

  global $ideal_options;

  if ($ideal_options['style-dynamic-load'] == '3' ){

    add_action( 'shutdown', 'ideal_generate_file_css', 10, 1 );
  }
}

/**
 * register dynamic style via stylesheet.
 * that we was write it up in ( /assets/css/dynamic/ )
 * @since 1.0.0
 * 
 */
if (! empty($ideal_options['style-dynamic-load']) && $ideal_options['style-dynamic-load'] == '3' ){

  function ideal_register_dynamic_style(){
    
    global $ideal_options;
      
    $ideal_theme = wp_get_theme();
    $cc_v = $ideal_theme->get( 'Version' );
    //register dynamic style for multisite
    if( is_multisite() && file_exists( IDEAL_THEME_DIRECTORY . '/assets/css/dynamic/ideal-dynamic-styles-multi-id-'. get_current_blog_id() .'.css' ) ) {
    //register dynamic style
      wp_register_style('dynamic-css', get_template_directory_uri() . '/assets/css/dynamic/ideal-dynamic-styles-multi-id-'. get_current_blog_id() .'.css', '', $cc_v);

    } else {
      wp_register_style('dynamic-css', get_template_directory_uri() . '/assets/css/dynamic/ideal-dynamic-styles.css', '', $cc_v);
    }
    wp_enqueue_style('dynamic-css');

  }
}
// Enqueue dynamic css.
if( ! empty($ideal_options['style-dynamic-load']) && $ideal_options['style-dynamic-load'] == '3' ) {
	add_action( 'wp_enqueue_scripts', 'ideal_register_dynamic_style', 20 );
}