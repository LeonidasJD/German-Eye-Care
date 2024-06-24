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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'M.{yo)^rGB-_#G(coJ~P C0ik/o)p/60! !iz I>f2@c9}Hyp(iNhqCIO5VL,*U-' );
define( 'SECURE_AUTH_KEY',   'j18Fu[(H:&lc ]@NpzMQD$TtlkzP,+N3F.P[AZ/wu[T%.oo%paNdNOK8PUG)eRsz' );
define( 'LOGGED_IN_KEY',     '4(MJ:c:O)bw:e//r.6r10y#k>iBQ=C:maLfwlc|A^53zxLH>y7ZwqfCK>{LjrV4I' );
define( 'NONCE_KEY',         '+}<r1/+)m2/_X?TS*]@*kVWy-!GC*OEiH60I#uR`AEz.WT6!,IRQYwKDt>Hk5dw~' );
define( 'AUTH_SALT',         'K73oK5wr:S-gW0/}RzD|{.`;zSigW:Dm_kJ-a}Mexk7lrQ}d4?sV#G{rp?&FJ&E{' );
define( 'SECURE_AUTH_SALT',  '|jB~2!2LX^jT)9:IdylNv;[OO5Y<#v2qac7QUgtm4<l8C9n(Oh34NaJsX<O5]lzI' );
define( 'LOGGED_IN_SALT',    'o,:+,lq=RoiI(}pm_b9VtSh)u$vI6A}g13]AmW^$mkGOkW(A$oPW(7%{CK+|j$XO' );
define( 'NONCE_SALT',        ',YQF7:<iiNJ;nL<ri#9TO|.T*kv.mc<;Q:<Dc&Ds$[Or6N~qv6BA(=a?YK8OO!~i' );
define( 'WP_CACHE_KEY_SALT', 'RKzC` `_DlxEb+QovDNrC}Sln3,BsMtbm]2DYWj6=} ~F>{Q[ -o(Lqgl]efzuVj' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
