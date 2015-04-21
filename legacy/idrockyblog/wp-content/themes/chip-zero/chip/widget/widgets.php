<?php

/**

* Chip Social Widget

*/



locate_template( array( CHIP_ZERO_FSROOT . 'widget/chip-social/chip-social.php' ), true, false );



function chip_zero_widgets() {	

	register_widget('chip_social');

}



?>