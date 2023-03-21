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
define( 'DB_NAME', 'wordpress_torontoonline' );

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
define( 'AUTH_KEY',         'L&D~7X ;4JS#P)aO:wHBIc4?cRb~02;HmZ__y@{] #~9GFv.mmUg33Pt[.@uT#!-' );
define( 'SECURE_AUTH_KEY',  'lgK]P_,=8HRwR2`*9@oMNyoW.w?/tpnTXA*zR##%v]TQ5QQL[H/oC_9ZFZGSBE2e' );
define( 'LOGGED_IN_KEY',    'f@d[RnoNlYj2 65`k(+V2.KkO:[H,;1n$N{Rt*j<2,`,v?-qx|VBAEbmx#Y4Xh9Q' );
define( 'NONCE_KEY',        'WN+Q@65c1;l?wPrUP{3J[,p5E+7A*dw2kr%6:2^EmiV*p7+7C_Rj2oP10EOld .w' );
define( 'AUTH_SALT',        '_3{u;=ySv{O$2dpT/[&$#Z:S+[g(RwTEJ_ Z?^Rp?b{rq}a!neCZ)np`Z6){JWLS' );
define( 'SECURE_AUTH_SALT', 'uj1E?rf4O!q|cszJX3<?)D+A.Jly8HRXDmuB=#YQtV@roKU/#y]FgPo>>3(xmA.&' );
define( 'LOGGED_IN_SALT',   ',I+) +xnaZ B]7BB-p><iUP^|98aiaL9WpU<.QX/,Yt%tj)3c0g8E{tmf$+E3~RD' );
define( 'NONCE_SALT',       '1hY~0G(RyCwNDSo[Ozq?S6Ui8W_)6cPn8}&.QOpem8niN8vIjoqJaZsS{&{|[8) ' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
