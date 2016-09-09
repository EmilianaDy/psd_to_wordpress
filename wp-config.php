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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'resto');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '&==YQn~51V1{6XVhGD>k^.Vr,+JGrD6`/I+(/D#g]!G&hgu?45omdK,uUuzi+Q},');
define('SECURE_AUTH_KEY',  ' n|F@3]wmS>`V#;&-p]UdJ3sw W(;^|GxGn<Y2{x!(3)`9rnG(Wfy60FY]> St.5');
define('LOGGED_IN_KEY',    'Q P@PV,*$lQ0@YQL.*.sc,s^61f{1A#5w>5NtmJu%Y&vR-{v>)LLZ#vE.U-xQKvH');
define('NONCE_KEY',        'O3m&)HRP6327*S*B[5<_4%)kR~Vmgxe (Nx!7L@LF {kH +>7xU,6GMzGT>5MqTL');
define('AUTH_SALT',        '_D{{9g}zod&tTcL,[O`[!wo%YHMS0o>6:!OjOye</o+2(z(}dnx-C5[geXMbtWUI');
define('SECURE_AUTH_SALT', 'BuEwc&Op8{ltChU.HM9UKc-H`&t1^;Ck_ F[pMYROroU`wj%~c]w*xzo:QsqXO 9');
define('LOGGED_IN_SALT',   'C`e>0;y5Lky%|sFe$V+h~U!,<[<nD}?(mPUL8z+=UMqn|vw|mrLh&hB0$uM(u9&@');
define('NONCE_SALT',       '::mN|qX]MgTv-#9tY-[9ay4z=Rx);l`Vtc.h]40Y*+m`.nmo/n4.`)FrR7C<2YM+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
