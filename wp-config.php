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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'dhhgk23072001' );

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
define( 'AUTH_KEY',         't74BN^+pm-U{yK9TL_?l`v20=$3[ku*i:f~!?J(z$}nYjnKVnJu2bZa&%mi4XB-U' );
define( 'SECURE_AUTH_KEY',  '?F,TAb&F-mLE{p/`h +mvvE]HkUBku=kCBkP^xooVtQct;+bm9O,2.>L6jIh67a|' );
define( 'LOGGED_IN_KEY',    '0h0{2vc%IZw =6>K*3V.]ms|*WZ{e9Hc(6DqP_vGCL9&9wKE2V]8*u W[`{xuT$D' );
define( 'NONCE_KEY',        'xQo5)2Pv-=-RyQE1TB-TjhnqyU_oC~ BXDR76X0^0UDNm{2z2](s:R(`T@M/-09G' );
define( 'AUTH_SALT',        'Zs[6Sqhk~Cvom V%I,Y-]]jLrGl*:B@W[iZC)oj;3K@m-8~CR5(9zdl]?|y:ad }' );
define( 'SECURE_AUTH_SALT', 'O2bSF{{%]n@t`M)!tPK(Jd(4v*LDN:FI$),-m#njdt=z3#U$AQsPlfsB8s@yuCHC' );
define( 'LOGGED_IN_SALT',   '#]ttqHM-PTg|2fGD)9PM;hG_}MfqQH>xFcVRjA!c20y7D/bkAXwJsYqhOt>dd>Cd' );
define( 'NONCE_SALT',       'v}5Q;h}v&9e1`Mr`KLU@8i&+d~&ApqhK~HOE+Dc`Q`~lv^uh%R=)m<GWho_::jmS' );

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
