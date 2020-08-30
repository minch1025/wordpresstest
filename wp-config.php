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
define( 'DB_NAME', 'GourmetTNC' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '7]/6$Dwxebd#RRBa=3~L})ftb1Mz{`I1jz!-2|h^Kgy9:7-[jLq{~%K0fQ|x]d8J');
define('SECURE_AUTH_KEY',  'c!]x<LQBz;J_9j)zk59+--UdMZ]Mg&+/n[wRZ1@Ucv(S:jvp-SqyZO)Ey|mX0A=X');
define('LOGGED_IN_KEY',    'Lz/TJ#:.z{q&1jV<V}vV/4Z.m^m%g;`oDLkg91I@4G`|4G(=D@2q^S(-)Lv+*v+I');
define('NONCE_KEY',        '?V]n_vdedV~W$XvtRI!x/w~$j@1b]^z|DG+04iVN-(5JAlpr!fb3N1CE5[15OII)');
define('AUTH_SALT',        'zjF[]2v(>e]uDkM^M%K.Jo[PHk[y+;!~cGL/AdIYOc!94eDWFwf*:5QdS|,k9]J*');
define('SECURE_AUTH_SALT', 'Qo6m^S%g|SSj[E&^|TH)x3y6MKT/1BJHBF$6w+wfPWgb~MO~OHNEk|&m0-5q/Qs/');
define('LOGGED_IN_SALT',   '7m-Z@}%+~E|^S)[{nAY^QcR89?eQsB6S}i+<4!IYBk5?XML9/X-ki9Z[RU18F#iB');
define('NONCE_SALT',       '+L79&ExMx+G{W:PRFU)d:jkF|JJPkQ+QHh[I>:IH<+KBC#5/@Y>mi89JA2Ib@XOs');
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
