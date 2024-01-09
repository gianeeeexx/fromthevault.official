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
define( 'DB_NAME', 'fromthevault' );

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
define( 'AUTH_KEY',         '>0GEMO#3j>#F_(,=z60`x</OouJf(VO00WGf5p_6eH>?i<&r[E4x`,.oKj-(!/#J' );
define( 'SECURE_AUTH_KEY',  ' H$EJPE%>Hj<R68vvW)<GS.wH5?Y4S$#O2n>K{qaV<:x4+4*:fu7nI>yurfgKP6w' );
define( 'LOGGED_IN_KEY',    '#a;wN;GF?3T/&#SY V.4wYB.4_[gb,X8FMW,nV%P4TL<W=b=QjTn2E0U4DCj#r</' );
define( 'NONCE_KEY',        's)%&uHzRwr>ZddH>)ATPco#@C_$a>%zCyMK$8(LwsJWDlLR>dtWB rwQ!Hyf%]3D' );
define( 'AUTH_SALT',        'o.S!QSZZcpAp%%`p iOMH3UU]^<96F8/Ia.aLIs2/Ym4b?C>E#@GE8u&;Gm^rYZg' );
define( 'SECURE_AUTH_SALT', 'LC0jIN30ec4E|Nh)NF0KEZuPr^&%)xdP](IO[U~+1OgG9R*7k#3u!XBCkpk8{hCJ' );
define( 'LOGGED_IN_SALT',   '^KzDFr_R*n|NLwRT#it3;:[ylZ0K(hx3WG2e^ngiz7w|CA*7TVPb[&u,ZToyVCbr' );
define( 'NONCE_SALT',       'l@:coZ={5.&J3$d=0U`}oF#zm>-djhnY[fmKkW{f{5!Dph4TDI|p;(2t:kxY*7U%' );

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
