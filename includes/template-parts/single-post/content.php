<?php
/**
 * Single Post Content
 *
 * @version 1.0.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
global $ideal_is_featured_image, $ideal_card_imge, $ideal_featured_image, $ideal_is_single_cards;
global $post;
$posttype = get_post_type( $post );
if ($ideal_is_featured_image == false) {
    if (has_post_thumbnail()) {
        $ideal_featured_image = get_the_post_thumbnail_url();
    }
}
?>

<?php if (!empty($ideal_is_single_cards) && $ideal_is_single_cards == true) {
    echo '<div class="uk-card uk-card-default ">';}

if ( ( is_single() ) && ( $posttype === 'post' ) && has_post_thumbnail() && $ideal_is_featured_image == false): ?>
<div
  class="uk-background-cover uk-background-center-center uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle uk-background-norepeat uk-card-media-top <?php echo $ideal_card_imge; ?> "
  style="background-image:url(<?php echo $ideal_featured_image; ?>);">
</div>
<?php
endif;
?>
<div id="content-id-s">
  <?php
if (!empty($ideal_is_single_cards) && $ideal_is_single_cards == true) {
    echo '<div class="uk-card-body">';}

the_content();

if (!empty($ideal_is_single_cards) && $ideal_is_single_cards == true) {
    echo '</div>
     </div>';
}

$defaults = array(
    'before' => '<ul class="uk-pagination">' . __('Pages:', 'ideal'),
    'after' => '</ul>',
    'link_before' => '<li>',
    'link_after' => '</li>',
    'next_or_number' => 'number',
    'separator' => ' ',
    'nextpagelink' => esc_html__('Next page', 'ideal'),
    'previouspagelink' => esc_html__('Previous page', 'ideal'),
    'pagelink' => '%',
    'echo' => 1,
);

wp_link_pages($defaults);

?>
</div>