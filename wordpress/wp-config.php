<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'd1s12');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '`jPN1p>:*.e szh rWiKfM4J+s~wBbmIw:~Kz=W_?Er9^%_hC*Sqr<ztVwBH_>.2');
define('SECURE_AUTH_KEY',  '-?nY:wdM5e[9Vzr,[J-!Q(zO_88M]z;KF,/G?$O`]5fUD5[_^ZYXaKJ:=6ti:;8j');
define('LOGGED_IN_KEY',    'mE6Pef|?qxU{Rid*)CXhyuHPkt7QUFH+vJxP<l&5<DsrPHK/Y{~._ZH&0e!5S(E?');
define('NONCE_KEY',        '6cf7i)w]-n/[%w~[0%=3p#hDgKPVp_uWKjj[8vS|/6t05;,kY=LsP*3CrEljR;FQ');
define('AUTH_SALT',        'o1J2yq2o>L%JOUF/qcfwQ:3tDblLaq_[fZ_Ma*&,IVe%CY>*0iz5<f5dKlv=5{18');
define('SECURE_AUTH_SALT', 'C#HHsFWFno`>T<e{(k$Y^!Yhf#oem+ULq{+XjJ8/G%EyA<#tJ2zK;%AA rDOK?)j');
define('LOGGED_IN_SALT',   '9*kgw)EKQdrJb[qy43z7jC7uV;t@Ieqo`{>i-.v#/Jt~w_LT?ZN^0nsc&zZ>}O&W');
define('NONCE_SALT',       'xolN|~B!eDepvD1OU2#LH2g7h%$RBIMr_PJi?o_#!&FV==0^4b dG[$wPf:G<%kW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
