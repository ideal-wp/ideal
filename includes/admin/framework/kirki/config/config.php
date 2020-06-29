<?php
// Exit if accessed this directly
if (!defined('ABSPATH')) {
  exit;
}
if( class_exists('Kirki')){
    
  $ideal_config_id = 'ideal_theme';
  $ideal_opt_name  =  'ideal_options_control';

  add_filter( 'kirki_telemetry', '__return_false' );


  Kirki::add_config( $ideal_config_id, array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'option',
    'option_name'   => $ideal_opt_name ,
    //'disable_output' => true,
    
  ) );

  get_template_part( 'includes/admin/framework/kirki/config/panels/panel', 'general' );
  get_template_part( 'includes/admin/framework/kirki/config/panels/panel', 'menu' );
  get_template_part( 'includes/admin/framework/kirki/config/panels/panel', 'typography' );
  get_template_part( 'includes/admin/framework/kirki/config/panels/panel', 'header' );
  get_template_part( 'includes/admin/framework/kirki/config/panels/panel', 'sidebar' );
  get_template_part( 'includes/admin/framework/kirki/config/panels/panel', 'page' );
  get_template_part( 'includes/admin/framework/kirki/config/panels/panel', 'blog' );
  get_template_part( 'includes/admin/framework/kirki/config/panels/panel', 'hero' );


if(ideal_is_woocommerce_activated() == true){

  if ($woocommerce) {
    get_template_part( 'includes/admin/framework/kirki/config/panels/panel', 'woocommerce' );
  
  }
}


}

if(class_exists('Kirki')){
  function ideal_theme_remove_hero_options( $wp_customize ) {
    $wp_customize->remove_control('home-hero-bacgroundcolor');
    $wp_customize->remove_control('home-hero-background');
    $wp_customize->remove_control('home-hero-callout-display-control');

}
add_action( 'customize_register', 'ideal_theme_remove_hero_options' );
}


