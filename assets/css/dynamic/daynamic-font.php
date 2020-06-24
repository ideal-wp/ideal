<?php
/**
 * Typography Dynamic style
 *
 * @package Ideal Theme
 * @subpackage Dynamic style
 * @since V1.0.0
 * @version 1.0.0
 *  - Body Font
 *  - Headers Typography
 *  - menu Typography
 *  - page Header Typography
 *
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
if (!class_exists('Kirki')) {
    return;
}
$ideal_options = ideal_get_theme_options();

/**
 * Elementor heading line height will inherit the them
 */
if (!empty($ideal_options['ideal_h1_family']['line-height'])) {
    $ideal_h1_lineheight = $ideal_options['ideal_h1_family']['line-height'];
} else {
    $ideal_h1_lineheight = '1.7';
}

if (!empty($ideal_options['ideal_h2_family']['line-height'])) {
    $ideal_h2_lineheight = $ideal_options['ideal_h2_family']['line-height'];

} else {
    $ideal_h2_lineheight = '1.7';
}

if (!empty($ideal_options['ideal_h3_family']['line-height'])) {
    $ideal_h3_lineheight = $ideal_options['ideal_h3_family']['line-height'];

} else {
    $ideal_h3_lineheight = '1.7';
}

if (!empty($ideal_options['ideal_h4_family']['line-height'])) {
    $ideal_h4_lineheight = $ideal_options['ideal_h4_family']['line-height'];

} else {
    $ideal_h4_lineheight = '1.7';
}
if (!empty($ideal_options['ideal_h5_family']['line-height'])) {
    $ideal_h5_lineheight = $ideal_options['ideal_h5_family']['line-height'];
} else {
    $ideal_h5_lineheight = '1.7';
}
if (!empty($ideal_options['ideal_h6_family']['line-height'])) {
    $ideal_h6_lineheight = $ideal_options['ideal_h6_family']['line-height'];
} else {
    $ideal_h6_lineheight = '1.7';
}

/*-------------------------------------------------------------------------
#                              Body Font                                 #
-------------------------------------------------------------------------*/

?>
.elementor-widget-heading h1.elementor-heading-title {
line-height: <?php echo $ideal_h1_lineheight; ?>;
}

.elementor-widget-heading h2.elementor-heading-title {
line-height: <?php echo $ideal_h2_lineheight; ?>;
}

.elementor-widget-heading h3.elementor-heading-title {
line-height: <?php echo $ideal_h3_lineheight; ?>;
}

.elementor-widget-heading h4.elementor-heading-title {
line-height: <?php echo $ideal_h4_lineheight; ?>;
}

.elementor-widget-heading h5.elementor-heading-title {
line-height: <?php echo $ideal_h5_lineheight; ?>;
}

.elementor-widget-heading h6.elementor-heading-title {
line-height: <?php echo $ideal_h6_lineheight; ?>;
}
<?php

if (!empty($ideal_options['h1-small-desktop-font-size'])) {
    $ideal_h1_small_desktop_font_size_system = $ideal_options['h1-small-desktop-font-size'];
} else {
    $ideal_h1_small_desktop_font_size_system = '90';
}
if (!empty($ideal_options['h1-tablet-font-size'])) {

    $ideal_h1_tablet_font_size_system = $ideal_options['h1-tablet-font-size'];
} else {
    $ideal_h1_tablet_font_size_system = '90';
}
if (isset($ideal_options['h1-phone-font-size'])) {

    $ideal_h1_phone_font_size_system = $ideal_options['h1-phone-font-size'];
} else {

    $ideal_h1_phone_font_size_system = '90';
}

if (!empty($ideal_options['h2-small-desktop-font-size'])) {
    $ideal_h2_small_desktop_font_size_system = $ideal_options['h2-small-desktop-font-size'];
} else {
    $ideal_h2_small_desktop_font_size_system = '90';
}
if (!empty($ideal_options['h2-tablet-font-size'])) {

    $ideal_h2_tablet_font_size_system = $ideal_options['h2-tablet-font-size'];
} else {
    $ideal_h2_tablet_font_size_system = '90';
}
if (!empty($ideal_options['h2-phone-font-size'])) {

    $ideal_h2_phone_font_size_system = $ideal_options['h2-phone-font-size'];
} else {

    $ideal_h2_phone_font_size_system = '90';
}

if (!empty($ideal_options['ideal_h1_family']['font-size'])) {
    $ideal_h1_font_size = intval($ideal_options['ideal_h1_family']['font-size']);
} else {
    $ideal_h1_font_size = '30px';
}

if (!empty($ideal_options['h3-small-desktop-font-size'])) {
    $ideal_h3_small_desktop_font_size_system = $ideal_options['h3-small-desktop-font-size'];
} else {
    $ideal_h3_small_desktop_font_size_system = '90';
}
if (!empty($ideal_options['h3-tablet-font-size'])) {

    $ideal_h3_tablet_font_size_system = $ideal_options['h3-tablet-font-size'];
} else {
    $ideal_h3_tablet_font_size_system = '90';
}
if (!empty($ideal_options['h3-phone-font-size'])) {

    $ideal_h3_phone_font_size_system = $ideal_options['h3-phone-font-size'];
} else {

    $ideal_h3_phone_font_size_system = '90';
}
if (!empty($ideal_options['h4-small-desktop-font-size'])) {
    $ideal_h4_small_desktop_font_size_system = $ideal_options['h4-small-desktop-font-size'];
} else {
    $ideal_h4_small_desktop_font_size_system = '95';
}
if (!empty($ideal_options['h4-tablet-font-size'])) {

    $ideal_h4_tablet_font_size_system = $ideal_options['h4-tablet-font-size'];
} else {
    $ideal_h4_tablet_font_size_system = '95';
}
if (!empty($ideal_options['h4-phone-font-size'])) {

    $ideal_h4_phone_font_size_system = $ideal_options['h4-phone-font-size'];
} else {

    $ideal_h4_phone_font_size_system = '95';
}
if (!empty($ideal_options['h5-small-desktop-font-size'])) {
    $ideal_h5_small_desktop_font_size_system = $ideal_options['h5-small-desktop-font-size'];
} else {
    $ideal_h5_small_desktop_font_size_system = '95';
}
if (!empty($ideal_options['h5-tablet-font-size'])) {

    $ideal_h5_tablet_font_size_system = $ideal_options['h5-tablet-font-size'];
} else {
    $ideal_h5_tablet_font_size_system = '95';
}
if (!empty($ideal_options['h5-phone-font-size'])) {

    $ideal_h5_phone_font_size_system = $ideal_options['h5-phone-font-size'];
} else {

    $ideal_h5_phone_font_size_system = '95';
}

if (!empty($ideal_options['h6-small-desktop-font-size'])) {
    $ideal_h6_small_desktop_font_size_system = $ideal_options['h6-small-desktop-font-size'];
} else {
    $ideal_h6_small_desktop_font_size_system = '95';
}
if (!empty($ideal_options['h6-tablet-font-size'])) {

    $ideal_h6_tablet_font_size_system = $ideal_options['h6-tablet-font-size'];
} else {
    $ideal_h6_tablet_font_size_system = '95';
}
if (!empty($ideal_options['h6-phone-font-size'])) {

    $ideal_h6_phone_font_size_system = $ideal_options['h6-phone-font-size'];
} else {

    $ideal_h6_phone_font_size_system = '95';
}

$ideal_h1_desktop_size = intval($ideal_h1_font_size) * intval($ideal_h1_small_desktop_font_size_system) / 100;
$ideal_h1_tablet_size = intval($ideal_h1_font_size) * intval($ideal_h1_tablet_font_size_system) / 100;
$h1_phone_size = intval($ideal_h1_font_size) * intval($ideal_h1_phone_font_size_system) / 100;

if (!empty($ideal_options['ideal_h2_family']['font-size'])) {
    $ideal_h2_font_size = intval($ideal_options['ideal_h2_family']['font-size']);
} else {
    $ideal_h2_font_size = '25px';
}

$ideal_h2_desktop_size = intval($ideal_h2_font_size) * intval($ideal_h2_small_desktop_font_size_system) / 100;
$h2_tablet_size = intval($ideal_h2_font_size) * intval($ideal_h2_tablet_font_size_system) / 100;
$h2_phone_size = intval($ideal_h2_font_size) * intval($ideal_h2_phone_font_size_system) / 100;

if (!empty($ideal_options['ideal_h3_family']['font-size'])) {
    $ideal_h3_font_size = intval($ideal_options['ideal_h3_family']['font-size']);
} else {
    $ideal_h3_font_size = '20px';
}

$ideal_h3_desktop_size = intval($ideal_h3_font_size) * intval($ideal_h3_small_desktop_font_size_system) / 100;
$ideal_h3_tablet_size = intval($ideal_h3_font_size) * intval($ideal_h3_tablet_font_size_system) / 100;
$ideal_h3_phone_size = intval($ideal_h3_font_size) * intval($ideal_h3_phone_font_size_system) / 100;

if (!empty($ideal_options['ideal_h4_family']['font-size'])) {
    $ideal_h4_font_size = intval($ideal_options['ideal_h4_family']['font-size']);
} else {
    $ideal_h4_font_size = '18px';
}

$ideal_h4_desktop_size = intval($ideal_h4_font_size) * intval($ideal_h4_small_desktop_font_size_system) / 100;
$ideal_h4_tablet_size = intval($ideal_h4_font_size) * intval($ideal_h4_tablet_font_size_system) / 100;
$ideal_h4_phone_size = intval($ideal_h4_font_size) * intval($ideal_h4_phone_font_size_system) / 100;

if (!empty($ideal_options['ideal_h5_family']['font-size'])) {
    $ideal_h5_font_size = intval($ideal_options['ideal_h5_family']['font-size']);
} else {
    $ideal_h5_font_size = '16px';
}

$ideal_h5_desktop_size = intval($ideal_h5_font_size) * intval($ideal_h5_small_desktop_font_size_system) / 100;
$ideal_h5_tablet_size = intval($ideal_h5_font_size) * intval($ideal_h5_tablet_font_size_system) / 100;
$ideal_h5_phone_size = intval($ideal_h5_font_size) * intval($ideal_h5_phone_font_size_system) / 100;

if (!empty($ideal_options['ideal_h6_family']['font-size'])) {
    $ideal_h6_font_size = intval($ideal_options['ideal_h6_family']['font-size']);
} else {
    $ideal_h6_font_size = '14px';
}

$ideal_h6_desktop_size = intval($ideal_h6_font_size) * intval($ideal_h6_small_desktop_font_size_system) / 100;
$ideal_h6_tablet_size = intval($ideal_h6_font_size) * intval($ideal_h6_tablet_font_size_system) / 100;
$ideal_h6_phone_size = intval($ideal_h6_font_size) * intval($ideal_h6_phone_font_size_system) / 100;

/*  small desktop  */
?>
<?php
echo '
@media only screen and (max-width: 1300px) and (min-width: 1000px) {
  h1,.elementor-widget-heading h1.elementor-heading-title{
      font-size:' . $ideal_h1_desktop_size . 'px;

      line-height:170%;
    }

    h2,.elementor-widget-heading h2.elementor-heading-title{
      font-size:' . $ideal_h2_desktop_size . 'px;
      line-height:150%;

    }

    h3,.elementor-widget-heading h3.elementor-heading-title{
      font-size:' . $ideal_h3_desktop_size . 'px;
      line-height:140%;

    }

    h4,.elementor-widget-heading h4.elementor-heading-title{
      font-size:' . $ideal_h4_desktop_size . 'px;
      line-height:140%;

    }

    h5,.elementor-widget-heading h5.elementor-heading-title{
      font-size:' . $ideal_h5_desktop_size . 'px;
      line-height:140%;

    }

    h6,.elementor-widget-heading h6.elementor-heading-title{
      font-size:' . $ideal_h6_desktop_size . 'px;
      line-height:140%;

    }

}
/*  tablet  */

@media only screen and (max-width: 999px) and (min-width: 690px) {

    h1,.elementor-widget-heading h1.elementor-heading-title{
      font-size:' . $ideal_h1_tablet_size . 'px;
      line-height:160%;
    }

    h2,.elementor-widget-heading h2.elementor-heading-title{
      font-size:' . $h2_tablet_size . 'px;
      line-height:160%;

    }

    h3,.elementor-widget-heading h3.elementor-heading-title{
      font-size:' . $ideal_h3_tablet_size . 'px;
      line-height:140%;

    }

    h4,.elementor-widget-heading h4.elementor-heading-title{
      font-size:' . $ideal_h4_tablet_size . 'px;
      line-height:140%;

    }

    h5,.elementor-widget-heading h5.elementor-heading-title{
      font-size:' . $ideal_h5_tablet_size . 'px;
      line-height:140%;

    }

    h6,.elementor-widget-heading h6.elementor-heading-title{
      font-size:' . $ideal_h6_tablet_size . 'px;
      line-height:140%;

    }

}
/*    phone    */
@media only screen and (max-width: 690px) {

    h1,.elementor-widget-heading h1.elementor-heading-title{
      font-size:' . $h1_phone_size . 'px;
      line-height:150%;

    }

    h2,.elementor-widget-heading h2.elementor-heading-title{
      font-size:' . $h2_phone_size . 'px;
      line-height:140%;

    }

    h3,.elementor-widget-heading h3.elementor-heading-title{
      font-size:' . $ideal_h3_phone_size . 'px;
      line-height:120%;

    }

    h4,.elementor-widget-heading h4.elementor-heading-title{
      font-size:' . $ideal_h4_phone_size . 'px;
      line-height:120%;

    }

    h5,.elementor-widget-heading h5.elementor-heading-title{
      font-size:' . $ideal_h5_phone_size . 'px;
      line-height:120%;

    }

    h6,.elementor-widget-heading h6.elementor-heading-title{
      font-size:' . $ideal_h6_phone_size . 'px;
      line-height:120%;

    }

}
'; ?>
<?php
/*-=========================[ menu ]=====================- */

echo '
#ideal-nav-c ,#ideal-nav-c a {
   '
    . (!empty($ideal_options['header-font-f']['color']) ?
    'color: ' . $ideal_options['header-font-f']['color'] . ';' : null) . '
  ' . (!empty($ideal_options['header-font-f']['font-family']) ? '
  font-family: ' . $ideal_options['header-font-f']['font-family'] . ';' : null) . '
  ' . (!empty($ideal_options['header-font-f']['font-size']) ? '
  font-size:' . $ideal_options['header-font-f']['font-size'] . ';' : null) . '
  ' . (!empty($ideal_options['header-font-f']['line-height']) ? '
  line-height: ' . $ideal_options['header-font-f']['line-height'] . ';' : null) . '
  ' . (!empty($ideal_options['header-font-f']['letter-spacing']) ? '
  letter-spacing: ' . $ideal_options['header-font-f']['letter-spacing'] . ';' : null) . '
  ' . (!empty($ideal_options['header-font-f']['text-align']) ? '
  text-align: ' . $ideal_options['header-font-f']['text-align'] . ';' : null) . '
  ' . (!empty($ideal_options['header-font-f']['text-transform']) ? '
  text-transform:' . $ideal_options['header-font-f']['text-transform'] . ';' : null) . '
  ' . (!empty($ideal_options['header-font-f']['font-weight']) ? '
  font-weight:' . $ideal_options['header-font-f']['font-weight'] . ';' : null) . '

}
' . (!empty($ideal_options['navbar-light-color-moode']) ? '
.uk-light #ideal-nav-c .uk-navbar-nav>li>a{
  color:' . $ideal_options['navbar-light-color-moode'] . ';
}' : null) . '

' . (!empty($ideal_options['navbar-dark-color-moode']) ? '

.uk-dark  #ideal-nav-c .uk-navbar-nav>li>a{
  color:' . $ideal_options['navbar-dark-color-moode'] . ';
}' : null) . '

' . (!empty($ideal_options['header-font-f']) ? '
.uk-active #ideal-nav-c .uk-navbar-nav>li>a{
  color:' . $ideal_options['header-font-f']['color'] . ';
}' : null) . '
' . (!empty($ideal_options['menu-header-link-hover']['hover']) ? '
#ideal-nav-c .uk-navbar-nav>li>a:hover{
  color:' . $ideal_options['menu-header-link-hover']['hover'] . ';
}' : null) . '
' . (!empty($ideal_options['menu-header-link-hover']['active']) ? '
#ideal-nav-c .uk-navbar-nav>li.uk-active>a{
  color:' . $ideal_options['menu-header-link-hover']['active'] . ';
}' : null) . '
.ideal-Logo a,.ideal-Logo h2{' . (!empty($ideal_options['logo-font-no-img']['color']) ? '
  color:' . $ideal_options['logo-font-no-img']['color'] . ';' : null) . '
  ' . (!empty($ideal_options['logo-font-no-img']['font-family']) ? '
  font-family:' . $ideal_options['logo-font-no-img']['font-family'] . ';' : null) . '
  ' . (!empty($ideal_options['logo-font-no-img']['font-size']) ? '
  font-size:' . $ideal_options['logo-font-no-img']['font-size'] . ';' : null) . '
  ' . (!empty($ideal_options['logo-font-no-img']['line-height']) ? '
  line-height:' . $ideal_options['logo-font-no-img']['line-height'] . ';' : null) . '
  ' . (!empty($ideal_options['logo-font-no-img']['letter-spacing']) ? '
  letter-spacing:' . $ideal_options['logo-font-no-img']['letter-spacing'] . ';' : null) . '
  ' . (!empty($ideal_options['logo-font-no-img']['text-align']) ? '
  text-align:' . $ideal_options['logo-font-no-img']['text-align'] . ';' : null) . '
  ' . (!empty($ideal_options['logo-font-no-img']['text-transform']) ? '
  text-transform:' . $ideal_options['logo-font-no-img']['text-transform'] . ';' : null) . '  ' . (!empty($ideal_options['logo-font-no-img']['font-weight']) ? '
  font-weight:' . $ideal_options['logo-font-no-img']['font-weight'] . ';' : null) . '
}

#m-t-offcanvas .uk-nav-default>li>a,.uk-nav-default>li.uk-active>a,.uk-offcanvas-bar .uk-nav-default .uk-nav-sub li.uk-active>a,.uk-offcanvas-bar .uk-nav-default .uk-nav-sub a{
  ' . (!empty($ideal_options['font-offcanvas']['color']) ? '
  color: ' . $ideal_options['font-offcanvas']['color'] . ';' : null) . '
  ' . (!empty($ideal_options['font-offcanvas']['font-family']) ? '
  font-family:' . $ideal_options['font-offcanvas']['font-family'] . ';' : null) . '
  ' . (!empty($ideal_options['font-offcanvas']['font-size']) ? '
  font-size: ' . $ideal_options['font-offcanvas']['font-size'] . ';' : null) . '
  ' . (!empty($ideal_options['font-offcanvas']['line-height']) ? '
  line-height:' . $ideal_options['font-offcanvas']['line-height'] . ';' : null) . '
  ' . (!empty($ideal_options['font-offcanvas']['letter-spacing']) ? '
  letter-spacing:' . $ideal_options['font-offcanvas']['letter-spacing'] . ';' : null) . '
  ' . (!empty($ideal_options['font-offcanvas']['text-align']) ? '
  text-align:' . $ideal_options['font-offcanvas']['text-align'] . ';' : null) . '
  ' . (!empty($ideal_options['font-offcanvas']['text-transform']) ? '
  text-transform:' . $ideal_options['font-offcanvas']['text-transform'] . ';' : null) . '
  ' . (!empty($ideal_options['font-offcanvas']['font-weight']) ? '
  font-weight:' . $ideal_options['font-offcanvas']['font-weight'] . ';' : null) . '
}
' . (!empty($ideal_options['font-offcanvas']['color']) ? '
.uk-offcanvas-bar .uk-nav-parent-icon>.uk-parent>a::after{
  color:' . $ideal_options['font-offcanvas']['color'] . '!important;
}' : null) . '
';
/*-=========================[ Page Header ]=====================-*/
echo '
.entry-title{' . (!empty($ideal_options['blog-header-font']['color']) ? '
  color:' . $ideal_options['blog-header-font']['color'] . ';' : null) . '
  font-family:' . $ideal_options['blog-header-font']['font-family'] . ';
  font-size: ' . $ideal_options['blog-header-font']['font-size'] . ';
  line-height:' . $ideal_options['blog-header-font']['line-height'] . ';
  ' . (!empty($ideal_options['blog-header-font']['letter-spacing']) ? '
  letter-spacing:' . $ideal_options['blog-header-font']['letter-spacing'] . ';' : null) . '
  ' . (!empty($ideal_options['blog-header-font']['text-align']) ? '
  text-align:' . $ideal_options['blog-header-font']['text-align'] . ';' : null) . '
  ' . (!empty($ideal_options['blog-header-font']['text-transform']) ? '
  text-transform:' . $ideal_options['blog-header-font']['text-transform'] . ';' : null) . '
  font-weight:' . $ideal_options['blog-header-font']['font-weight'] . ';
  ' . (!empty($ideal_options['blog-header-font']['word-spacing']) ? '
  word-spacing:' . $ideal_options['blog-header-font']['word-spacing'] . ';' : null) . '
}
' . (!empty($ideal_options['header-text-color']) ? '
.id-bh-inner-wrap{
  
  color:' . $ideal_options['header-text-color'] . ';
}' : null) . '

' . (!empty($ideal_options['header-text-color']) ? '
.id-bh-inner-wrap a{
  color:' . $ideal_options['header-text-color'] . ';
}' : null) . '

.ar-entry-title h1{
  ' . (!empty($ideal_options['archives-header-font']['color']) ? '
  color:' . $ideal_options['archives-header-font']['color'] . ';' : null) . '
  ' . (!empty($ideal_options['archives-header-font']['font-family']) ? '
  font-family:' . $ideal_options['archives-header-font']['font-family'] . ';' : null) . '
  ' . (!empty($ideal_options['archives-header-font']['font-size']) ? '
  font-size: ' . $ideal_options['archives-header-font']['font-size'] . ';' : null) . '
  ' . (!empty($ideal_options['archives-header-font']['lline-height']) ? '
  line-height:' . $ideal_options['archives-header-font']['line-height'] . ';' : null) . '
  ' . (!empty($ideal_options['archives-header-font']['letter-spacing']) ? '
  letter-spacing:' . $ideal_options['archives-header-font']['letter-spacing'] . ';' : null) . '
  ' . (!empty($ideal_options['archives-header-font']['text-align']) ? '
  text-align:' . $ideal_options['archives-header-font']['text-align'] . ';' : null) . '
  ' . (!empty($ideal_options['archives-header-font']['text-transform']) ? '
  text-transform:' . $ideal_options['archives-header-font']['text-transform'] . ';' : null) . '
  ' . (!empty($ideal_options['archives-header-font']['font-weight']) ? '
  font-weight:' . $ideal_options['archives-header-font']['font-weight'] . ';' : null) . '
  ' . (!empty($ideal_options['archives-header-font']['word-spacing']) ? '
  word-spacing:' . $ideal_options['archives-header-font']['word-spacing'] . ';' : null) . '
}

' . (!empty($ideal_options['ar-header-text-color']) ? '
.id-archives-inner-wrap,.id-archives-inner-wrap em{
  color: ' . $ideal_options['ar-header-text-color'] . ';
}' : null) . '


' . (!empty($ideal_options['ar-header-text-color'])? '
.id-archives-inner-wrap a{ 
  color:' . $ideal_options['ar-header-text-color'] . ';
}' : null) . '
';

/*-=========================[ Page Header ]=====================-*/