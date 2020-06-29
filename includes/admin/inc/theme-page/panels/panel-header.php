<?php
// Exit if accessed this directly
if (!defined('ABSPATH')) {
  exit;
}
$admin_logo = IDEAL_THEME_DIR_URI . '/includes/admin/assets/img/ideallogo.png';
?>

<div class="ideal-admin-wrap wrap">
  <div class="ideal-admin-header">
    <nav class="uk-navbar-container uk-margin" uk-navbar>
      <div class="uk-navbar-left ideal-logo-admin">
        <a class="uk-navbar-item uk-logo" href="#">
          <img class="ideal-admin-Logoo" src="<?php echo esc_url($admin_logo); ?>" style=" height:22px;"
            ?><span>Ideal</span> </a>
      </div>
      <div class="uk-navbar-right ideal-admi-header-right">
        <ul class="uk-navbar-nav">
          <li>
            <span class="uk-navbar-item idea">
            <span class="seedling"><i class="fas fa-seedling"></i></span>
            <?php esc_html_e( 'Ideal is an idea born in 2020 and grows up', 'ideal') ?>
          </span></li>
          <li><a uk-tooltip="title: <?php esc_html_e( 'Visit the theme page on Github', 'ideal') ?>; pos: bottom" href="https://github.com/ideal-theme" class="uk-navbar-item" ><i class="fab fa-github"></i></a></li>
          </ul>
      </div>
    </nav>
  </div>
</div>