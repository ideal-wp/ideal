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

$ideal_options    = get_ideal_theme_options();
$flex             = null;
$sid_sticky       = null;
$is_sticky        = null;
$sidebar_position = null;
$is_cards = null;

if (class_exists('Redux')) {
    $is_sidebar = $ideal_options['is-page-sidebar'];
    $is_sticky = $ideal_options['i-sticky-sidebar'];
    $sidebar_position = $ideal_options['sidebar-position'];
    $is_cards = $ideal_options['add-cards-page'];
} else {
    $is_sidebar = 1;
}

if ($is_sidebar == 1) {

    $id_container = 'uk-container-expand';

} else {
    $id_container = 'uk-container-small';
}

if (!empty($sidebar_positionr) && $sidebar_position == 'left') {
    $flex = 'uk-flex-first@m';
} else {
    $flex = null;
}

if (!empty($is_sticky) && $is_sticky == 1) {

    $sid_sticky = 'uk-sticky="offset: 100; bottom: #id-comments"';
}

get_header();
?>
<div id="ideal-site-content" class="ideal-site-content uk-section">
  <div class="uk-container <?php echo $id_container; ?>">
    <?php if ($is_sidebar == 1) {?>
    <div class=" uk-grid-column-small" uk-grid>
      <div class="id-con-warp uk-width-expand@m">
        <div class="uk-container">
          <?php }
          if (!empty($is_cards) && $is_cards == 1) {  echo '<div class="uk-card uk-card-default uk-card-body">';
          } 
          if (have_posts()):
              while (have_posts()):

                  the_post();
                  the_content();

                  if (!empty($is_cards) && $is_cards == 1) {echo '</div>';}

                  ideal_comment_open();

              endwhile;
          endif;
          if ($is_sidebar == 1) {?>
        </div>
      </div>
      <!--/id-con-warp-->
      <div id="sidebar class="uk-width-1-4@m uk-width-1-4@l <?php echo $flex; ?>">
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