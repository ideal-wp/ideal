<?php
/*
 *
 * PANEL add fildes to hero section
 *
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
  exit;
}

$ideal_config_id = 'ideal_theme';

Kirki::add_field( $ideal_config_id, [
	'type'        => 'toggle',
	'settings'    => 'hero_select_en',
	'label'       => esc_html__( 'Disable Home Hero Section', 'ideal' ),
	'section'     => 'home_hero_callout_section',
	'default'     => false,
	'priority'    => 1,
] );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'toggle',
	'settings'    => 'blog_hero_en',
	'label'       => esc_html__( 'Disable Home Hero Section on Blog Home', 'ideal' ),
	'section'     => 'home_hero_callout_section',
	'default'     => false,
	'priority'    => 1,
] );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'toggle',
	'settings'    => 'fornt_hero_select_en',
	'label'       => esc_html__( 'Disable Home Hero Section on Front Page', 'ideal' ),
	'section'     => 'home_hero_callout_section',
	'default'     => false,
	'priority'    => 1,
] );





Kirki::add_field( $ideal_config_id , [
	'type'        => 'color',
	'settings'    => 'hero_overlay_color',
	'label'       => esc_html__( 'Chose your Hero section overlay color' , 'ideal' ),
  'section'     => 'home_hero_callout_section',
  'default'     => '',
	'choices'     => [
		'alpha' => true,
  ],
  'priority'    => 7,
] );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'background',
	'settings'    => 'hero_section_background_setting',
	'label'       => esc_html__( 'Hero Section Background Control', 'ideal' ),
  'section'     => 'home_hero_callout_section',
  'priority'    => 6,
	'default'     => [
		'background-color'      => '#1446ce',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
  ],

	
] );