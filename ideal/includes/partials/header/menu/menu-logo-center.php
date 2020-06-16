<?php

?>
<div class="uk-navbar-left uk-hidden@l">
  <div class="ideal-Logo">
    <?php get_template_part( '/includes/partials/header/menu/menu', 'logo' );?>
  </div>
</div>
<div class="uk-navbar-center uk-visible@s uk-visible@m">
  <div class="uk-navbar-nav">
    <?php do_action('uikit_top_menu'); ?>
  </div>
  <div class="ideal-Logo">
    <?php get_template_part( '/includes/partials/header/menu/menu', 'logo' );?>
  </div>
  <div class="uk-navbar-nav ">
    <?php do_action('uikit_top_menu'); ?>
  </div>
</div>
<?php get_template_part( '/includes/partials/header/menu/menu', 'mobile' );?>