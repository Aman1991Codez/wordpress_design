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
define( 'DB_NAME', 'designon_dbdata' );

/** Database username */
define( 'DB_USER', 'designon_user' );

/** Database password */
define( 'DB_PASSWORD', 'mwb2hkVnLsB+' );

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
define( 'AUTH_KEY',         'N:{E9Tt_nc/Z,/Y-O_:TiiML jX)b)^kIHK[[*0%{bA,(f>FCGlOL-2Y#bJza,u}' );
define( 'SECURE_AUTH_KEY',  ')>N jrLcR}v$E{41Y6>$w,I(.x}Dcq0xh4DPlPWxVW^c/piN372gd-,EZ$>l|C%w' );
define( 'LOGGED_IN_KEY',    'v}+Hw6SHE,fygfY}V4xHMANjXI5f~Tz:cfd}|Y3d,Z^-XasO9(Gzd]LxhViPvNDC' );
define( 'NONCE_KEY',        '$CqYQ>G2>MP,;`MlhX|;2ku-|oSZil-6)xXfM@A*av>B,n7CB8RGDB+F4TW:?kEW' );
define( 'AUTH_SALT',        'R>LYGcW|xG?QG~v6n`C<us7`V>yf:UR8vJKcEVOYQtO^CVP~P#^#&9`C2JKX[1F~' );
define( 'SECURE_AUTH_SALT', 'z84XQ;Q;>p$EuE!z^K/#(gqkEZC,SX`g+5A8EVL;uNZh{LhQ.:YED47[NC~dx&+;' );
define( 'LOGGED_IN_SALT',   'gHe.EDSt(@pOiR{S7mhIBo<t&]Z/ iidN?Uwod]z}ZYES:uH]2>$uVUsD^#b.T_c' );
define( 'NONCE_SALT',       'HnKB~-NPn}4)LKCw&RWZK}b37FRy99%V2jgU+J?[sgY2Zn4]`$WC{s7aK0^Z#j:6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'DN_';

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
