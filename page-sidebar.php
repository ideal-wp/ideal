<?php
/**
 * Ttemplate name: with Sidebar
 *
 * @package ideal WordPress Theme
 * @version 1.0.0
 */
// Exit if accessed directly

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$ideal_options      = get_ideal_theme_options();
$is_sidebar         = 1;
$id_container       = 'uk-container-expand';
$is_sticky          = null;
$sidebar_position   = null;
$is_cards           = null;
$flex               = null;
$sid_sticky         = null;

if ( class_exists( 'ReduxFramework' ) ){

    $is_sticky          = $ideal_options['i-sticky-sidebar'];
    $sidebar_position   = $ideal_options['sidebar-position'];
    $is_cards           = $ideal_options['add-cards-page'];
  
}
if ( ! empty( $sidebar_position ) && $sidebar_position == 'left' ) {

   $flex = 'uk-flex-first@m';
}else{

 $flex = null;
}

if (! empty( $is_sticky ) && $is_sticky == 1 ) {

$sid_sticky = 'uk-sticky="offset: 100; bottom: #id-comments"';
}

?>
  <div id="ideal-site-content" class="ideal-site-content uk-section">
    <div class="uk-container <?php echo $id_container; ?>">
      <?php if ($is_sidebar == 1) {echo '
        <div class=" uk-grid-column-small" uk-grid>
          <div class="id-con-warp uk-width-expand@m">
            <div class="uk-container">
      ';}?>
      <?php if ( ! empty( $is_cards ) && $is_cards == 1 ) {
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

if ($is_sidebar == 1) {echo '
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
      ';}
      ?>
    </div>
  </div>
<?php
get_footer();