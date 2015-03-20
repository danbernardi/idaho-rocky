<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<section id="pagewrap">
	<header>
		<div class="row">
			<div class="logo">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/img/sfhr_logo@2x.png'; ?>" alt="San Francisco High Rises" /></a>
			</div>
			<nav>
				<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
			</nav>
		</div>
		<div class="quick-search">
			<div class="search"><i class="fa fa-search"></i>Quick Search</div>
			<div class="search-dropdown"><div class="row"><?php dynamic_sidebar( 'quick_search' ); ?></div></div>
		</div>
		
	</header>