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
define('AUTH_KEY',         'is;._]zpS`3vyW sI;B_J1(,G9n#;3;Yv3$dvyD}x&!:8ttLL<B[R[B5+@bX! Vv');
define('SECURE_AUTH_KEY',  '2GKp)Pq*~:ST^h=QKmy*-I(+nuwB#vr.d+V{w:lOPyYc-+8N/ysc4a55aA/7!70?');
define('LOGGED_IN_KEY',    's||-@9[zcs^+8&,PC/OHUOGg^{OPvQBhB!pRjA*va#N#f$mT7`!6OfyWV-sR T@+');
define('NONCE_KEY',        ' y3ehf&y8URl*)_N@O/8g~CWa,o+n(&s+nv$5s+8gMUqvPC7rLcplcY[@`@q>6g^');
define('AUTH_SALT',        'RI6]7j%v_+<rB3NZAVB9pQEy9(kK)?*%KOp*fxl[NnW|IR~L )]uKeyITeaoY$*p');
define('SECURE_AUTH_SALT', 'u^rd-|(/RkSG[98q(nX/S!NX}hUI7ba1K22VEKvmz/l{xgILVI?=_0M3ho4``Vqi');
define('LOGGED_IN_SALT',   ':DJd`PdKR_{juw$~R%3k$D1FdYO`Q2clH+L<,#zveAs/i#<ZH%%E-m`/|oM?RwH-');
define('NONCE_SALT',       'oXJ!VX+tLV;ONT$1er(5g/(&BS7`G&WZY/W00Kt!`{?@H)Fc9z >.Z}8hOTXJL u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp2_';

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
