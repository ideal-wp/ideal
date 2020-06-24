<?php
/**
 * Displays menu off-canvas layout.
 *
 * @package Ideal
 * @subpackage menu navigation
 * @since 1.0.0
 * @version 1.0.0
 */
$ideal_options = ideal_get_theme_options();
$flip = null;

if (!empty($ideal_options['mobile-o-c-modes'])) {

    $modes = $ideal_options['mobile-o-c-modes'];

    switch ($modes) {
        case 'slide':
            $modes = 'mode:slide';
            break;
        case 'push':
            $modes = 'mode: push';
            break;
        case 'reveal':
            $modes = 'mode: reveal';
            break;
        case 'none':
            $modes = null;
            break;

    }
} else {
    $modes = null;
}

if (! empty($ideal_options['mobile-o-c-flip']) && $ideal_options['mobile-o-c-flip'] == 'right') {

    $flip = '; flip: true';
}
// menu off-canvas layout
if (!empty($ideal_options['header-layout']) && $ideal_options['header-layout'] == '5') {

    ?>
<div class="m-at-offcanvas " id="offcanvas-overlay"
  uk-offcanvas=" mode: <?php echo $modes; ?>   <?php echo $flip; ?>; overlay: true; esc-close:true; bg-close:true;">
  <div id="m-t-offcanvas" class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" uk-close></button>
    <div class="ideal-mobile-menu" id="ideal-mobile-nav">
      <?php do_action('uikit_offcanvas_menu');?>
      <div>
      <?php dynamic_sidebar( 'Off Canvas' ); ?>
      </div>
    </div>
  </div>
</div>
<?php }
// mobile menu offcanvas
?>
<div class="m-at-offcanvas uk-hidden@m" id="offcanvas-overlay"
  uk-offcanvas="  <?php echo $modes; ?>  <?php echo $flip; ?>; overlay: true; esc-close:true; bg-close:true;">
  <div id="m-t-offcanvas" class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" uk-close></button>
    <div class="ideal-mobile-menu" id="ideal-mobile-nav">
      <?php do_action('uikit_offcanvas_menu');?>
      <div>
      <?php dynamic_sidebar( 'Off Canvas' ); ?>
      </div>
    </div>
  </div>
</div>