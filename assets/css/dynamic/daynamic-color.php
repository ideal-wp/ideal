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

if (!class_exists('Kirki')) {
    return;
}

$ideal_options = ideal_get_theme_options();

if (!empty($ideal_options['post-img-background'])) {
    $ideal_featured_options = $ideal_options['post-img-background'];
}else{
  $ideal_featured_options =null;
}
if (!empty($ideal_options['id_color_gradient']['from'])) {
    $ideal_gradient_prim_from = $ideal_options['id_color_gradient']['from'];
}if (!empty($ideal_options['id_color_gradient']['to'])) {
    $ideal_gradient_prim_to = $ideal_options['id_color_gradient']['to'];
}if (!empty($ideal_options['id_sub_color_gradient']['from'])) {
    $ideal_sub_gradient_from = $ideal_options['id_sub_color_gradient']['from'];
}if (!empty($ideal_options['id_sub_color_gradient']['to'])) {
    $ideal_sub_gradient_to = $ideal_options['id_sub_color_gradient']['to'];
}
/*-------------------------------------------------------------------------
#                         General Color background                       #
-------------------------------------------------------------------------*/

echo '
' . (!empty($ideal_options['id_primary_color']) ? '

.id-button-primary,.id-primary,.cart-count-nav,.ideal-woo-cart-nav .widget_shopping_cart a.button,
.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button
{
  background-color:' . $ideal_options['id_primary_color'] . ';
}
.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,
.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover
{
  background-color:' . $ideal_options['id_primary_color'] . ';
}
 
' : "") . '


.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,
.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover
{
 color: #fff
}



.id-button-primary,.id-primary,.cart-count-nav,#ideal-nav-c .ideal-woo-cart-nav .widget_shopping_cart a.button,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button
{
 color: #fff;
}

' . (!empty($ideal_options['id_secondary_color']) ? '

.id-secondary{
  background:' . $ideal_options['id_secondary_color'] . ';
}' : "") . '

' . (!empty($ideal_options['id_sub_additional_color']) ? '

.id-sub-color{
  background:' . $ideal_options['id_sub_additional_color'] . ';
}' : "") . '

' . (!empty($ideal_options['id_sub_plus_color']) ? '

.id_sub_plus_color{
  background:' . $ideal_options['id_sub_plus_color'] . ';
}' : "") . '

' . (!empty($ideal_options['id_color_gradient']['from']) ? '
.has-i-color-gradient-gradient-background{
  background:linear-gradient(135deg,' . $ideal_options['id_color_gradient']['from'] . ' 0%,' . $ideal_gradient_prim_to = $ideal_options['id_color_gradient']['to'] . ' 100%)

}' : "") . '

' . (!empty($ideal_options['id_sub_color_gradient']['from']) ? '
.has-i-sub-color-gradient-gradient-background{
  background:linear-gradient(135deg,' . $ideal_options['id_sub_color_gradient']['from'] . ' 0%,' . $ideal_gradient_prim_to = $ideal_options['id_sub_color_gradient']['to'] . ' 100%)
}' : "") . '

' . (!empty($ideal_options['id_sub_additional_color']) ? '
.has-sub-additional-color{
  color:' . $ideal_options['id_sub_additional_color'] . ';
}
' : "") . '
' . (!empty($ideal_options['id_secondary_color']) ? '
.has-secondary-color-color{
  color:' . $ideal_options['id_secondary_color'] . ';
}' : "") . '
' . (!empty($ideal_options['id_primary_color']) ? '
.has-primary-color-color{
  color:' . $ideal_options['id_primary_color'] . ';
}' : "") . '
' . (!empty($ideal_options['id_sub_plus_color']) ? '
.has-sub-additional-plus-color{
  color:' . $ideal_options['id_sub_plus_color'] . ';
}' : "") . '
' . (!empty($ideal_options['id_primary_color']) ? '
.has-primary-color-background-color{
  background:' . $ideal_options['id_primary_color'] . ';
}' : "") . '
' . (!empty($ideal_options['id_secondary_color']) ? '
.has-secondary-color-background-color{
  background:' . $ideal_options['id_secondary_color'] . ';
}' : "") . '
' . (!empty($ideal_options['id_sub_plus_color']) ? '
.has-sub-additional-plus-background-color{
  background:' . $ideal_options['id_sub_plus_color'] . ';
}' : "") . '
' . (!empty($ideal_options['id_sub_additional_color']) ? '
.has-sub-additional-background-color{
  background:' . $ideal_options['id_sub_additional_color'] . ';
}' : "") . '
';
/*------------------------------------------------------------------------
#                       body Color  background                           #
-------------------------------------------------------------------------*/
echo '
' . (!empty($ideal_options['body_b_color']) ? '

body {
  background: ' . $ideal_options['body_b_color'] . ';
}' : "") . '
' . (!empty($ideal_options['body_b_color']) ? '

body,.article-inner-wrap .id-excerpt p,.article-inner-wrap .uk-card-default,.uk-card-default{
  color: ' . $ideal_options['body_f_color'] . ';
}' : "") . '
' . (!empty($ideal_options['id_primary_color']) ? '

a{
  color:' . $ideal_options['id_primary_color'] . ';

}' : "") . '
' . (!empty($ideal_options['id_secondary_color']) ? '
a:hover{
  color:' . $ideal_options['id_secondary_color'] . ';
}' : "") . '

';
/*------------------------------------------------------------------------
#                       body Elements                         #
-------------------------------------------------------------------------*/
echo '
' . (!empty($ideal_options['id_secondary_color']) && !empty($ideal_options['id_primary_color']) ? '
address::before,blockquote:before{
  color: ' . $ideal_options['id_secondary_color'] . ';
}
blockquote,address{
  border-color: ' . $ideal_options['id_primary_color'] . ';
}' : "") . '
';
/*------------------------------------------------------------------------
#                        menu Color - background
-------------------------------------------------------------------------*/
echo '
' . (!empty($ideal_options['off-canvas-b-color']) ? '
#m-t-offcanvas.uk-offcanvas-bar{

  background:' . $ideal_options['off-canvas-b-color'] . '!important;
  color:' . $ideal_options['font-offcanvas'] . '!important;
}

.uk-offcanvas-overlay::before{
  background:' . $ideal_options['off-canvas-overlay-color'] . '!important;
}' : "") . '
';
/*-------------------------------------------------------------------------
#                     Page Header Color  background                       #
-------------------------------------------------------------------------*/
echo '
' . (!empty($ideal_options['blog-color-rgba-header-overlay']) ? '
#blog-page-header-overlay{
  background:' . $ideal_options['blog-color-rgba-header-overlay'] . ';
}' : "") . '
' . (!empty($ideal_options['archives-color-rgba-header-overlay']) ? '

#archives-header-overlay{
  background:' . $ideal_options['archives-color-rgba-header-overlay'] . ';
}' : "") . '
';
if ( $ideal_featured_options == false || $ideal_featured_options == null ) {

    echo '
  #blog-page-header{
' . (!empty($ideal_options['s-post-header-bg']['background-color']) ? '
background:' . $ideal_options['s-post-header-bg']['background-color'] . ';
' : "") . '
' . (!empty($ideal_options['s-post-header-bg']['background-image']) ? '
background-image:url("' . $ideal_options['s-post-header-bg']['background-image'].'");
background-repeat:' . $ideal_options['s-post-header-bg']['background-repeat'] . ';
background-position:' . ($ideal_options['s-post-header-bg']['background-position'] . ';
background-size:' . $ideal_options['s-post-header-bg']['background-size']) . ';
background-attachment:' . $ideal_options['s-post-header-bg']['background-attachment'] . '; }
  ' : "}") . '
  ';
}
if (!empty($ideal_options['id-archives-switch-header']) && $ideal_options['id-archives-switch-header'] == true) {
    echo '


#archives-page-header{
 ' . (!empty($ideal_options['archives-header-bg']['background-color']) ? '
background:' . $ideal_options['archives-header-bg']['background-color'] . ';' : "") . '
' . (!empty($ideal_options['archives-header-bg']['background-image']) ? '
background-image:url("' . $ideal_options['archives-header-bg']['background-image'] . '");
background-repeat:' . $ideal_options['archives-header-bg']['background-repeat'] . ';
background-position:' . $ideal_options['archives-header-bg']['background-position'] . ';
background-size:' . $ideal_options['archives-header-bg']['background-size'] . ';
background-attachment:' . $ideal_options['archives-header-bg']['background-attachment'] . ';
}' : "}") . '
';
}

/*-------------------------------------------------------------------------
#                                    forms                                #
-------------------------------------------------------------------------*/
echo '
' . (!empty($ideal_options['id_primary_color']) ? '

.id-primary,body[data-form-submit="regular"], input[type=submit],.uk-checkbox:checked, .uk-checkbox:indeterminate, .uk-radio:checked{
  background-color:' . $ideal_options['id_primary_color'] . ';
}
.uk-input:focus, .uk-select:focus, .uk-textarea:focus,input[type=text]:focus, input[type=email]:focus, input[type=password]:focus, input[type=tel]:focus, input[type=url]:focus, input[type=search]:focus, input[type=date]:focus, textarea:focus,.uk-textarea:focus,.uk-input:focus, .uk-select:focus, .uk-textarea:focus,.woocommerce input#coupon_code:focus{
  border-color:' . $ideal_options['id_primary_color'] . ';
}' : "") . '
';
/*-------------------------------------------------------------------------
#                                    comments                             #
-------------------------------------------------------------------------*/
echo '
' . (!empty($ideal_options['id_primary_color']) ? '
.bypostauthor .img-circle,ul>li .bypostauthor .img-circle,.children li .bypostauthor .img-circle{
  border-color:' . $ideal_options['id_primary_color'] . ';
}' : "") . '
';
