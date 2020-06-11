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
$ideal_options     = get_ideal_theme_options();
$is_featured_image = null;
$is_cards          = null;
$card_imge         = null;
$featured_image    = null;

if ( class_exists( 'ReduxFramework' ) ){
    
    $is_featured_image = $ideal_options['post-imge-in'];
    $is_cards          = $ideal_options['post-cards'];
  
}else{

    $is_featured_image = 1;
    $is_cards          = 1;
}

if( $is_featured_image == 1 ){
    if ( has_post_thumbnail() ) {
    $featured_image = get_the_post_thumbnail_url();
    }
}
if ($is_featured_image == 1 &&  $is_cards == 1 ){

    $card_imge = 'single-post-fe-img';

}

?>
<?php if( has_post_thumbnail() && $is_featured_image == 1 ): ?>

        <div
        class="uk-background-cover uk-background-center-center uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle uk-background-norepeat <?php echo $card_imge ;?> "
        style="background-image:url(<?php echo $featured_image ;?>);">
        </div>
<?php
endif;
?> 
<div id="content-id-s">
<?php 

the_content();

$defaults = array(
    'before'           => '<ul class="uk-pagination">' . __( 'Pages:', 'ideal' ),
    'after'            => '</ul>',
    'link_before'      => '<li>',
    'link_after'       => '</li>',
    'next_or_number'   => 'number',
    'separator'        => ' ',
    'nextpagelink'     => esc_html__( 'Next page', 'ideal'),
    'previouspagelink' => esc_html__( 'Previous page', 'ideal' ), 
    'pagelink'         => '%',
    'echo'             => 1
);

    wp_link_pages( $defaults );

?>
</div>
