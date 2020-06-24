<?php
// Exit if accessed this directly
if (!defined('ABSPATH')) {
  exit;
}

$ideal_options = ideal_get_theme_options();
$ideal_pages_header_titel = esc_html(get_the_title());
$ideal_pages_header_en = $ideal_options['id-pages-switch-header'];

if (is_front_page() || is_home()) {
    return;

} elseif (empty($ideal_pages_header_en) || $ideal_pages_header_en == false) {
    ?>
<div id="ideal-pages-header" class="ideal-pages-header-pag uk-padding-remove  uk-section   uk-flex-middle  uk-section-primary">
  <div id="ideal-pages-header-overlay">
    <div class="uk-container uk-container-expand pages-wrap-header ">
      <!--pages Header-->
      <div class="id-header-pages-inner-wrap">
        <div>
          <div id="pages-entry-title" class="ar-entry-title pages-entry-title">
            <h1 class=""> <?php echo $ideal_pages_header_titel ?></h1>
          </div>

            <?php
            ideal_get_breadcrumb();?>
        </div>
      </div>
    </div>
    <!--/ pages-->
  </div>
</div>
</div>
<?php }