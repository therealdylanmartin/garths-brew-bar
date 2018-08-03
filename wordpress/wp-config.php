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
define('DB_NAME', 'garthsbrewbar_com');

/** MySQL database username */
define('DB_USER', 'garthsbrewbarcom');

/** MySQL database password */
define('DB_PASSWORD', 'j!HF*4UV');

/** MySQL hostname */
define('DB_HOST', 'mysql.garthsbrewbar.com');

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
define('AUTH_KEY',         '~8M~c%yVRb7#Cl)u"I@$M1a@~%AsGh+!@_j3#bYY&uhbxS_zSpB$B`gBz#t_4&GL');
define('SECURE_AUTH_KEY',  'UYQWNQ:cZW`WPXqD3(KI3iHB7Ej$|;cT:Vu;3B9MtKYPFPhLnw6_XOfSYwrKG4PC');
define('LOGGED_IN_KEY',    'jTumY?GP$#nVen~nEb$jlXwi/GajP!K|zZ;|U`"d*Oe!uQ6G&Dz`TaymEo3#U3XO');
define('NONCE_KEY',        'xlXWN~gY?q;TbBKJeFPcr5VPh2pYElC+S5U@FJ2VWQ5/h04?Iv05vzJdAPJ1xJ|g');
define('AUTH_SALT',        '6/$Lcq54cz$q%V|Km"Ojn_CvgB_HxRWVf(mQ$_"M2YMMP&OwhacPrP3u/BO|H~m^');
define('SECURE_AUTH_SALT', 'K*1~2?MnHrJVm3zWqAFn"LS^Lo9t+?Rr?a6"ru*cvtHU?ULHb53#/vgRElZ_%&7n');
define('LOGGED_IN_SALT',   '3(E2Y2Dus9AUbfCbzN4S_G(MhJ2bi!r;4!vp2Rqh$A+18/8fH;1*i/dQzWvHJd9M');
define('NONCE_SALT',       ')e;UboCgoITYL|~F?mv(#&MFv6w(2YjC4pwUp(;UJ/q_9"IlEpT25LmDIST"!GA_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_e5a927_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

