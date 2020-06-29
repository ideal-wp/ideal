<?php $ideal_options = ideal_get_theme_options();
if ( empty($ideal_options['mobile-select-menu'])){
  $ideal_off_canvas = 'off-canvas';
}elseif( !empty($ideal_options['mobile-select-menu'])){
  $ideal_off_canvas = $ideal_options['mobile-select-menu'];
}

 if ( !empty($ideal_off_canvas) &&  $ideal_off_canvas == 'off-canvas') { ?>
<div class="uk-navbar-right uk-hidden@m">
  <a class="uk-navbar-toggle uk-hidden@m" uk-toggle="target: #offcanvas-overlay" uk-navbar-toggle-icon></a>
</div>
<?php }elseif ( !empty($ideal_options['mobile-select-menu']) &&  $ideal_options['mobile-select-menu'] == 'modal') { ?>
<div class="uk-navbar-right uk-hidden@m">
  <a class="uk-navbar-toggle uk-hidden@m" href="#ideal-nav-modal-full" uk-navbar-toggle-icon uk-toggle></a>
</div>
<?php }