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


$hero_header = get_theme_mod('hearo_text');
$hero_textarea = get_theme_mod('hero_textarea');



?>

<div id="hero-section" class="hero-section uk-section uk-section-primary">
  <div class="hero-container uk-container">
    <div id="hero-section-content" class="hero-content">
      <?php
        if ($hero_header != '') {
            echo '<h1>' . $hero_header . '</h1>';
        } else {
            echo '<p>
          ' . esc_html__('Edit this by going to your Dashboard -> Appearance -> Customise -> Home Hero Section', 'ideal') . '
          </p>';
        }
      ?>
      <div id="hero-section-content">
        <p><?php
          if ($hero_textarea != '') {
              echo $hero_textarea;
          } else {
              echo esc_html__('Edit this by going to your Dashboard -> Appearance -> Customise -> Home Hero Section', 'ideal');
          }?></p>
      </div>
      <button id="hero-secondary" class="uk-button uk-button-secondary uk-button-large">Secondary</button>

      <button id="hero-primary" class="uk-button uk-button-secondary uk-button-large">Primary</button>
    </div>
  </div>
</div>
