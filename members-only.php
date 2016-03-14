<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.deviodigital.com
 * @since             1.0.0
 * @package           Members_Only
 *
 * @wordpress-plugin
 * Plugin Name:       Members Only
 * Plugin URI:        http://www.robertdevore.com/members-only
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Devio Digital
 * Author URI:        http://www.deviodigital.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       members-only
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-members-only-activator.php
 */
function activate_members_only() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-members-only-activator.php';
	Members_Only_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-members-only-deactivator.php
 */
function deactivate_members_only() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-members-only-deactivator.php';
	Members_Only_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_members_only' );
register_deactivation_hook( __FILE__, 'deactivate_members_only' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-members-only.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_members_only() {

	$plugin = new Members_Only();
	$plugin->run();

}
run_members_only();
