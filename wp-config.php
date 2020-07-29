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
define( 'DB_NAME', 'india_db' );

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
define( 'AUTH_KEY',         'sJYb^oc6mFQ{>nTxS/&c.BM5]ip1Lwy]}Nw9L_@=KYUed/b/ojRO^]J2j=Ii`II_' );
define( 'SECURE_AUTH_KEY',  '[K*~cBaIC]:`VambyS14)EO=QU_K 2DNnv`+z:^>=wMOPn!9g]uA7TlRt:R[9{l0' );
define( 'LOGGED_IN_KEY',    '8kdl+/v3D~ji=$qp:S!H?^4kYhTniAKR}8z`HAVvdg6(Q<Z}q~#H^$;N< h)IG$C' );
define( 'NONCE_KEY',        'lcK$Lf9=9E=^}dVZ`FT/~jfYCW,s/]50#tCzyw(S.l_ZFV2<dgwv yA}`nudj:>x' );
define( 'AUTH_SALT',        'Q`#=4#%4bF@BL(Ej;m?p4L#]Yc<Ts{&!qx`Jufk;8A%Jy<[a^7;WN)(ks`m~wJvk' );
define( 'SECURE_AUTH_SALT', 'Q@d2ckU2va$Y(o.x>vR^KvQ&AE>W/IYBFYn=Me!_I~6wm5)hz+pX)@j?yy;US%lQ' );
define( 'LOGGED_IN_SALT',   '@0.UCKVDZGr)OEWgjWCvG>NL<g[o-J+;PhreVdoUTgE>`&b3XqoK2QkA]|zg`40k' );
define( 'NONCE_SALT',       '+D?n`!6`qxd5F:W+;IzC8/2A 7hZ N7z(Q_6N;gvsFF|^(gC-#2Q:K4<~]_nfjV8' );

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
