<?php

function neighborhood_taxonomy() {  
    register_taxonomy(  
        'neighborhood',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
        'buildings',        //post type name
        array(  
            'hierarchical' => true,  
            'labels' => array(
				'name' => _x( 'Neighborhood', 'sfhr' ),
				'singular_name' => _x( 'Neighborhood', 'sfhr' ),
				'search_items' =>  __( 'Search Neighborhoods', 'sfhr' ),
				'all_items' => __( 'All Neighborhoods', 'sfhr' ),
				'parent_item' => __( 'Parent Neighborhood', 'sfhr' ),
				'parent_item_colon' => __( 'Parent Neighborhood:', 'sfhr' ),
				'edit_item' => __( 'Edit Neighborhood', 'sfhr' ),
				'update_item' => __( 'Update Neighborhood', 'sfhr' ),
				'add_new_item' => __( 'Add New Neighborhood', 'sfhr' ),
				'new_item_name' => __( 'New Neighborhood Name', 'sfhr' ),
				'menu_name' => __( 'Neighborhoods', 'sfhr' ),
			),
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'neighborhood', // This controls the base slug that will display before each term
                'with_front' => false // Don't display the category base before 
            )
        )  
    );  
}  
add_action( 'init', 'neighborhood_taxonomy');

?>