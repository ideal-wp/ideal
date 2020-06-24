<?php
/**
 *
 *  Archives Page Header.
 *
 * @package Ideal Theme
 * @subpackage Ideal Partials Page header 
 * @since V1.0.0
 * @version 1.0.0
 */
if (!('ABSPATH')) {
    exit;
}
$ideal_options    = ideal_get_theme_options();
$id_taitel= null;

if ( ! function_exists( 'ideal_archives_taitle' ) ) {

  function ideal_archives_taitle(){

    if( is_category()){

      single_cat_title() ;

    }elseif(is_tag()){

      single_tag_title();

    }elseif(is_day()){

      echo esc_html__(' Daily Archives', 'ideal' ) .': ' . get_the_date();

    }elseif(is_month()){

      echo esc_html__(' Monthly Archives', 'ideal' ) .': ' . get_the_date('F-Y');

    }elseif(is_year()){

      echo esc_html__(' Yearly Archives', 'ideal' ) .': ' . get_the_date('Y');

    }elseif(is_author()){

      echo esc_html__(' Author Archives', 'ideal' ) .': ' . get_the_author();

    }else{
      echo esc_html__('Archives', 'ideal' );
    }


  }
}
?>
<div id="archives-page-header" class=" ideal-page-header-archives  uk-section uk-padding-remove  uk-flex-middle">
  <div id="archives-header-overlay">
    <div class="uk-container uk-container-expand archives-wrap-header ">
      <!--archives Header-->
      <div class="id-archives-inner-wrap">
        <div>
          <div class="ar-entry-title">
            <h1 class=""> <?php ideal_archives_taitle(); ?></h1>
          </div>
          <?php ideal_get_breadcrumb();  ?>
        </div>
      </div>
    </div>
    <!--/ archives-->
  </div>
</div>
</div>