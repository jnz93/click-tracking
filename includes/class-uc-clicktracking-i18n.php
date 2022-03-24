<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://unitycode.tech
 * @since      1.0.0
 *
 * @package    Uc_Clicktracking
 * @subpackage Uc_Clicktracking/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Uc_Clicktracking
 * @subpackage Uc_Clicktracking/includes
 * @author     jnz93 <box@unitycode.tech>
 */
class Uc_Clicktracking_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'uc-clicktracking',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
