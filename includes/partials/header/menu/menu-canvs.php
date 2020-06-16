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


?>
<div class="uk-navbar-left ">
    <div class="ideal-Logo">
      <?php get_template_part( '/includes/partials/header/menu/menu', 'logo' );?>
    </div>
  </div>
  <div class="uk-navbar-center"></div>
  <div class="uk-navbar-right nav-overlay uk-visible@s">
    <ul class="uk-navbar-nav">
      <li>
        <?php do_action('ideal_search_innav'); ?>
      </li>
      <li>
      <a class="uk-navbar-toggle " uk-toggle="target: #offcanvas-overlay" uk-navbar-toggle-icon ></a>
      </li>
    </ul>
  </div>