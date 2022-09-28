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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '~:8SbQWujd!On]p-L,tD0K`*y)UIR3E>LVLI<~VTYeDmyi];V?ZS~2PEGx^6x@M#' );
define( 'SECURE_AUTH_KEY',  'yb/:O}~s7.yp~ew?dquuR4U%*V#q+J#iCQiLXbSKl:;9/*Y(Z0bhVo_0|<5;%[qN' );
define( 'LOGGED_IN_KEY',    'pnPM6?Lm}NSaR;>dIO$W3n$fO6kw&d.|$yQ{PQ&GQ[CvPs]@p-cC$ZiWgBs4.pM_' );
define( 'NONCE_KEY',        '.P WcUP5*T1P!b37/m-B^jLS-8PlJ??Pl1Z+7)I-NQ;~%*n,M7)vQ9cO]v5vvp i' );
define( 'AUTH_SALT',        '2Md1/j<pf[pWvrT),PlAT3;1D5q5Gn{I^Zu31*.56ww{a$v_;,noj?|!H/jkN+5=' );
define( 'SECURE_AUTH_SALT', '3paDfUAkP4++^{wFJj$v,Ci/@nfDZ4L`4#fdZacmjJa0s-&FF 1PHqVybkF99bf@' );
define( 'LOGGED_IN_SALT',   ',^M!qReJ7_LR/CXf_0@FG{0mCe](z+9yirZO?cZy}9iD)oB}KEBD6:H3wUN`b2hF' );
define( 'NONCE_SALT',       'wm*}&}cV}T=_UY$W^9LLxP ?:]U[-14I]j[fDu]q0gBVaBfD1eT{zLB7GKV8QI>D' );

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
// define( 'WP_DEBUG', true );
// define( 'WP_DEBUG_LOG', true );
// define( 'WP_DEBUG_DISPLAY', true );
// @ini_set('display_errors', 0);
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
// define( 'WP_MEMORY_LIMIT', '256M' );