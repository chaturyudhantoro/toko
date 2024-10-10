<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'toko' );

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
define( 'AUTH_KEY',         'OLE{uP@KDczb,2OVx31d:+|rqH3y8amQ<<wAJDT)c(ZlL$dLAbbte3q26DKH|!3B' );
define( 'SECURE_AUTH_KEY',  'X$k>iZPlT?No#aw~o~GX)TCu;M%GWpgX2KkPTzv=5k{w RgjhO9crG>?By2v;>n?' );
define( 'LOGGED_IN_KEY',    'CDw}9EL1Fg{+B$&hVBir81~KSlS=HT}L7S>ATr(**8jXl~ Seb4LG@4xFrv|1<PT' );
define( 'NONCE_KEY',        'LYQ f}U_|Y,S Ix<l{#eze8k;jy%/@0T<CJ%>!QM97mlm}zit|7^W^^1kEcf`75[' );
define( 'AUTH_SALT',        '<Iq)i]H$o|(fgI|z>m,JcOR>NWZ.SCEy>(Ypmk!hbtc}:7LW7bfhd_9sYpC2OCjm' );
define( 'SECURE_AUTH_SALT', 'g_rO7()Wm6CYn{q1eK!=t=sC4B#3hme}dAAx(GhXWJlww{<syuW,}Q&Eh(!3?b%Q' );
define( 'LOGGED_IN_SALT',   'mB/l&#XX~[A}|eb+pfb9dZ7eI.WmQ:kjZBTXrHHKxl&i^_)}wF2ib,gND.O,/HB)' );
define( 'NONCE_SALT',       '@aNbCA5Y=Aeu7w5b.e#P6?45wJqxe]%3,C)^kG)#GAdRX+x|25KgCg}6DS%Mu][l' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
