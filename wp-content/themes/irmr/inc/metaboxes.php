<?php


add_filter( 'cmb2_meta_boxes', 'sfhr_page_options' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
 
// page options
function sfhr_page_options( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_sfhr_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['page_options'] = array(
        'id'            => 'page_options',
        'title'         => __( 'Page Options', 'sfhr' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name'       => __( 'Disable Sidebar', 'sfhr' ),
                'desc'       => __( 'Check this box to remove the sidebar from this page.', 'sfhr' ),
                'id'         => $prefix . 'disable_sidebar',
                'type'       => 'checkbox',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
        ),
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}



add_filter( 'cmb2_meta_boxes', 'sfhr_building_options' );
// building page
function sfhr_building_options( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_sfhr_';

    /**
     * Sample metabox to demonstrate each field type included
     */
     
     $meta_boxes['listing_pages'] = array(
		'id'           => 'listing_pages',
		'title'        => __( 'Building Info', 'sfhr' ),
		'object_types' => array( 'buildings', ),
		'fields'        => array(
            array(
            	'name' => 'Street Address',
				'desc' => 'At the street address here',
				'id' => $prefix . 'st_address',
				'type' => 'text',
			),
             array(
            	'name' => 'City & Zip',
				'desc' => 'Add the city, state, and zipcode here. (ie. San Francisco, CA 94107)',
				'id' => $prefix . 'city_zip',
				'type' => 'text',
			),
            array(
            	'name' => 'Yelp Page',
				'desc' => 'Add a link to the yelp page for this building',
				'id' => $prefix . 'yelp_page',
				'type' => 'text_url',
			),
            array(
                'name' => 'Active Listings',
				'desc' => 'Add a link to the active listings page',
				'id' => $prefix . 'active_listings',
				'type' => 'text_url',
            ),
            array(
                'name' => 'Recently Sold Listings',
				'desc' => 'Add a link to the Recently Sold listings page',
				'id' => $prefix . 'sold_listings',
				'type' => 'text_url',
            ),
            array(
                'name' => 'Google Embed Code',
				'desc' => 'Paste the google embed url above, ie. value inside [https://]',
				'id' => $prefix . 'google_embed',
				'type' => 'textarea_small',
            ),
        ),
	);
     
    $meta_boxes['amenities'] = array(
		'id'           => 'amenities',
		'title'        => __( 'Amenities', 'sfhr' ),
		'object_types' => array( 'buildings', ),
		'fields'       => array(
			array(
				'id'          => $prefix . 'am_repeat_group',
				'type'        => 'group',
				'description' => __( 'Generates amenity entries', 'sfhr' ),
				'options'     => array(
					'group_title'   => __( 'Amenity {#}', 'sfhr' ), // {#} gets replaced by row number
					'add_button'    => __( 'Add Another Amenity', 'sfhr' ),
					'remove_button' => __( 'Remove Amenity', 'sfhr' ),
					'sortable'      => false, // beta
				),
				'fields'       => array(
					array(
						'name' => 'Image',
						'desc' => 'Upload an image or enter an URL.',
						'id'   => 'am_image',
						'type' => 'file',
						// Optionally allow only attachments and not any URL (this hides the text input for the url):
						"options" => array(
							"url" => false
						)
					),
					array(
						'name' => 'Caption',
						'description' => 'Write a short caption for this amenity',
						'id'   => 'am_caption',
						'type' => 'text',
					),
				),
			),
		),
	);
    
    $meta_boxes['gallery'] = array(
        'id'            => 'gallery',
        'title'         => __( 'Gallery', 'sfhr' ),
        'object_types'  => array( 'buildings', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => false, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name' => 'Gallery Images',
				'desc' => '',
				'id' => $prefix . 'gallery',
				'type' => 'file_list',
				'preview_size' => array( 212, 142 ), // Default: array( 50, 50 )
            ),
        ),
    );


    // Add other metaboxes as needed

    return $meta_boxes;
}


add_filter( 'cmb2_meta_boxes', 'sfhr_neighborhood_options' );
// building page
function sfhr_neighborhood_options( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_sfhr_';

    /**
     * Sample metabox to demonstrate each field type included
     */
     
     $meta_boxes['neighborhood_listing_pages'] = array(
		'id'           => 'neighborhood_listing_pages',
		'title'        => __( 'Neighborhood Info', 'sfhr' ),
		'object_types' => array( 'neighborhood', ),
		'fields'        => array(
            array(
                'name' => 'Google Embed Code',
				'desc' => 'Paste the google embed url above, ie. value inside [https://]',
				'id' => $prefix . 'google_embed',
				'type' => 'textarea_small',
            ),
            array(
            	'name' => 'Neighborhood ID',
				'desc' => 'Ender the neighborhood ID [ find in buildings > neighborhoods ]',
				'id' => $prefix . 'neighborhood_id',
				'type' => 'text',
			),
        ),
	);
    
    $meta_boxes['local_restaurants'] = array(
		'id'           => 'local_restaurants',
		'title'        => __( 'Resaurants &amp; Bars', 'sfhr' ),
		'object_types' => array( 'neighborhood', ),
		'fields'       => array(
			array(
                'name'       => __( 'Disable Section', 'sfhr' ),
                'desc'       => __( 'If you check this box, the Restaurant & Bar section will not appear.', 'sfhr' ),
                'id'         => $prefix . 'res_disable',
                'type'       => 'checkbox',
            ),
			array(
				'id'          => $prefix . 'res_repeat_group',
				'type'        => 'group',
				'description' => __( 'Add local restaurants and bars', 'sfhr' ),
				'options'     => array(
					'group_title'   => __( 'Restaurant or Bar {#}', 'sfhr' ), // {#} gets replaced by row number
					'add_button'    => __( 'Add Another Restaurant or Bar', 'sfhr' ),
					'remove_button' => __( 'Remove Restaurant or Bar', 'sfhr' ),
					'sortable'      => false, // beta
				),
				'fields'       => array(
					array(
						'name' => 'Name',
						'description' => 'Add the name of the Restaurant or Bar',
						'id'   => 'res_name',
						'type' => 'text',
					),
					array(
						'name' => 'URL',
						'desc' => 'Add a link for the Restaurant or Bar',
						'id'   => 'res_url',
						'type' => 'text_url',
					),
				),
			),
		),
	);
    
    $meta_boxes['local_sights'] = array(
		'id'           => 'local_sights',
		'title'        => __( 'Sights &amp; Culture', 'sfhr' ),
		'object_types' => array( 'neighborhood', ),
		'fields'       => array(
			array(
                'name'       => __( 'Disable Section', 'sfhr' ),
                'desc'       => __( 'If you check this box, the Sights & Culture section will not appear.', 'sfhr' ),
                'id'         => $prefix . 'sig_disable',
                'type'       => 'checkbox',
            ),
			array(
				'id'          => $prefix . 'sig_repeat_group',
				'type'        => 'group',
				'description' => __( 'Add local sights or areas of cultural significance', 'sfhr' ),
				'options'     => array(
					'group_title'   => __( 'Area {#}', 'sfhr' ), // {#} gets replaced by row number
					'add_button'    => __( 'Add Another Area', 'sfhr' ),
					'remove_button' => __( 'Remove Area', 'sfhr' ),
					'sortable'      => false, // beta
				),
				'fields'       => array(
					array(
						'name' => 'Name',
						'description' => 'Add the name of the sight or area of cultural significance',
						'id'   => 'sig_name',
						'type' => 'text',
					),
					array(
						'name' => 'URL',
						'desc' => 'Add a link to for the sight or Area of cultural significance',
						'id'   => 'sig_url',
						'type' => 'text_url',
					),
				),
			),
		),
	);
    
    return $meta_boxes;
}


// Team Member Options
function sfhr_member_options( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_sfhr_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['member_options'] = array(
        'id'            => 'member_options',
        'title'         => __( 'Team Member Options', 'sfhr' ),
        'object_types'  => array( 'team_members', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
            	'name' => 'Job Title',
				'desc' => 'Enter the team members job title',
				'id' => $prefix . 'job_title',
				'type' => 'text',
			),
            array(
            	'name' => 'Linkedin',
				'desc' => 'Enter the team members linkedin profile url.',
				'id' => $prefix . 'linkedin',
				'type' => 'text',
			),
            array(
            	'name' => 'Twitter',
				'desc' => 'Enter the team members twitter home url.',
				'id' => $prefix . 'twitter',
				'type' => 'text',
			),
        array(
            	'name' => 'Google Plus',
				'desc' => 'Enter the team members google plus profile url.',
				'id' => $prefix . 'google_plus',
				'type' => 'text',
			),
        ),
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}
add_filter( 'cmb2_meta_boxes', 'sfhr_member_options' );


?>