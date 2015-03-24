<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'zd'),
		'two' => __('Two', 'zd'),
		'three' => __('Three', 'zd'),
		'four' => __('Four', 'zd'),
		'five' => __('Five', 'zd')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'zd'),
		'two' => __('Pancake', 'zd'),
		'three' => __('Omelette', 'zd'),
		'four' => __('Crepe', 'zd'),
		'five' => __('Waffle', 'zd')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

    // Header Settings
    $options[] = array(
        'name' => __('Header Settings', 'zd'),
        'type' => 'heading');

    $options[] = array(
        'name' => __('Logo', 'zd'),
        'desc' => __('Upload your logo', 'zd'),
        'id' => 'zd_logo',
        'type' => 'upload');
	
    // Footer Settings
    $options[] = array(
        'name' => __('Footer Settings', 'zd'),
        'type' => 'heading');
        
    $options[] = array(
        'name' => __('Copyright Info', 'zd'),
        'desc' => __('Enter your copyright information.', 'zd'),
        'id' => 'zd_copyright',
        'std' => '',
        'type' => 'text');

	  $options[] = array(
        'name' => __('Facebook Link', 'zd'),
        'desc' => __('Enter the link to your facebook page.', 'zd'),
        'id' => 'zd_facebook',
        'std' => '',
        'type' => 'text');
        
    $options[] = array(
        'name' => __('Linkedin Link', 'zd'),
        'desc' => __('Enter the link to your linkedin page.', 'zd'),
        'id' => 'zd_linkedin',
        'std' => '',
        'type' => 'text');
    
    $options[] = array(
        'name' => __('Twitter Link', 'zd'),
        'desc' => __('Enter the link to your twitter page.', 'zd'),
        'id' => 'zd_twitter',
        'std' => '',
        'type' => 'text');
    
    $options[] = array(
        'name' => __('Googleplus Link', 'zd'),
        'desc' => __('Enter the link to your googleplus page.', 'zd'),
        'id' => 'zd_googleplus',
        'std' => '',
        'type' => 'text');
        
	return $options;
}