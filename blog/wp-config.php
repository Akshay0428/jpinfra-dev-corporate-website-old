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
$hostUrl = $_SERVER['HTTP_HOST'];
//define('HOSTURL', $full_url);
$arrayHostUrl = explode('.', $hostUrl);
if($arrayHostUrl[sizeof($arrayHostUrl)-1]==="com"){

define('DB_NAME', 'dotwised_jpinfrablogs');

/** MySQL database username */
define('DB_USER', 'root');
	
/** MySQL database password */
define('DB_PASSWORD', 'Pass@987');
	
/** MySQL hostname */
define('DB_HOST', 'localhost');

}
else{

define('DB_NAME', 'jpinfrablogs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

}
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
define('AUTH_KEY',         'iTSW`/ h`Bi3V:gkQZ+q_XyB*}n>3]r5<Q*}M6T&Nzou&ps1q9QB!+9x=9FPAeY9');
define('SECURE_AUTH_KEY',  'S>|%^0W.5V?Pw@._M7}@on`A&IZ*oRB)/JU0piiffop<kV-^(wI&J2YjAnr)-h6O');
define('LOGGED_IN_KEY',    'gJl&hf1Y$$Ue7%O<,Rt;#(oC2{wmte^]d1&O;=BDwv,kM+:*87@4e#*<]Jp)4f-C');
define('NONCE_KEY',        '?lO>)C[`MaqiRv)0au@Dt62pLn0H1-W!s,[*?+l8AkRmuwm8Z|ssHl&UT0h3@ASj');
define('AUTH_SALT',        '=s);bD_rdzx5:<K+YnCsr*=<uF4rj~2&waQimXAPCyPR)[~ZP,oo|{w#cOi ?[AM');
define('SECURE_AUTH_SALT', 'RdrO>qP1A,O8DW TJ+gg<K_ty+x!jggmsU N2_XJ0<KAA|xT=W0.K~*I.HO&s_R?');
define('LOGGED_IN_SALT',   '[eh%Iv21cgBO<JMbz.ccme0?V8l6Tl:Z_:y}Zq(R%%A?t:}v#M~OhqV-MY.B3QS<');
define('NONCE_SALT',       '@NvU40dP%)HKc![#m(]ECWh+0!*T}j>3$.q6NQZ`l.}8%pp.!4M9BuC4mc{s?grh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
