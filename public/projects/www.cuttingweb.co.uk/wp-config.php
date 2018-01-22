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

//define('WP_CACHE', true); //Added by WP-Cache Manager
define('WP_HOME','https://projects.rossedlin.com/www.cuttingweb.co.uk/');
define('WP_SITEURL','https://projects.rossedlin.com/www.cuttingweb.co.uk/');
define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cuttingw_proj_cw');

/** MySQL database username */
define('DB_USER', 'cuttingw_project');

/** MySQL database password */
define('DB_PASSWORD', '&j1T1G8,bD6\Vh"x');

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
define('AUTH_KEY',         'XraQwnle@AKJJ,|SZ;q&z=voPEgnad_IWvgEn?He___xGB{|xP}dH&I] mGLrh|U');
define('SECURE_AUTH_KEY',  'pYAtOU~y3*3QJldJ~st:`59j8)Eq_$>?C^0cyn;f4/T3NPTo*X[@:mb=#e%L[)ev');
define('LOGGED_IN_KEY',    'A39rc!eU(7?Q6!F(e@ObmjmrFuZL!&%`FsW^U#5/Ppt*1Qno,IQa?<F3h> 07Js}');
define('NONCE_KEY',        '8,$dwr{ygq#uCUNgaOB9e|v?z<O*hI-IQ/mU5N TKS_d=Yjz]2*.D~R.qA:[Egde');
define('AUTH_SALT',        'iT|sQHk[4P?3$(.Sx-!kd8k9LO@/t6Wt)W3Qx|HUFPC/7j|%6+MdTI6R!{IbQK#}');
define('SECURE_AUTH_SALT', '>O7%}dnD:l]ZU yG6r/rORDf.8Hr6si5-J*}s;NeU/v.zW->AE_LV4efPJ.,`7x)');
define('LOGGED_IN_SALT',   '(k6WqZ?[V| R)PR*pu%q:Z7a(Sw-XH|Vc:|hVNTa*;2:|3+ sL4cl8^dW)&3JugZ');
define('NONCE_SALT',       '[AlQ7X!I%cG`O{E#NtHE7?6u{UzO>$C>j$G,r$y8d.5>,SUIku,Wf]eKjbGY-*A+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cw_';

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
