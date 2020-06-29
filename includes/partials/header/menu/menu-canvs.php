<?php
/**
 * Ideal theme menu layout 2 && 4
 * 
 * @since v1.0.0
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) { 
  exit; 
}

$ideal_options = ideal_get_theme_options();
?>
<div class="uk-navbar-left ">
  <div class="ideal-Logo">
    <?php get_template_part( '/includes/partials/header/menu/menu', 'logo' );?>
  </div>
</div>
<div class="uk-navbar-center"></div>
<div class="uk-navbar-right nav-overlay">
  <ul class="uk-navbar-nav">
    <li>
      <?php do_action('ideal_search_innav'); ?>
    </li>
    <li>
      <?php if ( !empty($ideal_options['mobile-select-menu']) &&  $ideal_options['mobile-select-menu'] == 'off-canvas') { ?>
      <a class="uk-navbar-toggle " uk-toggle="target: #offcanvas-overlay" uk-navbar-toggle-icon></a>
      <?php }
        if ( !empty($ideal_options['mobile-select-menu']) &&  $ideal_options['mobile-select-menu'] == 'modal') { ?>
      <a class="" href="#ideal-nav-modal-full" uk-navbar-toggle-icon uk-toggle></a>
      <?php } ?>
    </li>
  </ul>
</div>