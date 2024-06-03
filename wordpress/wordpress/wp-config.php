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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rafia_wordpress' );

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
define( 'AUTH_KEY',         '|,R  C[*4;]F0C0 [6zUesFF<C>(UHMv6]}X1BLTdNw3GX6+}~6y1Mp+WyJfn|@r' );
define( 'SECURE_AUTH_KEY',  'j}ou1CbchYzp_|SRx2tcMY,A_8;-TH2{0AOOk3u<G$WkHX;?&q_Dj:;bcztI0gB2' );
define( 'LOGGED_IN_KEY',    '2jP2OtT%Phd$j29d:GsbDM3):v!-uN>c6H_/tJS67aG8t59Pkpqr+4Vo7:pL+`{O' );
define( 'NONCE_KEY',        'U5e(a]:x5-R>fc$:b{$!Kyk!.nk/hADw`XTTWuok7@zTkGiPjE9qM1.5DFPCm,1=' );
define( 'AUTH_SALT',        'zT_=>85{nlRk4rf$3ijJQPPuE*ZQR[SPYc :FWCFola, DQ?%hU]ylD1cF{7hU0(' );
define( 'SECURE_AUTH_SALT', 'lq~O&SE@CHXI>Y6N ^E`i5vsF$q:FjvQ;M.M4abHMXt~:PTletr$2UtAqTBy2:Ct' );
define( 'LOGGED_IN_SALT',   ':]{^X;*lQ?(wv2QI9t~tkA[/,x-zmdI5}t:SW=3zNL0dYyHz77/Qt}$Bd-9VobR[' );
define( 'NONCE_SALT',       'f$oL,ITmg2&aq&MZb4)6)zi[4{59-TGyaD/isjS<M1knY%$qLul7R`XHSvvC; &[' );

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
