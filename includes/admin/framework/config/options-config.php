<?PHP
/**
 * 
 *Ideal theme options configuration 
 * for redux framework
 * 
 * @since 1.0.0
 */
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists('Redux'))
{
return;
}

$opt_name = 'ideal_redux';
$opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );
$theme    = wp_get_theme(); 


$ideal_menu_icon = null;

    if( floatval(get_bloginfo('version')) >= "3.8" ) {

        $current_color = get_user_option( 'admin_color' );

        if( $current_color == 'light' ) {

            $ideal_menu_icon = get_template_directory_uri() . '/includes/admin/assets/img/icon/ideal-black.svg';

        } else {

            $ideal_menu_icon = get_template_directory_uri() . '/includes/admin/assets/img/icon/ideal-white.svg';
        }
    } 

 $args = array(
  'opt_name'             => $opt_name,
  'display_name'         => $theme->get( 'Name' ),
  'display_version'      => $theme->get( 'Version' ),
  'templates_path'       =>  get_template_directory() . '/includes/admin/framework/ReduxCore/templates/panel/',
  'menu_type'            => 'menu',
  'dev_mode'             => false,
  'show_options_object'  => false,
  'allow_sub_menu'       => false,
  'menu_title'           => esc_html__( 'Ideal Control', 'ideal' ),
  'page_title'           => esc_html__( 'Ideal Options', 'ideal' ),
  'google_api_key'       => '',
  'google_update_weekly' => false,
  'ajax_save'            => true,
  'async_typography'     => false,
  'admin_bar'            => false,
  'admin_bar_icon'       => 'dashicons-portfolio',
  'admin_bar_priority'   => 55,
  'global_variable'      => '',
  'dev_mode'             => false,
  'update_notice'        => false,
  'customizer'           => true,
  //'customizer_only'      => true,
  'disable_tracking'     => true,
  'database'             => '',
  'last_tab'             => '',
  'page_priority'        => 110,
  'page_parent'          => 'themes.php',
  'page_permissions'     => 'manage_options',
  'page_slug'            => 'ideal-options',
  'menu_icon'            => $ideal_menu_icon,
  'page_icon'            => '',
  'save_defaults'        => false,
  'default_show'         => false,
  'default_mark'         => '',
  'show_import_export'   => true,
  'transient_time'       => 60 * MINUTE_IN_SECONDS,
  'output'               => true,
  'output_tag'           => true,
  'footer_credit'        => ' ',                
  'use_cdn'              => false,  
  // HINTS
  'hints'                => array(
      'icon'             => 'el el-question-sign',
      'icon_position'    => 'right',
      'icon_color'       => 'lightgray',
      'icon_size'        => 'normal',
      'tip_style'        => array(
       'color'        => 'red',
          'shadow'       => true,
          'rounded'      => false,
          'style'        => '',
      ),
      'tip_position'  => array(
          'my'        => 'top left',
          'at'        => 'bottom right',
      ),
      'tip_effect'    => array(
          'show' => array(
              'effect'   => 'slide',
              'duration' => '500',
              'event'    => 'mouseover',
          ),
          'hide' => array(
              'effect'   => 'slide',
              'duration' => '500',
              'event'    => 'click mouseleave',
          ),
      ),
  )
);


// Panel Intro text -> before the form
if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
    
  if ( ! empty( $args['global_variable'] ) ) {

      $v = $args['global_variable'];
      
  } else {
      $v = str_replace( '-', '_', $args['opt_name'] );
  }
  $args['intro_text'] = '';
} else {
   $args['intro_text'] = '';
}

// Add content after the form.
$args['footer_text'] = 'Ideal Version  ' . $theme->get( 'Version' ) ;

Redux::setArgs( $opt_name, $args );

/*
* ---> END ARGUMENTS
*/

// Write dynamic css.
add_action ('redux/options/ideal_redux/saved', 'dynamic_css_styles_method');


// Allow child theme to disable sections from loading outside theme options 
if( !function_exists('ideal_load_theme_options_globally') ) {
  function ideal_load_theme_options_globally() {
    return true;
  }
}

$ideal_globally_load_redux      = ideal_load_theme_options_globally();
$ideal_globally_load_redux_bool = ( false === $ideal_globally_load_redux ) ? false : true;

if ( false === $ideal_globally_load_redux_bool && is_admin() ) {
  
  if( isset($_GET['page']) && 
  $_GET['page'] === sanitize_html_class($theme->get( 'Name' )) ) {
    
  } else {
    return;
  }
  
} 

/*
     *
     * START SECTIONS
     *
     */

get_template_part( 'includes/admin/framework/config/options/option', 'general');
get_template_part( 'includes/admin/framework/config/options/option', 'typography');
get_template_part( 'includes/admin/framework/config/options/option', 'header');
get_template_part( 'includes/admin/framework/config/options/option', 'page-header');
get_template_part( 'includes/admin/framework/config/options/option', 'sidebar');
get_template_part( 'includes/admin/framework/config/options/option', 'blog');
get_template_part( 'includes/admin/framework/config/options/option', 'page');


 /*
     * <--- END SECTIONS
     */


    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $return['error'] = $field;
                $field['msg']    = 'your custom error message';
            }

            if ( $warning == true ) {
                $return['warning'] = $field;
                $field['msg']      = 'your custom warning message';
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {

        function dynamic_section( $sections ) {

            //$sections = array();
            $sections[] = array(
                'title'  => esc_html__( 'Section via hook', 'ideal' ),
                'desc'   => esc_html__( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'ideal' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {

        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }     
    
    