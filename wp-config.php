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
define('DB_NAME', 'wordpresspractice');

/** MySQL database username */
define('DB_USER', 'admin2');

/** MySQL database password */
define('DB_PASSWORD', 'prochinsachin');

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
define('AUTH_KEY',         'Srrq?1Xkoye:uAZNB`Hb)Ig1a+A}AJF@a4+^4=M_4bsC/TWcyg#:c8CHd4B$L.nZ');
define('SECURE_AUTH_KEY',  'a(6)mN!icy~lUI#yiZ*QH}2(5_LlJZ=}U+nU3wj#11=Zb)+}vt|IDWpvzJv,vjd2');
define('LOGGED_IN_KEY',    'o-oWEU8}RWE[O{h=Rv.35*_qJ9GLf#?vEGYr+^qJfsiuSiik7(5PL;hH2ci4Q{l?');
define('NONCE_KEY',        'aW9PR0H?Hb9*wmK F:bLE:vB8RE-%6%MxK.Xjv{eoC?Ygvm8UH%H<x{k>|rb%^l2');
define('AUTH_SALT',        'PrP#%=NcIeYra6N2cnfzM1LCX<wBOw%cqX*M&2uL&_1r0Ag*)Y]r)OpZv~UpG>.8');
define('SECURE_AUTH_SALT', 'DIj6==AZ}JULP?8~@S8R%$wMtf?t#[.U96(,@FswBB_!uYljO;a>qPH&s@n-0d40');
define('LOGGED_IN_SALT',   'YHC.M`8B-EAV(nG{w87[=yPa%nSc$F)D;wl}Xm3O8z4<5,Ipb>,><El5o#U5vwPp');
define('NONCE_SALT',       '*Qbpa )W2S$QaY2{5q>a/a[_17Oy4GCy+a53{$QErv$GBS3{Vs9!P(]YRR@CH ki');

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
