<?php
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


use WPTRT\AdminNotices\Notices;

/**
 * Ideal Is Now Installed,
 * Recommended Plugins if not Installed.
 * 
 * @since v 1.0.0
 */

$ideal_installed_notices = new Notices();

$ideal_installed_notices->add(
  'ideal_add_recommended_plugins_notice',    // Unique ID.
  esc_html__( 'Ideal Is Now Installed And Ready To Use!', 'ideal' ),   // The title for this notice.
  esc_html__( 'Get ready to build something beautiful. Start Installation/Update Of Recommended Plugins Needed', 'ideal' ), // The content for this notice.
  [
      'scope'         => 'user',       // Dismiss is per-user instead of global.
      'screens'       => [ 'themes','dashboard' ], // Only show notice in the "themes" screen.
      'type'          => 'success',    // Make this a warning (orange color).
      'alt_style'     => true,         // Use alt styles.
      'option_prefix' => 'ideal_notices',   // Change the user-meta prefix.
  ]
);


if ( ! class_exists( 'Kirki' ) ) {
  $ideal_installed_notices->boot();
} 




