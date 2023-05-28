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
define( 'DB_NAME', 'news' );

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
define( 'AUTH_KEY',         '/3MQ1r4n~{wWDm!/W`_[vw9F30I7&-kb:NBdd,i&<11f^D c6dQ^26FbK$5Ot?UL' );
define( 'SECURE_AUTH_KEY',  ';_r?}`(?=2 nl,!S;X5 x1b<0BT4]>S)&pT::q*N.)Z8VmZ[BYeoHJ|woqc[AC(o' );
define( 'LOGGED_IN_KEY',    'AzQwYFU;=~*>fGBXt/b%57)1!>(HP)GMC/^9[s@e$KvNer2624&|%+$A)]s:HoLE' );
define( 'NONCE_KEY',        'dsSm?KXI4p(Iey$MN5O)6&AKuwhWFU!h7e}CN[2a-;F``0N9KD4/34I}Ph0wJq,W' );
define( 'AUTH_SALT',        ' tK_( rXM$^VI8`j]M#wF:0fxw:?R0?@HgCDDbtJX~t0EAl!AH>n|FF Y5]gS{.P' );
define( 'SECURE_AUTH_SALT', '7S7IY|p.ZPt-<iMF6eLrwm2dX*#6lxsYyiM[;lWCZ^bbBTbb  Uar;LcWa=sv@KG' );
define( 'LOGGED_IN_SALT',   'jCNK7kQiXa5MAz$9x;EMgRH@[+A0w0S~$}I.l.yv_0LOthsC<#Iz9=t|k$[[Ge=a' );
define( 'NONCE_SALT',       '@m*W[H8G d ]8H#T4BAJg5tFja$Ox3J#,!Rhw)f7*.KWej )$ZX6#oS}3.`Jj+,^' );

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
