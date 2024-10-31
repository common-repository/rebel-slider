<?php
/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://rebel-slider.developerforwebsites.com
 * @since      1.0.0
 *
 * @package    Rebel_Slider
 * @subpackage Plugin_Name/public
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Rebel_Slider
 * @subpackage Rebel_Slider/public
 * @author     Freelancer Martin <developerforwebsites@gmail.com>
 */
class Rebel_Slider_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'rebel-slider',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
