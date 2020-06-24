<?php
/*
 *
 * PANEL Woocommerce
 *
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}

$ideal_config_id = 'ideal_theme';


Kirki::add_panel( 'ideal_woocommerce_option', array(
  'priority'       => 6,
  'title'          => esc_html__( 'Ideal Woocommerce', 'ideal' ),
) );

//===========[ Shop Header ]=============

Kirki::add_section( 'shop_header_settings', array(
  'title'          => esc_html__( 'shop Header', 'ideal' ),
  'description'    => esc_html__('Global Woocommerce Shop Header', 'ideal'),
  'panel'          => 'ideal_woocommerce_option',
  'priority'       => 1,
) );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'background',
	'settings'    => 'sshop-header-bg',
	'label'       => esc_html__( 'Chose Shop Header Background Options' , 'ideal' ),
	'description' => esc_html__( 'Choose and adjust the settings as appropriate for your Shop Header' , 'ideal' ),
	'section'     => 'shop_header_settings',
	'default'     => [
		'background-color'      => '#eee',
		'background-image'      => '',
		'background-repeat'     => '',
		'background-position'   => '',
		'background-size'       => '',
		'background-attachment' => '',
	],
	'output'      => [
		[
			'element' => '#woo-archives-page-header',
		],
	],
  
  'priority'    => 1,
] );

Kirki::add_field( $ideal_config_id , [
	'type'        => 'color',
	'settings'    => 'shop-color-rgba-header-overlay',
	'label'       => esc_html__( 'Shop Header overlay Color' , 'ideal' ),
  'section'     => 'shop_header_settings',
  'default'     => '',
	'choices'     => [
		'alpha' => true,
  ],
	'priority'    => 2,
	'output'      => [
		[
			'element' => '#woo-archives-header-overlay',
			'property'    => 'background-color',
		],
	],
] );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'dimensions',
	'settings'    => 'shop-header-hight',
	'label'       => esc_html__( 'shop Header Padding' , 'ideal' ),
	'description' => esc_html__( 'Choose and adjust the default shop header padding Top & Bottom' , 'ideal' ),
	'section'     => 'shop_header_settings',
	'default'     => [
		'padding-top'  => '70px',
		'padding-bottom' => '70px',
  ],
	'priority'    => 3,
	'output'      => [
		[
			'element' => '.woo-archives-wrap-header ',
		],
	],
] );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'typography',
	'settings'    => 'shop_header_font_h',
  'label'       => esc_html__('Shop title Font option', 'ideal'),
	'section'     => 'shop_header_settings',
	'default'     => [
    'font-family'    => '',
		'variant'        => '',
		'font-size'      => '',
		'line-height'    => '',
		'letter-spacing' => '',
		'color'          => '#000',
		'text-transform' => '',
		'text-align'     => '',
	],
	'priority'    => 4,
	'output'      => [
		[
			'element' => '.woocommerce-products-header h1',
		],
	],

] );


Kirki::add_field( $ideal_config_id, [
	'type'        => 'typography',
	'settings'    => 'shop_header_font_desc',
  'label'       => esc_html__('Shop Header Description Font Options', 'ideal'),
	'section'     => 'shop_header_settings',
	'default'     => [
    'font-family'    => '',
		'variant'        => '',
		'font-size'      => '',
		'line-height'    => '',
		'letter-spacing' => '',
		'color'          => '#000',
		'text-transform' => '',
		'text-align'     => '',
	],
	'priority'    => 5,
	'output'      => [
		[
			'element' => '.woocommerce-products-header p',
		],
	],

] );


