<?php

/**
 * Fired during plugin activation
 *
 * @link       https://ybug.io
 * @since      1.0.0
 *
 * @package    Ybug
 * @subpackage Ybug/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Ybug
 * @subpackage Ybug/includes
 * @author     Radim Hernych <radim@ybug.io>
 */
class Ybug_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

	    // TODO Check WP version

        add_option( 'Ybug_Activated', true );
	}

}
