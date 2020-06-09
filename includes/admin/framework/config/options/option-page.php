<?php
/*
*
* START SECTIONS Page Settings
*
*/
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$opt_name = 'ideal_redux';

Redux::setSection( $opt_name, array(
  'title'            => esc_html__( 'Page', 'ideal' ),
  'id'               => 'page-settings',
  'icon'             => 'el el-file ',
  'customizer_width' => '450px',
  'desc'             => '',
  ) 
); 
Redux::setSection( $opt_name, array(
  'title'            => esc_html__( 'Page Styling ', 'ideal' ),
  'id'               => 'page-settings-bloghome',
  'subsection'       => true,
  'customizer_width' => '450px',
  'desc'             => '',
  'fields'           => array(

    array(
        'id' => 'page-container-width',
        'type' => 'slider',
        'title' => __('Slider Example 2 with Steps (5)', 'ideal'),
        'subtitle' => __('Design your container will scale to a maximum width', 'ideal'),
        'desc' => '',
        "default" => 1200,
        "min" => 900,
        "step" => 1,
        "max" => 2000,
        'display_value' => 'textbox'    
    ),
    array(
      'id'       => 'page-padding-top-bottom',
      'type'     => 'spacing',
      'mode'    => 'padding',
      'right'    => false, 
      'left' => false, 
      'units'    => 'px' ,
      'title'    => esc_html__( 'Page Contant Padding' , 'ideal' ),
      'subtitle' => esc_html__( 'top and bottom padding to page contant' , 'ideal' ),
      'default'  =>array(
        'top'    => '70px', 
        'bottom' => '70px', 
        ),
      ),//-------archives-header-hight


          array(
            'id'       => 'add-cards-page',
            'type'     => 'switch',
            'title'    =>  esc_html__( 'Cards Style' , 'ideal' ),
            'subtitle' =>  esc_html__( 'Add cards style to Page Countant' , 'ideal' ),
            'desc'     => '',
            'default'  => 0,
        ),
        
      //-----------------

    )
  )
);