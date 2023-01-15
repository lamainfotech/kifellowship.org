<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://ybug.io
 * @since      1.0.0
 *
 * @package    Ybug
 * @subpackage Ybug/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Ybug
 * @subpackage Ybug/admin
 * @author     Radim Hernych <radim@ybug.io>
 */
class Ybug_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

    public function render_project_field(  ) {

        $options = get_option( 'ybug' );
        ?>
        <input type='text' name='ybug[project]' value='<?php echo $options['project'] ?>' size="64" class="regular-text code" placeholder="Copy &amp; paste your project ID here..." />
        <p class="description">The ID of the project in Ybug that you have created for this site. Leave empty to disable Feedback Widget.</p>
        <?php

    }

    /**
     * Render JS snippet
     *
     * @since    1.1.0
     */
    public function render_restrict_access_field(  ) {

        $options = get_option( 'ybug' );
        $options['restrict_access'] = @$options['restrict_access'] ?: 'no';
        $options['roles'] = @$options['roles'] ?: [];
        ?>
        <p>
            <label>
                <input name="ybug[restrict_access]" type="radio" value="no" class="tog" <?php checked( 'no' === $options['restrict_access'] ); ?> />
                <?php echo __( 'Show to everyone', 'ybug' ); ?>
            </label>
        </p>
        <p>
            <label>
                <input name="ybug[restrict_access]" type="radio" value="all" class="tog" <?php checked( 'all' === $options['restrict_access'] ); ?> />
                <?php echo __( 'Show to all logged in users', 'ybug' ); ?>
            </label>
        </p>
        <p>
            <label>
                <input name="ybug[restrict_access]" type="radio" value="roles" class="tog" <?php checked( 'roles' === $options['restrict_access'] ); ?> />
                <?php echo __( 'Show only to some users by role:', 'ybug' ); ?>
            </label>
        </p>
        <div class="ybug-roles-wrapper <?php if ($options['restrict_access'] !== 'roles') : ?>is-disabled<?php endif; ?>">
        <?php
        $editable_roles = get_editable_roles();
        foreach ( $editable_roles as $role => $details ) {
            $name = translate_user_role( $details['name'] );
            echo "<label for='ybug_role_{$details['name']}'>
                <input type='checkbox' 
                    id='ybug_role_{$details['name']}' 
                    name='ybug[roles][]' 
                    value='" . esc_attr( $role ) . "'
                    " . disabled($options['restrict_access'] !== 'roles', true, false). "
                    " . checked( in_array($role, $options['roles']), true, false ) . "
                 />
                <span class='ybug-role-name'>$name</span>
            </label>";
        }
        ?>
        </div>
        <?php

    }


    public function render_section_callback(  ) {

        echo "<p>To set up, enter the ID of the project that you have created in your Ybug dashboard. 
If you haven't done that yet, you can <a href='https://ybug.io/dashboard' target='_blank'>create a new project now</a>. It should only take a minute.</p>";

    }

    protected function get_project_url($projectId, $page = 'settings') {

	    return "https://ybug.io/dashboard/projects/{$projectId}/{$page}";

    }

	public function render_settings_page() {

	    $options = get_option( 'ybug' );

        ?>
        <div class="wrap" style="max-width: 550px; padding-top: 20px; margin: 0 auto;">
            <form action='options.php' method='post'>

                <a href="https://ybug.io" target="_blank">
                    <img src="<?php echo plugins_url( 'admin/images/logo-full.svg', __DIR__ ) ?>" width="200" alt="Ybug" />
                </a>

                <?php
                settings_fields( 'ybugSettings' );
                do_settings_sections( 'ybugSettings' );
                ?>

                <p class="submit">
                    <input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes">
                    <?php if (@$options['project']) : ?>
                        <a href="<?php echo $this->get_project_url( $options['project'] ) ?>" class="button button-secondary" target="_blank">Project settings</a>
                        <a href="<?php echo $this->get_project_url( $options['project'], 'widget' ) ?>#!customize-widget" class="button button-secondary" target="_blank">Customize Feedback Widget</a>
                    <?php endif ?>
                </p>

            </form>
        </div>
        <?php

    }

    public function admin_plugin_settings_link($links) {

        array_unshift($links, '<a href="' . admin_url( 'options-general.php?page=ybug' ) . '">' . __( 'Settings' ) . '</a>' );
        return $links;

    }

    public function admin_menu( ) {

        add_options_page(
            'Ybug',
            'Ybug',
            'manage_options',
            $this->plugin_name,
            array( $this, 'render_settings_page' )
        );

        //            add_menu_page(
        //                'Ybug',
        //                'Ybug',
        //                'manage_options',
        //                'ybug',
        //                array($plugin_admin, 'render_settings_page'),
        //                plugins_url( 'images/icon-20x20.png', __DIR__)
        //            );
    }

    public function admin_init() {

        if ( get_option( 'Ybug_Activated' ) ) {
            delete_option( 'Ybug_Activated' );
            if ( ! headers_sent() ) {
                wp_redirect( admin_url( 'options-general.php?page=' . $this->plugin_name ) );
            }
        }

        register_setting( 'ybugSettings', $this->plugin_name );

        add_settings_section(
            __( 'Ybug_settings_section', $this->plugin_name ),
            __( 'Ybug Feedback Widget settings', $this->plugin_name ),
            array( $this, 'render_section_callback' ),
            'ybugSettings'
        );

        add_settings_field(
            'project',
            __( 'Your Project ID:', 'ybug' ),
            array( $this, 'render_project_field' ),
            'ybugSettings',
            'Ybug_settings_section'
        );

        add_settings_field(
            'restrict_access',
            __( 'Restrict Access:', 'ybug' ),
            array( $this, 'render_restrict_access_field' ),
            'ybugSettings',
            'Ybug_settings_section'
        );


        wp_enqueue_style('admin_css', plugin_dir_url( __FILE__ ) . 'css/ybug-admin.css', array(), $this->version);
        wp_enqueue_script( 'admin_js', plugin_dir_url( __FILE__ ) . 'js/ybug-admin.js', array(), $this->version, true );
    }

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
	}

}
