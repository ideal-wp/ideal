<?php
/*
 *
 * panel Typography
 *
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}

$config_id = 'ideal_theme';


Kirki::add_panel( 'typography_settings', array(
  'priority'       => 3,
  'title'          => esc_html__( 'Typography', 'ideal' ),
) );

//===========[ section Typography genral Option ]=============

Kirki::add_section( 'genral_typography_settings', array(
  'title'          => esc_html__( 'General Typography', 'ideal' ),
  'description'    => esc_html__('This tab contains general typography options.', 'ideal'),
  'panel'          => 'typography_settings',
  'priority'       => 1,
) );

Kirki::add_field( $config_id, [
	'type'        => 'typography',
	'settings'    => 'ideal_body_font_family',
  'label'       => esc_html__( 'Body Font Family', 'ideal' ),
  'description'    => esc_html__('General Site font Setting', 'ideal'),
	'section'     => 'genral_typography_settings',
	'default'     => [
    'font-family'    => '',
		'variant'        => '',
		'font-size'      => '',
		'line-height'    => '',
		'letter-spacing' => '',
		'color'          => '',
		'text-transform' => '',
		'text-align'     => '',
	],
	'priority'    => 1,
	'transport'   => 'auto',
] );

//=============[ section Typography Heading Option]===============

Kirki::add_section( 'headers_typography_settings', array(
  'title'          => esc_html__( 'Headers Typography', 'ideal' ),
  'panel'          => 'typography_settings',
  'priority'       => 2,
) );

Kirki::add_field( $config_id, [
	'type'        => 'typography',
	'settings'    => 'ideal_h1_family',
	'label'       => esc_html__( 'Heading 1', 'ideal' ),
	'section'     => 'headers_typography_settings',
	'default'     => [
    'font-family'    => '',
		'variant'        => '',
		'font-size'      => '',
		'line-height'    => '',
		'letter-spacing' => '',
		'color'          => '',
		'text-transform' => '',
		'text-align'     => '',
	],
	'priority'    => 1,
	'transport'   => 'auto',
] );

Kirki::add_field( $config_id, [
	'type'        => 'typography',
	'settings'    => 'ideal_h2_family',
	'label'       => esc_html__( 'Heading 2', 'ideal' ),
	'section'     => 'headers_typography_settings',
	'default'     => [
    'font-family'    => '',
		'variant'        => '',
		'font-size'      => '',
		'line-height'    => '',
		'letter-spacing' => '',
		'color'          => '',
		'text-transform' => '',
		'text-align'     => '',
	],
	'priority'    => 2,
	'transport'   => 'auto',
] );

Kirki::add_field( $config_id, [
	'type'        => 'typography',
	'settings'    => 'ideal_h3_family',
	'label'       => esc_html__( 'Heading 3', 'ideal' ),
	'section'     => 'headers_typography_settings',
	'default'     =>[
    'font-family'    => '',
		'variant'        => '',
		'font-size'      => '',
		'line-height'    => '',
		'letter-spacing' => '',
		'color'          => '',
		'text-transform' => '',
		'text-align'     => '',
	],
	'priority'    => 3,
	'transport'   => 'auto',
] );



Kirki::add_field( $config_id, [
	'type'        => 'typography',
  'settings'    => 'ideal_h4_family',
  'transport'   => 'auto',
	'label'       => esc_html__( 'Heading 4', 'ideal' ),
	'section'     => 'headers_typography_settings',
	'default'     => [
    'font-family'    => '',
		'variant'        => '',
		'font-size'      => '',
		'line-height'    => '',
		'letter-spacing' => '',
		'color'          => '',
		'text-transform' => '',
		'text-align'     => '',
	],
	'priority'    => 4,
	'transport'   => 'auto',
] );


Kirki::add_field( $config_id, [
	'type'        => 'typography',
	'settings'    => 'ideal_h5_family',
	'label'       => esc_html__( 'Heading 5', 'ideal' ),
	'section'     => 'headers_typography_settings',
	'default'     => [
		'font-family'    => '',
		'variant'        => '',
		'font-size'      => '',
		'line-height'    => '',
		'letter-spacing' => '',
		'color'          => '',
		'text-transform' => '',
		'text-align'     => '',
	],
	'priority'    => 5,
	'transport'   => 'auto',
] );

Kirki::add_field( $config_id, [
	'type'        => 'typography',
	'settings'    => 'ideal_h6_family',
	'label'       => esc_html__( 'Heading 6', 'ideal' ),
	'section'     => 'headers_typography_settings',
	'default'     => [
    'font-family'    => '',
		'variant'        => '',
		'font-size'      => '',
		'line-height'    => '',
		'letter-spacing' => '',
		'color'          => '',
		'text-transform' => '',
		'text-align'     => '',
	],
	'priority'    => 6,
	'transport'   => 'auto',
] );
//==========[ section Responsivetypography Settings ]=============
Kirki::add_section( 'responsive_typography_settings', array(
  'title'          => esc_html__( 'Headers Responsive', 'ideal' ),
  'panel'          => 'typography_settings',
  'priority'       => 3,
) );

Kirki::add_field($config_id, [
	'type'        => 'slider',
	'settings'    => 'h1-small-desktop-font-size',
	'label'       => esc_html__('H1 Small Desktop', 'ideal'),
	'section'     => 'responsive_typography_settings',
	'default'     => 75,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'priority'       => 1,
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id , [
	'type'        => 'slider',
	'settings'    => 'h1-tablet-font-size',
	'label'       => esc_html__('H1 Small Desktop', 'ideal'),
	'section'     => 'responsive_typography_settings',
	'default'     => 70,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'priority'       => 2,
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id , [
	'type'        => 'slider',
	'settings'    => 'h1-phone-font-size',
	'label'       => esc_html__('H1 Phone', 'ideal'),
	'section'     => 'responsive_typography_settings',
	'default'     => 65,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'priority'       => 3,
  'transport'   => 'auto',
] );
//-----------------------------------------
Kirki::add_field( $config_id , [
	'type'        => 'slider',
	'settings'    => 'h2-small-desktop-font-size',
	'label'       => esc_html__('H2 Small Desktop', 'ideal'),
	'section'     => 'responsive_typography_settings',
	'default'     => 75,
	'choices'     => [
		'min'  => 0,
		'max'  => 90,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id , [
	'type'        => 'slider',
	'settings'    => 'h2-tablet-font-size',
	'label'       => esc_html__('H2 Small Desktop', 'ideal'),
	'section'     => 'responsive_typography_settings',
	'default'     => 80,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id , [
	'type'        => 'slider',
	'settings'    => 'h2-phone-font-size',
	'label'       => esc_html__('H2 Phone', 'ideal'),
	'section'     => 'responsive_typography_settings',
	'default'     => 70,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );
//-----------------------------------------

Kirki::add_field( $config_id , [
	'type'        => 'slider',
	'settings'    => 'h3-small-desktop-font-size',
	'label'       => esc_html__('h3 Small Desktop', 'ideal'),
	'section'     => 'responsive_typography_settings',
	'default'     => 95,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id , [
	'type'        => 'slider',
	'settings'    => 'h3-tablet-font-size',
	'label'       => esc_html__('h3 Small Desktop', 'ideal'),
	'section'     => 'responsive_typography_settings',
	'default'     => 70,
	'choices'     => [
		'min'  => 0,
		'max'  => 85,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id , [
	'type'        => 'slider',
	'settings'    => 'h3-phone-font-size',
	'label'       => esc_html__('h3 Phone', 'ideal'),
	'section'     => 'responsive_typography_settings',
	'default'     => 75,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );
//-----------------------------------------

Kirki::add_field( $config_id , [
	'type'        => 'slider',
	'settings'    => 'h4-small-desktop-font-size',
	'label'       => esc_html__('h4 Small Desktop', 'ideal'),
	'section'     => 'responsive_typography_settings',
	'default'     => 100,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id , [
	'type'        => 'slider',
	'settings'    => 'h4-tablet-font-size',
	'label'       => esc_html__('h4 Small Desktop', 'ideal'),
	'section'     => 'responsive_typography_settings',
	'default'     => 80,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id , [
	'type'        => 'slider',
	'settings'    => 'h4-phone-font-size',
	'label'       => esc_html__('h4 Phone', 'ideal'),
	'section'     => 'responsive_typography_settings',
	'default'     => 85,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );
//-----------------------------------------

Kirki::add_field( $config_id , [
	'type'        => 'slider',
	'settings'    => 'h5-small-desktop-font-size',
	'label'       => esc_html__('h5 Small Desktop', 'ideal'),
	'section'     => 'responsive_typography_settings',
	'default'     => 100,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id , [
	'type'        => 'slider',
	'settings'    => 'h5-tablet-font-size',
	'label'       => esc_html__('h5 Small Desktop', 'ideal'),
	'section'     => 'responsive_typography_settings',
	'default'     => 100,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id , [
	'type'        => 'slider',
	'settings'    => 'h5-phone-font-size',
	'label'       => esc_html__('h5 Phone', 'ideal'),
	'section'     => 'responsive_typography_settings',
	'default'     => 90,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );
//-----------------------------------------

Kirki::add_field( $config_id , [
	'type'        => 'slider',
	'settings'    => 'h6-small-desktop-font-size',
	'label'       => esc_html__('h6 Small Desktop', 'ideal'),
	'section'     => 'responsive_typography_settings',
	'default'     => 100,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id , [
	'type'        => 'slider',
	'settings'    => 'h6-tablet-font-size',
	'label'       => esc_html__('h6 Small Desktop', 'ideal'),
	'section'     => 'responsive_typography_settings',
	'default'     => 100,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id , [
	'type'        => 'slider',
	'settings'    => 'h6-phone-font-size',
	'label'       => esc_html__('h6 Phone', 'ideal'),
	'section'     => 'responsive_typography_settings',
	'default'     => 100,
	'choices'     => [
		'min'  => 0,
		'max'  => 95,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );
//-----------------------------------------