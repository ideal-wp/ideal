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
if ( ! class_exists( 'Redux' ) ) {
    return;
} 
$ideal_options    = get_ideal_theme_options();
$light_logo       = esc_url($ideal_options['header-t-logo-light-kmod']['url']);
$dark_logo        = esc_url($ideal_options['header-t-logo-dark-kmod']['url']);

/*-=========================[ menu ]=====================- */
echo '
.ideal-Logoo{
    content:url("'.$ideal_options['header-s-logo']['url'].'");

}

.uk-light .ideal-Logoo{
    content:url("'. $light_logo .'");

}
.uk-dark .ideal-Logoo{
    content:url("'. $dark_logo .'");

}

#ideal-nav-c{
    height: '.  $ideal_options['nav-ideal-height']['height'] .';
}
#ideal-nav.uk-navbar-container:not(.uk-navbar-transparent){
    background: '.  $ideal_options['header-m-b-color']['background-color'] .';
}

.header-hero{
	margin-top:-'.  $ideal_options['nav-ideal-height']['height'] .';
}
';
/*---------menu shadow------------ */
if($ideal_options['header-shadow-b'] == 'smal'){
    echo '
    @media screen and (min-width: 900px) {
    #ideal-nav{
        -webkit-box-shadow: 0 0 3px 0 rgba(0,0,0,0.22);
        box-shadow: 0 0 3px 0 rgba(0,0,0,0.22);
        } }';
    }elseif($ideal_options['header-shadow-b'] == 'larg'){
        echo '
        @media screen and (min-width: 900px) {
        #ideal-nav{
        webkit-box-shadow: 0 3px 45px rgba(0,0,0,0.15);
        box-shadow: 0 3px 45px rgba(0,0,0,0.15);
            } }';
    }

/*-=========================[ Page Header ]=====================-*/

echo'
.blog-wrap-header,.archives-wrap-header{
    padding-top: '.  $ideal_options['nav-ideal-height']['height'] .';
}

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