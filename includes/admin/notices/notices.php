<?php
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! class_exists( 'Kirki' ) ) {

  function ideal_no_Kirki_notice__error() {
    ?>
    <div class="notice notice-success is-dismissible Kirki ">
    <h3><?php esc_html_e( 'Ideal is now installed and ready to use!', 'ideal' ); ?></h3>
        <p><?php esc_html_e( ' Get ready to build something beautiful. Start Installation/Update Of Recommended Plugins Needed', 'ideal' ); ?></p>
    </div>
    <?php 
  }
  add_action( 'admin_notices', 'ideal_no_Kirki_notice__error' );
  
} 
