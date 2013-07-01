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
define('AUTH_KEY',         'CDdn.Au-}i!3Z%x~)Vd+aRm/#?f}je*x*>`tno5?]Uv(yD.}iXv: Ke>?izzkwzT');
define('SECURE_AUTH_KEY',  '&&@&F/`QKZu(Sz*S.&[ZlK7m7>^.fHPJSS0a;X3yL-2kPZerBv*S^MD3D1<!V9 o');
define('LOGGED_IN_KEY',    '|4>d]J-jdKQ;fC|3cJvxE`.TM27Tf+.UDQeS+iv+~o%+=!j%{Fgn9^}(jC2yX`$<');
define('NONCE_KEY',        'pm|&vc:4D:<O&L*I5R$,ywss<]{e2+PbT=emV|wE,[+(FR{v+g*T`BU/*8]Go _Q');
define('AUTH_SALT',        'Rnk$+<^V3)P?*$S+e/F/OPZa$AqL~U(@`%nKtf0$~?+vVt-{H1b|r224#b(ziV%l');
define('SECURE_AUTH_SALT', 'V%bh9o|-rg5n2?t<P1vKRc8}tiV7KONY-?@RxzDiv2/.qK_^N}V/9C7~&5Wt{hp!');
define('LOGGED_IN_SALT',   'IzJ#F,:8Juj91GPq&5Fd:PW,`k_U{GcKU%Pw]2N6xi(cngm@+qA[S8gK5Ab_y/Y:');
define('NONCE_SALT',       't{Hl!H:C9>f||ET^<v|Th$yyyIf]_^ZIzcdg~IYd6J+:S[f@d6JUs G}@c}kbS+f');

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
