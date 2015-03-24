<?php


add_filter( 'cmb2_meta_boxes', 'zd_page_options' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
 
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
        'object_types'  => array( 'page', ), // Post type
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
        ),
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}

?>