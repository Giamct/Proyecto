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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' .jp;fap7.YD[Ym9fLVI;_U^d#`d.$-tP@(D1pPr(GD(ddC:9+&5dfHfVdsy_m+:' );
define( 'SECURE_AUTH_KEY',  '+{F-wDjD!)KG[;C>v~MDp,fF]K}WX<10xO?-^@I]p(v_OUbZRmfs{]%.0HF.<h9$' );
define( 'LOGGED_IN_KEY',    'dB*8l^wGD0gn?%s`!LwN3Q#9]Lcg:K]uH=7a;#!].k+I^|vXwk(nO3]_2 9ppAV5' );
define( 'NONCE_KEY',        'i@lMV|uI@R]=:q})|aV++H*JjVn@*4QjRCaMBvUL-WEJK{K~}CrT[eX=_Q3B ZxK' );
define( 'AUTH_SALT',        'b k8&h)93~_3pxu=rqQi.<l<>zvYsC<FPq8]pxPrCo+zvFlB(/`mHOpcS<?ZJ?vV' );
define( 'SECURE_AUTH_SALT', '?#<A=_MLo?LIHHr^F {bz}=(As%g-k(l80/hi:S&@tj.|~hTJv44s!J8jJhupBSh' );
define( 'LOGGED_IN_SALT',   '6//!- v-6a?-2.d-L{}=+ym5qV&&Czq+ *{|a9N;V$HAoA`r+gap`@ubw*()[?Lf' );
define( 'NONCE_SALT',       'sUKyv/Q=#cgsGO?%[%`aG2t~?owHY^y+moBs]$$&O8(e!H6HvF{27@8@Wv$RZHG4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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
