<?php

/**

* Content Width

*/



if ( !isset( $content_width ) ) {

	$content_width = 555;

}



/**

* Editor Style

*/



add_editor_style();



/**

* Custom Background

*/



add_custom_background();



/**

* Custom Header

*/



define( 'HEADER_TEXTCOLOR', 'ffffff' );

define( 'HEADER_IMAGE', '%s/images/headers/chip_zero.jpg' );

define( 'HEADER_IMAGE_WIDTH', apply_filters( 'chip_zero_header_image_width', 960 ) );

define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'chip_zero_header_image_height', 200 ) );

define( 'NO_HEADER_TEXT', true );



add_custom_image_header( '', 'chip_zero_admin_header_style' );



/**

* Support(s)

*/



add_theme_support( 'menus' );

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 150, 150, true );



/**

* Action(s)

*/



add_action( 'admin_init'	, array( 'Chip_Zero_Options', 'chip_admin_init' ) );

add_action( 'admin_menu'	, array( 'Chip_Zero_Options', 'chip_admin_menu' ) );

add_action( 'init'			, array( 'Chip_Zero_Options', 'chip_init_default' ) );



add_action( 'init'			, 'chip_zero_register_style' );

add_action( 'init'			, 'chip_zero_register_script' );

add_action( 'init'			, 'chip_zero_menus' );

add_action( 'init'			, 'chip_zero_sidebars' );

add_action( 'widgets_init'	, 'chip_zero_widgets' );



/**

* Filters(s)

*/



add_filter( 'gallery_style'		, 'chip_zero_remove_gallery_css' );

add_filter( 'excerpt_length'	, 'chip_zero_excerpt_length' );

add_filter( 'excerpt_more'		, 'chip_zero_excerpt_length_more' );



/**

* Header Style

*/



function chip_zero_admin_header_style() {

?>

<style type="text/css">

/* Shows the same border as on front end */

.appearance_page_custom-header #headimg {

	width: 960px;

	height: 200px;

}

/* If NO_HEADER_TEXT is false, you would style the text with these selectors:

	#headimg #name { }

	#headimg #desc { }

*/

</style>

<?php

}