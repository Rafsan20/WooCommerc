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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '+e2IYd^15 1z$0K03(?ARAn#iwJlLB4Y-:j#[ri,y^@F/Jqz?%Ae#.S#-_K glZM' );
define( 'SECURE_AUTH_KEY',  'U{$T-8]-Qg,&<Ehh)=N-5UEaB+(qk7}YFh,}_Q#s(!?8,/vPJD_c;VV+N> C9oic' );
define( 'LOGGED_IN_KEY',    'Sxy!)|R Tt$5[83ZYM+_@YwC#2ZYZM<!Vzi} vDU|G|nDBfJ)qL`99}+|-shCjLi' );
define( 'NONCE_KEY',        'taP.@&&(fgUy0nB`$BD75V}7lj_#S!0Z%IRRL59V,>a3C<&BzOR3Au=pua?NiP#;' );
define( 'AUTH_SALT',        'EN/>(Dl{W%Q$gA~OHD3l{o[o2V]B!`NN6N0=x[mh dX!ivg fzt;jCA})!T+6i{V' );
define( 'SECURE_AUTH_SALT', '9MaU.RTtYM9;bDScqMvc7]W6IIN:?{:J4.Y~dI*@_Ah.~hwL,a>< ]i iNJM_$63' );
define( 'LOGGED_IN_SALT',   'Sr?=TK=-dN^wr1+cfW*6_ZL|UovQL=ENCu}PohqRQ[DUW%cp9/-@-nK]ms{J<8y^' );
define( 'NONCE_SALT',       'y}F:];3?VGhl*q?GCvu&sbG:zT,zyx)p=o,XWscnokBkL(LfvM Mq+hE$U*L_0#<' );

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
