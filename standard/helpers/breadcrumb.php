<?php
/**
 * 
 *  Ideal hooks Actions.
 *
 * @package Ideal Theme
 * @subpackage Ideal Partials breadcrumb
 * @since V1.0.0
 * @version 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function get_breadcrumb() {
	echo '<a href="'. home_url() .'" rel="nofollow">'. esc_html__('Home','ideal') .'</a>';
	if (is_category() || is_single()){
		echo   ' » '  ;
		the_category ( ', ' );
			if (is_single()) {
				echo   ' » ' ;
				the_title();
			}
} elseif (is_page()) {
		echo  ' » '  ;
		echo the_title();
	} elseif (is_search()) {
		echo   ' » '  ;
		echo '""<em>';
		echo the_search_query();
		echo '</em>"';
	}
}
