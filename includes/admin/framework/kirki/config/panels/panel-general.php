<?php
/*
 *
 * panel General Settings
 *
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}
$config_id = 'ideal_theme';


Kirki::add_panel( 'general_settings_panel', array(
  'priority'    => 1,
  'title'       => esc_html__( 'General Settings', 'ideal' ),
) );

Kirki::add_section( 'general_settings_new', array(
  'title'          => esc_html__( 'General Settings', 'ideal' ),
  'description'    => esc_html__( 'Welcome to the Ideal options panel! You can switch between option sections.', 'ideal' ),
  'panel'          => 'general_settings_panel',
  'priority'       => 1,
  'transport'   => 'auto',
) );
Kirki::add_field( $config_id , [
	'type'        => 'color',
	'settings'    => 'body_b_color',
	'label'       => esc_html__( 'General background color', 'ideal' ),
	'description' => esc_html__( 'Pick a background color for the theme', 'ideal' ),
	'section'     => 'general_settings_new',
  'default'     => '',
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id , [
	'type'        => 'color',
	'settings'    => 'body_f_color',
	'label'       => esc_html__( 'General Font Color', 'ideal' ),
	'description' => esc_html__( 'Choose the general font color for the site', 'ideal' ),
  'section'     => 'general_settings_new',
  'transport'   => 'auto',
	'default'     => '',
] );
//=================[ section General Color]=============
Kirki::add_section( 'general_settings_color', array(
  'title'          => esc_html__( 'General Color', 'ideal' ),
  'panel'          => 'general_settings_panel',
  'transport'   => 'auto',
  'priority'       => 2,
) );
Kirki::add_field( $config_id , [
	'type'        => 'color',
	'settings'    => 'id_primary_color',
	'label'       => esc_html__( 'Primary Color', 'ideal' ),
	'description' => esc_html__( 'Choose the Primary Color for the site', 'ideal' ),
	'section'     => 'general_settings_color',
  'default'     => '',
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id , [
	'type'        => 'color',
	'settings'    => 'id_secondary_color',
	'label'       => esc_html__( 'Secondary Color', 'ideal' ),
	'description' => esc_html__( 'Choose the Secondary Color for the site', 'ideal' ),
	'section'     => 'general_settings_color',
  'default'     => '',
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id , [
	'type'        => 'color',
	'settings'    => 'id_sub_additional_color',
	'label'       => esc_html__( 'Sub Additional Color', 'ideal' ),
	'description' => esc_html__( 'Applicable theme items will have an option to choose this as color.', 'ideal' ),
	'section'     => 'general_settings_color',
  'default'     => '',
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id , [
	'type'        => 'color',
	'settings'    => 'id_sub_plus_color',
	'label'       => esc_html__( 'Sub Additional Color #2', 'ideal' ),
	'description' => esc_html__( 'Applicable theme items will have an option to choose this as color.', 'ideal' ),
	'section'     => 'general_settings_color',
  'default'     => '',
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id, [
  'type'        => 'multicolor',
  'settings'    => 'id-color-gradient',
  'label'       => esc_html__('Color Gradient', 'ideal'),
'description'   => esc_html__('Applicable theme elements will have the option to choose this as a color (i.e. buttons, icons etc..)', 'ideal'),
  'section'     => 'general_settings_color',
  'priority'    => 10,
  'alpha'   => false,
  'choices'     => [
      'from'    => esc_html__( 'from', 'ideal' ),
      'to'      => esc_html__( 'to', 'ideal' ),
      
  ],
  'default'     => [
      'from'    => '',
      'to'   => '',
      
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id, [
  'type'        => 'multicolor',
  'settings'    => 'id-sub-color-gradient',
  'label'       => esc_html__('Sub Color Gradient', 'ideal'),
  'description' => esc_html__('Applicable theme elements will have the option to choose this as a color (i.e. buttons, icons etc..)', 'ideal'),
  'section'     => 'general_settings_color',
  'priority'    => 10,
  'alpha'   => false,
  'choices'     => [
      'from'    => esc_html__( 'from', 'ideal' ),
      'to'      => esc_html__( 'to', 'ideal' ),
      
  ],
  'default'     => [
          'from'    => '',
          'to'      => '',
      
  ],
  'transport'   => 'auto',
] );
//=============[ section More Extra Setting ]================
Kirki::add_section( 'extra_settings_control', array(
  'title'          => esc_html__( 'Extra Setting', 'ideal' ),
  'description' => esc_html__('More Extra Setting & Functionality.', 'ideal'),
  'panel'          => 'general_settings_panel',
  'priority'       => 3,
) );

Kirki::add_field( $config_id, [
	'type'        => 'switch',
	'settings'    => 'switch_setting',
	'label'       => esc_html__( 'This is the label', 'ideal' ),
	'section'     => 'extra_settings_control',
	'default'     => '',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'ideal' ),
		'off' => esc_html__( 'Disable', 'ideal' ),
  ],
  'transport'   => 'auto',
] );
//=================[ subsection Code Insert ]===============
Kirki::add_section( 'code_insert_control', array(
  'title'          => esc_html__( 'Code Insert', 'ideal' ),
  'description' => esc_html__('Here you Can add and insert CSS / Js code.', 'ideal'),
  'panel'          => 'general_settings_panel',
  'priority'       => 4,
  'transport'   => 'auto',
) );

Kirki::add_field( $config_id, [
	'type'        => 'code',
	'settings'    => 'code_html_editor',
	'label'       => esc_html__('HTML Code', 'ideal'),
	'description' => esc_html__('Insert custom HTML Code inside head tag if you would like added to the site Head', 'ideal'),
	'section'     => 'code_insert_control',
	'default'     => '',
	'choices'     => [
		'language' => 'HTML',
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id, [
	'type'        => 'code',
	'settings'    => 'code_css_editor',
	'label'       => esc_html__('CSS Code', 'ideal'),
	'description' => esc_html__('Insert custom CSS you would like added to the site', 'ideal'),
	'section'     => 'code_insert_control',
	'default'     => '',
	'choices'     => [
		'language' => 'CSS',
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id, [
	'type'        => 'code',
	'settings'    => 'code_js_editor',
	'label'       => esc_html__('Js Code', 'ideal'),
	'description' => esc_html__('Insert custom Js you would like added to the site', 'ideal'),
	'section'     => 'code_insert_control',
	'default'     => '',
	'choices'     => [
		'language' => 'JS',
  ],
  'transport'   => 'auto',
] );
//================[ section Advanced setting ]======

Kirki::add_section( 'advanced_settings_control', array(
  'title'          => esc_html__('Advanced', 'ideal'),
  'description' => esc_html__('Advanced setting and control with security.', 'ideal'),
  'panel'          => 'general_settings_panel',
  'priority'       => 5,
  'transport'   => 'auto',
) );

Kirki::add_field( $config_id, [
	'type'        => 'radio-buttonset',
	'settings'    => 'style-dynamic-load',
  'label'       => esc_html__('Dynamic Style', 'ideal'),
  'description' => esc_html__('choose how the theme will load the dynamic style Ideal theme offers 3 way for loading dynamic style,
            Inline: output directly inline within the HTML head. This option is useful for preventing caching of the styles.
            WP ajax: theme will load the dynamic style by wp ajax. Write file: Writes the dynamic CSS into a file using WP-filesystem.', 'ideal'),
	'section'     => 'advanced_settings_control',
	'default'     => '',
	'priority'    => 1,
	'choices'     => [
    
		'1'   => esc_html__( 'Inline', 'ideal' ),
		'2'   => esc_html__( 'WP ajax', 'ideal' ),
		'3'  => esc_html__( 'Write file', 'ideal' ),
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id, [
	'type'        => 'switch',
	'settings'    => 'shutdown-dynamic-file',
  'label'       => esc_html__( 'Stop Write the file', 'ideal' ),
  'description' => esc_html__('this will chutdown writing the file any more swich it to on if you finsh design the theme', 'ideal'),
	'section'     => 'advanced_settings_control',
	'default'     => 0,
	'priority'    => 4,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'ideal' ),
		'off' => esc_html__( 'Disable', 'ideal' ),
  ],
  'transport'   => 'auto',
  
  'active_callback' => function() {
    $current_options        = get_option('ideal_options_control');
    $checkbox_value = $current_options['style-dynamic-load']  ;
  
    if ( $checkbox_value == '3' ) {
      return true;
    }
    return false;
  },


] );

Kirki::add_field( $config_id, [
	'type'        => 'custom',
	'settings'    => 'info_warning-shutdown-write',
	 'label'       => esc_html__( 'Stop writing the file! if you finished design', 'ideal' ), 
	'section'     => 'advanced_settings_control',
		'default'         => '<h3 style="padding:15px 10px; background:#fff; margin:0;">' . __( 'you have to stop writing the file after you finished your design and refresh the page, More Info in the documentation', 'ideal' ) . '</h3>',
  'priority'    => 2,
  'active_callback' => function() {
    $current_options        = get_option('ideal_options_control');
    $checkbox_value = $current_options['style-dynamic-load']  ;
    $val2 = $current_options['shutdown-dynamic-file']  ;

    if ( $checkbox_value == '3'&& $val2 == '0' ) {
      return true;
    }
    return false;
  },

  'transport'   => 'auto',
] );

Kirki::add_field( $config_id, [
	'type'        => 'custom',
	'settings'    => 'info_success-shutdown-write',
	 'label'       => esc_html__( 'file is stop writing', 'ideal' ), 
	'section'     => 'advanced_settings_control',
		'default'         => '<h3 style="padding:15px 10px; background:#fff; margin:0;">' . __( 'if you want to rewrite it swiych to on', 'ideal' ) . '</h3>',
  'priority'    => 3,
  'active_callback' => function() {
    $current_options        = get_option('ideal_options_control');
    $checkbox_value = $current_options['style-dynamic-load']  ;
    $val2 = $current_options['shutdown-dynamic-file']  ;

    if ( $checkbox_value == '3'&& $val2 == '1' ) {
      return true;
    }
    return false;
  },
  'transport'   => 'auto',
] );


Kirki::add_field( $config_id, [
	'type'        => 'switch',
	'settings'    => 'minify-dynamic-allow',
  'label'       => esc_html__('Allow To Minify Dynamic Style ', 'ideal'),
  'description' => esc_html__('switch quick dynamic css minify', 'ideal'),
	'section'     => 'advanced_settings_control',
	'default'     => '',
	'priority'    => 5,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'ideal' ),
		'off' => esc_html__( 'Disable', 'ideal' ),
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $config_id, [
	'type'        => 'switch',
	'settings'    => 'force-dynamic-cache',
  'label'       => esc_html__('Force cache', 'ideal'),
  'description' => esc_html__('switch allow to cache the dynamic style
  his option is useful for preventing caching of the styles if youre still developing and using minification/ caching plugins.
  f it is on the system will cache the file and if is off will no cache for dynamic style, default is off,
  ', 'ideal'),
	'section'     => 'advanced_settings_control',
	'default'     => '',
	'priority'    => 6,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'ideal' ),
		'off' => esc_html__( 'Disable', 'ideal' ),
  ],
  'transport'   => 'auto',
] );


Kirki::add_field( $config_id, [
	'type'        => 'switch',
	'settings'    => 'svag-allow-s',
  'label'       => esc_html__('Allow SVG files', 'ideal'),
  'description' => esc_html__('Security is the main reason behind the limitation on file types that users can upload, Enable this to allow SVG files to be uploaded', 'ideal'),
	'section'     => 'advanced_settings_control',
	'default'     => '',
	'priority'    => 7,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'ideal' ),
		'off' => esc_html__( 'Disable', 'ideal' ),
  ],
  'transport'   => 'auto',
] );