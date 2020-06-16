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

$ideal_options    = get_ideal_theme_options();
$light_logo       = esc_url($ideal_options['header-t-logo-light-kmod']['url']);
$dark_logo        = esc_url($ideal_options['header-t-logo-dark-kmod']['url']);

/*-=========================[ menu ]=====================- */
echo '
'.(!empty($ideal_options['header-s-logo']['url'])? '
.ideal-Logoo{
    content:url("'.$ideal_options['header-s-logo']['url'].'");
}':"") .'
'.(!empty($light_logo)? '
.uk-light .ideal-Logoo{
    content:url("'. $light_logo .'");
}':"") .'
'.(!empty($dark_logo)? '
.uk-dark .ideal-Logoo{
    content:url("'. $dark_logo .'");
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
'.(!empty( $ideal_options['nav-ideal-height'])? '
.header-hero{
	margin-top:-'.  $ideal_options['nav-ideal-height'].';
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
    .blog-wrap-header,.archives-wrap-header{
        padding-top: '.  $ideal_options['nav-ideal-height'] .';
    }
    
    ';
}
echo'

.id-bh-inner-wrap{
    padding-top:'.  $ideal_options['post-header-hight']['padding-top'].';
    padding-bottom:'.  $ideal_options['post-header-hight']['padding-bottom'] .';
}


.id-archives-inner-wrap{
    padding-top:'.  $ideal_options['archives-header-hight']['padding-top'].';
    padding-bottom:'.  $ideal_options['archives-header-hight']['padding-bottom'] .';
}
';

/*-=========================[ ---Page---- ]=====================-*/
if(! empty($ideal_options['page-container-width'])){
    echo'
    #ideal-page-content-inner.uk-container{
        max-width:' . $ideal_options['page-container-width'] . 'px;
    }
    ';
}
echo'
#ideal-pagecontent.uk-section{
    padding-top:'.  $ideal_options['page-padding-top-bottom']['padding-top'].';
    padding-bottom:'.  $ideal_options['page-padding-top-bottom']['padding-bottom'] .';
}
';
