<?php

/**

* Chip Zero Options Class

*/



class Chip_Zero_Options {



		

		/**

		* Chip Admin Init

		*/

		

		function chip_admin_init() {

		

			/** Register Admin Stylesheet */

			wp_register_style( 'chip_zero_admin_style', CHIP_ZERO_WSROOT . 'option/style.css' );

			wp_register_style( 'chip_zero_uiblacktie_style', CHIP_ZERO_WSROOT . 'js/ui/css/black-tie/jquery-ui-1.8.13.custom.css' );

			

			/** Register Admin Scripts */

			wp_register_script( 'chip_zero_jquery_cookie', CHIP_ZERO_WSROOT . 'js/jquery.cookie.js' );

			

			/** Register Theme Options */

			register_setting( 'chip_zero_options_group', 'chip_zero_options', array( 'Chip_Zero_Options', 'chip_validation_fn' ) );

			

			/** Chip Blog Section */

			add_settings_section( 'chip_zero_section_blog', 'Blog Options', array( 'Chip_Zero_Options', 'chip_zero_section_blog_fn' ), 'chip_zero_section_blog_page' );

			

			add_settings_field( 'chip_zero_field_logo', 'Use Image Logo in Header', array( 'Chip_Zero_Options', 'chip_zero_field_logo_fn' ), 'chip_zero_section_blog_page', 'chip_zero_section_blog' );

			add_settings_field( 'chip_zero_field_logo_url', 'Enter Logo URl - Dimension (215x125)', array( 'Chip_Zero_Options', 'chip_zero_field_logo_url_fn' ), 'chip_zero_section_blog_page', 'chip_zero_section_blog' );

			

			add_settings_field( 'chip_zero_field_header_style', 'Header Style', array( 'Chip_Zero_Options', 'chip_zero_field_header_style_fn' ), 'chip_zero_section_blog_page', 'chip_zero_section_blog' );			

			add_settings_field( 'chip_zero_field_post_style', 'Post Style', array( 'Chip_Zero_Options', 'chip_zero_field_post_style_fn' ), 'chip_zero_section_blog_page', 'chip_zero_section_blog' );

			

			/** Chip Post Section */

			add_settings_section( 'chip_zero_section_post', 'Post Options', array( 'Chip_Zero_Options', 'chip_zero_section_post_fn' ), 'chip_zero_section_post_page' );

			

			add_settings_field( 'chip_zero_field_related_post', 'Use Related Posts at the Bottom of Post', array( 'Chip_Zero_Options', 'chip_zero_field_related_post_fn' ), 'chip_zero_section_post_page', 'chip_zero_section_post' );

			add_settings_field( 'chip_zero_field_related_post_number', 'How many Related Posts to Execute', array( 'Chip_Zero_Options', 'chip_zero_field_related_post_number_fn' ), 'chip_zero_section_post_page', 'chip_zero_section_post' );

			

			/** Chip Sponsor Section */

			add_settings_section( 'chip_zero_section_sponsor', 'Sponsor Options', array( 'Chip_Zero_Options', 'chip_zero_section_sponsor_fn' ), 'chip_zero_section_sponsor_page' );

			

			add_settings_field( 'chip_zero_field_sponsor_header_728x90', 'Display Sponsor in Header', array( 'Chip_Zero_Options', 'chip_zero_field_sponsor_header_728x90_fn' ), 'chip_zero_section_sponsor_page', 'chip_zero_section_sponsor' );

			add_settings_field( 'chip_zero_field_sponsor_header_728x90_code', 'Enter Sponsor Code', array( 'Chip_Zero_Options', 'chip_zero_field_sponsor_header_728x90_code_fn' ), 'chip_zero_section_sponsor_page', 'chip_zero_section_sponsor' );

			

			add_settings_field( 'chip_zero_field_sponsor_header_728x15', 'Display Sponsor under Header', array( 'Chip_Zero_Options', 'chip_zero_field_sponsor_header_728x15_fn' ), 'chip_zero_section_sponsor_page', 'chip_zero_section_sponsor' );

			add_settings_field( 'chip_zero_field_sponsor_header_728x15_code', 'Enter Sponsor Code', array( 'Chip_Zero_Options', 'chip_zero_field_sponsor_header_728x15_code_fn' ), 'chip_zero_section_sponsor_page', 'chip_zero_section_sponsor' );

			

			add_settings_field( 'chip_zero_field_sponsor_post_undertitle', 'Display Sponsor under Post Title', array( 'Chip_Zero_Options', 'chip_zero_field_sponsor_post_undertitle_fn' ), 'chip_zero_section_sponsor_page', 'chip_zero_section_sponsor' );

			add_settings_field( 'chip_zero_field_sponsor_post_undertitle_code', 'Enter Sponsor Code', array( 'Chip_Zero_Options', 'chip_zero_field_sponsor_post_undertitle_code_fn' ), 'chip_zero_section_sponsor_page', 'chip_zero_section_sponsor' );

			

			add_settings_field( 'chip_zero_field_sponsor_post_468x15', 'Display Sponsor at the end of Post', array( 'Chip_Zero_Options', 'chip_zero_field_sponsor_post_468x15_fn' ), 'chip_zero_section_sponsor_page', 'chip_zero_section_sponsor' );

			add_settings_field( 'chip_zero_field_sponsor_post_468x15_code', 'Enter Sponsor Code', array( 'Chip_Zero_Options', 'chip_zero_field_sponsor_post_468x15_code_fn' ), 'chip_zero_section_sponsor_page', 'chip_zero_section_sponsor' );

			

			/** Chip Subscription Section */

			add_settings_section( 'chip_zero_section_subscription', 'Subscription Options', array( 'Chip_Zero_Options', 'chip_zero_section_subscription_fn' ), 'chip_zero_section_subscription_page' );

			

			add_settings_field( 'chip_zero_field_rss', 'Use RSS', array( 'Chip_Zero_Options', 'chip_zero_field_rss_fn' ), 'chip_zero_section_subscription_page', 'chip_zero_section_subscription' );

			add_settings_field( 'chip_zero_field_rss_url', 'Enter RSS URL', array( 'Chip_Zero_Options', 'chip_zero_field_rss_url_fn' ), 'chip_zero_section_subscription_page', 'chip_zero_section_subscription' );

			

			add_settings_field( 'chip_zero_field_feedburner', 'Use Feedburner', array( 'Chip_Zero_Options', 'chip_zero_field_feedburner_fn' ), 'chip_zero_section_subscription_page', 'chip_zero_section_subscription' );

			add_settings_field( 'chip_zero_field_feedburner_id', 'Enter Feedburner ID', array( 'Chip_Zero_Options', 'chip_zero_field_feedburner_id_fn' ), 'chip_zero_section_subscription_page', 'chip_zero_section_subscription' );

			

			add_settings_field( 'chip_zero_field_feedburner_post_bottom', 'Use Feedburner at Post bottom', array( 'Chip_Zero_Options', 'chip_zero_field_feedburner_post_bottom_fn' ), 'chip_zero_section_subscription_page', 'chip_zero_section_subscription' );

			

			add_settings_field( 'chip_zero_field_twitter', 'Use Twitter', array( 'Chip_Zero_Options', 'chip_zero_field_twitter_fn' ), 'chip_zero_section_subscription_page', 'chip_zero_section_subscription' );

			add_settings_field( 'chip_zero_field_twitter_url', 'Enter Twitter URL', array( 'Chip_Zero_Options', 'chip_zero_field_twitter_url_fn' ), 'chip_zero_section_subscription_page', 'chip_zero_section_subscription' );

			

			add_settings_field( 'chip_zero_field_delicious', 'Use Delicious', array( 'Chip_Zero_Options', 'chip_zero_field_delicious_fn' ), 'chip_zero_section_subscription_page', 'chip_zero_section_subscription' );

			add_settings_field( 'chip_zero_field_delicious_url', 'Enter Delicious URL', array( 'Chip_Zero_Options', 'chip_zero_field_delicious_url_fn' ), 'chip_zero_section_subscription_page', 'chip_zero_section_subscription' );

			

			add_settings_field( 'chip_zero_field_facebook', 'Use Facebook', array( 'Chip_Zero_Options', 'chip_zero_field_facebook_fn' ), 'chip_zero_section_subscription_page', 'chip_zero_section_subscription' );

			add_settings_field( 'chip_zero_field_facebook_url', 'Enter Facebook URL', array( 'Chip_Zero_Options', 'chip_zero_field_facebook_url_fn' ), 'chip_zero_section_subscription_page', 'chip_zero_section_subscription' );

			

			add_settings_field( 'chip_zero_field_stumble', 'Use Stumbleupon', array( 'Chip_Zero_Options', 'chip_zero_field_stumble_fn' ), 'chip_zero_section_subscription_page', 'chip_zero_section_subscription' );

			add_settings_field( 'chip_zero_field_stumble_url', 'Enter Stumbleupon URL', array( 'Chip_Zero_Options', 'chip_zero_field_stumble_url_fn' ), 'chip_zero_section_subscription_page', 'chip_zero_section_subscription' );

			

			add_settings_field( 'chip_zero_field_digg', 'Use Digg', array( 'Chip_Zero_Options', 'chip_zero_field_digg_fn' ), 'chip_zero_section_subscription_page', 'chip_zero_section_subscription' );

			add_settings_field( 'chip_zero_field_digg_url', 'Enter Digg URL', array( 'Chip_Zero_Options', 'chip_zero_field_digg_url_fn' ), 'chip_zero_section_subscription_page', 'chip_zero_section_subscription' );

			

			/** Chip General Section */

			add_settings_section( 'chip_zero_section_general', 'General Options', array( 'Chip_Zero_Options', 'chip_zero_section_general_fn' ), 'chip_zero_section_general_page' );

			

			add_settings_field( 'chip_zero_field_authorbox', 'Display Author Box', array( 'Chip_Zero_Options', 'chip_zero_field_authorbox_fn' ), 'chip_zero_section_general_page', 'chip_zero_section_general' );

			

			add_settings_field( 'chip_zero_field_analytic', 'Use Analytic', array( 'Chip_Zero_Options', 'chip_zero_field_analytic_fn' ), 'chip_zero_section_general_page', 'chip_zero_section_general' );

			add_settings_field( 'chip_zero_field_analytic_code', 'Enter Analytic Code', array( 'Chip_Zero_Options', 'chip_zero_field_analytic_code_fn' ), 'chip_zero_section_general_page', 'chip_zero_section_general' );

			

			add_settings_field( 'chip_zero_field_copyright', 'Enter Copyright Text', array( 'Chip_Zero_Options', 'chip_zero_field_copyright_fn' ), 'chip_zero_section_general_page', 'chip_zero_section_general' );

			

			add_settings_field('chip_zero_field_reset', 'Reset Theme Options', array( 'Chip_Zero_Options', 'chip_zero_field_reset_fn' ), 'chip_zero_section_general_page', 'chip_zero_section_general');

		

		}

		

		/**

		* Chip Admin Menu

		*/

		

		function chip_admin_menu() {

		

			$page = add_theme_page( 'Chip Zero Theme Options', 'Chip Zero Theme Options', 'edit_theme_options', 'theme_options', array( 'Chip_Zero_Options', 'chip_setting_fn' ) );

			/* Using registered $page handle to hook stylesheet loading */

			add_action( 'admin_print_styles-' . $page, array( 'Chip_Zero_Options', 'chip_admin_styles_fn' ) );

		

		}

		

		/**

		* Chip Admin Style

		*/

		

		function chip_admin_styles_fn() {

			

			wp_enqueue_script( 'jquery' );

			wp_enqueue_script( 'jquery-ui-tabs' );

			wp_enqueue_script( 'chip_zero_jquery_cookie', '', array( 'jquery-ui-tabs' ), '1.4' );			

			

			wp_enqueue_style( 'chip_zero_admin_style' );

			wp_enqueue_style( 'chip_zero_uiblacktie_style' );

		

		}

		

		/**

		* Chip Setting - Form

		*/

		

		function chip_setting_fn() {

			locate_template( array( CHIP_ZERO_FSROOT . 'option/setting.php' ), true, false );

		}

		

		/**

		* Chip Init Default

		*/

		

		function chip_init_default() {

		

			$chip_zero_options = get_option('chip_zero_options');

			

			//if(($tmp['chkbox1']=='on')||(!is_array($tmp))) {

			if( ( $chip_zero_options['chip_zero_reset'] == 1 || !is_array( $chip_zero_options ) ) ) {

				

				$default = array(

					'chip_zero_logo'							=>	0,

					'chip_zero_logo_url'						=>	CHIP_ZERO_URLPATH . 'images/logo.png',

					

					'chip_zero_post_style'						=>	'excerpt',					

					'chip_zero_header_style'					=>	'header',

					

					'chip_zero_related_post'					=>	0,

					'chip_zero_related_post_number'				=>	3,

					

					'chip_zero_sponsor_header_728x90'			=>	0,

					'chip_zero_sponsor_header_728x90_code'		=>	'Sponsor Code - Recommended: 728x90',

					

					'chip_zero_sponsor_header_728x15'			=>	0,

					'chip_zero_sponsor_header_728x15_code'		=>	'Sponsor Code - Recommended: 728x15',

					

					'chip_zero_sponsor_post_undertitle'			=>	0,

					'chip_zero_sponsor_post_undertitle_code'	=>	'Sponsor Code - Recommended: 300x250 OR 336x280',

					

					'chip_zero_sponsor_post_468x15'				=>	0,

					'chip_zero_sponsor_post_468x15_code'		=>	'Sponsor Code - Recommended: 468x15',

					

					'chip_zero_rss'								=>	0,

					'chip_zero_rss_url'							=>	CHIP_ZERO_HOME . 'feed/',

					

					'chip_zero_feedburner'						=>	0,

					'chip_zero_feedburner_id'					=>	'tutorialchip',

					

					'chip_zero_feedburner_post_bottom'			=>	0,

					

					'chip_zero_twitter'							=>	0,

					'chip_zero_twitter_url'						=>	'http://twitter.com/lifeobject1',

					

					'chip_zero_delicious'						=>	0,

					'chip_zero_delicious_url'					=>	'http://www.delicious.com/life.object',

					

					'chip_zero_facebook'						=>	0,

					'chip_zero_facebook_url'					=>	'http://www.facebook.com/tutorialchip',

					

					'chip_zero_stumble'							=>	0,

					'chip_zero_stumble_url'						=>	'http://www.stumbleupon.com/stumbler/lifeobject',

					

					'chip_zero_digg'							=>	0,

					'chip_zero_digg_url'						=>	'http://digg.com/lifeobject',

					

					'chip_zero_authorbox'						=>	1,

					

					'chip_zero_analytic'						=>	0,

					'chip_zero_analytic_code'					=>	'Analytic Code',

					

					'chip_zero_field_copyright'					=>	'&amp;copy; Copyright '.date('Y').' - <a href=\''.CHIP_ZERO_HOME.'\'>'.get_bloginfo('name').'</a>',

					

					'chip_zero_reset'							=>	0,

					

				);

				

				update_option( 'chip_zero_options' , $default );

			

			}

		

		}

		

		/*

		|--------------------------

		| Chip Zero Pre-defined Range

		|--------------------------

		*/

		

		/* Boolean Yes | No */

		

		function chip_boolean_pd() {			

			$temp = array( 1 => 'yes', 0 => 'no' );		

			return $temp;

		}

		

		/* Valid Home Page Post Range */		

		

		function chip_post_style_pd() {			

			$temp = array( 'excerpt' => 'excerpt', 'content' => 'content' );			

			return $temp;			

		}

		

		/* Valid Header Styles */		

		

		function chip_header_style_pd() {			

			$temp = array( 'header' => 'header', 'logo' => 'logo' );			

			return $temp;			

		}

		

		/* Valid Related Post Range */		

		

		function chip_related_posts_pd() {			

			$temp = array( 3 => 3, 6 => 6, 9 => 9 );			

			return $temp;			

		}

		

		/*

		|--------------------------

		| Chip Validation

		|--------------------------

		*/		

		

		function chip_validation_fn( $input ) {

			

			/* Validation: chip_zero_logo */

			$chip_boolean_pd = Chip_Zero_Options::chip_boolean_pd();

			if ( ! array_key_exists( $input['chip_zero_logo'], $chip_boolean_pd ) ) {

				 $input['chip_zero_logo'] = 0;

			}

			

			/* Validation: chip_zero_logo_url */

			if( !empty( $input['chip_zero_logo_url'] ) ) {

				$input['chip_zero_logo_url'] = esc_url( $input['chip_zero_logo_url'] );

			}

			

			/* Validation: chip_zero_post_style */

			$chip_post_style_pd = Chip_Zero_Options::chip_post_style_pd();

			if ( ! array_key_exists( $input['chip_zero_post_style'], $chip_post_style_pd ) ) {

				 $input['chip_zero_post_style'] = "excerpt";

			}

			

			/* Validation: chip_zero_header_style */

			$chip_header_style_pd = Chip_Zero_Options::chip_header_style_pd();

			if ( ! array_key_exists( $input['chip_zero_header_style'], $chip_header_style_pd ) ) {

				 $input['chip_zero_header_style'] = "header";

			}

			

			/* Validation: chip_zero_related_post */

			$chip_boolean_pd = Chip_Zero_Options::chip_boolean_pd();

			if ( ! array_key_exists( $input['chip_zero_related_post'], $chip_boolean_pd ) ) {

				 $input['chip_zero_related_post'] = 0;

			}

			

			/* Validation: chip_zero_related_post_number */

			$chip_related_posts_pd = Chip_Zero_Options::chip_related_posts_pd();

			if ( ! array_key_exists( $input['chip_zero_related_post_number'], $chip_related_posts_pd ) ) {

				 $input['chip_zero_related_post_number'] = 3;

			}

			

			/* Validation: chip_zero_sponsor_header_728x90 */

			$chip_boolean_pd = Chip_Zero_Options::chip_boolean_pd();

			if ( ! array_key_exists( $input['chip_zero_sponsor_header_728x90'], $chip_boolean_pd ) ) {

				 $input['chip_zero_sponsor_header_728x90'] = 0;

			}

			

			/* Validation: chip_zero_sponsor_header_728x90_code */

			if( !empty( $input['chip_zero_sponsor_header_728x90_code'] ) ) {

				$input['chip_zero_sponsor_header_728x90_code'] = htmlspecialchars ( $input['chip_zero_sponsor_header_728x90_code'] );

			}

			

			/* Validation: chip_zero_sponsor_header_728x15 */

			$chip_boolean_pd = Chip_Zero_Options::chip_boolean_pd();

			if ( ! array_key_exists( $input['chip_zero_sponsor_header_728x15'], $chip_boolean_pd ) ) {

				 $input['chip_zero_sponsor_header_728x15'] = 0;

			}

			

			/* Validation: chip_zero_sponsor_header_728x15_code */

			if( !empty( $input['chip_zero_sponsor_header_728x15_code'] ) ) {

				$input['chip_zero_sponsor_header_728x15_code'] = htmlspecialchars ( $input['chip_zero_sponsor_header_728x15_code'] );

			}

			

			/* Validation: chip_zero_sponsor_post_undertitle */

			$chip_boolean_pd = Chip_Zero_Options::chip_boolean_pd();

			if ( ! array_key_exists( $input['chip_zero_sponsor_post_undertitle'], $chip_boolean_pd ) ) {

				 $input['chip_zero_sponsor_post_undertitle'] = 0;

			}

			

			/* Validation: chip_zero_sponsor_post_undertitle_code */

			if( !empty( $input['chip_zero_sponsor_post_undertitle_code'] ) ) {

				$input['chip_zero_sponsor_post_undertitle_code'] = htmlspecialchars ( $input['chip_zero_sponsor_post_undertitle_code'] );

			}

			

			/* Validation: chip_zero_sponsor_post_468x15 */

			$chip_boolean_pd = Chip_Zero_Options::chip_boolean_pd();

			if ( ! array_key_exists( $input['chip_zero_sponsor_post_468x15'], $chip_boolean_pd ) ) {

				 $input['chip_zero_sponsor_post_468x15'] = 0;

			}

			

			/* Validation: chip_zero_sponsor_post_468x15_code */

			if( !empty( $input['chip_zero_sponsor_post_468x15_code'] ) ) {

				$input['chip_zero_sponsor_post_468x15_code'] = htmlspecialchars ( $input['chip_zero_sponsor_post_468x15_code'] );

			}						

			

			/* Validation: chip_zero_rss */

			$chip_boolean_pd = Chip_Zero_Options::chip_boolean_pd();

			if ( ! array_key_exists( $input['chip_zero_rss'], $chip_boolean_pd ) ) {

				 $input['chip_zero_rss'] = 0;

			}

			

			/* Validation: chip_zero_rss_url */

			if( !empty( $input['chip_zero_rss_url'] ) ) {

				$input['chip_zero_rss_url'] = esc_url( $input['chip_zero_rss_url'] );

			}

			

			/* Validation: chip_zero_feedburner */

			$chip_boolean_pd = Chip_Zero_Options::chip_boolean_pd();

			if ( ! array_key_exists( $input['chip_zero_feedburner'], $chip_boolean_pd ) ) {

				 $input['chip_zero_rss'] = 0;

			}

			

			/* Validation: chip_zero_feedburner_id */

			if( !empty( $input['chip_zero_feedburner_id'] ) ) {

				$input['chip_zero_feedburner_id'] = wp_kses( $input['chip_zero_feedburner_id'], array() );

			}

			

			/* Validation: chip_zero_feedburner_post_bottom */

			$chip_boolean_pd = Chip_Zero_Options::chip_boolean_pd();

			if ( ! array_key_exists( $input['chip_zero_feedburner_post_bottom'], $chip_boolean_pd ) ) {

				 $input['chip_zero_rss'] = 0;

			}

			

			/* Validation: chip_zero_twitter */

			$chip_boolean_pd = Chip_Zero_Options::chip_boolean_pd();

			if ( ! array_key_exists( $input['chip_zero_twitter'], $chip_boolean_pd ) ) {

				 $input['chip_zero_twitter'] = 0;

			}

			

			/* Validation: chip_zero_twitter_url */

			if( !empty( $input['chip_zero_twitter_url'] ) ) {

				$input['chip_zero_twitter_url'] = esc_url( $input['chip_zero_twitter_url'] );

			}

			

			/* Validation: chip_zero_delicious */

			$chip_boolean_pd = Chip_Zero_Options::chip_boolean_pd();

			if ( ! array_key_exists( $input['chip_zero_delicious'], $chip_boolean_pd ) ) {

				 $input['chip_zero_delicious'] = 0;

			}

			

			/* Validation: chip_zero_delicious_url */

			if( !empty( $input['chip_zero_delicious_url'] ) ) {

				$input['chip_zero_delicious_url'] = esc_url( $input['chip_zero_delicious_url'] );

			}

			

			/* Validation: chip_zero_facebook */

			$chip_boolean_pd = Chip_Zero_Options::chip_boolean_pd();

			if ( ! array_key_exists( $input['chip_zero_facebook'], $chip_boolean_pd ) ) {

				 $input['chip_zero_facebook'] = 0;

			}

			

			/* Validation: chip_zero_facebook_url */

			if( !empty( $input['chip_zero_facebook_url'] ) ) {

				$input['chip_zero_facebook_url'] = esc_url( $input['chip_zero_facebook_url'] );

			}

			

			/* Validation: chip_zero_stumble */

			$chip_boolean_pd = Chip_Zero_Options::chip_boolean_pd();

			if ( ! array_key_exists( $input['chip_zero_stumble'], $chip_boolean_pd ) ) {

				 $input['chip_zero_stumble'] = 0;

			}

			

			/* Validation: chip_zero_stumble_url */

			if( !empty( $input['chip_zero_stumble_url'] ) ) {

				$input['chip_zero_stumble_url'] = esc_url( $input['chip_zero_stumble_url'] );

			}

			

			/* Validation: chip_zero_digg */

			$chip_boolean_pd = Chip_Zero_Options::chip_boolean_pd();

			if ( ! array_key_exists( $input['chip_zero_digg'], $chip_boolean_pd ) ) {

				 $input['chip_zero_digg'] = 0;

			}

			

			/* Validation: chip_zero_digg_url */

			if( !empty( $input['chip_zero_digg_url'] ) ) {

				$input['chip_zero_digg_url'] = esc_url( $input['chip_zero_digg_url'] );

			}

			

			/* Validation: chip_zero_authorbox */

			$chip_boolean_pd = Chip_Zero_Options::chip_boolean_pd();

			if ( ! array_key_exists( $input['chip_zero_authorbox'], $chip_boolean_pd ) ) {

				 $input['chip_zero_authorbox'] = 0;

			}

			

			/* Validation: chip_zero_analytic */

			$chip_boolean_pd = Chip_Zero_Options::chip_boolean_pd();

			if ( ! array_key_exists( $input['chip_zero_analytic'], $chip_boolean_pd ) ) {

				 $input['chip_zero_analytic'] = 0;

			}

			

			/* Validation: chip_zero_analytic_code */

			if( !empty( $input['chip_zero_analytic_code'] ) ) {

				$input['chip_zero_analytic_code'] = htmlspecialchars ( $input['chip_zero_analytic_code'], ENT_NOQUOTES );

			}

			

			/* Validation: chip_zero_field_copyright */

			if( !empty( $input['chip_zero_field_copyright'] ) ) {

				$input['chip_zero_field_copyright'] = htmlspecialchars ( $input['chip_zero_field_copyright'], ENT_NOQUOTES );

			}

			

			/* Validation: chip_zero_reset */

			$chip_boolean_pd = Chip_Zero_Options::chip_boolean_pd();

			if ( ! array_key_exists( chip_zero_undefined_index_fix ( $input['chip_zero_reset'] ), $chip_boolean_pd ) ) {

				 $input['chip_zero_reset'] = 0;

			}

			

			return $input;

		

		}

		

		/**

		* Chip Blog Section

		*/		

		

		function chip_zero_section_blog_fn() {

			echo "These options will help you to customize Chip Zero theme.";

		}

		

		/* Chip Logo */

		

		function  chip_zero_field_logo_fn() {

			

			$chip_zero_options = get_option( 'chip_zero_options' );

			$items = Chip_Zero_Options::chip_boolean_pd();

			

			echo '<select id="chip_zero_logo" name="chip_zero_options[chip_zero_logo]">';

			foreach( $items as $key => $val ) {

				$selected = ( $chip_zero_options['chip_zero_logo'] == $key ) ? 'selected="selected"' : '';

				echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';

			}

			echo '</select>';

			echo '<div><small>Select yes to add the image logo in the site header. Enter your logo URl below.</small></div>';

		

		}

		

		function chip_zero_field_logo_url_fn() {

			$chip_zero_options = get_option('chip_zero_options');

			echo '<input type="text" id="chip_zero_logo_url" name="chip_zero_options[chip_zero_logo_url]" size="40" value="'.$chip_zero_options['chip_zero_logo_url'].'" />';

			echo '<div>Enter the logo URl</div>';

		}

		

		/* Blog Post Style */

		

		function chip_zero_field_post_style_fn() {

			

			$chip_zero_options = get_option('chip_zero_options');

			$items = Chip_Zero_Options::chip_post_style_pd();			

			

			foreach( $items as $key => $val ) {

				$checked = ( $chip_zero_options['chip_zero_post_style'] == $key ) ? ' checked="checked" ' : '';

				echo '<label><input type="radio" id="chip_zero_post_style[]" name="chip_zero_options[chip_zero_post_style]" value="'.$key.'" '.$checked.' /> '.$val.'</label><br />';

			}

		

		}

		

		/* Blog Header Style */

		

		function chip_zero_field_header_style_fn() {

			

			$chip_zero_options = get_option('chip_zero_options');

			$items = Chip_Zero_Options::chip_header_style_pd();			

			

			foreach( $items as $key => $val ) {

				$checked = ( $chip_zero_options['chip_zero_header_style'] == $key ) ? ' checked="checked" ' : '';

				echo '<label><input type="radio" id="chip_zero_header_style[]" name="chip_zero_options[chip_zero_header_style]" value="'.$key.'" '.$checked.' /> '.$val.'</label><br />';

			}

		

		}	

		

		/*

		|--------------------------

		| Chip Post Section

		|--------------------------

		*/		

		

		function chip_zero_section_post_fn() {

			echo "These options will help you to customize options about post.";

		}

		

		/* Chip Related Posts */

		

		function  chip_zero_field_related_post_fn() {

			

			$chip_zero_options = get_option( 'chip_zero_options' );

			$items = Chip_Zero_Options::chip_boolean_pd();

			

			echo '<select id="chip_zero_related_post" name="chip_zero_options[chip_zero_related_post]">';

			foreach( $items as $key => $val ) {

				$selected = ( $chip_zero_options['chip_zero_related_post'] == $key ) ? 'selected="selected"' : '';

				echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';

			}

			echo '</select>';

			echo '<div><small>Select yes to add the related posts at the bottom of post.</small></div>';

		

		}

		

		function  chip_zero_field_related_post_number_fn() {

			

			$chip_zero_options = get_option( 'chip_zero_options' );

			$items = Chip_Zero_Options::chip_related_posts_pd();

			

			echo '<select id="chip_zero_related_post_number" name="chip_zero_options[chip_zero_related_post_number]">';

			foreach( $items as $key => $val ) {

				$selected = ( $chip_zero_options['chip_zero_related_post_number'] == $key ) ? 'selected="selected"' : '';

				echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';

			}

			echo '</select>';

			echo '<div><small>How many related posts would you like to display?</small></div>';

		

		}

		

		/*

		|--------------------------

		| Chip Sponsor Section

		|--------------------------

		*/		

		

		function chip_zero_section_sponsor_fn() {

			echo "These options will help you to integrate Sponsor ads.";

		}

		

		/* Sponsor Header: 728x90 */

		

		function  chip_zero_field_sponsor_header_728x90_fn() {

			

			$chip_zero_options = get_option( 'chip_zero_options' );

			$items = Chip_Zero_Options::chip_boolean_pd();

			

			echo '<select id="chip_zero_sponsor_header_728x90" name="chip_zero_options[chip_zero_sponsor_header_728x90]">';

			foreach( $items as $key => $val ) {

				$selected = ( $chip_zero_options['chip_zero_sponsor_header_728x90'] == $key ) ? 'selected="selected"' : '';

				echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';

			}

			echo '</select>';

			echo '<div><small>Select yes to add sponsor ad in your blog header. (Header Style should be "logo")</small></div>';

			echo '<div><small>* Recommended: 728x90 px</small></div>';

		

		}

		

		function chip_zero_field_sponsor_header_728x90_code_fn() {

			$chip_zero_options = get_option('chip_zero_options');

			echo '<textarea type="textarea" id="chip_zero_sponsor_header_728x90_code" name="chip_zero_options[chip_zero_sponsor_header_728x90_code]" rows="7" cols="50">'.$chip_zero_options['chip_zero_sponsor_header_728x90_code'].'</textarea>';

			echo '<div>Enter the Sponsor Code</div>';

		}

		

		/* Sponsor Header: 728x15 */

		

		function  chip_zero_field_sponsor_header_728x15_fn() {

			

			$chip_zero_options = get_option( 'chip_zero_options' );

			$items = Chip_Zero_Options::chip_boolean_pd();

			

			echo '<select id="chip_zero_sponsor_header_728x15" name="chip_zero_options[chip_zero_sponsor_header_728x15]">';

			foreach( $items as $key => $val ) {

				$selected = ( $chip_zero_options['chip_zero_sponsor_header_728x15'] == $key ) ? 'selected="selected"' : '';

				echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';

			}

			echo '</select>';

			echo '<div><small>Select yes to add sponsor ad under your blog header.</small></div>';

			echo '<div><small>* Recommended: 728x15 px</small></div>';

		

		}

		

		function chip_zero_field_sponsor_header_728x15_code_fn() {

			$chip_zero_options = get_option('chip_zero_options');

			echo '<textarea type="textarea" id="chip_zero_sponsor_header_728x15_code" name="chip_zero_options[chip_zero_sponsor_header_728x15_code]" rows="7" cols="50">'.$chip_zero_options['chip_zero_sponsor_header_728x15_code'].'</textarea>';

			echo '<div>Enter the Sponsor Code</div>';

		}

		

		/* Sponsor Under Post Title */

		

		function  chip_zero_field_sponsor_post_undertitle_fn() {

			

			$chip_zero_options = get_option( 'chip_zero_options' );

			$items = Chip_Zero_Options::chip_boolean_pd();

			

			echo '<select id="chip_zero_sponsor_post_undertitle" name="chip_zero_options[chip_zero_sponsor_post_undertitle]">';

			foreach( $items as $key => $val ) {

				$selected = ( $chip_zero_options['chip_zero_sponsor_post_undertitle'] == $key ) ? 'selected="selected"' : '';

				echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';

			}

			echo '</select>';

			echo '<div><small>Select yes to add sponsor ad under the post title.</small></div>';

			echo '<div><small>* Recommended: 300x250 px, 336x280 px</small></div>';

		

		}

		

		function chip_zero_field_sponsor_post_undertitle_code_fn() {

			$chip_zero_options = get_option('chip_zero_options');

			echo '<textarea type="textarea" id="chip_zero_sponsor_post_undertitle_code" name="chip_zero_options[chip_zero_sponsor_post_undertitle_code]" rows="7" cols="50">'.$chip_zero_options['chip_zero_sponsor_post_undertitle_code'].'</textarea>';

			echo '<div>Enter the Sponsor Code</div>';

		}

		

		/* Sponsor at the end of Post: 468x15 */

		

		function  chip_zero_field_sponsor_post_468x15_fn() {

			

			$chip_zero_options = get_option( 'chip_zero_options' );

			$items = Chip_Zero_Options::chip_boolean_pd();

			

			echo '<select id="chip_zero_sponsor_post_468x15" name="chip_zero_options[chip_zero_sponsor_post_468x15]">';

			foreach( $items as $key => $val ) {

				$selected = ( $chip_zero_options['chip_zero_sponsor_post_468x15'] == $key ) ? 'selected="selected"' : '';

				echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';

			}

			echo '</select>';

			echo '<div><small>Select yes to add sponsor ad under your post.</small></div>';

			echo '<div><small>* Recommended: 468x15 px</small></div>';

		

		}

		

		function chip_zero_field_sponsor_post_468x15_code_fn() {

			$chip_zero_options = get_option('chip_zero_options');

			echo '<textarea type="textarea" id="chip_zero_sponsor_post_468x15_code" name="chip_zero_options[chip_zero_sponsor_post_468x15_code]" rows="7" cols="50">'.$chip_zero_options['chip_zero_sponsor_post_468x15_code'].'</textarea>';

			echo '<div>Enter the Sponsor Code</div>';

		}

		

		/**

		* Chip Subscription Section

		*/

		

		function chip_zero_section_subscription_fn() {

			echo "These options will help you to customize Subscription options.";

		}

		

		/** Chip RSS */

		

		function  chip_zero_field_rss_fn() {

			

			$chip_zero_options = get_option( 'chip_zero_options' );

			$items = Chip_Zero_Options::chip_boolean_pd();

			

			echo '<select id="chip_zero_rss" name="chip_zero_options[chip_zero_rss]">';

			foreach( $items as $key => $val ) {

				$selected = ( $chip_zero_options['chip_zero_rss'] == $key ) ? 'selected="selected"' : '';

				echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';

			}

			echo '</select>';

			echo '<div><small>RSS (most commonly expanded as "Really Simple Syndication") is a family of web feed formats used to publish frequently updated work. Select yes to add your RSS URL.</small></div>';

		

		}

		

		function chip_zero_field_rss_url_fn() {

			

			$chip_zero_options = get_option('chip_zero_options');

			echo '<input type="text" id="chip_zero_rss_url" name="chip_zero_options[chip_zero_rss_url]" size="40" value="'.$chip_zero_options['chip_zero_rss_url'].'" />';

			echo '<div><small>Enter the RSS URL. For Example: <strong>http://www.tutorialchip.com/feed/</strong></small></div>';

		

		}

		

		/** Chip Feedburner */

		

		function  chip_zero_field_feedburner_fn() {

			

			$chip_zero_options = get_option( 'chip_zero_options' );

			$items = Chip_Zero_Options::chip_boolean_pd();

			

			echo '<select id="chip_zero_feedburner" name="chip_zero_options[chip_zero_feedburner]">';

			foreach( $items as $key => $val ) {

				$selected = ( $chip_zero_options['chip_zero_feedburner'] == $key ) ? 'selected="selected"' : '';

				echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';

			}

			echo '</select>';

			echo '<div><small>Select yes to add your Feedburner ID.</small></div>';

		

		}

		

		function chip_zero_field_feedburner_id_fn() {

			

			$chip_zero_options = get_option('chip_zero_options');

			echo '<input type="text" id="chip_zero_feedburner_id" name="chip_zero_options[chip_zero_feedburner_id]" size="40" value="'.$chip_zero_options['chip_zero_feedburner_id'].'" />';

			echo '<div><small>Enter the Feedburner ID. For Example: <strong>tutorialchip</strong></small></div>';

		

		}

		

		function  chip_zero_field_feedburner_post_bottom_fn() {

			

			$chip_zero_options = get_option( 'chip_zero_options' );

			$items = Chip_Zero_Options::chip_boolean_pd();

			

			echo '<select id="chip_zero_feedburner_post_bottom" name="chip_zero_options[chip_zero_feedburner_post_bottom]">';

			foreach( $items as $key => $val ) {

				$selected = ( $chip_zero_options['chip_zero_feedburner_post_bottom'] == $key ) ? 'selected="selected"' : '';

				echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';

			}

			echo '</select>';

			echo '<div><small>Select yes to add your Feedburner Form at the bottom of Post.</small></div>';

		

		}

		

		/** Chip Twitter */

		

		function  chip_zero_field_twitter_fn() {

			

			$chip_zero_options = get_option( 'chip_zero_options' );

			$items = Chip_Zero_Options::chip_boolean_pd();

			

			echo '<select id="chip_zero_twitter" name="chip_zero_options[chip_zero_twitter]">';

			foreach( $items as $key => $val ) {

				$selected = ( $chip_zero_options['chip_zero_twitter'] == $key ) ? 'selected="selected"' : '';

				echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';

			}

			echo '</select>';

			echo '<div><small>Select yes to add your Twitter URL.</small></div>';

		

		}

		

		function chip_zero_field_twitter_url_fn() {

			

			$chip_zero_options = get_option('chip_zero_options');

			echo '<input type="text" id="chip_zero_twitter_url" name="chip_zero_options[chip_zero_twitter_url]" size="40" value="'.$chip_zero_options['chip_zero_twitter_url'].'" />';

			echo '<div><small>Enter the Twitter URL. For Example: <strong>http://twitter.com/lifeobject1</strong></small></div>';

		

		}

		

		/** Chip Delicious */

		

		function  chip_zero_field_delicious_fn() {

			

			$chip_zero_options = get_option( 'chip_zero_options' );

			$items = Chip_Zero_Options::chip_boolean_pd();

			

			echo '<select id="chip_zero_delicious" name="chip_zero_options[chip_zero_delicious]">';

			foreach( $items as $key => $val ) {

				$selected = ( $chip_zero_options['chip_zero_delicious'] == $key ) ? 'selected="selected"' : '';

				echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';

			}

			echo '</select>';

			echo '<div><small>Select yes to add your Delicious URL.</small></div>';

		

		}

		

		function chip_zero_field_delicious_url_fn() {

			

			$chip_zero_options = get_option('chip_zero_options');

			echo '<input type="text" id="chip_zero_delicious_url" name="chip_zero_options[chip_zero_delicious_url]" size="40" value="'.$chip_zero_options['chip_zero_delicious_url'].'" />';

			echo '<div><small>Enter the Delicious URL. For Example: <strong>http://www.delicious.com/life.object</strong></small></div>';

		

		}

		

		/** Chip Facebook */

		

		function  chip_zero_field_facebook_fn() {

			

			$chip_zero_options = get_option( 'chip_zero_options' );

			$items = Chip_Zero_Options::chip_boolean_pd();

			

			echo '<select id="chip_zero_facebook" name="chip_zero_options[chip_zero_facebook]">';

			foreach( $items as $key => $val ) {

				$selected = ( $chip_zero_options['chip_zero_facebook'] == $key ) ? 'selected="selected"' : '';

				echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';

			}

			echo '</select>';

			echo '<div><small>Select yes to add your Facebook URL.</small></div>';

		

		}

		

		function chip_zero_field_facebook_url_fn() {

			

			$chip_zero_options = get_option('chip_zero_options');

			echo '<input type="text" id="chip_zero_facebook_url" name="chip_zero_options[chip_zero_facebook_url]" size="40" value="'.$chip_zero_options['chip_zero_facebook_url'].'" />';

			echo '<div><small>Enter the Facebook URL. For Example: <strong>http://www.facebook.com/profile.php?id=100001747038774</strong></small></div>';

		

		}

		

		/** Chip Stumble */

		

		function  chip_zero_field_stumble_fn() {

			

			$chip_zero_options = get_option( 'chip_zero_options' );

			$items = Chip_Zero_Options::chip_boolean_pd();

			

			echo '<select id="chip_zero_stumble" name="chip_zero_options[chip_zero_stumble]">';

			foreach( $items as $key => $val ) {

				$selected = ( $chip_zero_options['chip_zero_stumble'] == $key ) ? 'selected="selected"' : '';

				echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';

			}

			echo '</select>';

			echo '<div><small>Select yes to add your Stumbleupon URL.</small></div>';

		

		}

		

		function chip_zero_field_stumble_url_fn() {

			

			$chip_zero_options = get_option('chip_zero_options');

			echo '<input type="text" id="chip_zero_stumble_url" name="chip_zero_options[chip_zero_stumble_url]" size="40" value="'.$chip_zero_options['chip_zero_stumble_url'].'" />';

			echo '<div><small>Enter the Stumbleupon URL. For Example: <strong>http://www.stumbleupon.com/stumbler/lifeobject</strong></small></div>';

		

		}

		

		/** Chip Digg */

		

		function  chip_zero_field_digg_fn() {

			

			$chip_zero_options = get_option( 'chip_zero_options' );

			$items = Chip_Zero_Options::chip_boolean_pd();

			

			echo '<select id="chip_zero_digg" name="chip_zero_options[chip_zero_digg]">';

			foreach( $items as $key => $val ) {

				$selected = ( $chip_zero_options['chip_zero_digg'] == $key ) ? 'selected="selected"' : '';

				echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';

			}

			echo '</select>';

			echo '<div><small>Select yes to add your Digg URL.</small></div>';

		

		}

		

		function chip_zero_field_digg_url_fn() {

			

			$chip_zero_options = get_option('chip_zero_options');

			echo '<input type="text" id="chip_zero_digg_url" name="chip_zero_options[chip_zero_digg_url]" size="40" value="'.$chip_zero_options['chip_zero_digg_url'].'" />';

			echo '<div><small>Enter the Digg URL. For Example: <strong>http://digg.com/lifeobject</strong></small></div>';

		

		}

		

		/**

		* Chip General Section

		*/		

		

		function chip_zero_section_general_fn() {

			echo "These options will help you to customize General options.";

		}

		

		/* Chip Author Box */

		

		function  chip_zero_field_authorbox_fn() {

			

			$chip_zero_options = get_option( 'chip_zero_options' );

			$items = Chip_Zero_Options::chip_boolean_pd();

			

			echo '<select id="chip_zero_authorbox" name="chip_zero_options[chip_zero_authorbox]">';

			foreach( $items as $key => $val ) {

				$selected = ( $chip_zero_options['chip_zero_authorbox'] == $key ) ? 'selected="selected"' : '';

				echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';

			}

			echo '</select>';

			echo '<div><small>Select yes to display Author box.</small></div>';

		

		}

		

		/* Chip Analytic */

		

		function  chip_zero_field_analytic_fn() {

			

			$chip_zero_options = get_option( 'chip_zero_options' );

			$items = Chip_Zero_Options::chip_boolean_pd();

			

			echo '<select id="chip_zero_analytic" name="chip_zero_options[chip_zero_analytic]">';

			foreach( $items as $key => $val ) {

				$selected = ( $chip_zero_options['chip_zero_analytic'] == $key ) ? 'selected="selected"' : '';

				echo '<option value="'.$key.'" '.$selected.'>'.$val.'</option>';

			}

			echo '</select>';

			echo '<div><small>Select yes to add your Analytic code.</small></div>';

		

		}

		

		function chip_zero_field_analytic_code_fn() {

			

			$chip_zero_options = get_option('chip_zero_options');

			echo '<textarea type="textarea" id="chip_zero_analytic_code" name="chip_zero_options[chip_zero_analytic_code]" rows="7" cols="50">'.$chip_zero_options['chip_zero_analytic_code'].'</textarea>';

			echo '<div><small>Enter the Analytic code</small></div>';

		

		}

		

		/* Copyright Text */

		

		function chip_zero_field_copyright_fn() {

			

			$chip_zero_options = get_option('chip_zero_options');

			echo '<input type="text" id="chip_zero_field_copyright" name="chip_zero_options[chip_zero_field_copyright]" size="40" value="'.$chip_zero_options['chip_zero_field_copyright'].'" />';

			echo '<div><small>Enter Copyright Text.</small></div>';

			echo '<div><small>Example: <strong>&amp;copy; Copyright '.date('Y').' - &lt;a href=\''.CHIP_ZERO_HOME.'\'&gt;'.get_bloginfo('name').'&lt;/a&gt;</strong></small></div>';

		

		}		

		

		/* Theme Reset */

		

		function chip_zero_field_reset_fn() {

			

			$chip_zero_options = get_option('chip_zero_options');			

			$items = Chip_Zero_Options::chip_boolean_pd();

			

			$checked = ( $chip_zero_options['chip_zero_reset'] == 1 ) ? 'checked="checked"' : '';

			echo '<label><input type="checkbox" id="chip_zero_reset" name="chip_zero_options[chip_zero_reset]" value="1" '.$checked.' /> Reset Theme Options</label>';

		}		



}

?>