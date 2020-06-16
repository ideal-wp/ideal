<?php
/**
 *
 *  Single Post Page Header.
 *
 * @package Ideal Theme
 * @subpackage Ideal Partials Page header 
 * @since V1.0.0
 * @version 1.0.0
 */
if (!('ABSPATH')) {
    exit;
}
$ideal_options     = get_ideal_theme_options();
$himg              = get_the_post_thumbnail_url();
$enable_header     = null;
$featured_options  = null;
$featured_img_h    = null;

if ( class_exists( 'Kirki' ) ){

  $enable_header    = $ideal_options['switch-blog-header'];
  $featured_options = $ideal_options['post-img-background']; 
  $featured_img_h   = $ideal_options['post-img-background'];
  


}else{
  
  $enable_header    = true ;
  $featured_options = false;
}
if ( !empty($enable_header) && $enable_header !== false) {
// if Enable Blog Header
if ($enable_header == true && $featured_options == true) {?>

<div id="blog-page-header"
  class=" ideal-page-header-blog  uk-section uk-padding-remove  uk-flex-middle uk-background-cover uk-background-fixed uk-background-norepeat uk-background-center-center"
  style="background-image: url(<?php echo esc_url($himg)  ; ?>);">
  <div id="blog-page-header-overlay">
    <div class="uk-container uk-container-expand blog-wrap-header ">
      <!--start Blog Header-->
      <div class="id-bh-inner-wrap">
        <?php if ( ( $post->post_type === 'post' && is_single() )) {ideal_get_cattegory();}?>
        <a class=""></a>
        <h1 class="entry-title"> <?php echo esc_html( get_the_title() ); ?></h1>
        <div class="id-breadcrumb ">
          <?php get_breadcrumb();  ?>
        </div>
        <div class="avatar-post-info vcard author">
          <span class="fn uk-link-reset">
            <?php  the_author_posts_link(); ?>
          </span>
          <?php
          $id_u_time          = get_the_time( 'U' );
          $id_u_modified_time = get_the_modified_time( 'U' );
          if( $id_u_modified_time >= $id_u_time + 86400 ) {
            ?>
          <span class="meta-date date published"> | <i><?php echo get_the_date(); ?></i></span>
          <span
            class="meta-date date updated rich-snippet-hidden"><?php echo get_the_modified_time( __( 'F jS, Y' , 'ideal' ) ); ?></span>
          <?php } else { ?>
          <span class="meta-date date updated"> | <i><?php echo get_the_date(); ?></i></span>
          <?php } ?>
          <span> <i> | </i>
            <?php comments_number(esc_html__('No Comments','ideal'), esc_html__('One Comment', 'ideal'), esc_html__('% Comments', 'ideal') );?></span>
        </div>
      </div>
      <!--/start Blog Header-->
    </div>
  </div>
</div>
<?php
} elseif ($enable_header == true && $featured_options !== true) {?>

<div id="blog-page-header" class=" ideal-page-header-blog uk-section uk-padding-remove">
  <div id="blog-page-header-overlay">
    <div class="uk-container uk-container-expand blog-wrap-header ">
      <!--start Blog Header-->
      <div class="id-bh-inner-wrap">
        <div class="id-cat-post-header">
          <?php if ( ( $post->post_type === 'post' && is_single() )) {ideal_get_cattegory();}?>
        </div>
        <h1 class="entry-title"> <?php echo esc_html( get_the_title() ); ?></h1>
        <div class="id-breadcrumb ">
          <?php get_breadcrumb();  ?>
        </div>
        <div class="id-post-info">
          <span class="fn uk-link-reset"><?php the_author_posts_link(); ?></span>
          <?php

          $id_u_time          = get_the_time( 'U' );
          $id_u_modified_time = get_the_modified_time( 'U' );

          if( $id_u_modified_time >= $id_u_time + 86400 ) {

            ?>
          <span class="meta-date date published"> | <i><?php echo get_the_date(); ?></i></span>
          <span class="meta-date date updated rich-snippet-hidden"><?php
           echo get_the_modified_time( __( 'F jS, Y' , 'ideal' ) ); ?>
          </span>
          <?php 
        } else { 
          ?>
          <span class="meta-date date updated"> | <i><?php echo get_the_date(); ?></i></span>
          <?php } ?>
          <span> <i> | </i>
            <?php comments_number(esc_html__('No Comments','ideal'), esc_html__('One Comment', 'ideal'), esc_html__('% Comments', 'ideal') );?></span>
        </div>
      </div>
      <!--/Blog Header-->
    </div>
  </div>
</div>
<?php }
}
?>