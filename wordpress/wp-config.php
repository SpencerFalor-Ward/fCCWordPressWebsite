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
define( 'DB_NAME', 'fccwordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'Z%W0Rz^F9H}Vvynb7Zmh`e{+!<sSBD6fXqUG()3,yuxf>{7598/7,F4UHho!,J)*' );
define( 'SECURE_AUTH_KEY',  '{5cU{tBp{@y.;7Pd/h2sseqWC6ZW3HG7,QVbvH=7jQJ&gL16/!!QRp5I.+BlLWsg' );
define( 'LOGGED_IN_KEY',    'WO>C1hYh8k~j630:p]cbXq&PI%6NPzKXS;n9bO>ag05X[>cZCE{#;M5tT;>Zr&%.' );
define( 'NONCE_KEY',        '84Gu#0n#3*2.4^Pu;@OfZ EHg:dQR%SDxadlIK4CwOCmWe, E;iJ28$SSz{unq/;' );
define( 'AUTH_SALT',        'oq&Deg4l EfbZS%~|Eo/7y<cg46b%CGWL[BErGLG&n3-|KIbWVa<m@crpZNnjU)+' );
define( 'SECURE_AUTH_SALT', 'Z+@E+UGnZB]CQM%(K]9qi3. M<?P}dOw4?m3Oy@Dn6ze #$R-2|=jbB^d.hg3S$j' );
define( 'LOGGED_IN_SALT',   '=16%1J9dmk>@m2dc53]$(G RXtkrwn|^dIk{45AY[gbJwzrkZ,=E e%50nHN|wHK' );
define( 'NONCE_SALT',       '{~R%v%-s /b4TFv/1oOy/YYxT<f,UR9bjD:W^>Fe.gW*[Xw3f-ps(:SV9.bM!vBg' );

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
