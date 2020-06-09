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

$opt_name = 'ideal_redux';

Redux::setSection( $opt_name, array(
  'title'            => esc_html__( 'Blog', 'ideal' ),
  'id'               => 'blog-settings',
  'icon'             => 'el el-bold ',
  'customizer_width' => '450px',
  'desc'             => '',
  ) 
); 
Redux::setSection( $opt_name, array(
  'title'            => esc_html__( 'Blog Styling ', 'ideal' ),
  'id'               => 'blog-settings-bloghome',
  'subsection'       => true,
  'customizer_width' => '450px',
  'desc'             => '',
  'fields'           => array(
          array(
            'id'       => 'add-cards-blog',
            'type'     => 'switch',
            'title'    =>  esc_html__( 'Cards Style' , 'ideal' ),
            'subtitle' =>  esc_html__( 'Add cards style to posts in blog home' , 'ideal' ),
            'desc'     => '',
            'default'  => 0,
        ),
        
      //-----------------
        array(
            'id'       => 'add-scrollspy',
            'type'     => 'switch',
            'title'    =>  esc_html__( 'Scrollspy Animations' , 'ideal' ),
            'subtitle' =>  esc_html__( 'Lood Posts on animations, Ex. if you scroll down a page, and an element appears in the viewport for the first time, you can trigger a smooth animation to fade in the element.' , 'ideal' ),
            'desc'     => '',
            'default'  => 0,
        ),
        
      //-----------------
      array(
        'id'       => 'id-scroll-animations',
        'required' => array( 'add-scrollspy', 'equals', 1 ),
        'type'     => 'select',
        'title'    => esc_html__('Select animations Option', 'ideal'), 
        'subtitle' => esc_html__('smooth animations to use within your page.', 'ideal'),
        'desc'     => '',
        // Must provide key => value pairs for select options
        'options'  => array(
            'uk-animation-fade'               => 'fade',
            'uk-animation-scale-up'           => 'scale up',
            'uk-animation-scale-down'         => 'scale down',
            'uk-animation-shake'              => 'shake',
            'uk-animation-slide-top'          => 'slide top',
            'uk-animation-slide-bottom'       => 'slide bottom',
            'uk-animation-slide-left'         => 'slide left',
            'uk-animation-slide-right'        => 'slide right',
            'uk-animation-slide-top-small'    => 'slide top small',
            'uk-animation-slide-bottom-small' => 'slide bottom small',
            'uk-animation-slide-left-small'   => 'slide left small',
            'uk-animation-slide-right-small'  => 'slide right small',
            'uk-animation-slide-top-medium'    => 'slide top medium',
            'uk-animation-slide-bottom-medium' => 'slide bottom medium',
            'uk-animation-slide-left-medium'   => 'slide left medium',
            'uk-animation-slide-right-medium'  => 'slide right medium',
        ),
        'default'  => '',
      ), 
      array(
        'id'       => 'repeat-scrollspy',
        'required' => array( 'add-scrollspy', 'equals', 1 ),
        'type'     => 'switch',
        'title'    =>  esc_html__( 'Repeat Animati on Scroll up and down' , 'ideal' ),
        'subtitle' =>  esc_html__( 'Applies the Animati every time the element is on Scroll view up or down.' , 'ideal' ),
        'desc'     => '',
        'default'  => 0,
    ),





  ) 
)
); 
Redux::setSection( $opt_name, array(
  'title'            => esc_html__( 'Single Post', 'ideal' ),
  'id'               => 'blog-settings-blosignal',
  'subsection'       => true,
  'customizer_width' => '450px',
  'desc'             => '',
  'fields'           => array(
        array(
            'id'       => 'post-imge-in',
            'type'     => 'switch',
            'title'    => esc_html__( 'Featured Image InsidePost
            ' , 'ideal' ),
            'subtitle' => esc_html__( 'Add The Featured Image Inside the Single Post' , 'ideal' ),
            'desc'     => '',
            'default'  => 0,
        ),
        array(
          'id'       => 'post-cards',
          'type'     => 'switch',
          'title'    => esc_html__( 'Add Cards style to single post
          ' , 'ideal' ),
          'subtitle' => '',
          'desc'     => '',
          'default'  => 0,
      ),
        
        
    
    )
  ) 
); 