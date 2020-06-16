<?php
/**
 * The template for displaying Archives.
 *
 * @package ideal WordPress Theme
 * @version 1.0.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
get_header();
if( ! empty( $ideal_options['id-archives-switch-header'] ) && $ideal_options['id-archives-switch-header'] == true  || ! class_exists( 'Kriki' ) ){

    get_template_part('includes/partials/page-header/header','archives');

}
get_template_part('includes/templates/posts' );
get_footer();