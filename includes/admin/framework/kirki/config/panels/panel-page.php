<?php
/*
 *
 * panel Page
 *
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}

$ideal_config_id = 'ideal_theme';


Kirki::add_panel( 'page_settings_panel', array(
  'priority'       => 7,
  'title'          => esc_html__( 'Page Styling', 'ideal' ),
) );
//===================[ section Page settings ]===================
Kirki::add_section( 'page_settings_options', array(
  'title'          => esc_html__( 'Page Controls', 'ideal' ),
  'panel'          => 'page_settings_panel',
  'priority'       => 1,
) );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'slider',
	'settings'    => 'page-container-width',
	'label'       => esc_html__('Design your container will scale to a maximum width', 'ideal' ),
	'section'     => 'page_settings_options',
  'default'     => 1200,
  'priority'       => 2,
	'choices'     => [
		'min'  => 800,
		'max'  => 2000,
		'step' => 1,
	],
] );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'dimensions',
	'settings'    => 'page-padding-top-bottom',
	'label'       => esc_html__( 'Page Contant Padding' , 'ideal' ),
	'description' => esc_html__( 'top and bottom padding to page contant' , 'ideal' ),
	'section'     => 'page_settings_options',
	'default'     => [
		'padding-top'    => '70px',
		'padding-bottom' => '70px',
		
  ],
  'priority'       => 3,
] );

Kirki::add_field( $ideal_config_id , [
	'type'        => 'toggle',
	'settings'    => 'add-cards-page',
  'label'       => esc_html__( 'Cards Style' , 'ideal' ),
  'description' =>  esc_html__( 'Add cards style to Page Countant' , 'ideal' ),
	'section'     => 'page_settings_options',
	'default'     => false,
	'priority'    => 4,
] );