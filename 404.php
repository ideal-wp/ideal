<?php
/**
* The template for displaying 404 not found.
*
* @package ideal WordPress Theme
* @version 1.0.0
*/
// Exit if accessed directly
if (!defined('ABSPATH')) {
   exit;
}
get_header();
$ideal_options = ideal_get_theme_options();
$page_404_bg_image = IDEAL_THEME_DIR_URI.'/assets/images/404.jpg';
?>
<div id="ideal-site-content" class="ideal-site-content uk-section uk-background-cover uk-background-center-center"
  style="background-image: url('<?php echo esc_url($page_404_bg_image)?>'); background-repeat: no-repeat;"
  uk-height-viewport>
  <div class="uk-container uk-container-expand ">
    <div class="error-404-bg-img-overlay"></div>
    <div class="pg-not-found uk-position-center">
      <h2><?php echo esc_html__( 'Page Not Found', 'ideal' ); ?></h2>
      <a class="uk-button id-button-primary uk-button-large" href="<?php echo esc_url( home_url() ); ?>">
        <span><?php echo esc_html__( 'Back Home', 'ideal' ); ?></span>
        <i uk-icon="arrow-right"></i>
      </a>
    </div>
  </div>
</div>
<?php get_footer();?>