<?php
global $acf_post_type;

acf_render_field_wrap(
	array(
		'label'       => __( 'Plural Label', 'acf' ),
		/* translators: example post type */
		'placeholder' => __( 'Movies', 'acf' ),
		'type'        => 'text',
		'name'        => 'name',
		'key'         => 'name',
		'class'       => 'acf_plural_label',
		'prefix'      => 'acf_post_type[labels]',
		'value'       => $acf_post_type['labels']['name'],
		'required'    => true,
	),
	'div',
	'field'
);

acf_render_field_wrap(
	array(
		'label'       => __( 'Singular Label', 'acf' ),
		/* translators: example post type */
		'placeholder' => __( 'Movie', 'acf' ),
		'type'        => 'text',
		'name'        => 'singular_name',
		'key'         => 'singular_name',
		'class'       => 'acf_slugify_to_key acf_singular_label',
		'prefix'      => 'acf_post_type[labels]',
		'value'       => $acf_post_type['labels']['singular_name'],
		'required'    => true,
	),
	'div',
	'field'
);

acf_render_field_wrap(
	array(
		'label'        => __( 'Post Type Key', 'acf' ),
		'instructions' => __( 'Lower case letters, underscores and dashes only, Max 20 characters.', 'acf' ),
		/* translators: example post type */
		'placeholder'  => __( 'movie', 'acf' ),
		'type'         => 'text',
		'name'         => 'post_type',
		'key'          => 'post_type',
		'maxlength'    => 20,
		'class'        => 'acf_slugified_key',
		'prefix'       => 'acf_post_type',
		'value'        => $acf_post_type['post_type'],
		'required'     => true,
	),
	'div',
	'field'
);

acf_render_field_wrap( array( 'type' => 'seperator' ) );

acf_render_field_wrap(
	array(
		'type'         => 'true_false',
		'name'         => 'public',
		'key'          => 'public',
		'prefix'       => 'acf_post_type',
		'value'        => $acf_post_type['public'],
		'label'        => __( 'Public', 'acf' ),
		'instructions' => __( 'Visible on the frontend and in the admin dashboard.', 'acf' ),
		'ui'           => true,
		'default'      => 1,
	),
	'div'
);

acf_render_field_wrap(
	array(
		'type'         => 'true_false',
		'name'         => 'hierarchical',
		'key'          => 'hierarchical',
		'class'        => 'acf_hierarchical_switch',
		'prefix'       => 'acf_post_type',
		'value'        => $acf_post_type['hierarchical'],
		'label'        => __( 'Hierarchical', 'acf' ),
		'instructions' => __( 'Hierarchical post types can have descendants (like pages).', 'acf' ),
		'ui'           => true,
	),
	'div'
);

do_action( 'acf/post_type/basic_settings', $acf_post_type );

acf_render_field_wrap( array( 'type' => 'seperator' ) );

acf_render_field_wrap(
	array(
		'label'        => __( 'Advanced Configuration', 'acf' ),
		'instructions' => __( 'I know what I\'m doing, show me all the options.', 'acf' ),
		'type'         => 'true_false',
		'name'         => 'advanced_configuration',
		'key'          => 'advanced_configuration',
		'prefix'       => 'acf_post_type',
		'value'        => $acf_post_type['advanced_configuration'],
		'ui'           => 1,
		'class'        => 'acf-advanced-settings-toggle',
	)
);

?>
<div class="acf-hidden">
	<input type="hidden" name="acf_post_type[key]" value="<?php echo esc_attr( $acf_post_type['key'] ); ?>" />
	<input type="hidden" name="acf_post_type[import_source]" value="<?php echo esc_attr( $acf_post_type['import_source'] ); ?>" />
	<input type="hidden" name="acf_post_type[import_date]" value="<?php echo esc_attr( $acf_post_type['import_date'] ); ?>" />
</div>
<?php
