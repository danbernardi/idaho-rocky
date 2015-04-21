<?php

/**

* POST Validation

*/



if ( ! have_posts() ):

	

	locate_template( array( CHIP_ZERO_FSROOT . 'common/post-notfound.php' ), true, false );



else:



	/**

	* POST Style Decision

	*/

	

	global $chip_zero_global;

	

	if( $chip_zero_global['theme_options']['chip_zero_post_style'] == "excerpt" ):

		locate_template( array( CHIP_ZERO_FSROOT . 'common/post-excerpt.php' ), true, false );

	else:

		locate_template( array( CHIP_ZERO_FSROOT . 'common/post-content.php' ), true, false );

	endif;



endif;



?>