<?php
get_template_part( '/includes/partials/header/menu/menu', 'serch' );


?><div class="uk-navbar-left nav-overlay">
    <div class="ideal-Logo">
      <?php get_template_part( '/includes/partials/header/menu/menu', 'logo' );?>
    </div>
    <div class="uk-visible@s uk-visible@m"><?php do_action('uikit_top_menu'); ?></div>
  </div>
  <div class="uk-navbar-center"></div>
  <div class="uk-navbar-right nav-overlay uk-visible@s uk-visible@m">
    <ul class="uk-navbar-nav">
      <li>
        <?php do_action('ideal_search_innav'); ?>
      </li>
      <li>
        <a href=""><span class="" uk-icon="cart"></span></a>
      </li>
    </ul>
  </div>
  <?php get_template_part( '/includes/partials/header/menu/menu', 'mobile' );?>
  