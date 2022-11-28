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
define( 'DB_NAME', 'design_one' );

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
define( 'AUTH_KEY',         ':^}B-,v[/`2q7Eo=@?7KT6wph2RfDEB>?[Qxom37DTT*bH7k)hjlcNA5_:sYT>87' );
define( 'SECURE_AUTH_KEY',  'N$OjDXrX+(k-vftPXnG+tRuIE7c/RZ_Tu=$R4P>ZnF>0o|/hF9JN.F+2RY%j6HKe' );
define( 'LOGGED_IN_KEY',    '8|;an2 F$z10wO#z;4OdRqFnk9y6x)x}gyP/MvJ,TNRZ,1]TlX9m;>%KDd2;]Qc4' );
define( 'NONCE_KEY',        '1hTF,of3<( eHSdo4J^z0<Dc3TvACpR|E (WutS^3-b=TU i/$s]i#~^|?8*~u~#' );
define( 'AUTH_SALT',        'a(AK-v?Sj+R/PdqW!M*~*[V_r#/F6McX`vuP3QBTRP13%W7#5sa|LMEK]-.m>pCo' );
define( 'SECURE_AUTH_SALT', '1~l6 /VwE@bD)7]Q^#R?D>ax%6x*2/uY:vG$6CJO$V3VKFi9,WcQg>bsu9ldPq6k' );
define( 'LOGGED_IN_SALT',   '68uK!-Im`b7h1tBA[-_F@F{u{KJY=COeqAlfK^9Q I},Sdr/Sf.dHuEt,j$^6$a#' );
define( 'NONCE_SALT',       ' Kp;<CVOiPr9O8iEU)C_eV7q*T?/0L_snB(j7QTTn)-<<dM9Y=K.F*C7=f;A<Q|X' );

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
