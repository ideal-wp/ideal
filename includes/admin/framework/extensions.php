<?php
/**
* Redux Framework extension
*
* @package Ideal WP Theme
* @subpackage framework  - extension 
* @version 1.0.0
*/
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if ( class_exists( 'Redux' ) ) {
  
  $opt_name = 'ideal_redux';

  Redux::setExtensions( $opt_name, dirname( __FILE__ ) . '/extensions/' );

}

add_action( "redux/extension/customizer/control/includes",
"ideal_framework_customizer" );

function ideal_framework_customizer(){

  if ( ! class_exists( 'Redux_Customizer_Control_info' ) ) {

      class Redux_Customizer_Control_info extends Redux_Customizer_Control {

          public $type = "redux-info";
      }
  }
}


/* Extension Loader */
/*
if(!function_exists('redux_register_custom_extension_loader')) :
      
  function redux_register_custom_extension_loader($ReduxFramework) {
      
      $path = get_parent_theme_file_path('/includes/admin/framework/extensions/');
      $folders = scandir( $path, 1 );
          
      foreach( $folders as $folder ) {
          if ($folder === '.' or $folder === '..' or !is_dir($path . $folder) ) {
              continue;   
          } 
          $extension_class = 'ReduxFramework_Extension_' . $folder;
          if( !class_exists( $extension_class ) && 'wbc_importer' !== $folder ) {
              // In case you wanted override your override, hah.
              $class_file = $path . $folder . '/extension_' . $folder . '.php';
              $class_file = apply_filters( 'redux/extension/'.$ReduxFramework->args['opt_name'].'/'.$folder, $class_file );
              if( $class_file ) {
                  require_once( $class_file );
                  $extension = new $extension_class( $ReduxFramework );
              }
          }
      }
  }

  // Modify {$redux_opt_name} to match your opt_name
  add_action("redux/extensions/".$opt_name ."/before", 'redux_register_custom_extension_loader', 0);
endif;*/

