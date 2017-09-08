<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       ricardo.brgweb.com.br
 * @since      1.0.0
 *
 * @package    Brg_Wp_Chatbot
 * @subpackage Brg_Wp_Chatbot/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Brg_Wp_Chatbot
 * @subpackage Brg_Wp_Chatbot/includes
 * @author     Ricardo Lima Gonçalves <ricardo@brgweb.com.br>
 */
class Brg_Wp_Chatbot_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'brg-wp-chatbot',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
