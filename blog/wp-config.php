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
define( 'DB_NAME', 'toko_online_blog' );

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
define( 'AUTH_KEY',         'm1fBO&o*0rd Lc?.R>sI2?8:WMS&@F]A$ft$Y. {GLo(+yC5tN:8Vj_?`m!q@&~>' );
define( 'SECURE_AUTH_KEY',  '68ZAom%BQ]hxbN-`QOicyCRE&VKH(@20Hmh>&j|C}]9u?nT`x+_s=3j4Xk(M7?m%' );
define( 'LOGGED_IN_KEY',    'kW/JTQ!zDYg9_UU6nF ~;%zgh?nN+!Rb8?/U9BK?O:S([{:3n8Z*c}|&%gj]L>_m' );
define( 'NONCE_KEY',        'B&tdAbBgUaVg:@:$GN/xBvj`~{aMj-5Iz}<Ym`)oFTk7f2q_z-d!8^&jgqk0E*Uw' );
define( 'AUTH_SALT',        'qz$E//<BTo6kb}GYRB!2vpI]3tSiG}y}<FLX>i7j?gX9#.=5g]Mlw{6k5zMYe$1o' );
define( 'SECURE_AUTH_SALT', 'f:;s7Q@g7=nvt%{t5nYkl[w`&Ozc[8Y]vpmFX1ulMH5[rS,vDV8!b,>oDXs 3[T^' );
define( 'LOGGED_IN_SALT',   'BJ(g/Tf:7v|OcX|S$yC7z8dY~ZLEO~7HdyLe$4CSuw4)?+thhZRQuFQV=$0%k4Rr' );
define( 'NONCE_SALT',       'mszo[l6iNR}pnJ> yyg-Q;9VL|y=p_Mq!]OK~>erpB;:2ohqW0c@3EGNn{S~M7}4' );

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

