<?php
/**
 *
 *  Search Page Header.
 *
 * @package Ideal Theme
 * @subpackage Ideal Partials Page header 
 * @since V1.0.0
 * @version 1.0.0
 */
if (!('ABSPATH')) {
    exit;
}

?>
<div id="archives-page-header" class=" ideal-page-header-archives  uk-section uk-padding-remove  uk-flex-middle">
  <div id="archives-header-overlay">
    <div class="uk-container uk-container-expand archives-wrap-header ">
      <!--archives Header-->
      <div class="id-archives-inner-wrap">
        <div>
          <div class="ar-entry-title">
            <h1 class=""> <?PHP esc_html_e( 'Search Results: ', 'ideal' ) .the_search_query()?></h1>
          </div>
          <?php ideal_get_breadcrumb();  ?>
        </div>
      </div>
    </div>
    <!--/ archives-->
  </div>
</div>
</div>