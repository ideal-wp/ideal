 <?php
 if (!defined('ABSPATH')) {
  exit;
}
  global
$ideal_options?>
  <div class="uk-navbar-container uk-container-expand">
    <div class="user-nav uk-container uk-container-expand">
      <nav class=" uk-visible@s">
        <div class="uk-navbar-left">
          <div class="uk-navbar-item">
            <p><?php if(!empty($ideal_options['user_nav_left_area'])){
              echo esc_html($ideal_options['user_nav_left_area']);
            }else{ esc_html_e( 'yourname@yoursite.com', 'ideal' );}  ?></p>
          </div>
          <div class="uk-navbar-right"><!--Right User-->
            <div class="uk-navbar-item">
            <?php if(!empty($ideal_options['user_nav_right_area'])){
              echo esc_html($ideal_options['user_nav_right_area']);
            }else{ esc_html_e( 'Your Phone Here', 'ideal' );}  ?>
            </div> <!--/Right User-->
          </div>
        </div>
      </nav>
    </div> <!--/div user Navbar -->
  </div> 