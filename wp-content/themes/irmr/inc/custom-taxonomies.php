<?php

function press_publications_taxonomy() {  
    register_taxonomy(  
        'publications',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
        'press',        //post type name
        array(  
            'hierarchical' => true,  
            'labels' => array(
				'name' => _x( 'Publication', 'zd' ),
				'singular_name' => _x( 'Publication', 'zd' ),
				'search_items' =>  __( 'Search Publications', 'zd' ),
				'all_items' => __( 'All Publications', 'zd' ),
				'parent_item' => __( 'Parent Publication', 'zd' ),
				'parent_item_colon' => __( 'Parent Publication:', 'zd' ),
				'edit_item' => __( 'Edit Publication', 'zd' ),
				'update_item' => __( 'Update Publication', 'zd' ),
				'add_new_item' => __( 'Add New Publication', 'zd' ),
				'new_item_name' => __( 'New Publication Name', 'zd' ),
				'menu_name' => __( 'Publications', 'zd' ),
			),
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'publications', // This controls the base slug that will display before each term
                'with_front' => false // Don't display the category base before 
            )
        )  
    );  
}  
add_action( 'init', 'press_publications_taxonomy');

?>