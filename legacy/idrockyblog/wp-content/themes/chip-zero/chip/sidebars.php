<?php

/**

* Chip Sidebars

*/



function chip_zero_sidebars() {

	

	register_sidebar(array(

		'name'			=>	'Top Right Sidebar',

		'id'			=>	'top-right-sidebar',

		'before_widget'	=>	'<div id="%1$s" class="sidebarbox sidebarboxw1 chipstyle1 %2$s"><div class="sidebarboxw1data">',

		'after_widget'	=>	'<br class="clear" /></div></div>',

		'before_title'	=>	'<h2 class="white margin10b">',

		'after_title'	=> '</h2>',

	));

	

	register_sidebar( array (

		'name'			=>	'Footer Navigation Sidebar',

		'id'			=>	'footer-navigation-sidebar',

		'description'	=>	'Add Text Widget to display links in footer. Example: <ul><li><a href="#">About Us</a></li></ul>',

		'before_widget'	=>	'<div id="%1$s" class="margin10b chiplisth1 font11 %2$s">',

		'after_widget'	=>	'<br class="clear" /></div>',

		'before_title'	=>	'<h2 class="blue chipstyle3 padding5 margin10b">',

		'after_title'	=> '</h2>',

	) );	

	

}



?>