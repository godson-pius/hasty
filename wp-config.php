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
define( 'DB_NAME', 'hasty' );

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
define( 'AUTH_KEY',         '=DsZXzw~eJ|%qZ:Zz5[5}zV%BprTJs:$JE~p:Po/K6DBi#+WKk|Eq&r75$CX)Smb' );
define( 'SECURE_AUTH_KEY',  '[x3tY]LnfA%[f5}Ve&h?8E32]<,7T8:lCPBL]xHs}~@cfc?4x,e3RQ`%|^68/oUL' );
define( 'LOGGED_IN_KEY',    'oJ!u :(5Amjz0IPey9-4YV(`:9Mjn::^s`,!1A^+5Qh<mOG&wl+E(y>{u15tPLxL' );
define( 'NONCE_KEY',        '& O.T^$dyl!J?qn)3n%ryiRMuK~vd9Iu[aq&R~fGh^?8LAfjVcojhOzs^p^v~Nsw' );
define( 'AUTH_SALT',        'l<2nZ`0PyR]c9*:2sZHuY*C;PC8!vH,[hOqOpw}jf$- =gZPjw9UGEqJ]?~QM WW' );
define( 'SECURE_AUTH_SALT', '81Ihf#)LeP]>Mj-P/en6;h >S}Z/KwdgS}My%o@9x]uU7c7n?6t)-@k&<?U4bJHM' );
define( 'LOGGED_IN_SALT',   'j=+mdZe!J<B4M%7<JQad.W6dodu)10l)J33I+G*N{kJO)Vd_!sht/qHIcs}LON0N' );
define( 'NONCE_SALT',       'a,J@{SM/ EGmk5a*~yQk[)nf]MvTD6D8}tYRQvA@[*4)DoE}2igr9g/zq7`$x1DU' );

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
