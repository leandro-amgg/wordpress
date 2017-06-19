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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'DT(2C j1tXMd_>KLBD|3[m8bQc8Its9!6lL,v;1n+a0lL S>Ui.^xO@u8>Ut=bG7');
define('SECURE_AUTH_KEY',  'rV0tt/:x9w[n!T$]f::]xq&sQ9Q^_[.VV@`uC*He.tZ5Ay}?4>~`eLl^S2YM_eHC');
define('LOGGED_IN_KEY',    'lM/#sQC^j@5Wsa+T|M>boyEhNRV%2sB49p]y(s2&<NF!OlP|(zuji!9 l!3((B@ ');
define('NONCE_KEY',        'e}#M_~{L[ OS~!=crPZvSk8a%41WYwJ-hZ%#v{O y}F^7J(OZ4>SCHXG 20Nl*x#');
define('AUTH_SALT',        'H<I8{=e#Fz}t8s`rvA XS*ovznIgMEEIxuk^B{,t~nVS,8T(LETs>=3s$ZKWi3<~');
define('SECURE_AUTH_SALT', 'e<((buww2^mQQD-4<<LL_PS9i)B#&:4Xrp/8YT4?Ld@Z!n7u-}!c@~vaDaKB^Jyq');
define('LOGGED_IN_SALT',   'WTz%isAX[Tyh}@7F_>YKo2/nfKh,M(^|7kFDRI8lJ^cJImF/@8JN[??^B>;%W-);');
define('NONCE_SALT',       '0Qy.omDT8;aXHj>_0v=9[=iYUqoCnk2X}])T2P54Jet|sbi@k8klgX d4ZxT@AY;');

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
