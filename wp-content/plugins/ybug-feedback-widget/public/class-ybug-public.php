<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       AuthorUri
 * @since      1.0.0
 *
 * @package    Pluginslug
 * @subpackage Pluginslug/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Ybug
 * @subpackage Ybug/includes
 * @author     Radim Hernych <radim@ybug.io>
 */
class Ybug_Public {

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
	}

	/**
	 * Render JS snippet
	 *
	 * @since    1.0.0
	 */
	public function render_snippet()
    {
        $options = get_option( 'ybug' );

        // Show to all logged in users
        if (@$options['restrict_access'] === 'all' && !is_user_logged_in()) {
            return;
        }

        // Show only to some users by role
        if (@$options['restrict_access'] === 'roles') {
            if (!array_filter($options['roles'], 'current_user_can')) {
                return;
            }
        }

        if (@$options['project']) {

            $settings = [
                'id' => $options['project'],
            ];

            // TODO ADD MORE SETTINGS

            echo "<!-- Ybug code start (https://ybug.io) -->
<script type='text/javascript'>
(function() {
    window.ybug_settings = " . json_encode($settings) . ";
    var ybug = document.createElement('script'); ybug.type = 'text/javascript'; ybug.async = true;
    ybug.src = 'https://widget.ybug.io/button/'+window.ybug_settings.id+'.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ybug, s);
})();
</script>
<!-- Ybug code end -->";
        }
    }
}
