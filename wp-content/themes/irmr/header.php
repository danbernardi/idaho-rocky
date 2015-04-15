<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo of_get_option( 'zd_favicon'); ?>" />
  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-61697632-1', 'auto');
      ga('send', 'pageview');
  </script>
  
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <noscript>
    <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" 
    src="//www.googleadservices.com/pagead/conversion/954339216/?label=XQFWCMOkn1oQkJ-IxwM&guid=ON&script=0"/>
    </div>
  </noscript>
<section id="pagewrap">
	<header>
		<div class="row">
			<div class="logo">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo of_get_option( 'zd_logo'); ?>" alt="Idaho Rocky Mount Ranch" /></a>
			</div>
			<nav>
				<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
			</nav>
			<div class="mobmenu-trigger"><a href="#mobmenu"><i class="fa fa-bars"></i><span>MENU</span></a></div>
			<div id="mobmenu">
			  <?php wp_nav_menu( array('theme_location'  => 'responsive') ); ?>
			</div>
		</div>
	</header>