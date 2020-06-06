<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
header("Content-type: text/css; charset: UTF-8");

$ideal_options = get_ideal_theme_options();

if ($ideal_options['minify-dynamic-allow'] == 1 ){

    function dynamic_ideal_minify_css( $css ) {

        $css = preg_replace( '/\s+/', ' ', $css );
        
        $css = preg_replace( '/\/\*[^\!](.*?)\*\//', '', $css );
        
        $css = preg_replace( '/(,|:|;|\{|}) /', '$1', $css );
        
        $css = preg_replace( '/ (,|;|\{|})/', '$1', $css );
        
        $css = preg_replace( '/(:| )0\.([0-9]+)(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}.${2}${3}', $css );
        
        $css = preg_replace( '/(:| )(\.?)0(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}0', $css );
        
        return trim( $css );
    }
}

/**
 * get the style output
 */
function ideal_dynamic_style_output(){
    get_template_part( '/assets/css/dynamic/daynamic' , 'color' );
    get_template_part( '/assets/css/dynamic/daynamic' , 'font' );
    get_template_part( '/assets/css/dynamic/daynamic' , 'option' );
}

ob_start(); 
ideal_dynamic_style_output();
$ideal_dynamic_ajax_css = ob_get_contents();
ob_end_clean();
if ($ideal_options['minify-dynamic-allow'] == 1 ){
    $ideal_dynamic_ajax_css = dynamic_ideal_minify_css($ideal_dynamic_ajax_css);     
}
echo esc_attr($ideal_dynamic_ajax_css);