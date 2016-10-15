<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'backend');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'a{J7SxVoO`C*6_,QTBmoN%~Aozq7G0o??*Ig/xA*L{L_lCzmU_dLv-= eCToky,)');
define('SECURE_AUTH_KEY',  '>;#=ly`F8k+]C]m;2Oz.Tki]+!Z?h$jEd~?!G~zRg)#qW.fzA rSQXW.F%(;0;J;');
define('LOGGED_IN_KEY',    'FXSO1RLaO5mBh+3L|-<GRSm?G=YDq8m(:Kk<i;7KmI~G&OQ]=ydTxuPUGPu6pZMe');
define('NONCE_KEY',        'G,4k4~gn1!`fGSX8JH4#h>0Z&w4IO_-hdMlh 8$_9K%8v&bZ85)U{bZk)#toobU$');
define('AUTH_SALT',        '>N^`E_z :XI5[t63[eF]9 ~tR*2#AiVJ]T3@f0ZRKc~tkKSXKm!1~55;]{ -#CGY');
define('SECURE_AUTH_SALT', 'S-nW~Xt1Si[@4E:3)8jX,Tq0i<wz18SGIwGSG+fb!Af{1U8;/!<{%H+PvQljIo% ');
define('LOGGED_IN_SALT',   'K{Dk6ARg.mpi#!&[TF,22|Z*#X6SWh NKxVyo{8V$oqH4^_Bo4Ypwdb8,LXg#L7{');
define('NONCE_SALT',       'pb:^xczrT,V.V8*D, r&<^)G*QS3@N9_xKs5/TSB mw@78Pg#-*=E@0MZf7~+GHi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tb_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
