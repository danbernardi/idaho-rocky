<?php

// register buildings post type
function register_buildings() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Buildings', 'Post Type General Name', 'sfhr' ),
		'singular_name'       => _x( 'Building', 'Post Type Singular Name', 'sfhr' ),
		'menu_name'           => __( 'Buildings', 'sfhr' ),
		'parent_item_colon'   => __( 'Parent Building', 'sfhr' ),
		'all_items'           => __( 'All Buildings', 'sfhr' ),
		'view_item'           => __( 'View Building', 'sfhr' ),
		'add_new_item'        => __( 'Add New Building', 'sfhr' ),
		'add_new'             => __( 'Add New', 'sfhr' ),
		'edit_item'           => __( 'Edit Building', 'sfhr' ),
		'update_item'         => __( 'Update Building', 'sfhr' ),
		'search_items'        => __( 'Search Buildings', 'sfhr' ),
		'not_found'           => __( 'Not Found', 'sfhr' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sfhr' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'buildings', 'sfhr' ),
		'description'         => __( 'Featured Buildings', 'sfhr' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', ),
		'taxonomies'          => array( 'neighborhoods' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-building',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'buildings', $args );
}
add_action( 'init', 'register_buildings', 0 );


// register neighborhoods post type
function register_neighborhoods() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Neighborhoods', 'Post Type General Name', 'sfhr' ),
		'singular_name'       => _x( 'Neighborhood', 'Post Type Singular Name', 'sfhr' ),
		'menu_name'           => __( 'Neighborhoods', 'sfhr' ),
		'parent_item_colon'   => __( 'Parent Neighborhood', 'sfhr' ),
		'all_items'           => __( 'All Neighborhoods', 'sfhr' ),
		'view_item'           => __( 'View Neighborhood', 'sfhr' ),
		'add_new_item'        => __( 'Add New Neighborhood', 'sfhr' ),
		'add_new'             => __( 'Add New', 'sfhr' ),
		'edit_item'           => __( 'Edit Neighborhood', 'sfhr' ),
		'update_item'         => __( 'Update Neighborhood', 'sfhr' ),
		'search_items'        => __( 'Search Neighborhoods', 'sfhr' ),
		'not_found'           => __( 'Not Found', 'sfhr' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sfhr' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'neighborhood', 'sfhr' ),
		'description'         => __( 'Featured Neighborhoods', 'sfhr' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-admin-home',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'neighborhood', $args );
}
add_action( 'init', 'register_neighborhoods', 0 );



// register testimonials post type
function register_testimonials() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Testimonials', 'Post Type General Name', 'sfhr' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'sfhr' ),
		'menu_name'           => __( 'Testimonials', 'sfhr' ),
		'parent_item_colon'   => __( 'Parent Testimonial', 'sfhr' ),
		'all_items'           => __( 'All Testimonials', 'sfhr' ),
		'view_item'           => __( 'View Testimonial', 'sfhr' ),
		'add_new_item'        => __( 'Add New Testimonial', 'sfhr' ),
		'add_new'             => __( 'Add New', 'sfhr' ),
		'edit_item'           => __( 'Edit Testimonial', 'sfhr' ),
		'update_item'         => __( 'Update Testimonial', 'sfhr' ),
		'search_items'        => __( 'Search Testimonials', 'sfhr' ),
		'not_found'           => __( 'Not Found', 'sfhr' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sfhr' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'testimonials', 'sfhr' ),
		'description'         => __( 'Featured Testimonials', 'sfhr' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'revisions', ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-testimonial',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'testimonials', $args );
}
add_action( 'init', 'register_testimonials', 0 );


// register Team Member post type
function register_team_members() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Team Member', 'Post Type General Name', 'sfhr' ),
		'singular_name'       => _x( 'Team Member', 'Post Type Singular Name', 'sfhr' ),
		'menu_name'           => __( 'Team Members', 'sfhr' ),
		'parent_item_colon'   => __( 'Parent Team Member', 'sfhr' ),
		'all_items'           => __( 'All Team Members', 'sfhr' ),
		'view_item'           => __( 'View Team Member', 'sfhr' ),
		'add_new_item'        => __( 'Add New Team Member', 'sfhr' ),
		'add_new'             => __( 'Add New', 'sfhr' ),
		'edit_item'           => __( 'Edit Team Member', 'sfhr' ),
		'update_item'         => __( 'Update Team Member', 'sfhr' ),
		'search_items'        => __( 'Search Team Members', 'sfhr' ),
		'not_found'           => __( 'Not Found', 'sfhr' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sfhr' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'team_members', 'sfhr' ),
		'description'         => __( 'Featured Team Members', 'sfhr' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-groups',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'team_members', $args );
}
add_action( 'init', 'register_team_members', 0 );

?>