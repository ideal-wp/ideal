<?php
/*
*
*  TYPOGRAPHY OPTION
*
*/
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// START SECTIONS TYPOGRAPHY OPTION
Redux::setSection( $opt_name, array(
  'title'  => esc_html__( 'Typography', 'ideal' ),
  'id'     => 'typography',
  'desc'   => esc_html__( 'All typography related options are listed here', 'ideal' ),
  'icon'   => 'el el-font',
  'fields' => array(
    
  )
) );
/**
 * 
 * default fonts
 *
 *@since V1.0.
 *@version 1.0.
 * 
 */
// Ready for v2 to add a theme local fonts
$ideal_default_fonts = array(
  'Arial, sans-serif'        => 'Arial',
  'Cambria, Georgia, serif'  => 'Cambria',
  'Copse, sans-serif'        => 'Copse',
  "Courier, monospace"       => "Courier, monospace",
  "Garamond, serif"          => "Garamond",
  "Georgia, serif"           => "Georgia",
  
);

Redux::setSection( $opt_name, array(
  'title'            => esc_html__( 'Typography Option', 'ideal' ),
  'id'               => 'typography-settings',
  'subsection'       => true,
  'customizer_width' => '450px',
  'desc'             => esc_html__('This tab contains general typography options.', 'ideal'),
  'fields'           => array(
        
        array(
          'id'       => 'ideal_body_font_family',
          'type'     => 'typography',
          'title'    => esc_html__( 'Body Font Family', 'ideal' ),
          'subtitle' => esc_html__( 'Specify the Logo font properties.', 'ideal' ),
          'color'           => false,
          'letter-spacing'  => true,
          'google'          => true,
          'all_styles'      => false,
          'fonts'           =>  $ideal_default_fonts,
          'default'         => array()
        ),



          
       //------------End fields   
        
  ) 
  
  ) 
); 

//==============================[ subsection typography Settings ]======================

Redux::setSection( $opt_name, array(
  'title'            => esc_html__( 'Headers Typography', 'ideal' ),
  'id'               => 'typography-settings-headers',
  'subsection'       => true,
  'fields'           => array( //-----------Start fonts fieldes
    array(
      'id'       => 'ideal_h1_family',
      'type'     => 'typography',
      'title'    => esc_html__( 'Heading 1', 'ideal' ),
      'subtitle' => esc_html__( 'Specify the H1 Text properties.', 'ideal' ),
      'color'           => false,
      'letter-spacing'  => true,
      'google'   => true,
      'all_styles'  => false,
      'fonts' =>  $ideal_default_fonts,
      'default'  => array()
    ),

    array(
      'id'       => 'ideal_h2_family',
      'type'     => 'typography',
      'title'    => esc_html__( 'Heading 2', 'ideal' ),
      'subtitle' => esc_html__( 'Specify the H2 Text properties.', 'ideal' ),
      'google'   => true,
      'color'           => false,
      'letter-spacing'  => true,
      'all_styles'  => false,
      'fonts' =>  $ideal_default_fonts,
      'default'  => array()
    ),

    array(
      'id'       => 'ideal_h3_family',
      'type'     => 'typography',
      'title'    => esc_html__( 'Heading 3', 'ideal' ),
      'subtitle' => esc_html__( 'Specify the H3 Text properties.', 'ideal' ),
      'google'   => true,
      'color'           => false,
      'letter-spacing'  => true,
      'all_styles'  => false,
      'fonts' =>  $ideal_default_fonts,
      'default'  => array()
    ),

    array(
      'id'       => 'ideal_h4_family',
      'type'     => 'typography',
      'title'    => esc_html__( 'Heading 4', 'ideal' ),
      'subtitle' => esc_html__( 'Specify the H4 Text properties.', 'ideal' ),
      'google'   => true,
      'color'           => false,
      'letter-spacing'  => true,
      'all_styles'  => false,
      'fonts' =>  $ideal_default_fonts,
      'default'  => array()
    ),

    array(
      'id'       => 'ideal_h5_family',
      'type'     => 'typography',
      'title'    => esc_html__( 'Heading 5', 'ideal' ),
      'subtitle' => esc_html__( 'Specify the H5 Text properties.', 'ideal' ),
      'google'   => true,
      'color'           => false,
      'letter-spacing'  => true,
      'all_styles'  => false,
      'fonts' =>  $ideal_default_fonts,
      'default'  => array()
    ),

    array(
      'id'       => 'ideal_h6_family',
      'type'     => 'typography',
      'title'    => esc_html__( 'Heading 6', 'ideal' ),
      'subtitle' => esc_html__( 'Specify the H6 Text properties.', 'ideal' ),
      'google'   => true,
      'color'           => false,
      'letter-spacing'  => true,
      'all_styles'  => false,
      'fonts' =>  $ideal_default_fonts,
      'default'  => array()
    ),




    //-------------End fonts fieldes
    )
  ) 
);
//==========[ subsection Responsivetypography Settings ]======================

Redux::setSection( $opt_name, array(
  'title'            => esc_html__( 'Headers Responsive', 'ideal' ),
  'subtitle'  => 'Headers Typography Responsive Settings',
  'id'               => 'typography-responsive-headers',
  'subsection'       => true,
  'fields'           => array( //-----------Start fonts fieldes
  
    array(
      'id'        => 'h1-small-desktop-font-size',
      'type'      => 'slider',
      'title'     => esc_html__('H1 Small Desktop', 'ideal'),
      'subtitle'  => '',
      'desc'      => '',
      "min"       => 10,
      "step"      => 5,
      "max"       => 100,
      'display_value' => 'text',
      "default"   => 75,
    ),
    
    array(
      'id'        => 'h1-tablet-font-size',
      'type'      => 'slider',
      'title'     => esc_html__('H1 Tablet', 'ideal'),
      'subtitle'  => '',
      'desc'      => '',
      "min"       => 10,
      "step"      => 5,
      "max"       => 100,
      'display_value' => 'text',
      "default"   => 70,
    ),
    
    array(
      'id'        => 'h1-phone-font-size',
      'type'      => 'slider',
      'title'     => esc_html__('H1 Phone', 'ideal'),
      'subtitle'  => '',
      'desc'      => '',
      "min"       => 10,
      "step"      => 5,
      "max"       => 100,
      'display_value' => 'text',
      "default"   => 65,

    ),//--------------------
    array(
      'id'   =>'responsive-heading-divider-1',
      'desc' => '',
      'type' => 'divide',
    ),//========================================
    array(
      'id'        => 'h2-small-desktop-font-size',
      'type'      => 'slider',
      'title'     => esc_html__('H2 Small Desktop', 'ideal'),
      'subtitle'  => '',
      'desc'      => '',
      "min"       => 10,
      "step"      => 5,
      "max"       => 100,
      'display_value' => 'text',
      "default"   => 85,
    ),
    
    array(
      'id'        => 'h2-tablet-font-size',
      'type'      => 'slider',
      'title'     => esc_html__('H2 Tablet', 'ideal'),
      'subtitle'  => '',
      'desc'      => '',
      "min"       => 10,
      "step"      => 5,
      "max"       => 100,
      'display_value' => 'text',
      "default"   => 80,
    ),
    
    array(
      'id'        => 'h2-phone-font-size',
      'type'      => 'slider',
      'title'     => esc_html__('H2 Phone', 'ideal'),
      'subtitle'  => '',
      'desc'      => '',
      "min"       => 10,
      "step"      => 5,
      "max"       => 100,
      'display_value' => 'text',
      "default"   => 70,

    ),//--------------------
    array(
      'id'   =>'responsive-heading-divider-2',
      'desc' => '',
      'type' => 'divide',
    ),//========================================
    array(
      'id'        => 'h3-small-desktop-font-size',
      'type'      => 'slider',
      'title'     => esc_html__('H3 Small Desktop', 'ideal'),
      'subtitle'  => '',
      'desc'      => '',
      "min"       => 10,
      "step"      => 5,
      "max"       => 100,
      'display_value' => 'text',
      "default"   => 85,
    ),
    
    array(
      'id'        => 'h3-tablet-font-size',
      'type'      => 'slider',
      'title'     => esc_html__('H3 Tablet', 'ideal'),
      'subtitle'  => '',
      'desc'      => '',
      "min"       => 10,
      "step"      => 5,
      "max"       => 100,
      'display_value' => 'text',
      "default"   => 80,
    ),
    
    array(
      'id'        => 'h3-phone-font-size',
      'type'      => 'slider',
      'title'     => esc_html__('H3 Phone', 'ideal'),
      'subtitle'  => '',
      'desc'      => '',
      "min"       => 10,
      "step"      => 5,
      "max"       => 100,
      'display_value' => 'text',
      "default"   => 70,

    ),//--------------------
    array(
      'id'   =>'responsive-heading-divider-3',
      'desc' => '',
      'type' => 'divide',
    ),//========================================
    array(
      'id'        => 'h4-small-desktop-font-size',
      'type'      => 'slider',
      'title'     => esc_html__('H4 Small Desktop', 'ideal'),
      'subtitle'  => '',
      'desc'      => '',
      "min"       => 10,
      "step"      => 5,
      "max"       => 100,
      'display_value' => 'text',
      "default"   => 100,
    ),
    
    array(
      'id'        => 'h4-tablet-font-size',
      'type'      => 'slider',
      'title'     => esc_html__('H4 Tablet', 'ideal'),
      'subtitle'  => '',
      'desc'      => '',
      "min"       => 10,
      "step"      => 5,
      "max"       => 100,
      'display_value' => 'text',
      "default"   => 90,
    ),
    
    array(
      'id'        => 'h4-phone-font-size',
      'type'      => 'slider',
      'title'     => esc_html__('H4 Phone', 'ideal'),
      'subtitle'  => '',
      'desc'      => '',
      "min"       => 10,
      "step"      => 5,
      "max"       => 100,
      'display_value' => 'text',
      "default"   => 90,

    ),//--------------------
    //--------------------
    array(
      'id'   =>'responsive-heading-divider-4',
      'desc' => '',
      'type' => 'divide',
    ),//========================================
    array(
      'id'        => 'h5-small-desktop-font-size',
      'type'      => 'slider',
      'title'     => esc_html__('H5 Small Desktop', 'ideal'),
      'subtitle'  => '',
      'desc'      => '',
      "min"       => 10,
      "step"      => 5,
      "max"       => 100,
      'display_value' => 'text',
      "default"   => 100,
    ),
    
    array(
      'id'        => 'h5-tablet-font-size',
      'type'      => 'slider',
      'title'     => esc_html__('H5 Tablet', 'ideal'),
      'subtitle'  => '',
      'desc'      => '',
      "min"       => 10,
      "step"      => 5,
      "max"       => 100,
      'display_value' => 'text',
      "default"   => 95,
    ),
    
    array(
      'id'        => 'h5-phone-font-size',
      'type'      => 'slider',
      'title'     => esc_html__('H5 Phone', 'ideal'),
      'subtitle'  => '',
      'desc'      => '',
      "min"       => 10,
      "step"      => 5,
      "max"       => 100,
      'display_value' => 'text',
      "default"   => 95,

    ),//--------------------
    array(
      'id'   =>'responsive-heading-divider-5',
      'desc' => '',
      'type' => 'divide',
    ),//========================================
    array(
      'id'        => 'h6-small-desktop-font-size',
      'type'      => 'slider',
      'title'     => esc_html__('H6 Small Desktop', 'ideal'),
      'subtitle'  => '',
      'desc'      => '',
      "min"       => 10,
      "step"      => 5,
      "max"       => 100,
      'display_value' => 'text',
      "default"   => 100,
    ),
    
    array(
      'id'        => 'h6-tablet-font-size',
      'type'      => 'slider',
      'title'     => esc_html__('H6 Tablet', 'ideal'),
      'subtitle'  => '',
      'desc'      => '',
      "min"       => 10,
      "step"      => 5,
      "max"       => 100,
      'display_value' => 'text',
      "default"   => 95,
    ),
    
    array(
      'id'        => 'h6-phone-font-size',
      'type'      => 'slider',
      'title'     => esc_html__('H6 Phone', 'ideal'),
      'subtitle'  => '',
      'desc'      => '',
      "min"       => 10,
      "step"      => 5,
      "max"       => 100,
      'display_value' => 'text',
      "default"   => 95,

    ),//--------------------

    )
  )
);