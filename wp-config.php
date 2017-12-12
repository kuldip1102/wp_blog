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
define('DB_NAME', 'wp_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'k');

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
define('AUTH_KEY',         'h];CpN,j#xeMO;YGxw1!}?TM;`:MY}aqe,*)a&,e:UjZ)|8z#=ZM[FN2h^H^k[w ');
define('SECURE_AUTH_KEY',  'D.ixR|q@Bn14FP>uluS%EYJn;{7U7i,Ob7T>D<}.-e;.Np/G;iTJRhV9`1UKdw}J');
define('LOGGED_IN_KEY',    ')Z|*15|6^S?gDI^;Qe3=+}1aEf--%D$&1lk]C+0$[A(f(YLFxHm`zzW1I]qF+V^L');
define('NONCE_KEY',        '!kaTG[oEKH^)gaJJ(9<X1:r5TrDuBg6Co.y!]f)bC@*>gxV0!*GRUglI9+6&0H]Y');
define('AUTH_SALT',        ';g0lT9KDuBnWWlWr=#qtQ;95]sM*F6: N|Z?/%(z]g.tQij@GK:N%M6bmmHRCdR!');
define('SECURE_AUTH_SALT', 'owOXd 7}M?:kIn@8=DU){^j7%@}apj~qA 3!IZqWV56;R;_0sb`N8]4J[7z)8!:c');
define('LOGGED_IN_SALT',   'S,LJ!w*Hu Y:.WdP,<OA*3x4uB~%<ih4ofZVi{xk;I`S/te!c&K@bl3ADNU_FK;4');
define('NONCE_SALT',       'i%`Ev~yG,<h1w<]gD)ug0F-;[-.r1c+W.L7y!%N*ki7o9RVVfoF;W-z]:E%-~DrN');

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
