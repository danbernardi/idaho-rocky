<?php

/**

* Chip Controller

*/



locate_template( array( 'chip/config.php' ), true, false );



/**

* Chip Methods

*/



locate_template( array( CHIP_ZERO_FSROOT . 'methods.php' ), true, false );



/**

* Chip Options

*/



locate_template( array( CHIP_ZERO_FSROOT . 'option/options.php' ), true, false );



/**

* Chip Widgets

*/



locate_template( array( CHIP_ZERO_FSROOT . 'widget/widgets.php' ), true, false );



/**

* Chip Sidebars

*/



locate_template( array( CHIP_ZERO_FSROOT . 'sidebars.php' ), true, false );



/**

* Chip Menus

*/



locate_template( array( CHIP_ZERO_FSROOT . 'menus.php' ), true, false );



/**

* Chip Setup

*/



locate_template( array( CHIP_ZERO_FSROOT . 'setup.php' ), true, false );



/**

* Global Variable

*/



$chip_zero_global = array (		

 'theme_options'	=> get_option( 'chip_zero_options' ),

 'chip_image'		=> false,

);



/*echo "<pre>";

print_r( $chip_zero_global );

echo "</pre>";*/



?>