<?php
/**
* The template for displaying 404 not found.
*
* @package ideal WordPress Theme
* @version 1.0
*/
// Exit if accessed directly
if (!defined('ABSPATH')) {
   exit;
}
$ideal_options = get_ideal_theme_options();
$page_404_bg_image = IDEAL_THEME_DIRECTORY.'/assets/images/page-not-found.svg';
$page_404_bg_image_overlay = null;

get_header();
?>
<div id="ideal-site-content" class="ideal-site-content uk-section">
  <div class="uk-container uk-container-expand ">

    <?php



      if ( ! empty( $page_404_bg_image ) ) {

        echo '<div class="bg-404-img">
        
        '. file_get_contents("$page_404_bg_image") .'
        
        </div>';

        if ( ! empty( $page_404_bg_image_overlay ) ) {

          echo '<div class="error-404-bg-img-overlay"></div> ';
        }
      }
      ?>
    <div class="pg-not-found">
      <h2><?php echo esc_html__( 'Page Not Found', 'ideal' ); ?></h2>

      <a class="uk-button id-button-primary uk-button-large" href="<?php echo esc_url( home_url() ); ?>">
        
      <span><?php echo esc_html__( 'Back Home', 'ideal' ); ?></span>
        <i uk-icon="arrow-right"></i>
      </a>

    </div>


  </div>
</div>
<?php get_footer();?>