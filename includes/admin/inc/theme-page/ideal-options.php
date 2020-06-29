<?php
/**
 * Ideal Welcome admin page.
 *
 * @package Ideal
 * @since 1.0.0
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
  exit;
}

$ideal_theme_version = ideal_theme_version();
get_template_part( 'includes/admin/inc/theme-page/panels/panel','header' );
 ?>

<div class="uk-section uk-padding-small">
  <div class="uk-container uk-padding-small">
    <div class="ideal-welcome-header-wrap">
      <h1 class="idealwelcome"><?php echo esc_html__('Welcome to Ideal','ideal'); ?>
        <span><?php echo 'v'. esc_html($ideal_theme_version); ?></span></h1>
      <div class="sub-text">
        <?php echo esc_html__('Thank you for choosing Ideal as your WordPress theme!','ideal'); ?>
      </div>
      <div class="ideal-welcome-tab">
        <ul class="ideal-tab" uk-tab>
          <li><a href="#"><?php esc_html_e( 'Getting started', 'ideal') ?> </a></li>
          <li><a href="#"><?php esc_html_e( 'options', 'ideal') ?></a></li>
        </ul>
        <ul class="uk-switcher uk-margin">
          <li><?php get_template_part( 'includes/admin/inc/theme-page/panels/panel', 'start') ?></li>
          <li><?php get_template_part( 'includes/admin/inc/theme-page/panels/panel', 'options') ?></li>
        </ul>
      </div>
    </div>
  </div>
</div>