<?php
/**
 * The template for displaying single posts.
 *
 * @package ideal WordPress Theme
 * @version 1.0.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
get_header();
global $ideal_is_sidebar,$ideal_animation,$ideal_id_child,$ideal_flex,$ideal_id_container,$ideal_is_single_cards,$ideal_featured_image,$ideal_is_sticky;
// Start the loop.
while (have_posts()): the_post();
    // single Post header.
    if (is_single() && 'post' == get_post_type() ) {
      get_template_part('includes/partials/page-header/header', 'single');
    }
    ?>
  <div id="ideal-site-content" class="ideal-site-content uk-section">
    <div class="uk-container <?php echo $ideal_id_container; ?>">
      <?php if (!empty($ideal_is_sidebar) && $ideal_is_sidebar == true ) {?>
      <div class=" uk-grid-column-small" uk-grid>
        <div class="id-con-warp uk-width-expand@m">
          <div class="uk-container">
            <?php }?>
            <!--single post-->
            <article id="post-<?php the_ID();?>" <?php post_class('uk-article');?>>
              <div class="article-inner-wrap">
                <?php
                  get_template_part('/includes/template-parts/single-post/content', get_post_format());?>
                <div class="ideal-single-tags">
                  <?php if (has_tag()) {echo get_the_tag_list('<p>', ', ', '</p>');}?>
                </div>
                <?php 
                  ideal_comment_open();
                  ideal_comment_close();
endwhile; // End the loop. ?>
              </div>
            </article>
            <!--/single post-->
            <?php if (!empty($ideal_is_sidebar) && $ideal_is_sidebar == true ) {?>
          </div>
        </div>
        <!--/id-con-warp-->
        <div class="uk-width-1-4@m uk-width-1-4@l <?php echo $ideal_flex ;?>">
          <div class=" uk-container uk-container-expand " id="blog-sidebar">
            <div class="side-bar uk-flex uk-flex-column "<?php echo $ideal_is_sticky; ?>>
              <?php get_sidebar();?>
            </div>
          </div>
        </div>
        <!--/id-con-warp-->
        <?php }?>
    </div>
  </div>
  <?php get_footer();?>