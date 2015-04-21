<?php

/**

* Global Constants

*/



define('CHIP_ZERO_HOME'		, home_url() . "/");



define('CHIP_ZERO_ABSPATH'	, TEMPLATEPATH . "/");

define('CHIP_ZERO_URLPATH'	, get_template_directory_uri() . "/");



/**

* Chip Directory Constant

* FSROOT set to relative in favour of WP locate_template

*/



define('CHIP_ZERO_FSROOT'	, 'chip/');

define('CHIP_ZERO_WSROOT'	, CHIP_ZERO_URLPATH . 'chip/');



?>