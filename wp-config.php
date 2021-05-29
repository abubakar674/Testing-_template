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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywebsite5' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h:dCe-3{H~WBsVdkiqP)NS9gde:3,p%OO>yakdidW}vZ?X[=^x}U/r$?;*:Y2C7T' );
define( 'SECURE_AUTH_KEY',  'I_?#B^7/f?4VOGu8E,g7&ai 7N2HOdlReSpjFhq1 X1j]~F:78RFl_BNgixD!>$5' );
define( 'LOGGED_IN_KEY',    'w4tL Bb~3wtL3vBQ0^0eytecsUHuzxl,m+*E5Ai?7b76-?S|:>N@O Dq%KNFd;/<' );
define( 'NONCE_KEY',        'r#k8n8&m3@}V!s!1R~WjD+v@>OW`G_pS%^TO{zm4(_{m3%*Fh=~>PP{su$H$7axk' );
define( 'AUTH_SALT',        'v4U$h<v-J1s/x^IOLY{-EVb*vF!t~C*#X[wyuh~u~, f9r.s#_et`S:cKs+eoIih' );
define( 'SECURE_AUTH_SALT', '>~+ND*1Z{zy7&DJj<+z?GmGXbb4H+2K}M,iCM*+^#O(2 @E}3.j#a[ OfvR~L#[r' );
define( 'LOGGED_IN_SALT',   '[_4Ir().;l>q^_q_$tPVd# 72|#fB*2x1wMO=9#(c*mp`#Z@;+GnWg/2?odCWn=%' );
define( 'NONCE_SALT',       'CutjB]nb :I?,Suti00wQ[=4GV)0c/[m!C,u_)>tjwU*/I+VN,@;8@yoAozM!E09' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
