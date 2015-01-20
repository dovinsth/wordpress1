<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'worldamity');

/** MySQL database username */
define('DB_USER', 'adminZetnNLR');

/** MySQL database password */
define('DB_PASSWORD', 'aVA4zrQSaCIh');

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
define('AUTH_KEY',         'ZQ5Z|cb!|F/d;#yU;!P0,dX%a|7!.hld}adb+>~#nst9|MauslR2<+ 2+62dCrVv');
define('SECURE_AUTH_KEY',  'xCJ24&+>}FK3BXu{J%uOkn~C +(cNnv4Heh=;oh0&To(O3C^2H7}qufC&D63hbA!');
define('LOGGED_IN_KEY',    'P_KrHDbnU1e$>gj[g&JHKI)7If&EFTY_Z_<dNXUHKaqls{71fsnE-33@-%?#dI>y');
define('NONCE_KEY',        'b%wr>fML)h#C;|FpXu^35f-+%XY{&Mz=3}qoDcwa&-j3PVCN-@.a1RT|%Cu8OoUL');
define('AUTH_SALT',        'f=7W_X(9bWpPZru|9##=2aN@Qq`H8mgcHT?+cpuY4O5P3:-Q:MgD2d(wKMvu]WDn');
define('SECURE_AUTH_SALT', 'Q)%IRnV_IfJw5X$KEJQTB:-^4,L,1-,*@lW0{.ga,67X{4~c,##II))T_;}w[H8r');
define('LOGGED_IN_SALT',   'gI6nC-(|AW=QAP,A?.yUiA;ZZ@qQnW5p0Soh(G-_D{Y;mr!u%R zzyaFyvOHK|TW');
define('NONCE_SALT',       'zqOL~I/%f7.FoE25[? [2vlB&K,-qG+<xRi(4|8QR+yAr}IffZxiy{90$77)KQs5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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