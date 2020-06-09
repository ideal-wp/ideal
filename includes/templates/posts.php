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

$ideal_options       = get_ideal_theme_options();
$is_sidebar          = null;
$is_sticky           = null;
$sidebar_position    = null;
$id_animation_class  = null;
$flex                = null;
$sid_sticky          = null;
$id_animation        = null;
$id_animation_repeat = null;


if ( class_exists( 'ReduxFramework' ) ){
  $is_sidebar          = $ideal_options['is-post-sidebar'];
  $is_sticky           = $ideal_options['i-sticky-sidebar'];
  $sidebar_position    = $ideal_options['sidebar-position'];
  $id_animation_class  = $ideal_options['id-scroll-animations'];

}else{
  $is_sidebar          = 1;
}


if( !empty( $ideal_options['repeat-scrollspy'] ) && $ideal_options['repeat-scrollspy'] == 1 ){
  $id_animation_repeat = 'true';

}elseif( !empty( $ideal_options['repeat-scrollspy'] ) && $ideal_options['repeat-scrollspy'] == 0){
  $id_animation_repeat = 'false';
}

if(  !empty( $ideal_options['repeat-scrollspy'] ) && $ideal_options['add-scrollspy'] == 1 ){

  $id_animation = 'uk-scrollspy="cls: '. $id_animation_class .'; target: .uk-card; delay: 500; repeat: '. $id_animation_repeat .'"';

}

if (!empty($is_sidebar) && $is_sidebar == 1) {
  $id_container = 'uk-container-expand';
  $id_child = 'uk-child-width-1-2@m';
} else {
  $id_container = 'uk-container-small';
  $id_child = 'uk-child-width-1-3@m';
}

if (! empty( $sidebar_position ) && $sidebar_position == 'left') {
  $flex = 'uk-flex-first@m';
}else{
$flex = null;
}

if (!empty( $is_sticky ) && $is_sticky == 1) {

$sid_sticky = 'uk-sticky="offset: 100; bottom: #id-comments"';
}
?>
<div id="ideal-site-content" class="ideal-site-content uk-section">
  <div class="uk-container uk-container-expand ">
    <?php if ($is_sidebar == 1) {echo '
    <div class=" uk-grid-column-small" uk-grid>
      <div class="id-con-warp uk-width-expand@m">
        <div class="uk-container uk-container-expand">
  ';}?>
    <!--Plog posts-->
    <div class="<?php echo $id_child; ?>" uk-grid
      <?php echo $id_animation ;?>>

      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

      <?php get_template_part('includes/template-parts/blog/countant', get_post_format());
            ?>
      
      <?php endwhile; else: endif; ?>
<!--/uk-grid-->
    </div>
    <div class="ideal-posts-home-pagination uk-pagination uk-flex-center">
          <?php ideal_pagination_bar(); ?>
        </div> 
    <!--/Blog posts-->
    <?php if (!empty( $is_sidebar ) && $is_sidebar == 1) {echo '
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