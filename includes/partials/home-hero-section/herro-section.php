<?php
/**
 *  Ideal – Home Hero Section.
 *
 * @package ideal WordPress Theme
 * @version 1.0.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
$hero_header            = get_theme_mod('hearo_text');
$hero_textarea          = get_theme_mod('hero_textarea');
$ideal_hero_pri_but_enb = get_theme_mod('hero_select_primary_button_s');
$ideal_hero_sec_but_enb = get_theme_mod('hero_select_button_s');
$ideal_secondary_text   = get_theme_mod('secondary_button_text');
$ideal_secondary_link   = get_theme_mod('secondary_button_link');
$ideal_primary_text     = get_theme_mod('primary_button_text');
$ideal_primary_link     = get_theme_mod('primary_button_link');
$hero_img_bac           = esc_url(get_theme_mod('hero_background_image'));
?>
<div id="hero-section"
  class=" hero-section uk-section uk-section-primary<?php if(!class_exists('Kirki')){ ?> uk-background-cover uk-background-norepeat uk-background-center-center"
  <?php if(!empty($hero_img_bac)){?> style="background-image: url(<?php echo $hero_img_bac ?>);" <?php } }?>>
  <div class="hero-container uk-container">
    <div id="hero-section-content" class="hero-content">
      <?php
        if ($hero_header != '') {
            echo '<h1>' . esc_html($hero_header). ' </h1>';
        } else {
            echo '<p>
          ' . esc_html__('Edit this by going to your Dashboard -> Appearance -> Customise -> Home Hero Section', 'ideal') . '
          </p>';
        }
      ?>
      <div id="hero-section-content">
        <p><?php
          if ($hero_textarea != '') {
              echo esc_html($hero_textarea);
          } else {
              echo esc_html__('Edit this by going to your Dashboard -> Appearance -> Customise -> Home Hero Section', 'ideal');
          }?></p>
      </div>
      <?php if(empty($ideal_hero_sec_but_enb) || $ideal_hero_sec_but_enb == 'No' ){?>
      <button id="hero-secondary" class="uk-button uk-button-secondary uk-button-large"
        onclick="window.location.href='<?php echo esc_url( $ideal_secondary_link ) ?>'"><?php
        if ($ideal_secondary_text != '') {
            echo  esc_html($ideal_secondary_text) ;
        } else {
            echo  esc_html__('Secondary', 'ideal') ;
        }
      ?></button>
      <?php } ?>
      <?php if(empty($ideal_hero_pri_but_enb) || $ideal_hero_pri_but_enb == 'No' ){?>
      <button id="hero-primary" class="uk-button uk-button-secondary uk-button-large"
        onclick="window.location.href='<?php echo esc_url( $ideal_primary_link ) ?>'"><?php
        if ($ideal_primary_text != '') {
            echo  esc_html($ideal_primary_text) ;
        } else {
            echo  esc_html__('Primary', 'ideal') ;
        }
      ?></button>
      <?php } ?>
    </div>
  </div>
</div>