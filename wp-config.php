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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\pontu\Dev\wp\Gentleman-Trend\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'GentlemanTrend');

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
define('AUTH_KEY',         '3]cj4kb.A</FZz8rm]l{U:~|da^cqj)o7.2)pkY_/T<Ac7V[n~I:D2&tPi`>=YkU');
define('SECURE_AUTH_KEY',  'Xz~ZVPEy3&T(*f8NSO1&Y?)0gdWP,zXL.M/vvOef9X+w2b9s12x^k&IPy]3ow_Zg');
define('LOGGED_IN_KEY',    'IQ)8S)5<}hqZ>yt{k]4e>xvQ63q)zA+.?~NT+@>xqFGue4T5n^[rmd:LQ/f,Q#(u');
define('NONCE_KEY',        'aK*8)AQI-DoN`I#,6Mm^v0V!/o4QlGp^=kQQR%[Y^.Ubi6O:>msHdM&g$4`[(u1w');
define('AUTH_SALT',        ' @[q3<40@pmGe }7`4O;.sU&?DK<Y(/qsp`42xJ!y;.,b2`,fp{!/EV}7bnwJsgk');
define('SECURE_AUTH_SALT', '2O@UeKqM8n9i$5y+U{LZg)5qSB[@]Knk D=71LjWMePa|0p>QZW~yo9Ad`DIS-0{');
define('LOGGED_IN_SALT',   ' 6u0Y4!oVRh&KV7jBu<5#LQg`KR=Y|BqFe{k i{Q1S<oxW.R  [kv$G|{qD*s=W!');
define('NONCE_SALT',       '8(&NqcMrg,K/WxR`}|t o?}!sfd6)7ga &nWr4cHN)<Z7K-G)D5f&NFQ]~t,`bwa');

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
