<?php
 
// page options
function zd_page_options( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_zd_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['page_options'] = array(
        'id'            => 'page_options',
        'title'         => __( 'Page Options', 'zd' ),
        'object_types'  => array( 'page' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name'       => __( 'Previous Page Title', 'zd' ),
                'desc'       => __( 'Enter the title of the previous page.', 'zd' ),
                'id'         => $prefix . 'prev_title',
                'type'       => 'text',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
            array(
                'name'       => __( 'Previous Page URL', 'zd' ),
                'desc'       => __( 'Enter the URL of the previous page.', 'zd' ),
                'id'         => $prefix . 'prev_url',
                'type'       => 'text_url',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
            array(
                'name'       => __( 'Next Page Title', 'zd' ),
                'desc'       => __( 'Enter the title of the next page.', 'zd' ),
                'id'         => $prefix . 'next_title',
                'type'       => 'text',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
            array(
                'name'       => __( 'Next Page URL', 'zd' ),
                'desc'       => __( 'Enter the URL of the next page.', 'zd' ),
                'id'         => $prefix . 'next_url',
                'type'       => 'text_url',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
            array(
                'name'       => __( 'Heading Button', 'zd' ),
                'desc'       => __( 'Check this box to enable the call to action button in the page title.', 'zd' ),
                'id'         => $prefix . 'hdg_btn',
                'type'       => 'checkbox',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
            array(
                'name'       => __( 'Heading Button Title', 'zd' ),
                'desc'       => __( 'Enter the text that appears inside the heading button.', 'zd' ),
                'id'         => $prefix . 'hdg_btn_text',
                'type'       => 'text',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
            array(
                'name'       => __( 'Heading Button URL', 'zd' ),
                'desc'       => __( 'Enter the URL for the heading button.', 'zd' ),
                'id'         => $prefix . 'hdg_btn_url',
                'type'       => 'text_url',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
        ),
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}
add_filter( 'cmb2_meta_boxes', 'zd_page_options' );


function zd_post_options( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_zd_';
    
      $meta_boxes['post_options'] = array(
        'id'            => 'post_options',
        'title'         => __( 'Post Options', 'zd' ),
        'object_types'  => array( 'post' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name'       => __( 'Hide Image', 'zd' ),
                'desc'       => __( 'Check this box to hide the featured image on the single view for this post.', 'zd' ),
                'id'         => $prefix . 'hide_featured_image',
                'type'       => 'checkbox',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
        ),
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}
add_filter( 'cmb2_meta_boxes', 'zd_post_options' );



// home page options
function zd_home_slideshow( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_zd_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['home_slideshow'] = array(
        'id'            => 'home_slideshow',
        'title'         => __( 'Home Slideshow', 'zd' ),
        'object_types'  => array( 'page' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
          array(
              'name' => 'Slideshow Images',
              'desc' => '',
              'id' => $prefix . 'home_slideshow',
              'type' => 'file_list',
              'preview_size' => array( 212, 142 ), // Default: array( 50, 50 )
            ),
        ),
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}
add_filter( 'cmb2_meta_boxes', 'zd_home_slideshow' );


// gallery options
function zd_gallery_options( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_zd_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['size_options'] = array(
        'id'            => 'size_options',
        'title'         => __( 'Grid Size', 'zd' ),
        'object_types'  => array( 'gallery' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
          array(
              'name' => 'Width',
              'desc' => 'Enter a whole number between 1 and 4',
              'id' => $prefix . 'gal_width',
              'type' => 'text_small',
          ),
          array(
              'name' => 'Height',
              'desc' => 'Enter a whole number between 1 and 2',
              'id' => $prefix . 'gal_height',
              'type' => 'text_small',
          ),
        ),
    );
    
    $meta_boxes['caption'] = array(
        'id'            => 'caption',
        'title'         => __( 'Caption', 'zd' ),
        'object_types'  => array( 'gallery' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
          array(
              'name' => 'Add a caption',
              'desc' => '',
              'id' => $prefix . 'gal_caption',
              'type' => 'textarea_small',
            ),
        ),
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}
add_filter( 'cmb2_meta_boxes', 'zd_gallery_options' );

/*
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
*/


// press options
function zd_press_options( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_zd_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['press_options'] = array(
        'id'            => 'press_options',
        'title'         => __( 'Article Options', 'zd' ),
        'object_types'  => array( 'press' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
        'fields'        => array(
            array(
                'name'       => __( 'Article Author', 'zd' ),
                'desc'       => __( 'Enter the author of press article.', 'zd' ),
                'id'         => $prefix . 'press_author',
                'type'       => 'text',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
            array(
                'name'       => __( 'Date Published', 'zd' ),
                'desc'       => __( 'Enter the date the article was published.', 'zd' ),
                'id'         => $prefix . 'press_pubdate',
                'type'       => 'text_medium',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
                'date_format' => 'F j, Y',
            ),
            array(
                'name'       => __( 'Upload PDF', 'zd' ),
                'desc'       => __( 'Upload the article as a pdf', 'zd' ),
                'id'         => $prefix . 'press_pdf',
                'type'       => 'file',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
            ),
        ),
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}
add_filter( 'cmb2_meta_boxes', 'zd_press_options' );

?>