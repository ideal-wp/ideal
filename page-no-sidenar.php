<?php
/**
 * Ttemplate name: No Sidebar
 *
 * @package ideal WordPress Theme
 * @version 1.0.0
 */
// Exit if accessed directly

$ideal_options = get_ideal_theme_options();
$is_cards = null;

if (!empty($ideal_options['add-cards-page'])) {
    $is_cards = $ideal_options['add-cards-page'];
}

get_header();
?>
  <div id="ideal-pagecontent" class="ideal-page-content uk-section">
    <div class=" uk-container-expand">
      <div id="ideal-page-content-inner" class="uk-container">
        <?php if ($is_cards == 1) { echo '<div class="uk-card uk-card-default uk-card-body">';}?>
        <?php
          if (have_posts()):
              while (have_posts()):
                  the_post();
                  the_content();
                  if ($is_cards == 1) { echo '</div>';}
                  ideal_comment_open();
              endwhile;
          endif;
          ?>
      </div>
    </div>
  </div>
<?php
get_footer();