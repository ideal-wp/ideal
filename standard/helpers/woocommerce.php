<?php
/**
 * WooCommerce helpers
 *
 *
 * @package Ideal WordPress Theme
 * @subpackage standrad/helpers
 * @version 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Check if WooCommerce is activated
 */
if(ideal_is_woocommerce_activated() == false){
return;
}
/**
 *
 * Add theme Support Woocommerce
 *
 * @since 1.0.0
 */
if (!function_exists('ideal_theme_add_woocommerce_support')) {

    function ideal_theme_add_woocommerce_support()
    {
        add_theme_support('woocommerce');
    }
}
add_action('after_setup_theme', 'ideal_theme_add_woocommerce_support');

/**
 *
 * Update the cart when Product added to cart with ajax
 *
 * @since 1.0.0
 */

if ($woocommerce && version_compare($woocommerce->version, '3.0', '>=')) {
    add_filter('woocommerce_add_to_cart_fragments', 'ideal_add_to_cart_fragment');

} else {
    add_filter('add_to_cart_fragments', 'ideal_add_to_cart_fragment');
}

// update the cart with ajax
if (!function_exists('ideal_add_to_cart_fragment')) {
    function ideal_add_to_cart_fragment($fragments)
    {
        global $woocommerce;
        ob_start();
        ?>
<span class="cart-count-nav"> <?php echo esc_html($woocommerce->cart->cart_contents_count); ?></span>
<?php
$fragments['span.cart-count-nav'] = ob_get_clean();
        return $fragments;
    }
}

/**
 * 
 * remove action
 * 
 * woocommerce_before_main_content , woocommerce_output_content_wrapper 10 
 * woocommerce_after_main_content  , woocommerce_output_content_wrapper_end 10
 * 
 */

remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);

remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

/**
 * lood woo ideal shop customize mark
 * 
 * 
 * @since 1.0.0
 */


if ($woocommerce) {

    add_action('wp', 'ideal_woo_shop_customize_mark');
}

function ideal_woo_shop_customize_mark()
{

    //Shop header
    if (is_shop() || is_product_category() || is_product_tag() || is_product_taxonomy()) {

        add_action('woocommerce_before_main_content', 'ideal_before_shop_header', 1);
				add_action('woocommerce_before_shop_loop', 'ideal_after_shop_header', 1);


				add_action('woocommerce_before_shop_loop', 'woocommerce_breadcrumb', 10);

		}
		
		if ( is_product() ) {
			add_action('woocommerce_before_single_product', 'woocommerce_breadcrumb', 2);


		}

}
/**
 *
 * customize Shop
 *@hooked woocommerce_before_shop_loop
 *@hooked woocommerce_after_main_content
 *@since v1.0.0
 */
//SHop
add_action('woocommerce_before_shop_loop', 'ideal_before_content_loop', 2);
add_action('woocommerce_after_main_content', 'ideal_woocommerce_sidebar', 1);
/**
 *
 * displaying all single products
 * hook woocommerce_before_single_product 1
 * hook woocommerce_after_single_product  1
 *@since v1.0.0
 */

//single product
add_action('woocommerce_before_single_product', 'ideal_before_content_loop', 1);
add_action('woocommerce_after_single_product', 'ideal_woocommerce_sidebar', 1);

/**
 *Hook: woocommerce_sidebar.
 *@Remove woocommerce_before_main_content', 'woocommerce_breadcrumb', 20
 *@Remove woocommerce_get_sidebar - 10
 *@since v1.0.0
 */
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );


/**
 * 
 *@add header to product archives, including the main shop page which is a post type archive
 *@hooked woocommerce_before_shop_loop', 'ideal_after_shop_header', 1
 *
 *@hookedwoocommerce_before_main_content', 'ideal_before_shop_header', 1
 *@since 1.0.0
 */
// start shop header 
function ideal_before_shop_header()
{
    ?>
<div id="woo-archives-page-header" class=" ideal-woo-header-archives  uk-section uk-padding-remove  uk-flex-middle">
  <div id="woo-archives-header-overlay">
    <div class="uk-container uk-container-expand woo-archives-wrap-header ">
      <!--shop Header-->
      <div class="id-woo-archives-inner-wrap">
        <div>
          <?php }

// end of shop header 

function ideal_after_shop_header()
{?>       </div>
        <!--/shop Header-->
      </div>
    </div>
  </div>
</div>

<?php }
/**
 * @hooked in archive-product.php.
 * woocommerce_before_shop_loop , 'ideal_before_content_loop', 2
 * woocommerce_after_main_content', 'ideal_woocommerce_sidebar', 1
 * 
 * @hooked in content-product.php.
 * woocommerce_after_single_product, 'ideal_woocommerce_sidebar', 1
 * woocommerce_before_single_product 'ideal_before_content_loop', 1
 *@since 1.0.0
 */
global 
$ideal_woo_is_sidebar,
$ideal_id_container,
$ideal_flex,
$ideal_is_sticky,
$ideal_sidebar_position;



$ideal_woo_is_sidebar = false;
$ideal_sidebar_position =null;
$ideal_options    = ideal_get_theme_options();

if(!empty($ideal_options['is-wooc-sidebar'])){ 
	$ideal_woo_is_sidebar = $ideal_options['is-wooc-sidebar'] ;
}
if( !empty($ideal_options['sidebar-position'])){
	$ideal_sidebar_position     =  $ideal_options['sidebar-position'] ;
}

if (empty( $ideal_woo_is_sidebar ) || $ideal_woo_is_sidebar == false ) {
	$ideal_id_container = 'uk-container-expand';
} else {
	$ideal_id_container = 'uk-container-small';
}
if (!empty($ideal_sidebar_position) && $ideal_sidebar_position == 'left') {
	$ideal_flex = 'uk-flex-first@m';
} else {
	$ideal_flex = null;
}


function ideal_before_content_loop()
{
?>
<div id="ideal-site-content" class="ideal-site-content uk-section">
  <div class="uk-container <?php echo $ideal_id_container; ?>">
    <?php if (empty($ideal_woo_is_sidebar) || $ideal_woo_is_sidebar == false) {?>
    <div class=" uk-grid-column-small" uk-grid>
      <div class="id-con-warp uk-width-expand@m">
        <div class="uk-container">
          <?php }

}

function ideal_woocommerce_sidebar()
{     global $ideal_flex,$ideal_is_sticky,$ideal_woo_is_sidebar;
    if (empty($ideal_woo_is_sidebar) || $ideal_woo_is_sidebar == false) {?>
        </div>
      </div>
      <!--/id-con-warp-->
      <div class="uk-width-1-4@m uk-width-1-4@l <?php echo $ideal_flex; ?>">
        <div class=" uk-container uk-container-expand " id="blog-sidebar">
          <div class="side-bar uk-flex uk-flex-column " <?php echo $ideal_is_sticky; ?>>
            <?php get_sidebar();?>
          </div>
        </div>
      </div>
      <!--/id-con-warp-->
      <?php }?>
    </div>
  </div>
  <?php
}