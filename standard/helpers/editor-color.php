<?php
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! class_exists( 'Redux' ) ) {
  return;
}  
$ideal_options = get_ideal_theme_options();

$id_gradient_prim_from = $ideal_options['id-color-gradient']['from'];
$id_gradient_prim_to   = $ideal_options['id-color-gradient']['to'];

$id_sub_gradient_from  = $ideal_options['id-sub-color-gradient']['from'];
$id_sub_gradient_to    = $ideal_options['id-sub-color-gradient']['to'];

$id_primary             =  $ideal_options['id-primary-color'];
$id_secondary           =  $ideal_options['id-secondary-color'];
$id_sub_color           =  $ideal_options['id-sub-additional-color'];
$id_sub_color_plus      =  $ideal_options['id-sub-plus-color'];

/* 

======= Branded Colors for WP editor color palette ===========

*/

/**
 * 
 * Adding Branded Code To Support
 * Custom Gutenberg Color Palettes
 * 
 * 
 */
add_theme_support( 'editor-color-palette', array(
	array(
		'name'  =>esc_html__( 'Primary Color', 'ideal' ),
		'slug'  => 'primary-color',
		'color'	=> $id_primary ,
	),
	array(
		'name'  => esc_html__( 'Secondary Color', 'ideal' ),
		'slug'  => 'secondary-Color',
		'color' => $id_secondary,
	),
	array(
		'name'  => esc_html__( 'Sub Additional Color', 'ideal' ),
		'slug'  => 'sub-additional',
		'color' => $id_sub_color,
  ),
  array(
		'name'  => esc_html__( 'Sub Additional Color plus', 'ideal' ),
		'slug'  => 'sub-additional-plus',
		'color' => $id_sub_color_plus,
  ),
  
  array(
  'name'  => esc_html__( 'Soft Blue', 'ideal' ),
  'slug'  => 'soft-blue-color',
  'color' => '#778beb',
  ),

  array(
    'name'  => esc_html__( 'Brewed Mustard', 'ideal' ),
    'slug'  => 'brewed-mustard-color',
    'color' => '#e77f67',
  ),

  array(
    'name'  => esc_html__( 'Tigerlily', 'ideal' ),
    'slug'  => 'tigerlily-additional-color',
    'color' => '#e15f41',
  ),

  array(
    'name'  => esc_html__( 'Flamingo Pink', 'ideal' ),
    'slug'  => 'flamingo-pink-color',
    'color' => '#f78fb3',
  ),
  array(
    'name'  => esc_html__( 'Ideal Black', 'ideal' ),
    'slug'  => 'ideal-black-color',
    'color' => '#000000',
  ),
  array(
    'name'  => esc_html__( 'Ideal white', 'ideal' ),
    'slug'  => 'ideal-wite-color',
    'color' => '#ffffff',
  ),

) 
);
// Adds support for Gradient Color Options and convert Redux output.

//convert color From Hexadecimal to RGB

function toRGB($Hex){
   
  if (substr($Hex,0,1) == "#")
      $Hex = substr($Hex,1);
      
  $R = substr($Hex,0,2);
  $G = substr($Hex,2,2);
  $B = substr($Hex,4,2);
  
  $R = hexdec($R);
  $G = hexdec($G);
  $B = hexdec($B);
  
  $RGB['R'] = $R;
  $RGB['G'] = $G;
  $RGB['B'] = $B;
  
  return $RGB;
  
  }

//$RGB = toRGB($id_gradient_prim_from);

$prim    = toRGB($id_gradient_prim_from);
$prim_to = toRGB($id_gradient_prim_to);

$prim_out    = 'rgba( '. $prim['R']  .','. $prim['G'] .','. $prim['B'].',1)';
$prim_to_out = 'rgba( '. $prim_to['R']  .','. $prim_to['G'] .','. $prim_to['B'].',1)';

$sub     = toRGB($id_sub_gradient_from);
$sub_to  = toRGB($id_sub_gradient_to);

$sub_out    = 'rgba( '. $sub['R']  .','. $sub['G'] .','. $sub['B'].',1)';
$sub_to_out = 'rgba( '. $sub_to['R']  .','. $sub_to['G'] .','. $sub_to['B'].',1)';
/**
 * 
 * Adding Branded Gradient Background Options 
 * 
 * 
 */
add_theme_support(
  'editor-gradient-presets',

  array(
    array(
      'name'     => esc_html__( 'Color Gradient', 'ideal' ),
      'gradient' => 'linear-gradient(135deg,'. $prim_out .' 0%,'. $prim_to_out .' 100%)',
      'slug'     => 'i-color-gradient'
      ),

    array(
    'name'     => esc_html__( 'Sub Color Gradient ', 'ideal' ),
    'gradient' => 'linear-gradient(135deg,'. $sub_out .' 0%,'. $sub_to_out .' 100%)',
    'slug'     => 'i-sub-color-gradient'
    ),
    array(
        'name'     => esc_html__( 'Roseanna', 'ideal' ),
        'gradient' => 'linear-gradient(135deg,rgba(255,175,189) 0%, rgba(255,195,160) 100%)',
        'slug'     => 'roseanna-ideal'
    ),
    array(
        'name'     =>esc_html__( 'Purple Love', 'ideal' ),
        'gradient' => 'linear-gradient(135deg,rgba(204,43,94) 0%,rgba(117,58,136) 100%)',
        'slug'     =>  'purple-love-ideal',
    ),
    
  )
  
);



