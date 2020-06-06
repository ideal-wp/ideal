<?php
/**
 * The template for displaying Archives.
 *
 * @package ideal WordPress Theme
 * @version 1.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
get_header();
if( $ideal_options['id-archives-switch-header'] == 1 ){
get_template_part('includes/partials/page-header/header','archives');
}
get_template_part('includes/templates/post' );
get_footer();