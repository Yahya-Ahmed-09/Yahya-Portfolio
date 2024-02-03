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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'S$5Kny78}{lo6L04PU>~32,iyxBBbT!,38yEkn^BbLh+@9r:QjX9~K)}13XB:HuA' );
define( 'SECURE_AUTH_KEY',  'dsevH,7EHCCl3C$C;Wenmo~@u$|50&/r,*<pAp5:yiIN6wD<SdIx+dYD=+],$a@t' );
define( 'LOGGED_IN_KEY',    'q- X_y<d8(9AX;QV9r`1of+Z2T+{ u69h%W y~2#N7kqke7zBIePh_Ta^|.gmbZB' );
define( 'NONCE_KEY',        '7~0I8tLHUoi*:}!a|v%hc`~Ntnc@T!59MWGy0[+6vdlNx`MgB5A^Ce]tz@,,nsI]' );
define( 'AUTH_SALT',        '^H(zA9,Ir1o[|gPb$_.O%+&jie!-2@[6gn8$a;;(^+DuU9<zjnppGPM+L.6^l1s-' );
define( 'SECURE_AUTH_SALT', 'SnFT&LQC7=VYJ_Rtm`+x.yN|4Hp@I4-g>QLf,TlMOcsqm`F,<7<ha@`C;?F#N%,p' );
define( 'LOGGED_IN_SALT',   '8:Kj$PR5Uc7^mgs>0D(CJo/]L#k?.|2n2MH6#-KDWN8>t]|MS,)H}E.;UG>tuqN:' );
define( 'NONCE_SALT',       'EB7MLqI^D0~|5}5TX.Dr6XBig4_[WN`_oyi{ID~)?8o)JaKv3+lBk48xz6_*&(4M' );

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
