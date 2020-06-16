<?php
/**
 * The template for displaying pages.
 *
 * @package ideal WordPress Theme
 * @version 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
get_header();
global $ideal_is_page_sidebar,$ideal_is_page_cards,$ideal_flex,$sid_sticky,$ideal_id_container;?>
<div id="ideal-pagecontent" class="ideal-site-content uk-section">
  <div id="ideal-page-content-inner" class="uk-container <?php echo $ideal_id_container; ?>">
    <?php if ($ideal_is_page_sidebar == true) {?>
    <div class=" uk-grid-column-small" uk-grid>
      <div class="id-con-warp uk-width-expand@m">
        <div class="uk-container">
          <?php }
          if (!empty($ideal_is_page_cards) && $ideal_is_page_cards == true) {  echo '<div class="uk-card uk-card-default uk-card-body">';
          } 
          if (have_posts()):
              while (have_posts()):

                  the_post();
                  the_content();

                  if (!empty($ideal_is_page_cards) && $ideal_is_page_cards == true) {echo '</div>';}

                  ideal_comment_open();

              endwhile;
          endif;
          if ($ideal_is_page_sidebar == true) {?>
        </div>
      </div>
      <!--/id-con-warp-->
      <div id="sidebar" class="uk-width-1-4@m uk-width-1-4@l <?php echo $flex; ?>">
        <div class=" uk-container uk-container-expand " id="blog-sidebar">
          <div class="side-bar uk-flex uk-flex-column" <?php echo $sid_sticky; ?>>
            <?php get_sidebar();?>
          </div>
        </div>
      </div><!--/sidebar-->
      <?php } // if is_sidebar end?>
    </div>
  </div>
  <?php
get_footer();