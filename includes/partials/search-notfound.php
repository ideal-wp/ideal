<?php
/**
 *  Search not found.
 *
 * @package ideal WordPress Theme
 * @version 1.0.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>
  <article id="search-not-found" class="post no-results not-found">
    <header class="archive-header">
      <h3 class="search-not-found-title">
        <?php esc_html_e( 'Sorry,Your search:', 'ideal' ); ?>
        <span> "<?php the_search_query(); ?>" </span>
        <?php esc_html_e( 'did not match any documents', 'ideal' ); ?>
      </h3>
    </header>
    <p>
      <?php esc_html_e('Please try again with some different keywords,Type keyword & press enter.','ideal')?>
    </p>
    <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="uk-search uk-search-large">
      <span uk-search-icon></span>
      <input name="s" class="uk-search-input" type="search" placeholder="<?php esc_attr_e( 'Search...', 'ideal' ) ?>"
        value="">
    </form>
  </article>