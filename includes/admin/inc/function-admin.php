<?php
/**
 * Ideal admin page functions and definitions.
 *
 * @package Ideal
 * @since 1.0
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}

$ideal_options = ideal_get_theme_options();
/**
 * WPTRT Autoload
 *  Loader class.
 */
require_once IDEAL_THEME_DIRECTORY . '/includes/admin/inc/WPTT/Loader.php';
$ideal_loder = new \WPTRT\Autoload\Loader();
/**
 * 
 *  AdminNotices classes.
 * @since v1.0.0
 */
$ideal_loder->add( 'WPTRT\\AdminNotices\\', get_theme_file_path( 'includes/admin/inc/notices/src' ) );
$ideal_loder->register();
/**
 * 
 *  AdminNotices.
 * @since v1.0.0
 */
require_once IDEAL_THEME_DIRECTORY . '/includes/admin/inc/notices/notices.php';

/**
 * 
 *  Admin Dynamic JS.
 * @since v1.0.0
 */
require_once IDEAL_THEME_DIRECTORY . '/includes/admin/inc/helpers/js-dynamic.php';

//=========================================================
add_action('after_switch_theme','ideal_theme_welcome_redirect');

/**
* Redirect to welcome page when Ideal is activated.
*
* @since 1.0.0
*/
function ideal_theme_welcome_redirect() {
  
  global $pagenow;
  
  // Verify that the theme was activated.
  if ( is_admin() && 'themes.php' === $pagenow && isset( $_GET['activated'] ) ) {
    
    // Do not redirect if network activated.
    if ( is_network_admin() || isset( $_GET['activate-multi'] ) ) {
      return;
    }
    
    // Redirect.
    wp_safe_redirect( add_query_arg( array( 'page' => 'ideal-theme-options' ), admin_url( 'themes.php' ) ) );
    
  }
  
}
//Create Admin theme Page
function ideal_theme_page()
{
    add_theme_page('Ideal WP Theme Options', 'Ideal Options', 'edit_theme_options', 'ideal-theme-options', 'ideal_option_page', 10);
}
add_action('admin_menu', 'ideal_theme_page');

function ideal_option_page()
{

    get_template_part('includes/admin/inc/theme-page/ideal-options');


}

/**
 * Adds the loader CSS to our `<head>`.
 *
 */
if (class_exists('Kirki')) {

    if (!function_exists('ideal_add_loader_styles_to_header')) {

        function ideal_add_loader_styles_to_header()
        {
            ?>
          <style>
            .kirki-customizer-loading-wrapper {
              background-image: url("<?php echo esc_url(IDEAL_THEME_DIR_URI . '/includes/admin/assets/img/icon/ideal-white.svg'); ?>") !important;
              background-size: 100px;
            }
          </style>
          <?php
}
    }
    add_action('wp_head', 'ideal_add_loader_styles_to_header', 100);
}


