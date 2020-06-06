<?php
/**
* Single Post Content
*
* @version 1.0.0
*/
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$ideal_options = get_ideal_theme_options();
$is_featured_image = $ideal_options['post-imge-in'];
$is_cards = $ideal_options['post-cards'];
$card_imge= null;
$featured_image    = null;

if( $is_featured_image == 1 ){
    if ( has_post_thumbnail() ) {
    $featured_image = get_the_post_thumbnail_url();
    }
}
if ($is_featured_image == 1 &&  $is_cards == 1 ){

    $card_imge = 'single-post-fe-img';

}

?>
<?php if($is_featured_image == 1 ): ?>

        <div
        class="uk-background-cover uk-background-center-center uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle uk-background-norepeat uk-background-fixed <?php echo $card_imge ;?> "
        style="background-image:url(<?php echo $featured_image ;?>);">

        <div class="uk-overlay uk-overlay-primary uk-position-bottom">
            <?php the_title( '<h3>', '</h3>' ); ?>
        </div>
        </div>
<?php
endif;
?> 
<div id="content-id-s">
<?php the_content(); ?>
</div>