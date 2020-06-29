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
$ideal_options      = ideal_get_theme_options();
if(!empty($ideal_options['id-archives-switch-header'])){
    $ideal_arch_header = $ideal_options['id-archives-switch-header'];
}else{
    $ideal_arch_header  = false;
}
if ( $ideal_arch_header  == false || !class_exists('Kirki')) {
    get_template_part('includes/partials/page-header/header', 'archives');
} elseif (!empty($ideal_options['transparent-header']) && $ideal_options['transparent-header'] == true) {
 ?><div class="plog-page-header-margin"></div><?php
}
get_template_part('includes/templates/posts');
get_footer();
