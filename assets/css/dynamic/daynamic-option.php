<?php
/**
 * options style link - padding - margin - shadow 
 * 
 * @package Ideal Theme
 * @subpackage Dynamic style
 * @since V1.0.0
 * @version 1.0.0 
 *  # menu
 *  #Page Header
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if (!class_exists('Kirki')) {
    return;
}
if(empty($ideal_options['nav-ideal-height'])){
    $ideal_header_height = '80px';
}else{
    $ideal_header_height = $ideal_options['nav-ideal-height'];

}
$ideal_options    = ideal_get_theme_options();
$ideal_light_logo =null;
$ideal_dark_logo =null;
if(!empty($ideal_options['header-t-logo-light-kmod'])){
$ideal_light_logo       = $ideal_options['header-t-logo-light-kmod'];}
if(!empty($ideal_options['header-t-logo-dark-kmod'])){

$ideal_dark_logo        = $ideal_options['header-t-logo-dark-kmod'];} 

/*-=========================[ menu ]=====================- */
echo '
'.(!empty($ideal_options['header-s-logo'])? '
.ideal-Logoo{
    content:url("'.$ideal_options['header-s-logo'].'");
}':"") .'
'.(!empty($ideal_light_logo)? '
.uk-light .ideal-Logoo{
    content:url("'. $ideal_light_logo .'");
}':"") .'
'.(!empty($ideal_dark_logo)? '
.uk-dark .ideal-Logoo{
    content:url("'. $ideal_dark_logo .'");
}':"") .'
'.(!empty($ideal_options['navbar-light-color-moode'])? '
#ideal-nav.uk-light .ideal-Logo h2{
    color: '. $ideal_options['navbar-light-color-moode'] .';
}':"") .'
'.(!empty($ideal_options['navbar-dark-color-moode'])? '
#ideal-nav.uk-dark .ideal-Logo h2{
    color: '. $ideal_options['navbar-dark-color-moode'] .' ;
}':"") .'
'.(!empty($ideal_options['nav-ideal-height'])? '
#ideal-nav-c{
    height: '.  $ideal_options['nav-ideal-height'] .';
}':"") .'
'.(!empty( $ideal_options['header-m-b-color'])? '
#ideal-nav.uk-navbar-container:not(.uk-navbar-transparent){
    background: '.  $ideal_options['header-m-b-color'] .';
}':"") .'
'.(!empty( $ideal_options['transparent-header'] && $ideal_options['transparent-header'] == true)? '
.header-hero{
	margin-top:-'.  $ideal_header_height .';
}':"") .'
';
/*---------menu shadow------------ */
if(!empty($ideal_options['header-shadow-b']) && $ideal_options['header-shadow-b'] == 'smal'){
    echo '
    @media screen and (min-width: 900px) {
    #ideal-nav{
        -webkit-box-shadow: 0 0 3px 0 rgba(0,0,0,0.22);
        box-shadow: 0 0 3px 0 rgba(0,0,0,0.22);
        } } ';
    }elseif(!empty($ideal_options['header-shadow-b']) && $ideal_options['header-shadow-b'] == 'larg'){
        echo '
        @media screen and (min-width: 900px) {
        #ideal-nav{
        webkit-box-shadow: 0 3px 45px rgba(0,0,0,0.15);
        box-shadow: 0 3px 45px rgba(0,0,0,0.15);
            } }';
    }elseif( !empty($ideal_options['header-shadow-b']) &&  $ideal_options['header-shadow-b'] == 'non'){

        echo '
        @media screen and (min-width: 900px) {
        #ideal-nav{
        webkit-box-shadow: unset;
        box-shadow: unset;
            } }';
    }


/*-=========================[ Page Header ]=====================-*/
if(! empty($ideal_options['transparent-header']) && $ideal_options['transparent-header'] == true ){
    echo'
    .blog-wrap-header,.archives-wrap-header,#hero-section,ideal-pages-header{
        padding-top: '.(!empty( $ideal_options['nav-ideal-height']) ? '
         '.  $ideal_options['nav-ideal-height'] .';
    }' : '80px }') . '
    
    ';
}
echo'
'.(!empty($ideal_options['post-header-hight']['padding-top']) ? '
.id-bh-inner-wrap{
    padding-top:'.  $ideal_options['post-header-hight']['padding-top'].';
    padding-bottom:'.  $ideal_options['post-header-hight']['padding-bottom'] .';
}':"") .'

'.(!empty($ideal_options['archives-header-hight']['padding-top']) ? '

.id-archives-inner-wrap{
    padding-top:'.  $ideal_options['archives-header-hight']['padding-top'].';
    padding-bottom:'.  $ideal_options['archives-header-hight']['padding-bottom'] .';
}':"") .'
';

/*-=========================[ ---Page---- ]=====================-*/
if(! empty($ideal_options['page-container-width'])){
    echo'
    #ideal-page-content-inner.uk-container{
        max-width:' . $ideal_options['page-container-width'] . 'px;
    }
    ';
}
if(! empty($ideal_options['page-padding-top-bottom']['padding-top'])){
echo'
#ideal-pagecontent.uk-section{
    padding-top:'.  $ideal_options['page-padding-top-bottom']['padding-top'].';
    padding-bottom:'.  $ideal_options['page-padding-top-bottom']['padding-bottom'] .';
}
';
}
/*-=========================[ ---hero---- ]=====================-*/

if(!empty($ideal_options['hero_overlay_color'])){
    $hero_overlay_background = $ideal_options['hero_overlay_color']; 
   echo' #hero-section{box-shadow: inset 0 0 0 100vw '.esc_html($hero_overlay_background ).';}';
}
echo'
#hero-section{
    ' . (!empty($ideal_options['hero_section_background_setting']['background-color']) ? '
    background:' . $ideal_options['hero_section_background_setting']['background-color'] . ';' : "") . '
    ' . (!empty($ideal_options['hero_section_background_setting']['background-image']) ? '
    background-image:url("' . $ideal_options['hero_section_background_setting']['background-image'] . '");
    background-repeat:' . $ideal_options['hero_section_background_setting']['background-repeat'] . ';
    background-position:' . $ideal_options['hero_section_background_setting']['background-position'] . ';
    background-size:' . $ideal_options['hero_section_background_setting']['background-size'] . ';
    background-attachment:' . $ideal_options['hero_section_background_setting']['background-attachment'] . ';
    }' : "}") . '
    ';