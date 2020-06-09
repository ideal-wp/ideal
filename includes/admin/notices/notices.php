<?php
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! class_exists( 'Redux' ) ) {

  function ideal_no_redux_notice__error() {
    ?>
    <div class="notice notice-error ">
        <p><?php _e( '! Maintenance mode switched on, Your site front-end under maintenance now, until you active Redux framework plugin', 'ideal' ); ?></p>
    </div>
    <?php 
  }
  add_action( 'admin_notices', 'ideal_no_redux_notice__error' );
  
} 
