<?php
/**
 * Ideal theme Logo in nav
 * 
 * @since v1.0.0
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$ideal_options  = get_ideal_theme_options();
$is_trans       = get_post_meta( get_the_ID(), 'is_header_trans', true );
$site_url       = esc_url(get_bloginfo( 'url' ));
$logo_site_name = get_bloginfo( 'name' );
$menu_logo_img  = $ideal_options['logo-img-menu'];
$logo_height    = $ideal_options['logo-ss-height']['height'];
$logo           = '';

if( $menu_logo_img == 0){
  $logo = $logo_site_name;
  $case='0';
}


if( $menu_logo_img == 1){
  
  
    ?><a id="logo" class="uk-navbar-item uk-logo site-logo" href="<?php echo $site_url ?>">
      <img class="ideal-Logoo" src="<?php //echo $logo; ?>" style= " height:<?php echo $logo_height ;?>" alt=" <?php echo get_bloginfo( 'name' ); ?>">
    </a><?php
  
  }elseif( $menu_logo_img == 0){ 
  
      ?><a id="logo" class="uk-navbar-item uk-logo site-logo" 
            href="<?php echo $site_url ?>">   
        <h2><?php echo $logo; ?></h2>
      </a><?php
  
  
  }
  ?>
<?php
