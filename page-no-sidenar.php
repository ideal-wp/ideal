<?php
/**
 * Ttemplate name: No Sidebar
 *
 * @package ideal WordPress Theme
 * @version 1.0.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
  exit;
}
get_header();
global $ideal_is_page_cards;
?>
  <div id="ideal-pagecontent" class="ideal-page-content uk-section">
    <div class=" uk-container-expand">
      <div id="ideal-page-content-inner" class="uk-container">
        <?php if ($ideal_is_page_cards == true ) { echo '<div class="uk-card uk-card-default uk-card-body">';}?>
        <?php
          if (have_posts()):
              while (have_posts()):
                  the_post();
                  the_content();
                  if ($ideal_is_page_cards == true ) { echo '</div>';}
                  ideal_comment_open();
              endwhile;
          endif;
          ?>
      </div>
    </div>
  </div>
<?php
get_footer();