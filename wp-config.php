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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '_A5c?izzz8Q}_w-3.JX>Zt!86,RExXp@Yp9T!-Xv9?W$+80<,^PAKY#5]H##r@~7' );
define( 'SECURE_AUTH_KEY',   'rgy>I]v^Jr~ldDn}Ie<u:M7CLmEZE8xl6{Cip|GeL{qaS<h{{CQ?vMK{rCltGnOH' );
define( 'LOGGED_IN_KEY',     'Op4L(m+09Bv*W9u26t(XF*]V>>&a,(:i;`=VJx],;XH&lUL%|Pfp2,<4zP.6hT4>' );
define( 'NONCE_KEY',         'DhnPq[euDR/B#^SKe9jv1x9tQHyN$dI?r4J*nTr>zUj}iN#B$]@2t>]`FN7.=oXL' );
define( 'AUTH_SALT',         '^C24FX//8GkMb90S!Mrud3|X,Edip5Ni /z9%C*A(&;Km~OES<!i~PHj%su.3mam' );
define( 'SECURE_AUTH_SALT',  '*@Jl{fLAi^}&,pbxb0B(VIgYK@51_Lt;k|X64!K$NC{#4|%1)LaI#O|f`J*^|l]/' );
define( 'LOGGED_IN_SALT',    'Y9`>RA=#I%sHIa]pW[W0C7(3#(ZK~as*HJCxm::{N)$Qh,jDmnl7!rGGq)0[&#0!' );
define( 'NONCE_SALT',        '2jDW& _6hZ6LwPV?O:wr(ZY<XB1tX/MpCGHJ`in7Y%/sV)4:0(#Dt.9+$IQVdFO|' );
define( 'WP_CACHE_KEY_SALT', 'qmNJseg$w!5P{V35BL|&05%SEuGcjKy,5#-SxyH^cs%gI|:ms <sf#D2|j9xAY $' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
