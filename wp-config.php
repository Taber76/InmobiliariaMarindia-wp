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
define( 'DB_NAME', 'wpinmobiliariamarindia' );

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
define( 'AUTH_KEY',         'sxjj-(2Edjal-`CY#lcjg66PgN& f{drJ,4ms_ydZK?)J5yZ?d[qPm_2+$;Sq+6I' );
define( 'SECURE_AUTH_KEY',  '/3vc.JlaMCA6>dOl2%a9n86qj*gyJ8G{Ql9~[i+U#&@WUS!8=0+iW>Mj(hIBUltQ' );
define( 'LOGGED_IN_KEY',    '5c<2Pm`h^e(Ll7U,>ZcJOIho~;UaIO3*Sp2zQqR*4jfWJ!f*j4fKcHmEI%S%4]Km' );
define( 'NONCE_KEY',        ':$WMo:IZZk9@!>F!j-0A9m;#(?]$[,v.Z[G5H6b#kQ|/E&`DXA,UhrkGA*,E*C+`' );
define( 'AUTH_SALT',        'Xm9vGy:DThO*|qa8omXWKp?tH2#uO$.w#[![}zybMARw!JDu*3pDiPGs4:8I1[DZ' );
define( 'SECURE_AUTH_SALT', 'B30BBcHtP&=%g3J1k~P0XGwp#ilflKM?<`I]).]ES,R?md]R7eTHVAwkL}qdfx20' );
define( 'LOGGED_IN_SALT',   '@#9=(aSG.w6,?RW|%:96>CrcO==}YJ(XW)>}P==#Qxw]yw40reGrcb:QTv?T%eBo' );
define( 'NONCE_SALT',       'E?sah[szD>^ipL+Xi7M<`>JqIOHBIg[{dt`FuYBA~l+GA%W,z]%Ad|]GRlU`#814' );

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
