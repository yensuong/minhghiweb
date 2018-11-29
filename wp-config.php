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
define('DB_NAME', 'minhghibags');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'S#lc<Mk{.m(ib`,D-6suk}FYSC3pR.r.xrf^Hh4I6N)ga^,_82.:vnE)]MAWTZ@E');
define('SECURE_AUTH_KEY',  'bH<-i8Mdn1RL@tnT1!=*RI.A:h;*{>Xy<*@x1L=mMU?J)*q?8s|(`oA?/}_M9i*G');
define('LOGGED_IN_KEY',    '`@gJg/m+P:-<]Phh)u,!f%vAgO#+a}Fn`5Tj?qln()$|!0~&DlyodjT),6)nprlx');
define('NONCE_KEY',        'S*[3D|KfP.hoZ(lVhn*)cYZd (~78-;C6aRM6?8a~K#AV6@gIZ1]|y($<$YMU8(h');
define('AUTH_SALT',        '3U&%}22i7@P$^F(]#otx6B`%0}_bvhqC7:}:pdH2GOOiajko5&P+X/$i/KMjsqE2');
define('SECURE_AUTH_SALT', '+nCqjjf>c-+/CmybGk_IM4/gB%}JS*lzZKrMC we{T2XG9o&=YfoWF@sXi)2<?mH');
define('LOGGED_IN_SALT',   'slb%:$zrRjLcYQ1C?ufPd6irG|:u. q JNu|>/tB@tE^WDm91G1UJ{BJH6U$7^Go');
define('NONCE_SALT',       ']w9/o}`MkUn)p7*Gv<B-Ot`QyN|+E?/jbcfMhH,.PwhVd,*gl2]RLMj1rM(p0]Q3');

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

add_filter('https_ssl_verify', '__return_false');
add_filter('https_local_ssl_verify', '__return_false');