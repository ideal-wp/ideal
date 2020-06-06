<?php
/**
 * Ideal theme menu layout 2 && 4
 * 
 * @since v1.0.0
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) { 
  exit; 
}

  $ideal_options  = get_ideal_theme_options();
  $menu = $ideal_options['header-layout'];

get_template_part( '/includes/partials/header/menu/menu', 'serch' );
?><div class="uk-navbar-left nav-overlay">
    <div class="ideal-Logo">
      <?php get_template_part( '/includes/partials/header/menu/menu', 'logo' );?>
    </div>
  </div>
  <div class="uk-navbar-center nav-overlay">
<?php if( $menu == '2' ){ ?>
  <div class="uk-visible@s uk-visible@m"><?php do_action('uikit_top_menu'); ?></div><?php } ?>
  </div>
  <div class="uk-navbar-right nav-overlay uk-visible@s uk-visible@m">
  <?php if( $menu == '4' ){ ?>
  <div class="uk-visible@s "><?php do_action('uikit_top_menu'); ?></div><?php } ?>
    <ul class="uk-navbar-nav">
      <li>
        <?php do_action('ideal_search_innav'); ?>
      </li>
      <li>
        <a href=""><span class="" uk-icon="cart"></span></a>
      </li>
    </ul><?php if( $menu == '4' ){ ?>
    <button class="uk-button uk-button-secondary">click here</button><?php } ?>
  </div>
  <?php get_template_part( '/includes/partials/header/menu/menu', 'mobile' );?>