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
define('DB_NAME', 'slide');

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
define('AUTH_KEY',         'ZBf184.^ CeNO-* _W1.,7/ze>xbNg:Y;sCqqCtzG(WL9fvwXpWd!{g4c&s]0|jL');
define('SECURE_AUTH_KEY',  '(4)&4R?TBe1@4;dw>KRBBKiM+WT{68nVVk;r|P{o:(Qa]VU7[6[R$J|`6!]2V!}S');
define('LOGGED_IN_KEY',    'c2TJc2[x5B65(;}L=l(%5/B%2l,9/q1kG>{1l<gcN*(]4_k^|6TV!j2>vUB6MA98');
define('NONCE_KEY',        'X)=0*][*?<q$}7HCu&mkK&0K_`1{OH& T1T%3(,_` Dnzb>lO<<eK7xn7QHkyyfX');
define('AUTH_SALT',        'Nj+:iqIxy-2z0|Q.GMKd0(=YK7u8W;(.cm9|_]]!j,,o.Y|s85O}LH#-?:+POt-<');
define('SECURE_AUTH_SALT', 'cV|?9h]fSNj33X?.%2)18tH00SLe&>I(RHF<{d&#&HGEf~;&>MjW/K6sScZ`:`R9');
define('LOGGED_IN_SALT',   'ky-p[>/O3W2Am>S<c(#9WVU_w6]h[z0zTR+z!PtDKVq%e0C/FX=,RA~e-EJ=|!&Z');
define('NONCE_SALT',       '<^JF+nNx/[D4y(OF_Gy8P`>C&U?W+Z]_t|)3G;eV*g_Yzm9,(tI31.%9WcSb&_g:');

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
