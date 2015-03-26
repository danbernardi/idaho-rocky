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
        'object_types'  => array( 'page', 'post' ), // Post type
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
                'type'       => 'text_date',
                'show_on_cb' => 'cmb2_hide_if_no_cats',
                'date_format' => 'F j, Y',
            ),
        ),
    );

    // Add other metaboxes as needed

    return $meta_boxes;
}
add_filter( 'cmb2_meta_boxes', 'zd_press_options' );

?>