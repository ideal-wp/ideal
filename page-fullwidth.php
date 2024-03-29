<?php
/**
 * Ttemplate name: Page Full width
 *
 * @package ideal WordPress Theme
 * @version 1.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

get_header(); ?>
<div id="ideal-pagecontent" class="ideal-page-content uk-section uk-padding-remove">
  <div class="uk-container-expand">
    <?php  
      if ( have_posts() ) :

          while ( have_posts() ) :
            
              the_post();

              the_content();

          endwhile;
      endif; ?>
  </div>
</div>
<?php
get_footer();