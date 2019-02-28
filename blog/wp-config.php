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
define('DB_NAME', 'ivhblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ivh!@#care');

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
define('AUTH_KEY',         '/<3F,!6T}.XJhlIkW+;afX&ka5,4ly}eV.u.c9F_)]:(;ml/<w=&F6^N0el_6*F8');
define('SECURE_AUTH_KEY',  '1e!r|WeEe*{YwIxiJq4C+ra<z{f:02$jWLAdfBVCLcDOa;n+o}st<#eG8>4ZZJcp');
define('LOGGED_IN_KEY',    '|}sbOhmH,f^47wmO:M/YteVAG]aw:&AY|!uQ!q~Z,]9E~M{-E<[!}B*fd4%*&1L%');
define('NONCE_KEY',        '8iiW2ksfu^k@Tu] SB[IV{uf(P@jq]a)I)TZ!hi9kXpPlaZK_Nj>dG3bG7prHG;*');
define('AUTH_SALT',        'c`uixC,q!8{K8yWXY:M8yh4-[/kwjnx;EPO}x2jQ>sclK[137OlG.!h2z7U,/Uks');
define('SECURE_AUTH_SALT', 'I9RC4?AB[B>zQ<4|&+MY{&6/O6#>yFdfGUFLq&O%->B|-<RWB0o9usUn~u;/PJBB');
define('LOGGED_IN_SALT',   'e[q^i~r{W>N)ds+?lG<6{Nrt&nNJDOBDs%2%xO*LtSMHbd>ObVfe8KMc+DJnjwN0');
define('NONCE_SALT',       'YOMZk?j:K8>OHZ.(>9>{;M~ZAC;Yy[1yD,%5((cmWxN1`:lUj{d/&u`R3Z&deySZ');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
