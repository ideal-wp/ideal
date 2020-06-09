<?php
/**
 * Displays menu navigation.
 *
 * @package Ideal
 * @subpackage menu navigation
 * @since 1.0.0
 * @version 1.0.0
 */


$ideal_options           = get_ideal_theme_options();
$is_transparent_header   = get_post_meta( get_the_ID(), 'is_header_trans', true );
$transparent_header      = null;
$mode                    = null;


if( !empty( $ideal_options['transparent-header'] ) ){

  $transparent_header  = $ideal_options['transparent-header'];

}

if( !empty( $ideal_options['select-header-mod'] ) ){

  $mode   = $ideal_options['select-header-mod'];

}

if ( ! empty( $is_transparent_header ) && $is_transparent_header == 'off' ){

  $transparent_header= 0 ;

}elseif( ! empty( $is_transparent_header ) && $is_transparent_header == 'on' ) {

  $transparent_header= 1 ;
}

// mobile & offcanvas options
if( !empty( $ideal_options['mobile-o-c-flip'] ) &&  $ideal_options['mobile-o-c-flip'] =='right' ){

  $flip = 'true';

}elseif( !empty( $ideal_options['mobile-o-c-flip'] ) &&  $ideal_options['mobile-o-c-flip'] =='left' ){

  $flip = 'false';
}

  // mobile & offcanvas options
require_once IDEAL_THEME_DIRECTORY .'/standard/dynamic-options/header-options.php';

if ( !empty($ideal_options['user-nav'])&& $ideal_options['user-nav'] == 1){require_once IDEAL_THEME_DIRECTORY .'/includes/partials/header/user-navbar.php';}

    ideal_hook_page_header_open();
    ideal_hook_before_header(); 
    
    ?>
      <div id="ideal-nav"
        class="ideal-nav uk-navbar-container <?php if( $transparent_header== 1 ) {echo 'uk-navbar-transparent ' . $mode ;}?>">
        <div class="uk-container uk-container-expand">
          <nav class="uk-navbar" id="ideal-nav-c" uk-navbar>
          <?php
             get_template_part( '/includes/partials/header/menu/menu', 'switch' );
          ?>
          </nav>
        </div>
      </div>
    <?php

     ideal_hook_after_header();
     ideal_hook_page_header_close(); ?>