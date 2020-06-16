<?php
/*
 *
 * panel Blog
 *
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}

$config_id = 'ideal_theme';


Kirki::add_panel( 'blog_settings_panel', array(
  'priority'       => 8,
  'title'          => esc_html__( 'Blog', 'ideal' ),
) );
//===================[ section blog home settings ]===================
Kirki::add_section( 'blog_settings_options', array(
  'title'          => esc_html__( 'Blog Home Styling', 'ideal' ),
  'panel'          => 'blog_settings_panel',
  'priority'       => 1,
) );

Kirki::add_field( $config_id , [
	'type'        => 'toggle',
	'settings'    => 'add-cards-blog',
  'label'       => esc_html__( 'Cards Style' , 'ideal' ),
  'description' =>  esc_html__( 'Add cards style to posts in blog home' , 'ideal' ),
	'section'     => 'blog_settings_options',
	'default'     => false,
	'priority'    => 2,
] );

Kirki::add_field( $config_id , [
	'type'        => 'toggle',
	'settings'    => 'add-scrollspy',
  'label'       => esc_html__( 'Scrollspy Animations' , 'ideal' ),
  'description' =>  esc_html__( 'Lood Posts on animations, Ex. if you scroll down a page, and an element appears in the viewport for the first time, you can trigger a smooth animation to fade in the element.' , 'ideal' ),
	'section'     => 'blog_settings_options',
	'default'     => '',
	'priority'    => 3,
] );

Kirki::add_field( $config_id, [
	'type'        => 'select',
	'settings'    => 'id-scroll-animations',
	'label'       => esc_html__('Sidebar position', 'ideal'), 
	'section'     => 'blog_settings_options',
	'default'     => '',
	'placeholder' => esc_html__( 'Select an option...', 'ideal' ),
	'priority'    => 4,
	'multiple'    => 1,
	'choices'     => [
		'uk-animation-fade'               =>  esc_html__('fade','ideal' ),
    'uk-animation-scale-up'           =>  esc_html__('scale up','ideal' ),
    'uk-animation-scale-down'         =>  esc_html__('scale down','ideal' ),
    'uk-animation-shake'              =>  esc_html__('shake','ideal' ),
    'uk-animation-slide-top'          =>  esc_html__('slide top','ideal' ),
    'uk-animation-slide-bottom'       =>  esc_html__('slide bottom','ideal' ),
    'uk-animation-slide-left'         =>  esc_html__('slide left','ideal' ),
    'uk-animation-slide-right'        =>  esc_html__('slide right','ideal' ),
    'uk-animation-slide-top-small'    =>  esc_html__('slide top small','ideal' ),
    'uk-animation-slide-bottom-small' =>  esc_html__('slide bottom small','ideal' ),
    'uk-animation-slide-left-small'   =>  esc_html__('slide left small','ideal' ),
    'uk-animation-slide-right-small'  =>  esc_html__('slide right small','ideal' ),
    'uk-animation-slide-top-medium'    =>  esc_html__('slide top medium','ideal' ),
    'uk-animation-slide-bottom-medium' =>  esc_html__('slide bottom medium','ideal' ),
    'uk-animation-slide-left-medium'   =>  esc_html__('slide left medium','ideal' ),
    'uk-animation-slide-right-medium'  =>  esc_html__('slide right medium','ideal' ),
	],
] );

Kirki::add_field( $config_id , [
	'type'        => 'toggle',
	'settings'    => 'repeat-scrollspy',
  'label'       => esc_html__( 'Repeat Animati on Scroll up and down' , 'ideal' ),
  'description' =>  esc_html__( 'Applies the Animati every time the element is on Scroll view up or down.' , 'ideal' ),
	'section'     => 'blog_settings_options',
	'default'     => '',
	'priority'    => 5,
] );

//===================[ section Single Post settings ]===================
Kirki::add_section( 'single_post_settings_options', array(
  'title'          => esc_html__( 'Single post Styling', 'ideal' ),
  'panel'          => 'blog_settings_panel',
  'priority'       => 2,
) );

Kirki::add_field( $config_id , [
	'type'        => 'toggle',
	'settings'    => 'post-imge-in',
  'label'       => esc_html__( 'Featured Image InsidePost
  ' , 'ideal' ),
  'description' => esc_html__( 'Add The Featured Image Inside the Single Post' , 'ideal' ),
	'section'     => 'single_post_settings_options',
	'default'     => true,
	'priority'    => 1,
] );

Kirki::add_field( $config_id , [
	'type'        => 'toggle',
	'settings'    => 'post-cards',
  'label'       => esc_html__( 'Add Cards style to single post
  ' , 'ideal' ),
	'section'     => 'single_post_settings_options',
	'default'     => false,
	'priority'    => 2,
] );