<?php
if (!defined('ABSPATH')) {
    exit;
}
global
$ideal_options,
$ideal_category,
$ideal_is_sidebar,
$ideal_is_sticky,
$ideal_animation_class, 
$ideal_flex,
$ideal_animation,
$ideal_is_page_sidebar,
$ideal_animation_repeat,
$ideal_card,
$ideal_is_cards,
$ideal_is_single_cards,
$ideal_is_page_cards,
$ideal_id_container,
$ideal_id_child,
$ideal_is_featured_image,
$ideal_card_imge,
$ideal_featured_image
;


$ideal_options                   = ideal_get_theme_options();
$ideal_category                  = get_the_category();
$ideal_is_sidebar                = false;
$ideal_is_sticky                 = null;
$ideal_sidebar_position          = null;
$ideal_animation_class           = null;
$ideal_flex                      = null;
$ideal_animation                 = null;
$ideal_is_page_sidebar           = false;
$ideal_animation_repeat          = null;
$ideal_is_cards                  = null;
$ideal_is_single_cards           = null;
$ideal_is_page_cards             = null;
$ideal_card                      = null;
$ideal_id_container              = null;
$ideal_id_child                  = null;
$ideal_is_featured_image         = null;
$ideal_card_imge                 = null;
$ideal_featured_image            = null;


if (class_exists('Kirki')) {


    if(!empty($ideal_options['is_post_sidebar'])){ 
    $ideal_is_sidebar               = $ideal_options['is_post_sidebar'] ;
    }if(!empty($ideal_options['is-page-sidebar'])){
        $ideal_is_page_sidebar      =  $ideal_options['is-page-sidebar'] ;
    }if(!empty($ideal_options['i-sticky-sidebar'])){
        $ideal_is_sticky            =  $ideal_options['i-sticky-sidebar'] ;
    }if( !empty($ideal_options['sidebar-position'])){
        $ideal_sidebar_position     =  $ideal_options['sidebar-position'] ;
    }if(!empty($ideal_options['id-scroll-animations'])){
        $ideal_animation_class      =  $ideal_options['id-scroll-animations'] ;
    }if(!empty($ideal_options['post-imge-in'])){
        $ideal_is_featured_image    =  $ideal_options['post-imge-in'] ;
    }if(!empty($ideal_options['add-cards-blog'])){
        $ideal_is_cards             =  $ideal_options['add-cards-blog'] ;
    }if(!empty($ideal_options['post-cards'])){
        $ideal_is_single_cards      =  $ideal_options['post-cards']  ;
    }if(!empty($ideal_options['add-cards-page'])){
        $ideal_is_page_cards        =  $ideal_options['add-cards-page'] ;
    }if(!empty($ideal_options['post-cards'])){
        $ideal_is_cards             =  $ideal_options['add-cards-blog'] ;
    }
}else{
    
    $ideal_is_sidebar           =   false  ;
    $ideal_is_page_sidebar      =   false ;   
    $ideal_is_featured_image    =    false ; 

}

if (!empty($ideal_is_cards) && $ideal_is_cards == true ) {

    $ideal_card = 'uk-card-default';
}

if (!empty($ideal_options['repeat-scrollspy']) && $ideal_options['repeat-scrollspy'] == true) {
    $ideal_animation_repeat = '  repeat: "true"';

} else{
    $ideal_animation_repeat = null;
}

if (!empty($ideal_options['add-scrollspy']) && $ideal_options['add-scrollspy'] == true) {

    $ideal_animation = 'uk-scrollspy="cls: ' . $ideal_animation_class . '; target: .uk-card; delay: 500;' . $ideal_animation_repeat . '';
}


if (empty( $ideal_is_page_sidebar ) || $ideal_is_page_sidebar == false ) {
  $ideal_id_container = 'uk-container-expand';
} else {
  $ideal_id_container = 'uk-container-small';
}

if (!empty($ideal_sidebar_position) && $ideal_sidebar_position == 'left') {
    $ideal_flex = 'uk-flex-first@m';
} else {
    $ideal_flex = null;
}

if (!empty($ideal_is_sticky) && $ideal_is_sticky == true ) {

    $ideal_is_sticky = 'uk-sticky="offset: 100; bottom: #id-comments"';
}
if (empty($ideal_is_sidebar) || $ideal_is_sidebar == false) {
  $ideal_id_container = 'uk-container-expand';
  $ideal_id_child = 'uk-child-width-1-2@m';
} else {
  $ideal_id_container = 'uk-container-small';
  $ideal_id_child = 'uk-child-width-1-3@m';
}

if ($ideal_is_featured_image == false  &&  $ideal_is_cards == false  ){

    $ideal_card_imge = 'single-post-fe-img';

}