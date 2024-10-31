<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 * @author     Your Name <email@example.com>
 */

if ( ! defined( 'WPINC' ) ) {

    die;

}

/**
 * Activates the welcome page.
 *
 * Adds transient to manage the welcome page.
 *
 * @since 1.0.2
 */
function rebel_slider_welcome_activate() {

    // Transient max age is 60 seconds.
    set_transient( '_welcome_redirect_rebel_slider', true, 60 );

}

register_activation_hook( RS_PLUGIN_FILE, 'rebel_slider_welcome_activate' );

/**
 * Deactivates welcome page
 *
 * Deletes the welcome page transient.
 *
 * @since 1.0.2
 */
function rebel_slider_welcome_deactivate() {

  delete_transient( '_welcome_redirect_rebel_slider' );

}

register_deactivation_hook( RB_PLUGIN_FILE, 'rebel_slider_welcome_deactivate' );
