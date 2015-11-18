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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin123');

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
define('AUTH_KEY',         'fgB!G6w):45@pjTDT|eqFOthHa@ jg.FOpZfd]j{FLxi=x|4Zf.X?Rk#%bZ+>7{y');
define('SECURE_AUTH_KEY',  ':wS2htElBzIy#vic[+,Y]XG?+2L#ITtyP!|l;r,?lRi@+x.?i%l1q@alyAqaP}u@');
define('LOGGED_IN_KEY',    '#sDXW!9UmFVSKXTFP|])%4]ZupOYtd(QWNX*.%Q-JX4{Ka } P>X!T9^)-D?k[-E');
define('NONCE_KEY',        'D^R)6jSd(AE=wUBy77gV8UQ1o|)pY=~1l^qj1M-i8ZrUBUz),c+IZB7G,(fRMS?j');
define('AUTH_SALT',        'LVK]bcrvDoDgQBKe.+GRT|SsBBB)3B+D|||G9qS*(z9<H1V5pp9.%~vjrGxu 7dS');
define('SECURE_AUTH_SALT', '5>^Wy.GGk3$5r!mVfu$chy6,2i:<u.+Zfyqgx?VfW.npiw_yG?w6x+G-{|Oaq4_9');
define('LOGGED_IN_SALT',   'l-<;})_09z#K&qDR)w3`(Fh?Sl01r>VV.++#GCa%Qx7Eu7T5Ax$8d0M- `_=#h%i');
define('NONCE_SALT',       'J0`y3y4N:{a ;>yMG7yz$>1tbMA5a-|Yi?p|Osd2]/C6D=tc42?%vxv6^U3 5_6=');

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
