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
define('DB_USER', 'aschmitt');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '&P].S(/Id//(=U:a#}q{r7$+!/_Uqc.U&EtIQi2`~}j7Bod-L0V$:}$CX@[[]/nt');
define('SECURE_AUTH_KEY',  '{ZdnO7?_SL;|)!$|$j+l||@AC2{]80?VxeTwJ= Ar{v^#6=edUHU+]22HgDf}Rhq');
define('LOGGED_IN_KEY',    'tsMr,f(5aB@!)[MJ~nVsPVcH*_Ow^=*sjk(-S_{T2Km}M&ZKd/CoQfYL&Hdj9mmy');
define('NONCE_KEY',        'E6w)slKX;e_3n5r))+#x_bd8G{nh*U|4fsTK{aMMEk?)KCccYX.2Df <mz$R~TfR');
define('AUTH_SALT',        '1x#2LAbPOw~{+z=FC/,(WB2p),EuK<-`yLc-5BD^ e#ggHP!.QV;*t0p(u|ano98');
define('SECURE_AUTH_SALT', '>:w5}hVIMY3EgQICYD1/S*C9`!aNKQOLgz^wsJ3@BbO*`J56/]pS@d7Se[`:aI`$');
define('LOGGED_IN_SALT',   'OQ4H`[?sUyhJG*&mZ}tJ.F4HaB+k]3XI]@2!1j9~?KNHE(vb7#E,V~nbO_U*6+Ih');
define('NONCE_SALT',       '+O)HHQxW^HJtt@d(uj2wfGM^od[cUPt$fEu:/A{jgajKYk,n}d+2rMWQIRN%{U{L');

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
