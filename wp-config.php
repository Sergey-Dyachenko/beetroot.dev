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
define('DB_NAME', 'wp_beetrot');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '->-6ghyaQT`Rp/^ceV?E:9e@b b19mBZ;.OSAg+J fnt.+H?`F}%etjbn`/C-):5');
define('SECURE_AUTH_KEY',  'Z_cwZUta]jiH f:X:*pKF>2T]GePBTE.gm%<}:r,<HZxynM!oLE{WaJluP$Ym%<z');
define('LOGGED_IN_KEY',    'N;S/UvNY7Yk<|&g;T`J%>O<@5+^D|uLSkN]9gVsqX|cG/~4*;xD5Vopq:_afw6++');
define('NONCE_KEY',        'W1p5Yx9Ks{au-UKN#imi34]y^{`w`RV~-aK|rI!)}`R0j1t|IYSZu%J<=?C*4BMa');
define('AUTH_SALT',        'k:7+ApTz|sQ^K#ILy{wI@n+E+y2S$)rXL*aiXVlA>;Ap+h}7Y^m,!ba|M-b/}fi5');
define('SECURE_AUTH_SALT', 'WinBe!XlMH|+*7-)(b 9HQ$R;N%|a@+<{^w,I%gDM~|JkHpO4+]gHDST7s#<C0{T');
define('LOGGED_IN_SALT',   'KGV7v* 5:g|9Wbshi;-[-~9f-eJbU [Qj1}[.kH4Ev9WpnVIAJ#Ws|G>Q TpwH5M');
define('NONCE_SALT',       '.},f| 1Ukb`Di4(bm+!e;roE{3jlCr>gh)Ri<s+2F7J@2,?L-2B}Q<}YG t/jre ');

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
