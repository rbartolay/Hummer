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
define('DB_NAME', 'hummer');

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
define('AUTH_KEY',         '}}aRAiQ7v$L9]Zt$KSzZ{xEVmg:`v=?+v55)=Vz~G])HrVIC/uL(r}Kb%UH}LNl>');
define('SECURE_AUTH_KEY',  'W;b/EPJ!rgXuT::tbuf,vhz*c.0>aC2.:5I]!Ix*:/iDCPX.<3dRKQ*+:)E=s=Jj');
define('LOGGED_IN_KEY',    'e0!2CJ28[^pw~D51ohcDkK.#x.}ZEvz8~lZi f71{RlF6raKgKy-)!8[MjBSu40:');
define('NONCE_KEY',        '.W[?^gz~s#N)44`}rFr5z;(A?A4j0)-obEci]J}MC[%uw/:,!s( 1B4w|&^u!8l)');
define('AUTH_SALT',        '/siq4/d.FT$A2]=t=fw~KD/%il!@[&<1#Pe/nbL/qxN|CZlnJ/~~MgHVGb=pL=[?');
define('SECURE_AUTH_SALT', 'o<@CF#2-*it^V@CM5/`4%_M4AFY]WQ1Dp}So78rp=Fd^LpUjOd4CWwn[:/H_hSF0');
define('LOGGED_IN_SALT',   ')oB!M[3eO,l[58!%h~J#hXKFhj2@o234MH8:5zc~uo6v^GL5qIN!^mC42baq[;.g');
define('NONCE_SALT',       'Rw>gAZhXt5hmIV,kE[gMy_[lFCE>O>OXPR(}w7y` IOQ|ebde*|L_]d`DqqUaw^B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'blog_';

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
