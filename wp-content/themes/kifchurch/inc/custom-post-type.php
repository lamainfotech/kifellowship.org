<?php
/**
 * @package kifchurch
 */

add_action( 'init', 'lit_register_event_post_type' );
function lit_register_event_post_type() {
	$args = [
		'label'  => esc_html__( 'Events', 'text-domain' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Events', 'kifchurch' ),
			'name_admin_bar'     => esc_html__( 'Event', 'kifchurch' ),
			'add_new'            => esc_html__( 'Add Event', 'kifchurch' ),
			'add_new_item'       => esc_html__( 'Add new Event', 'kifchurch' ),
			'new_item'           => esc_html__( 'New Event', 'kifchurch' ),
			'edit_item'          => esc_html__( 'Edit Event', 'kifchurch' ),
			'view_item'          => esc_html__( 'View Event', 'kifchurch' ),
			'update_item'        => esc_html__( 'View Event', 'kifchurch' ),
			'all_items'          => esc_html__( 'All Events', 'kifchurch' ),
			'search_items'       => esc_html__( 'Search Events', 'kifchurch' ),
			'parent_item_colon'  => esc_html__( 'Parent Event', 'kifchurch' ),
			'not_found'          => esc_html__( 'No Events found', 'kifchurch' ),
			'not_found_in_trash' => esc_html__( 'No Events found in Trash', 'kifchurch' ),
			'name'               => esc_html__( 'Events', 'kifchurch' ),
			'singular_name'      => esc_html__( 'Event', 'kifchurch' ),
		],
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'has_archive'         => 'events',
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
        'menu_position'       => 5,
		'menu_icon'           => 'dashicons-calendar-alt',
		'supports' => [
			'title',
			'editor',
			'thumbnail',
		],
		
		'rewrite' => true
	];

	register_post_type( 'event', $args );
}

add_action( 'init', 'lit_register_training_post_type' );
function lit_register_training_post_type() {
	$args = [
		'label'  => esc_html__( 'Trainings', 'text-domain' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Trainings', 'kifchurch' ),
			'name_admin_bar'     => esc_html__( 'Training', 'kifchurch' ),
			'add_new'            => esc_html__( 'Add Training', 'kifchurch' ),
			'add_new_item'       => esc_html__( 'Add new Training', 'kifchurch' ),
			'new_item'           => esc_html__( 'New Training', 'kifchurch' ),
			'edit_item'          => esc_html__( 'Edit Training', 'kifchurch' ),
			'view_item'          => esc_html__( 'View Training', 'kifchurch' ),
			'update_item'        => esc_html__( 'View Training', 'kifchurch' ),
			'all_items'          => esc_html__( 'All Trainings', 'kifchurch' ),
			'search_items'       => esc_html__( 'Search Trainings', 'kifchurch' ),
			'parent_item_colon'  => esc_html__( 'Parent Training', 'kifchurch' ),
			'not_found'          => esc_html__( 'No Trainings found', 'kifchurch' ),
			'not_found_in_trash' => esc_html__( 'No Trainings found in Trash', 'kifchurch' ),
			'name'               => esc_html__( 'Trainings', 'kifchurch' ),
			'singular_name'      => esc_html__( 'Training', 'kifchurch' ),
		],
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'has_archive'         => 'trainings',
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
        'menu_position'       => 5,
		'menu_icon'           => 'dashicons-welcome-learn-more',
		'supports' => [
			'title'
		],
		
		'rewrite' => true
	];

	register_post_type( 'training', $args );
}

add_action( 'init', 'lit_register_podcast_post_type' );
function lit_register_podcast_post_type() {
	$args = [
		'label'  => esc_html__( 'Podcasts', 'text-domain' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Podcasts', 'kifchurch' ),
			'name_admin_bar'     => esc_html__( 'Podcast', 'kifchurch' ),
			'add_new'            => esc_html__( 'Add Podcast', 'kifchurch' ),
			'add_new_item'       => esc_html__( 'Add new Podcast', 'kifchurch' ),
			'new_item'           => esc_html__( 'New Podcast', 'kifchurch' ),
			'edit_item'          => esc_html__( 'Edit Podcast', 'kifchurch' ),
			'view_item'          => esc_html__( 'View Podcast', 'kifchurch' ),
			'update_item'        => esc_html__( 'View Podcast', 'kifchurch' ),
			'all_items'          => esc_html__( 'All Podcasts', 'kifchurch' ),
			'search_items'       => esc_html__( 'Search Podcasts', 'kifchurch' ),
			'parent_item_colon'  => esc_html__( 'Parent Podcast', 'kifchurch' ),
			'not_found'          => esc_html__( 'No Podcasts found', 'kifchurch' ),
			'not_found_in_trash' => esc_html__( 'No Podcasts found in Trash', 'kifchurch' ),
			'name'               => esc_html__( 'Podcasts', 'kifchurch' ),
			'singular_name'      => esc_html__( 'Podcast', 'kifchurch' ),
		],
		'public'              => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'has_archive'         => false,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
        'menu_position'       => 5,
		'menu_icon'           => 'dashicons-microphone',
		'supports' => [
			'title'
		],
		
		'rewrite' => true
	];

	register_post_type( 'podcast', $args );
}

add_action( 'init', 'lit_register_testimony_post_type' );
function lit_register_testimony_post_type() {
	$args = [
		'label'  => esc_html__( 'Testimonies', 'text-domain' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Testimonies', 'kifchurch' ),
			'name_admin_bar'     => esc_html__( 'Testimony', 'kifchurch' ),
			'add_new'            => esc_html__( 'Add Testimony', 'kifchurch' ),
			'add_new_item'       => esc_html__( 'Add new Testimony', 'kifchurch' ),
			'new_item'           => esc_html__( 'New Testimony', 'kifchurch' ),
			'edit_item'          => esc_html__( 'Edit Testimony', 'kifchurch' ),
			'view_item'          => esc_html__( 'View Testimony', 'kifchurch' ),
			'update_item'        => esc_html__( 'View Testimony', 'kifchurch' ),
			'all_items'          => esc_html__( 'All Testimonies', 'kifchurch' ),
			'search_items'       => esc_html__( 'Search Testimonies', 'kifchurch' ),
			'parent_item_colon'  => esc_html__( 'Parent Testimony', 'kifchurch' ),
			'not_found'          => esc_html__( 'No Testimonies found', 'kifchurch' ),
			'not_found_in_trash' => esc_html__( 'No Testimonies found in Trash', 'kifchurch' ),
			'name'               => esc_html__( 'Testimonies', 'kifchurch' ),
			'singular_name'      => esc_html__( 'Testimony', 'kifchurch' ),
		],
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'has_archive'         => 'testimonies',
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
        'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-quote',
		'supports' => [
			'title',
			'editor',
			'thumbnail',
		],
		
		'rewrite' => true
	];

	register_post_type( 'testimony', $args );
}

add_action( 'init', 'lit_register_team_post_type' );
function lit_register_team_post_type() {
	$args = [
		'label'  => esc_html__( 'Team', 'text-domain' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Team', 'kifchurch' ),
			'name_admin_bar'     => esc_html__( 'Member', 'kifchurch' ),
			'add_new'            => esc_html__( 'Add Member', 'kifchurch' ),
			'add_new_item'       => esc_html__( 'Add new Member', 'kifchurch' ),
			'new_item'           => esc_html__( 'New Member', 'kifchurch' ),
			'edit_item'          => esc_html__( 'Edit Member', 'kifchurch' ),
			'view_item'          => esc_html__( 'View Member', 'kifchurch' ),
			'update_item'        => esc_html__( 'View Member', 'kifchurch' ),
			'all_items'          => esc_html__( 'All Team', 'kifchurch' ),
			'search_items'       => esc_html__( 'Search Team', 'kifchurch' ),
			'parent_item_colon'  => esc_html__( 'Parent Member', 'kifchurch' ),
			'not_found'          => esc_html__( 'No Team found', 'kifchurch' ),
			'not_found_in_trash' => esc_html__( 'No Team found in Trash', 'kifchurch' ),
			'name'               => esc_html__( 'Team', 'kifchurch' ),
			'singular_name'      => esc_html__( 'Member', 'kifchurch' ),
		],
		'public'              => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'has_archive'         => false,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
        'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-users',
		'supports' => [
			'title'
		],
		
		'rewrite' => true
	];

	register_post_type( 'team', $args );
}