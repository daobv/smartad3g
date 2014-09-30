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
define('DB_NAME', 'smartAd_3G');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         '@Rg~CI<,di.!8Y#uyO9c.U|AMa)N;`Qd59-A_[],JPeG;tG,_Vz*:4/Y~:#C(D3S');
define('SECURE_AUTH_KEY',  'XN@$/*}nMgvx1aLR2@h$-bHyWkS-0VPncd#X=PeXSwq-f:k9)H7v-Pn4ZhN|3tlb');
define('LOGGED_IN_KEY',    'f+iZlT&12eitX~G2]MQ<o)m[0/dzJ@#5hc8)fEB8#~GGU,xIQKIQ48>;c,0Wo0)]');
define('NONCE_KEY',        '([tayO~P:{uONq`Sdl&},HUMFseE-Ysg0i!NR<UXiC5YYSsP&gAUj[*)-C%oPGLt');
define('AUTH_SALT',        'WH>sv5I =|sEE|[05N&+L-z uk!<q&++dw;{g{=}|c>xczWTSt]tD}Ir-HsLJU1[');
define('SECURE_AUTH_SALT', '@B1K4o2^-8X}hOF t_DGj9Cr5DC&^m4I+4tr/(z5a+6!kOObbZ/||o>1K/,WR*Go');
define('LOGGED_IN_SALT',   '+a%~`oGsp/;daeW#MmYEUQ<,5 |L~Fc>`^v%1|Y ~q?R~?ml`=eI`xh(g~Xsgb7t');
define('NONCE_SALT',       ';ZDeF18 )|#M!*LoU3+c-q{QO9+r`_sXlFC.U.}f/mQ++Cc)oTR3#0E.n#(HrMyM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
