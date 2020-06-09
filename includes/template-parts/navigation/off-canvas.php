<?php
/**
 * Displays menu off-canvas layout.
 *
 * @package Ideal
 * @subpackage menu navigation
 * @since 1.0.0
 * @version 1.0.0
 */
$ideal_options           = get_ideal_theme_options();

if( ! empty($ideal_options['mobile-o-c-modes'])){

  $modes = $ideal_options['mobile-o-c-modes'];

  switch ($modes) {
    case 'slide':
      $modes = 'slide';
      break;
    case 'push':
      $modes = 'push';
          break;   
    case 'reveal':
      $modes = 'reveal';
          break; 
    case 'none':
      $modes = 'none';
          break; 
    
  }
}

// menu off-canvas layout
if ( !empty( $ideal_options['header-layout'] ) && $ideal_options['header-layout'] == '5' ){
  
?>
<div class="m-at-offcanvas " id="offcanvas-overlay"
  uk-offcanvas=" mode: <?php echo $modes;?> ; flip: <?php echo $flip;?>; overlay: true; esc-close:true; bg-close:true;">
  <div id="m-t-offcanvas" class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" uk-close></button>
    <div class="ideal-mobile-menu" id="ideal-mobile-nav">
      <?php do_action('uikit_offcanvas_menu'); ?>
      <div>
        <p>some text here lock</p>
      </div>
    </div>
  </div>
</div>
<?php } 
// mobile menu offcanvas
?>
<div class="m-at-offcanvas uk-hidden@m" id="offcanvas-overlay"
  uk-offcanvas=" mode: <?php echo $modes;?> ; flip: <?php echo $flip;?>; overlay: true; esc-close:true; bg-close:true;">
  <div id="m-t-offcanvas" class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" uk-close></button>
    <div class="ideal-mobile-menu" id="ideal-mobile-nav">
      <?php do_action('uikit_offcanvas_menu'); ?>
      <div>
        <p>some text here lock</p>
      </div>
    </div>
  </div>
</div>