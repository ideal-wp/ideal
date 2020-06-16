<?php

if( class_exists('Kirki')){
    
  $config_id = 'ideal_theme';
  $opt_name  =  'ideal_options_control';

  add_filter( 'kirki_telemetry', '__return_false' );


  Kirki::add_config( $config_id, array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'option',
    'option_name'   => $opt_name ,
    'disable_output' => true,
    
  ) );

  get_template_part( 'includes/admin/framework/kirki/config/panels/panel', 'general' );
  get_template_part( 'includes/admin/framework/kirki/config/panels/panel', 'menu' );
  get_template_part( 'includes/admin/framework/kirki/config/panels/panel', 'typography' );
  get_template_part( 'includes/admin/framework/kirki/config/panels/panel', 'header' );
  get_template_part( 'includes/admin/framework/kirki/config/panels/panel', 'sidebar' );
  get_template_part( 'includes/admin/framework/kirki/config/panels/panel', 'page' );
  get_template_part( 'includes/admin/framework/kirki/config/panels/panel', 'blog' );

}