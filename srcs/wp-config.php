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
define( 'DB_NAME', 'wordpressDB' );

/** MySQL database username */
define( 'DB_USER', 'rbeach' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
 define('AUTH_KEY',         'TPb-_CJfN>%PXHMd$Jg)~Wd<^&-z)!~B0|@CdtBM55uNNTqG1`V<`wVyo(/bR4rW');
 define('SECURE_AUTH_KEY',  'wv~W9]nb$Nt{bc8TCwe-iR_-kiC2d_Wg,I[6Y(Mj3P3?]k u/0u7yHp`X%u<}2];');
 define('LOGGED_IN_KEY',    'Z+<76N?^+=1~5Rjv9cMqGe|yX:k-W&6j1D/B5:&P|?_~|fbyxRz!NPT}Qj%$dUAn');
 define('NONCE_KEY',        'bRo@+U^?EGfE I>^$-]N;*m=:An6+t&6[@6+e2ZgX^)_c%X-|B[-_LZ>LlL*8#tU');
 define('AUTH_SALT',        'bT>WHYt}|Ekd SR-.<0^,uI>|`[3.$/XX+Um-e:C.x9{04,i]!)h 5;3L),<B^MJ');
 define('SECURE_AUTH_SALT', '0D+wB[z9%S$:#DSx42oFm^+p+Y<v,3u,-IN3R%v$RqexMsKxdgyq$&-x5VZNOpan');
 define('LOGGED_IN_SALT',   'jb+cb)mMg<,rYi)-cWq8JyAh>Cj/lq-x<T7r2j6|o{.TT+XgCf+zm|evN01 #cN:');
 define('NONCE_SALT',       'Drso!cp(>21=gZ2>4!;$zE{Y&Dqf-%5|+>I:m1uY{ynYpI@r#ywZa7m{/d0^Ku+c');

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
