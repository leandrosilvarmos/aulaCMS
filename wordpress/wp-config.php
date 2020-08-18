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
define( 'DB_NAME', 'aula2_17_08' );

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
define( 'AUTH_KEY',         '!SQ*dFe?f/&,`>]#Kf8cdqG/PKhDcvmm:nV #,HL8C]/U^[uqn2kt`?(Xyp4Xc-{' );
define( 'SECURE_AUTH_KEY',  '8D|iN9rL+jHKM=c@#:X*qHc-i4=fs$skX|BuIDP<P+32eR*[^L;?{]c8RwB.K#6|' );
define( 'LOGGED_IN_KEY',    'U8Q%wh<-TwHD~lz;8S8~^hoft.Rw0($hD8S=R1OPr}?EQRlBwHR)pXuJZSS6|E_6' );
define( 'NONCE_KEY',        'n;75^`6?{5%BFV.X8~RJHe7x+)9=u7JL&}OOF9oK.yM2%4O G XxOxUrz9ByN+P8' );
define( 'AUTH_SALT',        'tTy#:xdFh>EYb2u2HaE<0cCTu`2}u?M>:*4lM!xj4X)ynyTGfk6WG+9al@^/qLxg' );
define( 'SECURE_AUTH_SALT', '(H .|s}(8$.Dw&YF3sSn:%x*e~gg_|8*{(63K8UISr1-_zqBe;hnz*aZU|On]E/g' );
define( 'LOGGED_IN_SALT',   'MnH`ft|WSP})z]o[BOIyMF0k6S6x(S~^@inta:AL!bj/6#L9_Gx,S/gZ`Q@>V!m1' );
define( 'NONCE_SALT',       '3t,ru]rM:?iJv]r{y_o{RH{P6&7vVt+vXFKw%wB{$t1OCg9 ;#o,2J3 ar=b}3RX' );

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
