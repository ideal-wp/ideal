<?php
/**
 * sidebar template.
 *
 * @package ideal WordPress Theme
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( function_exists( 'dynamic_sidebar' ) ) {

	global $post;
	global $woocommerce;

	$posttype = get_post_type( $post );

	if ( ( 
					 ( is_archive() ) 
				|| ( is_author() ) 
				|| ( is_category() ) 
				|| ( is_home() ) 
				|| ( is_single() ) 
				|| ( is_tag() ) 
		   ) 
		&& ( $posttype === 'post' ) ) {

		dynamic_sidebar( 'Blog Sidebar' );

	} elseif ( 
		    $woocommerce && is_shop() 
		 || $woocommerce && is_product_category() 
		 || $woocommerce && is_product_tag() 
		 || $woocommerce && is_product() ) {

		dynamic_sidebar( 'WooCommerce Sidebar' );

	} else {

		dynamic_sidebar( 'Page Sidebar' );

	}
}