<?php

header("Content-type: text/javascript; charset: UTF-8");

$ideal_options           = ideal_get_theme_options();
$ideal_logo_transparent  = get_option( 'ideal_transparent_option' );

if(!empty($ideal_options['transparent-header']) && $ideal_options['transparent-header'] == true && !empty($ideal_options['switch-blog-header'] ) && $ideal_options['switch-blog-header'] = true ){
 
  echo '
    jQuery(document).ready(function($){
    if ($("body").hasClass("single-post")) {
      $(".ideal-nav").removeClass( "uk-light" ),
      $(".ideal-nav").removeClass( "uk-navbar-transparent" );
       }
      });
  ';

  }

   






   