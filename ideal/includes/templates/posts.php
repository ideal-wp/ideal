<?php
/**
 *  loop content.
 *
 * @package ideal WordPress Theme
 * @version 1.0.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
global $ideal_is_sidebar,$ideal_animation,$ideal_id_child,$ideal_flex,$sid_sticky,$ideal_category;
?>
<div id="ideal-site-content" class="ideal-site-content uk-section">
  <div class="uk-container uk-container-expand ">
    <?php if ($ideal_is_sidebar== true) {?>
    <div class=" uk-grid-column-small" uk-grid>
      <div class="id-con-warp uk-width-expand@m">
        <div class="uk-container uk-container-expand">
          <?php }?>
          <!--Plog posts-->
          <div class="<?php echo $ideal_id_child; ?>" uk-grid <?php echo $ideal_animation; ?>>

            <?php if (have_posts()): while (have_posts()): the_post();
              get_template_part('includes/template-parts/blog/countant', get_post_format());
                  endwhile;else:endif;
            ?>
            <!--/uk-grid-->
          </div>
          <div class="ideal-posts-home-pagination uk-pagination uk-flex-center">
            <?php ideal_pagination_bar();?>
          </div>
          <!--/Blog posts-->
          <?php if (!empty($ideal_is_sidebar) && $ideal_is_sidebar== true) {?>
        </div>
      </div>
      <!--/id-con-warp-->
      <div class="uk-width-1-4@m uk-width-1-4@l <?php echo $flex; ?>">
        <div class=" uk-container uk-container-expand " id="blog-sidebar">
          <div class="side-bar uk-flex uk-flex-column " <?php echo $sid_sticky; ?>>

            <?php get_sidebar();?>

          </div>
        </div>
      </div>
      <!--/id-con-warp-->
      <?php }?>
    </div>
  </div>