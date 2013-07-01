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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'USFl6wW-O64FTaGc}*vz.fn-8V-C,#|$5+MS)kl`#TA8>%fFJtPkjA|IXv$^~>uR');
define('SECURE_AUTH_KEY',  '*o,bz@!rq|h$bbZ#+5Bl*n__Z]+1j5a|| %BN~R[mp6`f2_~?IVf4t{a%g@-)lf,');
define('LOGGED_IN_KEY',    '0lvi!3b--J?#xx,$y7s%pPb.5,_-bY0nTh$sNTFR|v<?gS*<XrD*i7<+nM0(Vt%Q');
define('NONCE_KEY',        'NmvR|@%btl ]aXCMRJ7#}/ynF!pkR$@oraq$c37vhtVB|TV yHdMp4:|J>4uz2#F');
define('AUTH_SALT',        '+/|h/-L2+~}E1%vAb~f&%`b+Z`)fgDxA:9?)S+;xc<vv<uJ@a;H~oCC|y~@#9Oj,');
define('SECURE_AUTH_SALT', 'xrABK{c-9fgVAhzFS#%Qu>1VvMZq!=+jDIUI[^s~v3W:L1{,M${qbC(PY$C70fsS');
define('LOGGED_IN_SALT',   'R@Mi=|qL6V7.9:JG<D=$Qlx~q?7z*UA+Ws#rrAx@Al:E BoE-h7hRCkQY,u=~3z~');
define('NONCE_SALT',       'uXzF*+/]i3~$?+ipL45s.OGkl%VQK!7t4(sh+o}R5io5+<_erZngS;Zg@&E|X/|-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
