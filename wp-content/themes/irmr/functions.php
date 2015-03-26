<?php
/**
 * @package    zd
 * @version    1.0.0
 * @author     Zen Den Web Design <http://zendenwebdesign.com/>
 */
 
// Get the template directory and make sure it has a trailing slash.
$zd_dir = trailingslashit( get_template_directory() );

// Load the dependencies & frameworks
require_once $zd_dir . 'lib/cmb2/init.php';
require_once $zd_dir . 'inc/metaboxes.php';
require_once $zd_dir . 'inc/shortcodes.php';
require_once $zd_dir . 'inc/custom-post-types.php';
require_once $zd_dir . 'inc/custom-taxonomies.php';
require_once $zd_dir . 'inc/numbered-pagination.php';
 
// Do theme setup on the 'after_setup_theme' hook.
add_action( 'after_setup_theme', 'zd_theme_setup', 5 );

/**
 * Theme setup function.  This function adds support for theme features and defines the default theme
 * actions and filters.
 */
function zd_theme_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in two locations, header and footer.
	register_nav_menus( array( 'primary' => __( 'Primary Menu', 'zd' ) ) );
	register_nav_menus( array( 'footer' => __( 'Footer Menu', 'zd' ) ) );

	// Switch default core markup for search form, comment form, and comments
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	
	// enable the use of shortcodes inside sidebars
	add_filter('widget_text', 'do_shortcode');
    
  // define custom thumbnail sizes
	if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'slideshow', 1280, 857, true );
  }
    
  // hide admin bar
  add_filter('show_admin_bar', '__return_false');
    
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
	function zd_scripts() {
		// Load our main stylesheet.
		wp_enqueue_style( 'zd-style', get_stylesheet_uri() );
		wp_enqueue_style( 'googlefonts', 'http://fonts.googleapis.com/css?family=Lato:100,200,300,400,700' );
		wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );

		// Load our main javascript file.
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'zd-script', get_template_directory_uri() . '/_/js/scripts.js', array(), '1.0.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'zd_scripts' );
	
	
	 // Register our sidebars and widgetized areas.
	function zd_widgets_init() {
		
		// left side navigation widget area
		register_sidebar( array(
			'name'          => 'Default Sidebar',
			'id'            => 'default',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		) );
		
		// left side navigation widget area
		register_sidebar( array(
			'name'          => 'Blog Sidebar',
			'id'            => 'blog',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		) );
		
	}
	add_action( 'widgets_init', 'zd_widgets_init' );
	
}
