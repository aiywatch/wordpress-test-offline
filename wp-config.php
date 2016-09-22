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
define('AUTH_KEY',         'SO*(6S;SRtcw^z-T}PJ%qw7sG&V4[$w?TNrJyy23U %@wkyY zx+:RL*_4(DoT+K');
define('SECURE_AUTH_KEY',  'I0c#xTww^uo*zeDTj89%+y2rq5o_vP/G3W2gIT~8Jf>f#on`A&a#`YENt4Hgd`PQ');
define('LOGGED_IN_KEY',    '&P. [$T$Pojk]IWZEPS%*:scqio10U&?RPxls%&B>m/S9}G@xDNUlzY0zT{:8)MS');
define('NONCE_KEY',        'AqOud[A!$Y]b6a{n.jtE7L9K|r]0zNE *.[$S#rv$m~sq=kY1|zA0^=RHF5?Hl.%');
define('AUTH_SALT',        '=:=Svn-SGNF{:(0x}`7=f}>G!<X^ybT$HguEJ^EPPosfwR)MLSs bA^wM>-?OG@h');
define('SECURE_AUTH_SALT', 'ry*~Kgu6-):aJ_J[r;D4SFsk7YHV@~2m3tI+dWMe~Qw4J@US8k~:Aua+F`ix->Kv');
define('LOGGED_IN_SALT',   '[Xa4dX0ccMfu78o#A<sn4 ,}mN0q>*[7,_(#xN/Ro6}mQ.W#v$x}xt}YDxpGE5PJ');
define('NONCE_SALT',       '}mR7WRhf-Z0%=3WZdrR`{ErJT^&]Rt2dZ#UnUO}Vm H^YM}TqV|f41^![G9Nffx^');

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
