<?php
/**
 *  loop Search content.
 *
 * @package ideal WordPress Theme
 * @version 1.0.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
global $ideal_is_sidebar,$ideal_flex,$ideal_is_sticky;
?>
<div id="ideal-site-content" class="ideal-site-content uk-section">
  <div class="uk-container uk-container-expand ">
    <?php if ($ideal_is_sidebar == false) {?>
    <div class=" uk-grid-column-small" uk-grid>
      <div class="id-con-warp uk-width-expand@m">
        <div class="uk-container uk-container-expand">
          <?php }?>
          <!--Search results posts-->
          <?php
              if (have_posts()): while (have_posts()): the_post();
              
                      get_template_part('includes/template-parts/search');
                  endwhile;
              else:
                get_template_part('includes/partials/search-notfound');
              endif;
          ?>
          <div class="ideal-posts-home-pagination uk-pagination uk-flex-center">
            <?php ideal_pagination_bar();?>
          </div>
          <!--/Search results posts-->
          <?php if (empty($ideal_is_sidebar) || $ideal_is_sidebar == false) {?>
        </div>
      </div>
      <!--/id-con-warp-->
      <div class="uk-width-1-4@m uk-width-1-4@l <?php echo $ideal_flex; ?>">
        <div class=" uk-container uk-container-expand " id="blog-sidebar">
          <div class="side-bar uk-flex uk-flex-column " <?php echo $ideal_is_sticky; ?>>
            <?php get_sidebar();?>
          </div>
        </div>
      </div>
      <!--/sidebar-->
      <?php }?>
    </div>
  </div>