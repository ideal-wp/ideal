<?php
require_once IDEAL_THEME_DIRECTORY . '/includes/partials/page-header/breadcrumb.php';
?>

<div class=" ideal-page-header uk-section-primary uk-section">
  <div class="uk-container">
    <h2><?php echo esc_html( get_the_title() ); ?></h2>
    <?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}else {?>
  <div class="breadcrumb"><?php get_breadcrumb(); ?></div><?php
}
?>

  </div>
</div>