<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'irmr');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hrc?+<D+y;5E7VR)LcV;E8aR.:fM;`EXk/1Av[eO.h2;F4A`}tyf(QjEJrBto4^R');
define('SECURE_AUTH_KEY',  'WgAVuxa <`09I&7|zGnLSNhqq_Nngf+=!)k[h{R?7+.l}pB)cf=f@??yyya}+7!$');
define('LOGGED_IN_KEY',    '+y#]<olx6f/_[N|lHA^v;/+CeE-w5 |hruA1w;0ED-Y/JGE1J;J(z+PU5c}9}Bew');
define('NONCE_KEY',        '0bw^Z3p#+%VrCZJHxzqEX&L8;{T(Eu^p 8#e)} l=vGXI[b5N9[@;0f Cd/)z/EG');
define('AUTH_SALT',        'cyjKO+YQQx[C5euAuG/ecx6BEQ@9Lxup$z0b7]-pMc&:Tl]NV {|fv WZuD*3Hz+');
define('SECURE_AUTH_SALT', '{Be&MTu#{B,lT;+NA3%5zEu8+*_E)eL[=3*S$AiztjMW?$1!+.|PzV~O,c:HD^o5');
define('LOGGED_IN_SALT',   ';9FN]LK=,+rudOTCe@|x!=)jw;:4VcG:lIND|D*8Y79x]IY~/io&g4&]R~}~CR,1');
define('NONCE_SALT',       '*r.K)W`Qgj2JVxYQ+bzE>|BBtj|VlPh8*wr$7^S>Yk3fHIc:A:$-?OW?cdgSP-Y+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'irmr_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
