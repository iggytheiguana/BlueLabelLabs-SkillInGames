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
define('DB_NAME', 'mysql_42912_skillingames');

/** MySQL database username */
define('DB_USER', 'skillingames');

/** MySQL database password */
define('DB_PASSWORD', 'unc2002');

/** MySQL hostname */
define('DB_HOST', 'my03.winhost.com');

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
define('AUTH_KEY',         'hWIqZV3zTyFyMR=ZTPr=)}S_0s(I|=seX1@2@&9|%dFPmpanJ,xk#A=}n3(DskyQ');
define('SECURE_AUTH_KEY',  ' 0ngF;u,0lqOy$QVPy5`HKx;E*c0 2RA<IlF3BmCyyZ4Jn_@N9?v2Vn9409Y]il(');
define('LOGGED_IN_KEY',    '[~{GbZi~-^9Iz9|f;C-ky xk&i?Tbd4xuf4Xo[1`SP-4HbSL#lcCFEqi-V(Lkz6:');
define('NONCE_KEY',        'ZE]CfVjF&8g5T1(5rN-k]~07/9~P,NvK~:]$dLm$k<<x[y.!?%DAq#l8>2@#0bCw');
define('AUTH_SALT',        'Wxi`nI``:ud9N PRZGH:*#R#3@DHWuw=D/nfxur>m([ZdQK|s[vCA+.[Y/V2%n^l');
define('SECURE_AUTH_SALT', '0A-+hP-SA9Ny`Lk]7q+rFX4:V@mqCu@1|b`HPv-9*$n<w-Fr)zdecQyi-B;It?ta');
define('LOGGED_IN_SALT',   '+J<,4?-yP1=ne/)l[-0z>pJbgP~:~eb`,b^r;(R0(0(KU;VNW:1aDTTI=/K|JVX8');
define('NONCE_SALT',       'fTW1SZ@=?%0#g_ @SmSM:$AN~=%h+E.+9@9GNdA$eh-_I]--rNucvN=e#jMOFxd9');

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
