<?php
/** 
*
* comments walker
* @package Ideal
* @subpackage helpers /comments walker
* @since 1.0.0
* @version 1.0.0
*
*/
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Enqueue js comment-reply
if( ! function_exists( 'ideal_theme_comment_replay_scripts' ) ) {

	function ideal_theme_comment_replay_scripts() {

		if ( ! is_admin() ) {

			if (is_singular() && get_option('thread_comments')) { 

				wp_enqueue_script('comment-reply'); 
				
			}
		}
	}
}
add_action('wp_enqueue_scripts', 'ideal_theme_comment_replay_scripts');


// Custom Callback
            
function ideal_theme_comments($comment, $args, $depth) {
	
	$GLOBALS['comment'] = $comment; 
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
		<div class="comment-wrap uk-visible-toggle">
			<div class="comment-img uk-comment-avatar">
				<?php echo get_avatar($comment,$args['avatar_size'],null,null,array('class' => array('img-responsive', 'img-circle') )); ?>
			</div>
			<div class="comment-body">
				<h4 class="comment-author uk-comment-title"><?php echo get_comment_author_link(); ?></h4>
				<span class="comment-date uk-comment-meta"><?php printf(__('%1$s at %2$s', 'ideal'), get_comment_date(),  get_comment_time()) ?></span>
        <?php if ($comment->comment_approved == '0') { ?><em><i class="fa fa-spinner fa-spin" aria-hidden="true"></i> <?php _e('Comment awaiting approval', 'ideal'); ?></em><br /><?php } ?>
        <div class="uk-comment-body">
        <?php comment_text(); ?>
        </div>
				<span class="comment-reply uk-hidden-hover"> <?php comment_reply_link(array_merge( $args, array('reply_text' => __('Reply', 'ideal'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?></span>
			</div>
		</div>
<?php }
 
 //Comments are closed

if( ! function_exists( 'ideal_comment_close' )){

	function ideal_comment_close(){

		if (  
			!   comments_open() 
			&& !is_page() 
			&& post_type_supports(get_post_type(), 'comments')
			) : ?>

					<div class="id-comment-post-close">
					 <div class ="uk-placeholder">
					 <?php esc_html_e('Comments are closed.', 'ideal'); ?>
					 </div> 
					</div>
     <?php 
		endif;

	}

}