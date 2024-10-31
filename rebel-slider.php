<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://rebel-slider.developerforwebsites.com
 * @since             1.0.0
 * @package           Rebel_slider
 *
 * @wordpress-plugin
 * Plugin Name:       Rebel Slider
 * Plugin URI:        http://rebel-slider.developerforwebsites.com
 * Description:       Rebel Slider gives you the power to create beautiful slideshows on your WordPress site, through the most simple and intuitive plugin interface of any WordPress slider. Show off your photographs and videos, latest work, or even the products in your online store. Rebel Slider is a simple way to build, organize and display beautiful content slides into any existing WordPress theme. Responsive Slider
 * Version:           1.0.0
 * Author:            Freelancer Martin
 * Author URI:       http://developerforwebsites.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rebel-slider
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'REBEL_SLIDER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_rebel_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rebel-slider-activator.php';
	Rebel_Slider_Activator::custom_post_type_activate();
}


/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rebel-slider-deactivator.php';
	Rebel_Slider_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rebel_slider' );
register_deactivation_hook( __FILE__, 'deactivate_rebel_slider' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rebel-slider.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rebel_slider() {

	$plugin = new Rebel_Slider();
	$plugin->run();

}
run_rebel_slider();
