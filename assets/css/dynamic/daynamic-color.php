<?php
/**
 *  Dynamic style 
 *  color and background
 * 
 * @package Ideal Theme
 * @subpackage Dynamic style
 * @since V1.0.0
 * @version 1.0.0 
 *  
 */
if (!defined('ABSPATH')) {
  exit;
}
if ( ! class_exists( 'Redux' ) ) {
  return;
}  
$ideal_options = get_ideal_theme_options();
$featured_options = $ideal_options['post-img-background' ] ;

$id_gradient_prim_from = $ideal_options['id-color-gradient']['from'];
$id_gradient_prim_to   = $ideal_options['id-color-gradient']['to'];
$id_sub_gradient_from  = $ideal_options['id-sub-color-gradient']['from'];
$id_sub_gradient_to    = $ideal_options['id-sub-color-gradient']['to'];
/*-------------------------------------------------------------------------
#                         General Color background                       #
-------------------------------------------------------------------------*/

echo'

.id-button-primary,.id-primary{
  background:'.  $ideal_options['id-primary-color'] .';
}

.id-secondary{
  background:'.  $ideal_options['id-secondary-color'] .';
}

.id-sub-color{
  background:'.  $ideal_options['id-sub-additional-color'] .';
}

.id-sub-plus-color{
  background:'.  $ideal_options['id-sub-plus-color'] .';
}


.has-i-color-gradient-gradient-background{
  background:linear-gradient(135deg,'. $ideal_options['id-color-gradient']['from'] .' 0%,'. $id_gradient_prim_to   = $ideal_options['id-color-gradient']['to'] .' 100%)
}
.has-i-sub-color-gradient-gradient-background{
  background:linear-gradient(135deg,'. $ideal_options['id-sub-color-gradient']['from'] .' 0%,'. $id_gradient_prim_to   = $ideal_options['id-sub-color-gradient']['to'] .' 100%)
}
.has-sub-additional-color{
  color:'.  $ideal_options['id-sub-additional-color'] .';
}
.has-secondary-color-color{
  color:'.  $ideal_options['id-secondary-color'] .';
}
.has-primary-color-color{
  color:'.  $ideal_options['id-primary-color'] .';
}
.has-sub-additional-plus-color{
  color:'.  $ideal_options['id-sub-plus-color'] .';
}
.has-primary-color-background-color{
  background:'.  $ideal_options['id-primary-color'] .';
}
.has-secondary-color-background-color{
  background:'.  $ideal_options['id-secondary-color'] .';
}
.has-sub-additional-plus-background-color{
  background:'.  $ideal_options['id-sub-plus-color'] .';
}
.has-sub-additional-background-color{
  background:'.  $ideal_options['id-sub-additional-color'] .';
}
';
/*------------------------------------------------------------------------
#                       body Color  background                           #
-------------------------------------------------------------------------*/
echo'
body {
  background:'.$ideal_options['body-b-color'].';
}

body,.article-inner-wrap .id-excerpt p,.article-inner-wrap .uk-card-default{
  color:'.$ideal_options['body-f-color'].';
}
a{
  color:'.  $ideal_options['id-primary-color'] .';
}
a:hover{
  color:'.  $ideal_options['id-secondary-color'] .';
}

.bg-404-img svg .st2 { 
  
  fill:'.  $ideal_options['id-primary-color'] .';
}
.bg-404-img svg .st7, .bg-404-img svg .st1 {
  fill: '.  $ideal_options['id-secondary-color'] .';
}
';
/*------------------------------------------------------------------------
#                        menu Color - background                      
-------------------------------------------------------------------------*/
echo'
#m-t-offcanvas.uk-offcanvas-bar{
  background:'.  $ideal_options['off-canvas-b-color'] .'!important;
  color:'.  $ideal_options['font-offcanvas']['color'] .'!important;
}

.uk-offcanvas-overlay::before{
  background:'.  $ideal_options['off-canvas-overlay-color']['rgba'] .'!important;
}
';
/*-------------------------------------------------------------------------
#                     Page Header Color  background                       #
-------------------------------------------------------------------------*/
echo'
#blog-page-header-overlay{
  background:'.$ideal_options['blog-color-rgba-header-overlay']['rgba'].';
}
#archives-header-overlay{
  background:'.$ideal_options['archives-color-rgba-header-overlay']['rgba'].';
}

';
if($featured_options == 0){

  echo'
  #blog-page-header{
background:'.  $ideal_options['s-post-header-bg']['background-color'] .';
background-image:url("'.  $ideal_options['s-post-header-bg']['background-image'] .'");
background-repeat:'.  $ideal_options['s-post-header-bg']['background-repeat'] .';
background-position:'.  $ideal_options['s-post-header-bg']['background-position'] .';
background-size:'.  $ideal_options['s-post-header-bg']['background-size'] .';
background-attachment:'.$ideal_options['s-post-header-bg']['background-attachment'].';
  }
  ';
}
if( $ideal_options['id-archives-switch-header'] == 1 ){
echo'
#archives-page-header{
background:'.  $ideal_options['archives-header-bg']['background-color'] .';
background-image:url("'.$ideal_options['archives-header-bg']['background-image'] .'");
background-repeat:'.  $ideal_options['archives-header-bg']['background-repeat'] .';
background-position:'. $ideal_options['archives-header-bg']['background-position'] .';
background-size:'.  $ideal_options['archives-header-bg']['background-size'] .';
background-attachment:'.$ideal_options['archives-header-bg']['background-attachment'].';
}
';
}
/*-------------------------------------------------------------------------
#                                    forms                                #
-------------------------------------------------------------------------*/
echo'
.id-primary,body[data-form-submit="regular"], input[type=submit],.uk-checkbox:checked, .uk-checkbox:indeterminate, .uk-radio:checked{
  background-color:'. $ideal_options['id-primary-color'] .';
}
.uk-input:focus, .uk-select:focus, .uk-textarea:focus{
  border-color:'. $ideal_options['id-primary-color'] .';
}
';
/*-------------------------------------------------------------------------
#                                    comments                             #
-------------------------------------------------------------------------*/
echo'
.bypostauthor .img-circle,ul>li .bypostauthor .img-circle,.children li .bypostauthor .img-circle{
  border-color:'. $ideal_options['id-primary-color'] .';
}
';