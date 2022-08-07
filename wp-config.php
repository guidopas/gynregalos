<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gynregalos_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gZ)@3@<.$n FK+u[u<2uyNmc)y*2Z5^W>1d12`U6~3HMlTiBQ308p+Xpib0er+_?' );
define( 'SECURE_AUTH_KEY',  '!9C>?3:$z8.G<C6AU=Ia#U{^x7-Eo<C5o}[>t^fK!,wKAQ44<B1wlmB;fv3C^ypl' );
define( 'LOGGED_IN_KEY',    'f5&e#Q0,u~&^2N`T?b+&!}C=![nre^;Fb#^2P!+JA(4B+B57]?;/t,*4GxP8W7#/' );
define( 'NONCE_KEY',        'nrCR$H])CpR128ok^nt*r6EvFMAKXXzvCHY9bjvOGM[U&383etj$})jc,//7X|F4' );
define( 'AUTH_SALT',        '7vAisvFo6y7Z[cP>#i$0wfv]v <I1ny%!Za<Jg]ONH>xV>BTS` .#5cm(oj4jI-X' );
define( 'SECURE_AUTH_SALT', 'rKaf:2tK&Tj`Z$z;04T0mF{/<WfgA^-8gr3#60~FLbPuavDF#xhr0it0GQ?mHix_' );
define( 'LOGGED_IN_SALT',   '+aWqT|xxg &P4r?yaU[5y2/rrHdQ2=!iU)]gbrD~)Olid.wpapQ<FR6~b>TK!,l4' );
define( 'NONCE_SALT',       '4CBBe,|l:pW!:UX^Tj+u}3W.~M.>xANRm:7H`zWp^mxhZJ>tVIG!1{9_R_gAm18G' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
