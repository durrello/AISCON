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
define( 'DB_NAME', 'AISCON_Resources' );

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
define( 'AUTH_KEY',         'LlD<P:3/qL%*-&3>k_O,Q`oY>|uw4_t^8mLwl_4$8UI(esA,2NK9F}foJ:0$QMcc' );
define( 'SECURE_AUTH_KEY',  'nP]n.D)%{UwghI{*SO1_d^;fkXQD_){KcB^zP^_6_~TVJG<KjU;:ol3m]OjJSLGQ' );
define( 'LOGGED_IN_KEY',    '`c+OHd&5xrm[J]sB>nlf?F!YV*wemuTMN7s:gjhN7oXjR6ht&t9!1mw;*Y}eN(Sc' );
define( 'NONCE_KEY',        'PPw43^|mss1Ts%U]:*J9dMJvO9n!J.F+8(x!(oQwy0_X|JbWH4`h!)4?.?MCSSKK' );
define( 'AUTH_SALT',        'aWR-@EdfZ}rDT?!J!KlN`y(UY;%*REtPwmo^RQPKUX2fHP%v-h}-{Q1c*N/}ZGN#' );
define( 'SECURE_AUTH_SALT', 'i=eGLU/T`yfzj=KD*tFK @+3J$]h5!{5X/sTJz!SSRrm6L3U$jE7<2Fp9OA[Wxv9' );
define( 'LOGGED_IN_SALT',   '!4f<07Tc03`!=?&bDxtiCJC=g:CaHf]gI]giWQJ6WieX,FON8#Fr}>*F?beX9I:Z' );
define( 'NONCE_SALT',       ']@$g^R[ItkBM$)wFLc6uDS~_sXZOc,<l5_fOdP5OV%a!u3gzjsI0$;TC[`fDv4a.' );

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
