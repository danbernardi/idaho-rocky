<?php

/**

* Chip Styles

*/



function chip_zero_register_style() {

	 

	 wp_register_style( 'chip_zero_base_style', CHIP_ZERO_URLPATH . 'style.css', array(), '1.2' );



}



/**

* Chip Script

*/



function chip_zero_register_script() {

	 

	 wp_register_script( 'chip_ten_hoverintent', CHIP_ZERO_WSROOT . 'js/hoverintent.min.js', array( 'jquery' ), '5' );

	 wp_register_script( 'chip_ten_superfish', CHIP_ZERO_WSROOT . 'js/superfish.min.js', array( 'jquery' ), '1.4.8' );

	 wp_register_script( 'chip_ten_supersubs', CHIP_ZERO_WSROOT . 'js/supersubs.min.js', array( 'jquery' ), '0.2' );	 



}





/**

* Chip Menu(s) Callback

*/



function chip_zero_primary_menu() {

	 

	 wp_page_menu( array(                 

            'menu_class'	=> 'primary-container',                

     	)

     );



}



function chip_zero_secondary_menu() {	

	return false;		

}



/**

* Avoid "Undefined Index"

* Must be passed by reference

*/



function chip_zero_undefined_index_fix( &$var ) {



	if ( isset( $var ) ) {

		return $var;

	}

	

	return '';

}



/**

* Chip Excerpt Length

*/



function chip_zero_excerpt_length( $length ) {

	return 30;

}



function chip_zero_continue_reading_link() {

	return '<div class="margin10t"><a href="'. get_permalink() . '" class="more-link">Continue Reading &raquo;</a></div>';

}



function chip_zero_excerpt_length_more( $more ) {

	return ' &hellip;' . chip_zero_continue_reading_link();

}



/**

* Chip Remove Gallery CSS

*/



function chip_zero_remove_gallery_css( $css ) {

	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );

}



?>