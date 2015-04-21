<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php 

/**

* Required Scripts

*/



wp_enqueue_script( 'jquery' );

if( is_singular() ) { wp_enqueue_script('comment-reply'); }

wp_enqueue_script( 'chip_ten_hoverintent' );

wp_enqueue_script( 'chip_ten_superfish' );

wp_enqueue_script( 'chip_ten_supersubs' );



/**

* Required Styles

*/



wp_enqueue_style( 'chip_zero_base_style' );



/**

* WP Hook - Head

*/



wp_head();

?>

</head>

<body <?php body_class(); ?>>



<!-- Begin Wrap -->

<div id="wrap">

  <div id="wrapdata">

  

    <!-- Begin Header -->

    <div id="header">

      <div id="headerdata">        

        

        <?php

		

		/**

		Header Style

		*/

		

		global $chip_zero_global;		

        

		if( $chip_zero_global['theme_options']['chip_zero_header_style'] == "header" && get_header_image() ):

		locate_template( array( CHIP_ZERO_FSROOT . 'common/header-background.php' ), true, false );

		else:

		locate_template( array( CHIP_ZERO_FSROOT . 'common/header-logo.php' ), true, false );

		endif;

		

		/**

		Primary Menu

		*/

		

		locate_template( array( CHIP_ZERO_FSROOT . 'common/primary-menu.php' ), true, false );

		

		/**

		Secondary Menu

		*/

		

		locate_template( array( CHIP_ZERO_FSROOT . 'common/secondary-menu.php' ), true, false );

		

		/**

		Sponsor - 728x15

		*/

		

		if( $chip_zero_global['theme_options']['chip_zero_sponsor_header_728x15'] == 1 ):

		locate_template( array( CHIP_ZERO_FSROOT . 'sponsor/sponsor-728x15.php' ), true, false );

		endif;

		

		?>

      

      </div>

    </div>

    <!-- End Header -->