<?php
/**
 * @package    sfhr
 * @version    1.0.0
 * @author     Zen Den Web Design <http://zendenwebdesign.com/>
 */
 
// Get the template directory and make sure it has a trailing slash.
$sfhr_dir = trailingslashit( get_template_directory() );

// Load the dependencies & frameworks
require_once $sfhr_dir . 'lib/cmb2/init.php';
require_once $sfhr_dir . 'inc/metaboxes.php';
require_once $sfhr_dir . 'inc/shortcodes.php';
require_once $sfhr_dir . 'inc/idx-access.php';
require_once $sfhr_dir . 'inc/custom-post-types.php';
require_once $sfhr_dir . 'inc/custom-taxonomies.php';
require_once $sfhr_dir . 'inc/numbered-pagination.php';
 
// Do theme setup on the 'after_setup_theme' hook.
add_action( 'after_setup_theme', 'sfhr_theme_setup', 5 );

/**
 * Theme setup function.  This function adds support for theme features and defines the default theme
 * actions and filters.
 */
function sfhr_theme_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1280, 325, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array( 'primary' => __( 'Primary Menu', 'sfhr' ) ) );

	// Switch default core markup for search form, comment form, and comments
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	
	// enable the use of shortcodes inside sidebars
	add_filter('widget_text', 'do_shortcode');
	
	// define custom thumbnail sizes
	if ( function_exists( 'add_image_size' ) ) {
        add_image_size( 'b-thumb', 258, 160, true );
		add_image_size( 'pagetitle', 1560, 600, true );
    	add_image_size( 'team_member', 208, 250, true );
    }
    
    // adds page slug as body class
	function add_slug_body_class( $classes ) {
		global $post;
		if ( isset( $post ) ) {
			$classes[] = $post->post_type . '-' . $post->post_name;
		}
			return $classes;
		}
	add_filter( 'body_class', 'add_slug_body_class' );
	
	
	// load custom scripts & styles
	function sfhr_scripts() {
		// Load our main stylesheet.
		wp_enqueue_style( 'sfhr-style', get_stylesheet_uri() );
		// Load our main javascript file.
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'sfhr-script', get_template_directory_uri() . '/_/js/scripts.js', array(), '1.0.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'sfhr_scripts' );
	
	
	 // Register our sidebars and widgetized areas.
	function sfhr_widgets_init() {
		
		// default right sidebar
		register_sidebar( array(
			'name'          => 'Default Sidebar',
			'id'            => 'default_sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6>',
			'after_title'   => '</h6>',
		) );
		// right side navigation widget area
		register_sidebar( array(
			'name'          => 'Side Navigation',
			'id'            => 'nav_sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6>',
			'after_title'   => '</h6>',
		) );
		// blog widget area
		register_sidebar( array(
			'name'          => 'Blog Sidebar',
			'id'            => 'blog_sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6>',
			'after_title'   => '</h6>',
		) );

		// quick seach widget area
		register_sidebar( array(
			'name'          => 'Quick Search',
			'id'            => 'quick_search',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6>',
			'after_title'   => '</h6>',
		) );
	}
	add_action( 'widgets_init', 'sfhr_widgets_init' );
	
}
