<?php
/**
 * 
 * 
 *  Ideal hooks Actions.
 *
 * @package Ideal Theme
 * @subpackage hooks
 * @since V1.0.0
 * @version 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// Hook before header menu
function ideal_hook_before_header(){

	do_action( 'ideal_hook_before_header' );
	
}
// Hook after header menu
function ideal_hook_after_header(){

	do_action( 'ideal_hook_after_header' );
}
// Hook page header to open
function ideal_hook_page_header_open(){

	do_action( 'ideal_hook_page_header_open' );
}
//hook page header to close
function ideal_hook_page_header_close(){

	do_action( 'ideal_hook_page_header_close' );
}