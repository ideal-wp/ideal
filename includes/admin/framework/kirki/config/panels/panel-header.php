<?php
/*
 *
 * PANEL PAGE HEADER OPTIONS
 *
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}

$ideal_config_id = 'ideal_theme';


Kirki::add_panel( 'page_header', array(
  'priority'       => 5,
  'title'          => esc_html__( 'Pages Header', 'ideal' ),
) );

//===========[ section Page Header ]=============
Kirki::add_section( 'page_header_settings', array(
  'title'          => esc_html__( 'Page Header', 'ideal' ),
  'description'    => esc_html__('Global Page Header Options', 'ideal'),
  'panel'          => 'page_header',
  'priority'       => 1,
) );

//===========[ section single post  Header Settings ]=============

Kirki::add_section( 'single_header_settings', array(
  'title'          => esc_html__( 'Single Post', 'ideal' ),
  'description'    => esc_html__('Global Single Post Header Options', 'ideal'),
  'panel'          => 'page_header',
  'priority'       => 2,
) );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'toggle',
	'settings'    => 'switch-blog-header',
  'label'       => esc_html__( 'Disable Blog Header ' , 'ideal' ),
  'description' => esc_html__( ' This Option will Remove Blog Page Header' , 'ideal' ),
	'section'     => 'single_header_settings',
	'default'     => '',
	'priority'    => 1,
] );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'toggle',
	'settings'    => 'switch-to-background',
  'label'       => esc_html__( ' Header Background ' , 'ideal' ),
  'description' => esc_html__( 'if you enable it will write overall blog post header background' , 'ideal' ),
	'section'     => 'single_header_settings',
	'default'     => '',
	'priority'    => 2,
] );


Kirki::add_field( $ideal_config_id, [
	'type'        => 'background',
	'settings'    => 's-post-header-bg',
	'label'       => esc_html__( 'Chose Background' , 'ideal' ),
	'description' => esc_html__( 'Choose and adjust the settings as appropriate for you' , 'ideal' ),
	'section'     => 'single_header_settings',
	'default'     => [
		'background-color'      => '',
		'background-image'      => '',
		'background-repeat'     => '',
		'background-position'   => '',
		'background-size'       => '',
		'background-attachment' => '',
	],
	'transport'   => 'auto',
  'active_callback' => function() {
    $current_options        = get_option('ideal_options_control');
    $checkbox_value = $current_options['switch-to-background']  ;

    if ( $checkbox_value == true ) {
      return true;
    }
    return false;
  },
  'priority'    => 3,
] );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'dimensions',
	'settings'    => 'post-header-hight',
	'label'       => esc_html__( 'Blog Header Padding' , 'ideal' ),
	'description' => esc_html__( 'Add and adjust the default Blog header padding Top & Bottom' , 'ideal' ),
	'section'     => 'single_header_settings',
	'default'     => [
		'padding-top'  => '',
		'padding-bottom' => '',
  ],
  'priority'    => 4,
] );


Kirki::add_field( $ideal_config_id, [
	'type'        => 'toggle',
	'settings'    => 'post-img-background',
  'label'       => esc_html__( ' Featured images Header Background ' , 'ideal' ),
  'description' => esc_html__( 'if you enable it will add post featured image as background' , 'ideal' ),
	'section'     => 'single_header_settings',
	'default'     => '',
	'priority'    => 5,
] );

Kirki::add_field( $ideal_config_id , [
	'type'        => 'color',
	'settings'    => 'blog-color-rgba-header-overlay',
	'label'       => esc_html__( 'Blog Header overlay Color' , 'ideal' ),
  'section'     => 'single_header_settings',
  'default'     => '',
	'choices'     => [
		'alpha' => true,
  ],
  'priority'    => 6,
] );

Kirki::add_field( $ideal_config_id , [
	'type'        => 'color',
	'settings'    => 'header-text-color',
	'label'       => esc_html__('Blog Header general Text Color', 'ideal'),
	'section'     => 'single_header_settings',
  'default'     => '',
  'priority'    => 7,
] );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'typography',
	'settings'    => 'blog-header-font',
  'label'       => esc_html__('Post title Font option', 'ideal'),
	'section'     => 'single_header_settings',
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
	'priority'    => 8,
	'output'      => [
		[
			'element' => '.entry-title',
		
		],
	],




] );
//===========[ section Archives Page Header Settings ]=============
Kirki::add_section( 'archives_header_settings', array(
  'title'          => esc_html__( 'Archives Header', 'ideal' ),
  'description'    => esc_html__('Global Archives Header Options', 'ideal'),
  'panel'          => 'page_header',
  'priority'       => 3,
) );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'toggle',
	'settings'    => 'id-archives-switch-header',
  'label'       => esc_html__( 'Disable Archives Page Header ' , 'ideal' ),
	'section'     => 'archives_header_settings',
	'default'     => '',
	'priority'    => 1,
] );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'background',
	'settings'    => 'archives-header-bg',
	'label'       => esc_html__( 'Chose Background' , 'ideal' ),
	'description' => esc_html__( 'Choose and adjust the settings as appropriate for you' , 'ideal' ),
	'section'     => 'archives_header_settings',
	'default'     => [
		'background-color'      => '#eee',
		'background-image'      => '',
		'background-repeat'     => '',
		'background-position'   => '',
		'background-size'       => '',
		'background-attachment' => '',
	],
	'transport'   => 'auto',
  'priority'    => 2,
] );

Kirki::add_field( $ideal_config_id , [
	'type'        => 'color',
	'settings'    => 'archives-color-rgba-header-overlay',
	'label'       => esc_html__( 'Archives Header overlay Color' , 'ideal' ),
  'section'     => 'archives_header_settings',
  'default'     => '',
	'choices'     => [
		'alpha' => true,
  ],
  'priority'    => 3,
] );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'dimensions',
	'settings'    => 'archives-header-hight',
	'label'       => esc_html__( 'Archives Header Padding' , 'ideal' ),
	'description' => esc_html__( 'Choose and adjust the default Archives header padding Top & Bottom' , 'ideal' ),
	'section'     => 'archives_header_settings',
	'default'     => [
		'padding-top'  => '70px',
		'padding-bottom' => '70px',
  ],
  'priority'    => 4,
] );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'typography',
	'settings'    => 'archives-header-font',
  'label'       => esc_html__('Archives title Font option', 'ideal'),
	'section'     => 'archives_header_settings',
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
	'transport'   => 'auto',
] );

Kirki::add_field( $ideal_config_id , [
	'type'        => 'color',
	'settings'    => 'ar-header-text-color',
	'label'       => esc_html__('Archives Header general Text Color', 'ideal'), 
  'section'     => 'archives_header_settings',
  'default'     => '#000',
  'priority'    => 6,
] );

//===========[ section  Page Header Settings ]=============

Kirki::add_section( 'pages_header_settings', array(
  'title'          => esc_html__( 'Pages Header', 'ideal' ),
  'description'    => esc_html__('Global Pages Header Options', 'ideal'),
  'panel'          => 'page_header',
  'priority'       => 3,
) );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'toggle',
	'settings'    => 'id-pages-switch-header',
  'label'       => esc_html__( 'Disable pages Page Header ' , 'ideal' ),
	'section'     => 'pages_header_settings',
	'default'     => '',
	'priority'    => 1,
] );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'background',
	'settings'    => 'pages-header-bg',
	'label'       => esc_html__( 'Chose Background' , 'ideal' ),
	'description' => esc_html__( 'Choose and adjust the settings as appropriate for you' , 'ideal' ),
	'section'     => 'pages_header_settings',
	'default'     => [
		'background-color'      => '#eee',
		'background-image'      => '',
		'background-repeat'     => '',
		'background-position'   => '',
		'background-size'       => '',
		'background-attachment' => '',
	],
	'transport'   => 'auto',
	'priority'    => 2,
	'output'      => [
		[
			'element' => '#ideal-pages-header',
		
		],
	],
] );

Kirki::add_field( $ideal_config_id , [
	'type'        => 'color',
	'settings'    => 'archives-color-rgba-header-overlay',
	'label'       => esc_html__( 'Pages Header overlay Color' , 'ideal' ),
  'section'     => 'pages_header_settings',
  'default'     => '',
	'choices'     => [
		'alpha' => true,
  ],
	'priority'    => 3,
	'output'      => [
		[
			'element' => '#ideal-pages-header-overlay',
			'property'    => 'background-color',
		],
	],
] );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'dimensions',
	'settings'    => 'pages-header-hight',
	'label'       => esc_html__( 'Pages Header Padding' , 'ideal' ),
	'description' => esc_html__( 'Choose and adjust the default Pages header padding Top & Bottom' , 'ideal' ),
	'section'     => 'pages_header_settings',
	'default'     => [
		'padding-top'  => '',
		'padding-bottom' => '',
  ],
	'priority'    => 4,
	'output'      => [
		[
			'element' => '.pages-wrap-header',
		],
	],
] );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'typography',
	'settings'    => 'pages-header-font',
  'label'       => esc_html__('Pages title Font option', 'ideal'),
	'section'     => 'pages_header_settings',
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
			'element' => '#pages-entry-title.ar-entry-title h1',
		],
	],

] );

Kirki::add_field( $ideal_config_id, [
	'type'        => 'typography',
	'settings'    => 'ar_header_pages_text_ge',
  'label'       => esc_html__('Pages Header general Text', 'ideal'),
	'section'     => 'pages_header_settings',
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
	'priority'    => 6,
	'output'      => [
		[
			'element' => '.id-header-pages-inner-wrap,.id-header-pages-inner-wrap a,#ideal-pages-header.uk-section-primary:not(.uk-preserve-color) a',
		],
	],

] );