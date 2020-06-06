<?php
/**
 * The template for displaying pages.
 *
 * @package ideal WordPress Theme
 * @version 1.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
$ideal_options = get_ideal_theme_options();
$is_cards = $ideal_options['add-cards-page'];


get_header();
?>
  <div id="ideal-pagecontent" class="ideal-page-content uk-section">
    <div class=" uk-container-expand">
    <div id="ideal-page-content-inner" class="uk-container">
      <?php if ($is_cards == 1) {
      echo '<div class="uk-card uk-card-default uk-card-body">';}?>

<?php
if ( have_posts() ) :
      while ( have_posts() ) :
        
        the_post();
        the_content();
        
        if ($is_cards == 1) {
          echo '</div>';}
      
        if ( comments_open() || get_comments_number() ) : ?>
          <div id="id-comments" class="uk-section">
            <?php comments_template(); ?>
          </div>
          <?php
        endif;	
      endwhile;
endif;


      ?>
    </div>
  </div>
<?php
get_footer();