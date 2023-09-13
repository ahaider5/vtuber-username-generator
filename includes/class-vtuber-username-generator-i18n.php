<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.linkedin.com/in/ahaider5/
 * @since      1.0.0
 *
 * @package    Vtuber_Username_Generator
 * @subpackage Vtuber_Username_Generator/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Vtuber_Username_Generator
 * @subpackage Vtuber_Username_Generator/includes
 * @author     Ali Haider <a.haider_5@hotmail.com>
 */
class Vtuber_Username_Generator_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'vtuber-username-generator',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
