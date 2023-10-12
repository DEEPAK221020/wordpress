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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'deepak_webart' );

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
define( 'AUTH_KEY',         'X>Hb+u>;pPnadTN`R^l~bL5Kx]L+HrYW<0~:wT{n,b2$TV-R/M5EtKkI--sFAe^#' );
define( 'SECURE_AUTH_KEY',  'S`~vuPVq {L:6rrE`RW6qu6AH[*$ByNAy}kL>q}HDSRK8>i)je7u4e6rN0Im[N<n' );
define( 'LOGGED_IN_KEY',    '/@]a*}+Z{OwOS70Ha|s$a/3nE#xgWsGFQR!GI&%X_Uh<3&Mfd$&EVeGW^,():F<{' );
define( 'NONCE_KEY',        ']eLK:ZF%53!M}93N:::,@<]AJ&p.[(;2LVbKNdd-MJ?3QYx8VP0zej4>Df99I<9<' );
define( 'AUTH_SALT',        'nV~Yp7]UK&Gi_~2g#Yc#bacCHj}(}<&GbX5_J=8u^[L!MqtV!u0Vnz!bXZ!PLx&g' );
define( 'SECURE_AUTH_SALT', ':IFK.PdsM+`@f;[91,wu3vk@,uu%mdoF]4<h&SpXm)4><H/=07RZ{fn}k7z6*=.}' );
define( 'LOGGED_IN_SALT',   '`]wyr_`rwd<@BX7ISMBp68ut_Lzs/::QvRY9[h0+d#yc2]1iAmEpTl9~GhorT~A)' );
define( 'NONCE_SALT',       'ThpSAF|]NOi|?>=%]E(}GS5=9{FhV^I6PBW{.I$S G+fFw |7v+Lvz<#)}+@L1ty' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
