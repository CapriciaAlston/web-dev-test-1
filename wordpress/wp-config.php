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
define('DB_NAME', 'web-dev-final');

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
define('AUTH_KEY',         '7]JRi|bh[mhEg-x,$#g`.r>;h;85+YVLV4J|X-)T9^d:--M_)M?8.QW?ois{&W-*');
define('SECURE_AUTH_KEY',  'LMAGyUPYuwMo 8u>E4F@-ecJ/HO- tn!I:A(8yTAeHZI+9u;-`kE$D0P>TAI[_lr');
define('LOGGED_IN_KEY',    '.fyaP)z$Zz6)}Z+66Z}J;0W26^shDQ=8&?^@yp5D].|-1 MQ<zH~sibTym@nh? (');
define('NONCE_KEY',        'czL+E;ri&kn#7Zw#%_RJw`o<*hH0KWy%N~3Q9( B<r6L|M+K}(1R+!EG6+rDxDst');
define('AUTH_SALT',        'N?.Y jQFM!6:kij>b1W@{en;cv*8,luO(sP=]opwAwmFqJt$9$49fkWb>SYsg2G3');
define('SECURE_AUTH_SALT', 'n,XTCl/jx~t`N2k9e-Lfr%fmk?+^n;|Va)H):jR+NvQ7/ =*wbh gRgr$F_e#C-%');
define('LOGGED_IN_SALT',   'U: sx+VS>nMUt1p*F-$)C0>kv|%ePXn-8T#m+6o{L@tTMP`V|bz!sO-]6Cu98=M5');
define('NONCE_SALT',       '<M9JS|&San[*w!WWa7[6GdNYHGQLLVM|6Z~+THtouiXJQM1h4P4.*5gM.kkpHF>I');

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
