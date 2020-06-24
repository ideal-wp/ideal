<?php
/**
 * Displays menu navigation.
 *
 * @package Ideal
 * @subpackage menu navigation
 * @since 1.0.0
 * @version 1.0.0
 */


$ideal_options           = ideal_get_theme_options();
$ideal_is_transparent_header   = get_post_meta( get_the_ID(), 'is_header_trans', true );
$ideal_transparent_header      = null;
$mode                    = null;


if( !empty( $ideal_options['transparent-header'] ) ){

  $ideal_transparent_header  = $ideal_options['transparent-header'];

}

if( !empty( $ideal_options['select-header-mod'] ) ){

  $mode   = $ideal_options['select-header-mod'];

}

if ( ! empty( $ideal_is_transparent_header ) && $ideal_is_transparent_header == 'off' ){

  $ideal_transparent_header= false ;

}elseif( ! empty( $ideal_is_transparent_header ) && $ideal_is_transparent_header == 'on' ) {

  $ideal_transparent_header= true;
}

// mobile & offcanvas options
if( !empty( $ideal_options['mobile-o-c-flip'] ) &&  $ideal_options['mobile-o-c-flip'] =='right' ){

  $flip = 'true';

}elseif( !empty( $ideal_options['mobile-o-c-flip'] ) &&  $ideal_options['mobile-o-c-flip'] =='left' ){

  $flip = 'false';
}

  // mobile & offcanvas options
require_once IDEAL_THEME_DIRECTORY .'/standard/dynamic-options/header-options.php';

if ( !empty($ideal_options['user-nav'])&& $ideal_options['user-nav'] == true){require_once IDEAL_THEME_DIRECTORY .'/includes/partials/header/user-navbar.php';}

    ideal_hook_page_header_open();
    ideal_hook_before_header(); 
    
    ?>
      <div id="ideal-nav"
        class="ideal-nav uk-navbar-container <?php if( $ideal_transparent_header== true ) {echo 'uk-navbar-transparent ' . $mode ;}?>">
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