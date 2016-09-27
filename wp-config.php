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
define('DB_NAME', 'seminario_wp_db');

/** MySQL database username */
define('DB_USER', 'seminario_wp_usr');

/** MySQL database password */
define('DB_PASSWORD', 'SmpDb34$');

/** MySQL hostname */
define('DB_HOST', '172.30.79.233');

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
define('AUTH_KEY',         '/Ljzf$/@+VX*[{<J <rNEOv*0g/v6yzB9v1lm658nfb6oJdU>O{C.ngn U<;>L,)');
define('SECURE_AUTH_KEY',  'D>R/ySJe:XWw6NvZaHdx9WI68&Y8C?S6}B{>_&WvLkvID+8Wcy~ew<_ryEh/Pq4L');
define('LOGGED_IN_KEY',    '6b9Qb)deN<9jP5A|Q_gFvEM$^1Q8bI([EjT7zpo2LZYX2}bW0lZ7D!|``tdgaPk}');
define('NONCE_KEY',        '?+^k1dKqX4jtS7K#<X!TKL`WcOpt?yj^4_[RL^kvbi3vzA4jS7od3lD@X9W YvA6');
define('AUTH_SALT',        'fhK()y./4 /qUO}8>k!E%]WL?u*DlmEP8 ;~q%g?y3yg.2G!:zTU2N!b=D[o#TBo');
define('SECURE_AUTH_SALT', 'GeS&kgvbp (/TV}O[$V_/J&]tBM4WumX)V`v5*>3Hm!yU }J3%7Y8$IzNf_?7miK');
define('LOGGED_IN_SALT',   '6xGqm{_aX2$%#ooCQI2^-kA(2)+S(/>Eh9;&q|uj@lCX6g8#g.]sPX9joOz@PoJu');
define('NONCE_SALT',       'tB|9)U%5O;gf9>0z/?>HLM{DD/oiS.g%C HV)1<&+Q^=gC}!9>&vB.UQ|/y0R-.P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sem_';

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
