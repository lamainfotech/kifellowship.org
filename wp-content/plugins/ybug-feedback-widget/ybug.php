<?php

/**
 * The plugin bootstrap file
 *
 * @link              https://ybug.io
 * @since             1.0.0
 * @package           Ybug
 *
 * @wordpress-plugin
 * Plugin Name:       Ybug Feedback Widget
 * Description:       Collect visual feedback and bug reports with screenshots from your users. This plugin allows you to easily add Ybug Feedback Widget on your website.
 * Version:           1.1.0
 * Requires at least: 3.1
 * Requires PHP:      5.3
 * Author:            Ybug
 * Author URI:        https://ybug.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ybug
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'YBUG_VERSION', '1.1.0' );

function activate_ybug() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ybug-activator.php';
	Ybug_Activator::activate();
}

function deactivate_ybug() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ybug-deactivator.php';
	Ybug_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ybug' );
register_deactivation_hook( __FILE__, 'deactivate_ybug' );

require plugin_dir_path( __FILE__ ) . 'includes/class-ybug.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ybug() {

	$plugin = new Ybug();
	$plugin->run();

}
run_ybug();
