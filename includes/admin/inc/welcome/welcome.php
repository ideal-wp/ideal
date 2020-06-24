<?php
/**
 * Ideal Welcome admin page.
 *
 * @package Ideal
 * @since 1.0.0
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
  exit;
}

$ideal_theme_version = ideal_theme_version();

 ?>

<div class="uk-section">
  <div class="uk-container">
    <div class="ideal-welcome-header-wrap">
      <h1 class="idealwelcome"><?php echo esc_html__('Welcome to Ideal','ideal'); ?>
        <span><?php echo 'v'. esc_html($ideal_theme_version); ?></span></h1>
      <div class="sub-text">
        <?php echo esc_html__('Thank you for choosing Ideal as your WordPress theme!','ideal'); ?>
      </div>
<div class="ideal-welcome-tab">
<ul class="ideal-tab" uk-tab>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
</ul>

<ul class="uk-switcher uk-margin">
    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
    <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
    
</ul>
   
   <?php
   $ideal_options      = ideal_get_theme_options();

   
   var_dump($ideal_options['ideal_user_nav_links']); ?>

<i class="fas fa-user"></i><p class="taman">&#xf007</p>
</div>

    </div>
  </div>
</div>