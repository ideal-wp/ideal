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

$ideal_options = get_ideal_theme_options();
$is_sidebar        = null;
$is_sticky         = null;
$sidebar_position  = null;
$is_cards          = null;
$flex              = null;
$sid_sticky        = null;

if ( class_exists( 'ReduxFramework' ) ){

  $is_sidebar       = $ideal_options['is-post-sidebar'];
  $is_sticky        = $ideal_options['i-sticky-sidebar'];
  $sidebar_position = $ideal_options['sidebar-position'];
  $is_cards         = $ideal_options['post-cards'];

}else{

  $is_sidebar        = 1 ;
  
}

if ( !empty( $is_sidebar ) && $is_sidebar == 1 ) {
    $id_container = 'uk-container-expand';
} else {
    $id_container = 'uk-container-small';
}

if ( ! empty( $sidebar_position ) && $sidebar_position == 'left' ) {

   $flex = 'uk-flex-first@m';

}else{

   $flex = null;
}

if (! empty( $is_sticky ) && $is_sticky == 1) {
  
   $sid_sticky = 'uk-sticky="offset: 100; bottom: #id-comments"';
}

// Start the loop.
while ( have_posts() ) : the_post();

// Post header.
if ( is_single() && 'post' == get_post_type() ) {

  get_template_part('includes/partials/page-header/header', 'single');

}
?>
<div id="ideal-site-content" class="ideal-site-content uk-section">
  <div class="uk-container <?php echo $id_container; ?>">
    <?php if (! empty( $is_sidebar ) && $is_sidebar == 1 ) {echo '
      <div class=" uk-grid-column-small" uk-grid>
        <div class="id-con-warp uk-width-expand@m">
          <div class="uk-container">
    ';}?>
    <!--single post-->
    <article id="post-<?php the_ID(); ?>" <?php post_class('uk-article'); ?>>
      <div class="article-inner-wrap">
        <?php if ($is_cards == 1) {
    echo '<div class="uk-card uk-card-default uk-card-body">';}?>
        <div>
          <?php  $featured_image ?>
        </div>
        <?php
            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */
            get_template_part( '/includes/template-parts/single-post/content', get_post_format() );
          
            if ( !empty($is_cards) && $is_cards == 1) {
                echo '</div>';}
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) : ?>

        <div id="id-comments" class="uk-section">

          <?php comments_template(); ?>

        </div>
        <?php
            endif;
          
            ideal_comment_close();

        // End the loop.
 endwhile; ?>

      </div>
    </article>
    <!--/single post-->
    <?php if (!empty($is_sidebar) && $is_sidebar == 1) {echo '
          </div>
        </div><!--/id-con-warp-->
        <div class="uk-width-1-4@m uk-width-1-4@l '.$flex.'">
        <div class=" uk-container uk-container-expand " id="blog-sidebar">
          <div class="side-bar uk-flex uk-flex-column "' . $sid_sticky . '>
          ';
    get_sidebar();
    echo '
          </div>
        </>
      </div>
      </div><!--/id-con-warp-->
    ';}?>
  </div>
</div>
<?php get_footer();?>