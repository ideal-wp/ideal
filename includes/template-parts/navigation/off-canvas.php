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
if (!empty($ideal_options['header-layout']) && $ideal_options['header-layout'] == '5' && !empty($ideal_options['mobile-select-menu']) &&  $ideal_options['mobile-select-menu'] == 'off-canvas') {
?>
<div class="m-at-offcanvas " id="offcanvas-overlay"
  uk-offcanvas=" mode: <?php echo $modes; ?>   <?php echo $flip; ?>; overlay: true; esc-close:true; bg-close:true;">
  <div id="m-t-offcanvas" class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" uk-close></button>
    <div class="ideal-mobile-menu" id="ideal-mobile-nav">
      <?php do_action('ideal_uikit_offcanvas_menu');?>
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
      <?php do_action('ideal_uikit_offcanvas_menu');?>
      <div>
        <?php dynamic_sidebar( 'Off Canvas' ); ?>
      </div>
    </div>
  </div>
</div>

<?php
 if (!empty($ideal_options['mobile-select-menu']) &&  $ideal_options['mobile-select-menu'] == 'modal') {
  ?>
<div id="ideal-nav-modal-full" class="uk-modal-full" uk-modal>
  <div class="uk-modal-dialog">
    <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
    <div class="uk-section" uk-height-viewport>
      <div class="uk-container uk-width-7-10 uk-text-center">
        <div class="uk-section-large">
          <div class="uk-container">
            <?php do_action('ideal_uikit_modal_menu');?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }