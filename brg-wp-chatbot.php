<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              ricardo.brgweb.com.br
 * @since             1.0.0
 * @package           Brg_Wp_Chatbot
 *
 * @wordpress-plugin
 * Plugin Name:       BRGWeb WP Chatbot
 * Plugin URI:        github.com/ricardobrg/brg-wp-chatbot
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Ricardo Lima Gonçalves
 * Author URI:        ricardo.brgweb.com.br
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       brg-wp-chatbot
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( PLUGIN_VERSION, '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-brg-wp-chatbot-activator.php
 */
function activate_brg_wp_chatbot() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-brg-wp-chatbot-activator.php';
	Brg_Wp_Chatbot_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-brg-wp-chatbot-deactivator.php
 */
function deactivate_brg_wp_chatbot() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-brg-wp-chatbot-deactivator.php';
	Brg_Wp_Chatbot_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_brg_wp_chatbot' );
register_deactivation_hook( __FILE__, 'deactivate_brg_wp_chatbot' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-brg-wp-chatbot.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_brg_wp_chatbot() {

	$plugin = new Brg_Wp_Chatbot();
	$plugin->run();

}
run_brg_wp_chatbot();
