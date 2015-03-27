<?php

// register press post type
function register_press() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Press Item', 'Post Type General Name', 'zd' ),
		'singular_name'       => _x( 'Press Item', 'Post Type Singular Name', 'zd' ),
		'menu_name'           => __( 'Press', 'zd' ),
		'parent_item_colon'   => __( 'Parent Press Item', 'zd' ),
		'all_items'           => __( 'All Press Items', 'zd' ),
		'view_item'           => __( 'View Press Item', 'zd' ),
		'add_new_item'        => __( 'Add New Press Item', 'zd' ),
		'add_new'             => __( 'Add New', 'zd' ),
		'edit_item'           => __( 'Edit Press', 'zd' ),
		'update_item'         => __( 'Update Press', 'zd' ),
		'search_items'        => __( 'Search Press', 'zd' ),
		'not_found'           => __( 'Not Found', 'zd' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'zd' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'press', 'zd' ),
		'description'         => __( 'Featured Press Item', 'zd' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'revisions', ),
		'taxonomies'          => array( 'publications' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			      => 'dashicons-media-document',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'press', $args );
}
add_action( 'init', 'register_press', 0 );


// register gallery post type
function register_gallery() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Gallery', 'Post Type General Name', 'zd' ),
		'singular_name'       => _x( 'Gallery Item', 'Post Type Singular Name', 'zd' ),
		'menu_name'           => __( 'Gallery', 'zd' ),
		'parent_item_colon'   => __( 'Parent Gallery Item', 'zd' ),
		'all_items'           => __( 'All Gallery Items', 'zd' ),
		'view_item'           => __( 'View Gallery Item', 'zd' ),
		'add_new_item'        => __( 'Add New Gallery Item', 'zd' ),
		'add_new'             => __( 'Add New', 'zd' ),
		'edit_item'           => __( 'Edit Gallery Item', 'zd' ),
		'update_item'         => __( 'Update Gallery Item', 'zd' ),
		'search_items'        => __( 'Search Gallery Items', 'zd' ),
		'not_found'           => __( 'Not Found', 'zd' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'zd' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'gallery', 'zd' ),
		'description'         => __( 'Featured Gallery Item', 'zd' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'revisions', 'thumbnail' ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			      => 'dashicons-format-gallery',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'gallery', $args );
}
add_action( 'init', 'register_gallery', 0 );

?>