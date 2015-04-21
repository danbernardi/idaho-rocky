<?php

/**

* Chip Menus

*/



function chip_zero_menus() {

	register_nav_menus(

		array(

			'primary-menu'		=>	__( 'Primary Menu' ),

			'secondary-menu'	=>	__( 'Secondary Menu' ),

		)

	);

}

?>