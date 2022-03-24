<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://unitycode.tech
 * @since             1.0.0
 * @package           Uc_Clicktracking
 *
 * @wordpress-plugin
 * Plugin Name:       Click Tracking
 * Plugin URI:        https://unitycode.tech
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            jnz93
 * Author URI:        https://unitycode.tech
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       uc-clicktracking
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
define( 'UC_CLICKTRACKING_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-uc-clicktracking-activator.php
 */
function activate_uc_clicktracking() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-uc-clicktracking-activator.php';
	Uc_Clicktracking_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-uc-clicktracking-deactivator.php
 */
function deactivate_uc_clicktracking() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-uc-clicktracking-deactivator.php';
	Uc_Clicktracking_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_uc_clicktracking' );
register_deactivation_hook( __FILE__, 'deactivate_uc_clicktracking' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-uc-clicktracking.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_uc_clicktracking() {

	$plugin = new Uc_Clicktracking();
	$plugin->run();

}
run_uc_clicktracking();
