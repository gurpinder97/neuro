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
define( 'DB_NAME', 'website' );

/** MySQL database username */
define( 'DB_USER', 'website' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '*6g!!Z*R|tvnfq!4l])2+NUn.>}V}cBEF@wB:fH%#W`C<_f]cb,}`T8*x1SW-o1W' );
define( 'SECURE_AUTH_KEY',  '-qy&XLzW$%:(#k6Uu,,|/s8bN=3,5Q:LQ0mWWCE0O}1%x.3]b1[hLI]`@|q}]fwW' );
define( 'LOGGED_IN_KEY',    '@DU73y}ZGdMIDVV=bwBsKnot=0|XAQC9t0GwcqYbZ>,<{.}U#+%q*}p5y/I+f}xs' );
define( 'NONCE_KEY',        'V;z;b%EkTJTW,iS>x,z~}&*k+am<^Xo@_pDa7~?r7*BX`z_ss_Gi,1.x|p;|Px1 ' );
define( 'AUTH_SALT',        '$J/RfN])`Y0!.hY;)`yE{k_n4$Lr)%DGYkXM.cG&oEVe)zdy9XH(o)8a`Wd<Q.{I' );
define( 'SECURE_AUTH_SALT', 'uzGsipI-bIOa(a{$]ty4S@-=3j!BpKqmZuSD4,Z.uB?>fLdJDB 3]?bDcGZC+1gC' );
define( 'LOGGED_IN_SALT',   'Vf{;U4PEZ%u`>-{9%fscoi 9k.R-`0&tWfMG;=Kf^:((1d5?P_Lka8e0%}sQYf4H' );
define( 'NONCE_SALT',       'qMC{Twk_Ro6{65_MiJeAD]kZ#hMwtgk]08eyf=b`<}XJEz!e<R;Ap`Ty<ZG|a})e' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_web';

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
