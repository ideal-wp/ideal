<?php
/**
 * Ideal theme search
 * search icon and search form
 * @since v1.0.0
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$ideal_options = ideal_get_theme_options();

if(!empty($ideal_options['search-icon-nav'])){
  $ideal_search_icon_nav = $ideal_options['search-icon-nav'];
}elseif(!class_exists('Kirki')){
  $ideal_search_icon_nav = true;
}elseif(empty($ideal_options['search-icon-nav'])){
  $ideal_search_icon_nav = true;
}

// if Enable Search icon in Navbar
if( $ideal_search_icon_nav == true){
  add_action('ideal_search_innav' ,'ideal_nav_serch',1 );
}
/**
 * 
 * 
 * switch between search forms 
 * @since v1.0.0
 * 1- overlay
 * 2- modal
 * 3- dropdown
 * 
 */
global $ideal_search_mode_nav;
if(!empty($ideal_options['shearch-nav-mod'])){
  $ideal_search_mode_nav = $ideal_options['shearch-nav-mod'];
}elseif(!class_exists('Kirki')){
  $ideal_search_mode_nav = 'overlay';
}

function ideal_nav_serch(){
  
  global $search_f,$ideal_search_mode_nav;
  global $ideal_options;

  
  
  if( $ideal_search_mode_nav == 'overlay'){ //1- overlay icon
    echo '
      <a class="uk-navbar-toggle"  uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#" uk-icon="icon:search; ratio: 1.1"></a>
    ';

  }elseif( !empty($ideal_options['shearch-nav-mod']) && $ideal_options['shearch-nav-mod'] == 'modal'){  // if 2- modal icon
    echo'
    <a class="uk-navbar-toggle" href="#modal-full" uk-search-icon uk-toggle></a>
    ';
    
  }elseif( !empty($ideal_options['shearch-nav-mod']) && $ideal_options['shearch-nav-mod'] == 'dropdown'){
    // if 3- dropdown add icon + form
    echo'
    <a class="uk-navbar-toggle" href="#" uk-search-icon></a>
    <div class="ideal-nav-serch-drop uk-navbar-dropdown" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !nav">
      <div class="uk-grid-small uk-flex-middle" uk-grid>
        <div class="uk-width-expand">
          <form  role="search" method="get"  class="search-form uk-search uk-search-navbar uk-width-1-1" id="ideal-serch-f" action="'. esc_url(home_url( '/' )) .'">
            <input class="uk-search-input" type="search" placeholder="'.  esc_attr__('Search','ideal').'" value="" name="s"
              autofocus>
          </form>
        </div>
        <div class="uk-width-auto">
          <a class="uk-navbar-dropdown-close" href="#" uk-close></a>
        </div>
      </div>
    </div>
    ';

  }

} 


if( $ideal_search_mode_nav == 'overlay'){//if 1- overlay add form
?>
<div class="nav-overlay uk-navbar-left uk-flex-1" hidden>
  <div class="uk-navbar-item uk-width-expand">
    <form class=" search-form uk-search uk-search-navbar uk-width-1-1" role="search" method="get"
      action="<?php echo esc_url(home_url( '/' )); ?>">
      <input class="uk-search-input" type="search" value="" name="s"
        placeholder="<?php  echo esc_attr__('Search...','ideal');?>" autofocus>
    </form>
  </div>
  <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
</div>
<?php }elseif( !empty($ideal_options['shearch-nav-mod']) && $ideal_options['shearch-nav-mod'] == 'modal'){
   // if 2- modal add form 
  ?>
<div id="modal-full" class="uk-modal-full uk-modal" uk-modal>
  <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" uk-height-viewport>
    <button class="uk-modal-close-full" type="button" uk-close></button>
    <form role="search" method="get" class="search-form uk-search uk-search-large"
      action="<?php echo esc_url(home_url( '/' )); ?>">
      <input value="" name="s" class="uk-search-input uk-text-center" type="search" placeholder="
      <?php  echo esc_attr__('Search...','ideal');?>" autofocus>
    </form>
  </div>
</div>
<?php } ?>