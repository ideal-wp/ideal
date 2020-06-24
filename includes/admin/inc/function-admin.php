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

//=========================================================

//Create Admin theme Page
function ideal_theme_page()
{
    add_theme_page('Ideal WP Theme Settings', 'Ideal Settings', 'edit_theme_options', 'ideal-theme-options', 'ideal_option_page', 10);
}
add_action('admin_menu', 'ideal_theme_page');

function ideal_option_page()
{

    get_template_part('includes/admin/inc/welcome/welcome');

    echo 'This is a test theme options page! <br />';

    $ideal_options = ideal_get_theme_options();

    var_dump($ideal_options['minify-dynamic-allow']);

    echo '<br />';
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
            }
          </style>
          <?php
}
    }
    add_action('wp_head', 'ideal_add_loader_styles_to_header', 100);
}