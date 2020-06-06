<?php
/**
 * Displays the head section of the theme
 *
 * @package Ideal
 * @subpackage Header Frontend
 * @since 1.0.0
 * @version 1.0.0
 */
$ideal_options           = get_ideal_theme_options();
$is_transparent_header   = get_post_meta( get_the_ID(), 'is_header_trans', true );
$transparent_header      = $ideal_options['transparent-header'];
$mode                    = $ideal_options['select-header-mod'];

if ( $is_transparent_header == 'off' ){
  $transparent_header= 0 ;
}elseif( $is_transparent_header == 'on' ) {
  $transparent_header= 1 ;
}
// mobile & offcanvas options
if( $ideal_options['mobile-o-c-flip'] =='right'){
  $flip = 'true';
}elseif( $ideal_options['mobile-o-c-flip'] =='left'){
  $flip = 'false';
}
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
    
  }// mobile & offcanvas options
require_once IDEAL_THEME_DIRECTORY .'/standard/dynamic-options/header-options.php';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
  <header>
    <?php if ($ideal_options['user-nav'] == 1){require_once IDEAL_THEME_DIRECTORY .'/includes/partials/header/user-navbar.php';}?>
    <?php ideal_hook_page_header_open();
    ideal_hook_before_header(); ?>
    <div id="ideal-nav"
      class="ideal-nav uk-navbar-container <?php if( $transparent_header== 1 ) {echo 'uk-navbar-transparent ' . $mode ;}?>">
      <div class="uk-container uk-container-expand">
        <nav class="uk-navbar" id="ideal-nav-c" uk-navbar>
          <?php get_template_part( '/includes/partials/header/menu/menu', 'switch' );
          ?>
        </nav>
      </div>
    </div>
    <?php ideal_hook_after_header();
    ideal_hook_page_header_close(); ?>
  </header>
  <?php
    // menu off-canvas layput
    if ( $ideal_options['header-layout'] == '5' ){?>
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