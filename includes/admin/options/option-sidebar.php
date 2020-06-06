<?php
/*
*
* START SECTIONS Blog General Settings
*
*/
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
Redux::setSection( $opt_name, array(
  'title'            => esc_html__( 'SideBar', 'ideal' ),
  'id'               => 'sidebar-general-settings',
  'icon'             => 'el el-indent-left ',
  'customizer_width' => '450px',
  'desc'             => esc_html__('Welcome to the Ideal options panel! You can switch between option groups by using the left-hand tabs.', 'ideal'),
  'fields'           => array(
      array(
            'id'       => 'is-post-sidebar',
            'type'     => 'switch',
            'title'    => esc_html__( 'Blog Sidebar' , 'ideal' ),
            'subtitle' => esc_html__( 'Switch To Enable Blog Sidebar, this option will enable blog sidebar if is on' , 'ideal' ),
            'desc'     => '',
            'default'  => 0,
    ),
        
      array(
        'id'       => 'is-page-sidebar',
        'type'     => 'switch',
        'title'    => esc_html__( 'Page Sidebar' , 'ideal' ),
        'subtitle' => esc_html__( 'this option will enable Page sidebar if is on' , 'ideal' ),
        'desc'     => '',
        'default'  => 0,
    ),
    array(
      'id'       => 'is-wooc-sidebar',
      'type'     => 'switch',
      'title'    => esc_html__( 'Woocommerce Sidebar' , 'ideal' ),
      'subtitle' => esc_html__( 'this option will enable Woocommerce sidebar if is on' , 'ideal' ),
      'desc'     => '',
      'default'  => 0,
  ),

      array(
      'id'       => 'sidebar-position',
      'type'     => 'select',
      'title'    => esc_html__('Blog Sidebar position', 'ideal'), 
      'subtitle' => '',
      'desc'     => '',
      // Must provide key => value pairs for select options
      'options'  => array(
          'right' => esc_html__('Right', 'ideal'),
          'left'  => esc_html__('left', 'ideal'),
         
      ),
      'default'  => 'left',    
      ),//-------------
      array(
        'id'       => 'i-sticky-sidebar',
        'type'     => 'switch',
        'title'    => esc_html__( 'Enable Sticky Sidebar' , 'ideal' ),
        'subtitle' => '',
        'desc'     => '',
        'default'  => 0,
    ),


    ) 
  ) 
); 