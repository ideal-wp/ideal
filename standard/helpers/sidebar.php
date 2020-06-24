<?php
/** 
*
* Theme Setup activate recommended WordPress features
* @package Ideal
* @subpackage helpers / sidebar theme support
* @since 1.0.0
*
*/
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


function ideal_dynamic_sidebar() {
  
  register_sidebar(
		array(
			'name'          => 'Blog Sidebar',
			'id'            => 'blog-sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widgettitle">',
      'after_title'   => '</h4>',
      'description'   => __( 'The Awesome Sidebar is shown on the side of blog pages in this theme', 'ideal' ),

    )
  );

  register_sidebar(
		array(
			'name'          => 'page Sidebar',
			'id'            => 'page-sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widgettitle">',
      'after_title'   => '</h4>',
    )
	);
	
  if ( class_exists( 'WooCommerce' ) ) {
		register_sidebar(
			array(
				'name'          => 'WooCommerce Sidebar',
				'id'            => 'woocommerce-sidebar',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h4 class="widgettitle">',
				'after_title'   => '</h4>',
			)
		);
	}
	
	register_sidebar(
		array(
			'name'          => 'Off Canvas',
			'id'            => 'off-canvas',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widgettitle">',
      'after_title'   => '</h4>',
      'description'   => __( 'Widget Area Off Canvas', 'ideal' ),

    )
  );

}
add_action( 'widgets_init', 'ideal_dynamic_sidebar' );