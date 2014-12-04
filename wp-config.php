<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'earthworks_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}qlAo-b-l`z|qf,3j#$~HZ|wX-ht+NA?guK({e0y_I9EdD_!%Fc8ZpYASJ;_A2rh');
define('SECURE_AUTH_KEY',  'f2SUrAE4;(1p0y2?Zw|w|/o{BQrCME81O[o{yV^A-]YNcun/am50QCj?fS3$+r-k');
define('LOGGED_IN_KEY',    '6<NpS<DLXyc$*GDn-=c_>iV,^?!M*ag+).`XFiF3lS70PnAseOiH/8]sE>1aA+0A');
define('NONCE_KEY',        'Z?N8T1,9mBrJ)tk$fpJB^Pr!X{Xi(I}-}[]a|&^H6fk1>:9)RB6Xk`8$K;w#^IP<');
define('AUTH_SALT',        'EY0TalCS%}z>1gGj#}/a;(gTPL8rf,lq!w$2fb%{UE3Melc1Du3,B>%i69vO08yv');
define('SECURE_AUTH_SALT', '_nw3-vYe{AW{.QkIENF/rQjklg;]Mn0:&C*[^hZ{E#FaBl]-Kf_1V@}g<pnN+q!y');
define('LOGGED_IN_SALT',   'hc4(ta#9$^,OQYG9G._VAVWx0Kt(Lp??)Wn(Aaki%3<->hBf34b#B-RX{uUoQ7]_');
define('NONCE_SALT',       'H+GbPO u4p!|+fZ~{Rt ]uJ)^xHuC6_Od sd:ADJwInYKRH#_+#.}D.Q9hmy9ia3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
