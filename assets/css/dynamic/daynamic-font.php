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

$ideal_options = get_ideal_theme_options();
/*-------------------------------------------------------------------------
#                              Body Font                                 #
-------------------------------------------------------------------------*/

echo '
body{'.(!empty($ideal_options['ideal_body_font_family']['font-family'])? '
  font-family:'     . $ideal_options['ideal_body_font_family']['font-family'] . ';': null ) .''.(!empty($ideal_options['ideal_body_font_family']['font-size'])? '
  font-size:'       . $ideal_options['ideal_body_font_family']['font-size'] . ';': null ) .' '.(!empty($ideal_options['ideal_body_font_family']['line-height'])? '
  line-height:'     . $ideal_options['ideal_body_font_family']['line-height'] . ';': 
  null ) .'
  '.(!empty($ideal_options['ideal_body_font_family']['text-align'])? '
  text-align:'      . $ideal_options['ideal_body_font_family']['text-align'] . ';': null ) .'
  '.(!empty($ideal_options['ideal_body_font_family']['font-weight'])? '
  font-weight:'     . $ideal_options['ideal_body_font_family']['font-weight'] . ';': 
  null ) .'
  '.(!empty($ideal_options['ideal_body_font_family']['letter-spacing'])? '
  letter-spacing:'  . $ideal_options['ideal_body_font_family']['letter-spacing'] . ';':null ).'
}
p.elementor-heading-title{
  '.(!empty($ideal_options['ideal_body_font_family']['line-height'])? '
  line-height:'     . $ideal_options['ideal_body_font_family']['line-height'] . ';': 
  null ) .'
}
';
?>
@media only screen and (max-width: 1300px) and (min-width: 1000px) {
  body {
    font-size: '';
    line-height: '';
  }
}

@media only screen and (max-width: 999px) and (min-width: 690px) {
  body {

    font-size: '';
    line-height: '';
  }

}

@media only screen and (max-width: 690px) {
  body {

    font-size: '';
    line-height: '';
  }

}
<?php
/*------------------------------------------------------------------------
#                             Headers Typography                         #
-------------------------------------------------------------------------*/
echo '
h1{'.(!empty($ideal_options['ideal_h1_family']['font-family'])? '
    font-family:' . $ideal_options['ideal_h1_family']['font-family'] . ';':null ).'
    '.(!empty($ideal_options['ideal_h1_family']['font-size'])? '
    font-size:' . $ideal_options['ideal_h1_family']['font-size'] . ';':null ).'
    '.(!empty($ideal_options['ideal_h1_family']['line-height'])? '
    line-height:' . $ideal_options['ideal_h1_family']['line-height'] . ';':null ).'
    '.(!empty($ideal_options['ideal_h1_family']['text-align'])? '
    text-align:' . $ideal_options['ideal_h1_family']['text-align'] . ';':null ).'
    '.(!empty($ideal_options['ideal_h1_family']['font-weight'])? '
    font-weight:' . $ideal_options['ideal_h1_family']['font-weight'] . ';':null ).'
    '.(!empty($ideal_options['ideal_h1_family']['letter-spacing'])? '
    letter-spacing:' . $ideal_options['ideal_h1_family']['letter-spacing'] . ';':null ).'
}

h2{'.(!empty($ideal_options['ideal_h2_family']['font-family'])? '
  font-family:' . $ideal_options['ideal_h2_family']['font-family'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h2_family']['font-size'])? '
  font-size:' . $ideal_options['ideal_h2_family']['font-size'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h2_family']['line-height'])? '
  line-height:' . $ideal_options['ideal_h2_family']['line-height'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h2_family']['text-align'])? '
  text-align:' . $ideal_options['ideal_h2_family']['text-align'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h2_family']['font-weight'])? '
  font-weight:' . $ideal_options['ideal_h2_family']['font-weight'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h2_family']['letter-spacing'])? '
  letter-spacing:' . $ideal_options['ideal_h2_family']['letter-spacing'] . ';':null ).'

}

h3{
  '.(!empty($ideal_options['ideal_h3_family']['font-family'])? '
  font-family:' . $ideal_options['ideal_h3_family']['font-family'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h3_family']['font-size'])? '
  font-size:' . $ideal_options['ideal_h3_family']['font-size'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h3_family']['line-height'])? '
  line-height:' . $ideal_options['ideal_h3_family']['line-height'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h3_family']['text-align'])? '
  text-align:' . $ideal_options['ideal_h3_family']['text-align'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h3_family']['font-weight'])? '
  font-weight:' . $ideal_options['ideal_h3_family']['font-weight'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h3_family']['letter-spacing'])? '
  letter-spacing:' . $ideal_options['ideal_h3_family']['letter-spacing'] . ';':null ).'
}

h4{
  '.(!empty($ideal_options['ideal_h4_family']['font-family'])? '
  font-family:' . $ideal_options['ideal_h4_family']['font-family'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h4_family']['font-size'])? '
  font-size:' . $ideal_options['ideal_h4_family']['font-size'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h4_family']['line-height'])? '
  line-height:' . $ideal_options['ideal_h4_family']['line-height'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h4_family']['text-align'])? '
  text-align:' . $ideal_options['ideal_h4_family']['text-align'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h4_family']['font-weight'])? '
  font-weight:' . $ideal_options['ideal_h4_family']['font-weight'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h4_family']['letter-spacing'])? '
  letter-spacing:' . $ideal_options['ideal_h4_family']['letter-spacing'] . ';':null ).'
}

h5{'.(!empty($ideal_options['ideal_h5_family']['font-family'])? '
  font-family:' . $ideal_options['ideal_h5_family']['font-family'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h5_family']['font-size'])? '
  font-size:' . $ideal_options['ideal_h5_family']['font-size'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h5_family']['line-height'])? '
  line-height:' . $ideal_options['ideal_h5_family']['line-height'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h5_family']['text-align'])? '
  text-align:' . $ideal_options['ideal_h5_family']['text-align'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h5_family']['font-weight'])? '
  font-weight:' . $ideal_options['ideal_h5_family']['font-weight'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h5_family']['letter-spacing'])? '
  letter-spacing:' . $ideal_options['ideal_h5_family']['letter-spacing'] . ';':null ).'
}

h6{'.(!empty($ideal_options['ideal_h6_family']['font-family'])? '
  font-family:' . $ideal_options['ideal_h6_family']['font-family'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h6_family']['font-size'])? '
  font-size:' . $ideal_options['ideal_h6_family']['font-size'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h6_family']['line-height'])? '
  line-height:' . $ideal_options['ideal_h6_family']['line-height'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h6_family']['text-align'])? '
  text-align:' . $ideal_options['ideal_h6_family']['text-align'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h6_family']['font-weight'])? '
  font-weight:' . $ideal_options['ideal_h6_family']['font-weight'] . ';':null ).'
  '.(!empty($ideal_options['ideal_h6_family']['letter-spacing'])? '
  letter-spacing:' . $ideal_options['ideal_h6_family']['letter-spacing'] . ';':null ).'
}
';


/**
 * Elementor heading line height will inherit the them
 */
$h1_lineheight = $ideal_options['ideal_h1_family']['line-height']; 
$h2_lineheight = $ideal_options['ideal_h2_family']['line-height'];
$h3_lineheight = $ideal_options['ideal_h3_family']['line-height'];
$h4_lineheight = $ideal_options['ideal_h4_family']['line-height'];
$h5_lineheight = $ideal_options['ideal_h5_family']['line-height']; 
$h6_lineheight = $ideal_options['ideal_h6_family']['line-height'];
?>
.elementor-widget-heading h1.elementor-heading-title {
			line-height: <?php echo $h1_lineheight; ?>;
		}
		
		.elementor-widget-heading h2.elementor-heading-title {
			line-height: <?php echo $h2_lineheight; ?>;
		}
		
		.elementor-widget-heading h3.elementor-heading-title {
			line-height: <?php echo $h3_lineheight; ?>;
		}
		
		.elementor-widget-heading h4.elementor-heading-title {
			line-height: <?php echo $h4_lineheight; ?>;
		}
		
		.elementor-widget-heading h5.elementor-heading-title {
			line-height: <?php echo $h5_lineheight; ?>;
		}
	
		.elementor-widget-heading h6.elementor-heading-title {
			line-height: <?php echo $h6_lineheight; ?>;
		}
<?php

if(!empty($ideal_options['ideal_h1_family']['font-size'])){
$h1_font_size    = intval( $ideal_options['ideal_h1_family']['font-size'] );
}else{
  $h1_font_size = null;
}

$h1_desktop_size = intval($h1_font_size * intval( $ideal_options['h1-small-desktop-font-size'] ) / 100);
$h1_tablet_size  = intval($h1_font_size * intval( $ideal_options['h1-tablet-font-size'] )/ 100);
$h1_phone_size   = intval( $h1_font_size * intval( $ideal_options['h1-phone-font-size'] )/ 100);


if(!empty($ideal_options['ideal_h2_family']['font-size'])){
  $h2_font_size    = intval( $ideal_options['ideal_h2_family']['font-size'] );
  }else{
    $h2_font_size = null;
  }
  
$h2_desktop_size = intval($h2_font_size * intval( $ideal_options['h2-small-desktop-font-size'] ) / 100);
$h2_tablet_size  = intval($h2_font_size * intval( $ideal_options['h2-tablet-font-size'] )/ 100);
$h2_phone_size   = intval( $h2_font_size * intval( $ideal_options['h2-phone-font-size'] )/ 100);

if(!empty($ideal_options['ideal_h3_family']['font-size'])){
  $h3_font_size    = intval( $ideal_options['ideal_h3_family']['font-size'] );
  }else{
    $h3_font_size = null;
}
    
$h3_desktop_size = intval($h3_font_size * intval( $ideal_options['h3-small-desktop-font-size'] ) / 100);
$h3_tablet_size  = intval($h3_font_size * intval( $ideal_options['h3-tablet-font-size'] )/ 100);
$h3_phone_size   = intval( $h3_font_size * intval( $ideal_options['h3-phone-font-size'] )/ 100);

if(!empty($ideal_options['ideal_h4_family']['font-size'])){
  $h4_font_size    = intval( $ideal_options['ideal_h4_family']['font-size'] );
  }else{
    $h4_font_size = null;
}
    
$h4_desktop_size = intval($h4_font_size * intval( $ideal_options['h4-small-desktop-font-size'] ) / 100);
$h4_tablet_size  = intval($h4_font_size * intval( $ideal_options['h4-tablet-font-size'] )/ 100);
$h4_phone_size   = intval( $h4_font_size * intval( $ideal_options['h4-phone-font-size'] )/ 100);


if(!empty($ideal_options['ideal_h5_family']['font-size'])){
  $h5_font_size    = intval( $ideal_options['ideal_h5_family']['font-size'] );
  }else{
    $h5_font_size = null;
}
    
$h5_desktop_size = intval($h5_font_size * intval( $ideal_options['h5-small-desktop-font-size'] ) / 100);
$h5_tablet_size  = intval($h5_font_size * intval( $ideal_options['h5-tablet-font-size'] )/ 100);
$h5_phone_size   = intval( $h5_font_size * intval( $ideal_options['h5-phone-font-size'] )/ 100);

if(!empty($ideal_options['ideal_h6_family']['font-size'])){
  $h6_font_size    = intval( $ideal_options['ideal_h6_family']['font-size'] );
  }else{
    $h6_font_size = null;
}
    
$h6_desktop_size = intval($h6_font_size * intval( $ideal_options['h6-small-desktop-font-size'] ) / 100);
$h6_tablet_size  = intval($h6_font_size * intval( $ideal_options['h6-tablet-font-size'] )/ 100);
$h6_phone_size   = intval( $h6_font_size * intval( $ideal_options['h6-phone-font-size'] )/ 100);






/*  small desktop  */
?>
<?php
echo'
@media only screen and (max-width: 1300px) and (min-width: 1000px) {
  h1,.elementor-widget-heading h1.elementor-heading-title{
      font-size:'. $h1_desktop_size .'px;
      
      line-height:170%;
    }

    h2,.elementor-widget-heading h2.elementor-heading-title{
      font-size:'. $h2_desktop_size .'px; 
      line-height:150%;

    }

    h3,.elementor-widget-heading h3.elementor-heading-title{
      font-size:'. $h3_desktop_size .'px; 
      line-height:140%;

    }

    h4,.elementor-widget-heading h4.elementor-heading-title{
      font-size:'. $h4_desktop_size .'px; 
      line-height:140%;

    }

    h5,.elementor-widget-heading h5.elementor-heading-title{
      font-size:'. $h5_desktop_size .'px;
      line-height:140%;

    }

    h6,.elementor-widget-heading h6.elementor-heading-title{
      font-size:'. $h6_desktop_size .'px; 
      line-height:140%;

    }

}
/*  tablet  */

@media only screen and (max-width: 999px) and (min-width: 690px) {

    h1,.elementor-widget-heading h1.elementor-heading-title{
      font-size:'.$h1_tablet_size.'px;
      line-height:160%;
    }

    h2,.elementor-widget-heading h2.elementor-heading-title{
      font-size:'.$h2_tablet_size.'px;
      line-height:160%;

    }

    h3,.elementor-widget-heading h3.elementor-heading-title{
      font-size:'.$h3_tablet_size.'px;
      line-height:140%;

    }

    h4,.elementor-widget-heading h4.elementor-heading-title{
      font-size:'.$h4_tablet_size.'px;
      line-height:140%;

    }

    h5,.elementor-widget-heading h5.elementor-heading-title{
      font-size:'.$h5_tablet_size.'px;
      line-height:140%;

    }

    h6,.elementor-widget-heading h6.elementor-heading-title{
      font-size:'.$h6_tablet_size.'px;
      line-height:140%;

    }

}
/*    phone    */
@media only screen and (max-width: 690px) {

    h1,.elementor-widget-heading h1.elementor-heading-title{
      font-size:'. $h1_phone_size.'px;
      line-height:150%;

    }

    h2,.elementor-widget-heading h2.elementor-heading-title{
      font-size:'. $h2_phone_size.'px;
      line-height:140%;

    }

    h3,.elementor-widget-heading h3.elementor-heading-title{
      font-size:'. $h3_phone_size.'px;
      line-height:120%;

    }

    h4,.elementor-widget-heading h4.elementor-heading-title{
      font-size:'. $h4_phone_size.'px;
      line-height:120%;

    }

    h5,.elementor-widget-heading h5.elementor-heading-title{
      font-size:'. $h5_phone_size.'px;
      line-height:120%;

    }

    h6,.elementor-widget-heading h6.elementor-heading-title{
      font-size:'. $h6_phone_size.'px;
      line-height:120%;

    }

}
';?>
<?php
/*-=========================[ menu ]=====================- */

echo '
#ideal-nav-c .uk-navbar-nav>li>a{'
  .(!empty($ideal_options['header-font-f']['color'])?
  'color:' . $ideal_options['header-font-f']['color'] . ';':null ).'
  '.(!empty($ideal_options['header-font-f']['font-family'])? '
  font-family:' . $ideal_options['header-font-f']['font-family'] . ';':null ).'
  '.(!empty($ideal_options['header-font-f']['font-size'])? '
  font-size:' . $ideal_options['header-font-f']['font-size'] . ';':null ).'
  '.(!empty($ideal_options['header-font-f']['line-height'])? '
  line-height:' . $ideal_options['header-font-f']['line-height'] . ';':null ).'
  '.(!empty($ideal_options['header-font-f']['letter-spacing'])? '
  letter-spacing:' . $ideal_options['header-font-f']['letter-spacing'] . ';':null ).'
  '.(!empty($ideal_options['header-font-f']['text-align'])? '
  text-align:' . $ideal_options['header-font-f']['text-align'] . ';':null ).'
  '.(!empty($ideal_options['header-font-f']['text-transform'])? '
  text-transform:' . $ideal_options['header-font-f']['text-transform'] . ';':null ).'
  '.(!empty($ideal_options['header-font-f']['font-weight'])? '
  font-weight:' . $ideal_options['header-font-f']['font-weight'] . ';':null ).'

}
.uk-light #ideal-nav-c .uk-navbar-nav>li>a{
  color:' . $ideal_options['navbar-light-color-moode'] . ';
}
.uk-dark  #ideal-nav-c .uk-navbar-nav>li>a{
  color:' . $ideal_options['navbar-dark-color-moode'] . ';
}
.uk-active #ideal-nav-c .uk-navbar-nav>li>a{
  color:' . $ideal_options['header-font-f']['color'] . ';
}
#ideal-nav-c .uk-navbar-nav>li>a:hover{
  color:' . $ideal_options['menu-header-link-hover']['hover'] . ';
}
#ideal-nav-c .uk-navbar-nav>li.uk-active>a{
  color:' . $ideal_options['menu-header-link-hover']['active'] . ';
}
.ideal-Logo a{'.(!empty($ideal_options['logo-font-no-img']['color'])? '
  color:'          . $ideal_options['logo-font-no-img']['color'] . ';':null ).'
  '.(!empty($ideal_options['logo-font-no-img']['font-family'])? '
  font-family:'    . $ideal_options['logo-font-no-img']['font-family'] . ';':null ).'
  '.(!empty($ideal_options['logo-font-no-img']['font-size'])? '
  font-size:'      . $ideal_options['logo-font-no-img']['font-size'] . ';':null ).'
  '.(!empty($ideal_options['logo-font-no-img']['line-height'])? '
  line-height:'    . $ideal_options['logo-font-no-img']['line-height'] . ';':null ).'
  '.(!empty($ideal_options['logo-font-no-img']['letter-spacing'])? '
  letter-spacing:' . $ideal_options['logo-font-no-img']['letter-spacing'] . ';':null ).'
  '.(!empty($ideal_options['logo-font-no-img']['text-align'])? '
  text-align:'     . $ideal_options['logo-font-no-img']['text-align'] . ';':null ).'
  '.(!empty($ideal_options['logo-font-no-img']['text-transform'])? '
  text-transform:' . $ideal_options['logo-font-no-img']['text-transform'] . ';':null ).'  '.(!empty($ideal_options['logo-font-no-img']['font-weight'])? '
  font-weight:'    . $ideal_options['logo-font-no-img']['font-weight'] . ';':null ).'
}

#m-t-offcanvas .uk-nav-default>li>a,.uk-nav-default>li.uk-active>a,.uk-offcanvas-bar .uk-nav-default .uk-nav-sub li.uk-active>a,.uk-offcanvas-bar .uk-nav-default .uk-nav-sub a{
  '.(!empty($ideal_options['font-offcanvas']['color'])? '
  color: ' . $ideal_options['font-offcanvas']['color'] . ';':null ).'
  '.(!empty($ideal_options['font-offcanvas']['font-family'])? '
  font-family:' . $ideal_options['font-offcanvas']['font-family'] . ';':null ).'
  '.(!empty($ideal_options['font-offcanvas']['font-size'])? '
  font-size: ' . $ideal_options['font-offcanvas']['font-size'] . ';':null ).'
  '.(!empty($ideal_options['font-offcanvas']['line-height'])? '
  line-height:' . $ideal_options['font-offcanvas']['line-height'] . ';':null ).'
  '.(!empty($ideal_options['font-offcanvas']['letter-spacing'])? '
  letter-spacing:' . $ideal_options['font-offcanvas']['letter-spacing'] . ';':null ).'
  '.(!empty($ideal_options['font-offcanvas']['text-align'])? '
  text-align:' . $ideal_options['font-offcanvas']['text-align'] . ';':null ).'
  '.(!empty($ideal_options['font-offcanvas']['text-transform'])? '
  text-transform:' . $ideal_options['font-offcanvas']['text-transform'] . ';':null ).'
  '.(!empty($ideal_options['font-offcanvas']['font-weight'])? '
  font-weight:' . $ideal_options['font-offcanvas']['font-weight'] . ';':null ).'
}
.uk-offcanvas-bar .uk-nav-parent-icon>.uk-parent>a::after{
  color:' . $ideal_options['font-offcanvas']['color'] . '!important;
}
';
/*-=========================[ Page Header ]=====================-*/
echo '
.entry-title{'.(!empty($ideal_options['blog-header-font']['color'])? '
  color:' . $ideal_options['blog-header-font']['color'] . ';':null ).'
  font-family:' . $ideal_options['blog-header-font']['font-family'] . ';
  font-size: ' . $ideal_options['blog-header-font']['font-size'] . ';
  line-height:' . $ideal_options['blog-header-font']['line-height'] . ';
  '.(!empty($ideal_options['blog-header-font']['letter-spacing'])? '
  letter-spacing:' . $ideal_options['blog-header-font']['letter-spacing'] . ';':null ).'
  '.(!empty($ideal_options['blog-header-font']['text-align'])? '
  text-align:' . $ideal_options['blog-header-font']['text-align'] . ';':null ).'
  '.(!empty($ideal_options['blog-header-font']['text-transform'])? '
  text-transform:' . $ideal_options['blog-header-font']['text-transform'] . ';':null ).'
  font-weight:' . $ideal_options['blog-header-font']['font-weight'] . ';
  '.(!empty($ideal_options['blog-header-font']['word-spacing'])? '
  word-spacing:' . $ideal_options['blog-header-font']['word-spacing'] . ';':null ).'
}

.id-bh-inner-wrap{
  '.(!empty($ideal_options['header-text-color'])? '
  color:' . $ideal_options['header-text-color'] . ';':null ).'
}

.id-bh-inner-wrap a{'.(!empty($ideal_options['header-text-color'])? '
  color:' . $ideal_options['header-text-color'] . ';':null ).'
}

.ar-entry-title h1{
  color:' . $ideal_options['archives-header-font']['color'] . ';
  font-family:' . $ideal_options['archives-header-font']['font-family'] . ';
  font-size: ' . $ideal_options['archives-header-font']['font-size'] . ';
  line-height:' . $ideal_options['archives-header-font']['line-height'] . ';
  '.(!empty ( $ideal_options['archives-header-font']['letter-spacing'] )? '
  letter-spacing:' . $ideal_options['archives-header-font']['letter-spacing'] . ';':null ).'
  '.(!empty ( $ideal_options['archives-header-font']['text-align'] )? '
  text-align:' . $ideal_options['archives-header-font']['text-align'] . ';':null ).'
  '.(!empty ( $ideal_options['archives-header-font']['text-transform'] )? '
  text-transform:' . $ideal_options['archives-header-font']['text-transform'] . ';':null ).'
  '.(!empty ( $ideal_options['archives-header-font']['font-weight'] )? '
  font-weight:' . $ideal_options['archives-header-font']['font-weight'] . ';':null ).'
  '.(!empty ( $ideal_options['archives-header-font']['word-spacing'] )? '
  word-spacing:' . $ideal_options['archives-header-font']['word-spacing'] . ';':null ).'
}
.id-archives-inner-wrap{'.(!empty ( $ideal_options['ar-header-text-color'] )? '
  color:' . $ideal_options['ar-header-text-color'] . ';':null ).'
}

.id-archives-inner-wrap a{'.(!empty ( $ideal_options['ar-header-text-color'] )? '
  color:' . $ideal_options['ar-header-text-color'] . ';':null ).'
}
';

/*-=========================[ Page Header ]=====================-*/
