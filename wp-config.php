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
define('DB_NAME', 'shurre_2');

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
define('AUTH_KEY',         'c@qL=%uJ. <6d +&7m8^vjzET$*I%_D:F$l!/riOQK5*R#;2Q%~S-_mMzg*~CW.$');
define('SECURE_AUTH_KEY',  '(nv7auy6cxaib;`aBfbRV}5Vi,;y91!@75~er%a76*4yaoHp.L79F:]O.hz_/6n9');
define('LOGGED_IN_KEY',    'GNOu$53P>4x*Q7;{},/x6++w%Qhesnmea>PRo{(^!cDGk25~(5Ar(!+8URzJ--i}');
define('NONCE_KEY',        'WrL,udgp=^q9@^vW<9`J6E/b&P,Y!mHJUd4F8g(*z6<;Xg<kL9q,ObGhZ:Z Bg q');
define('AUTH_SALT',        '/<ifg!-brnz(2L+!EGv*s:6jLa-+/o`vfdY8f)G_*(qNkbb[]c19p9Y3Dya;B5:O');
define('SECURE_AUTH_SALT', 'ky-#y!b}}C>u:?HrXRe`s|4Mv72B_?bpVSJYAnJvV!<bwrb5]CrqK]WQ<L_!KhH ');
define('LOGGED_IN_SALT',   'X3!lp#Q2sw.Grm|,wEO9O)O4/:9B&S_,DRX  NK^fD>aXKz{B*_Te7DNl%on `HE');
define('NONCE_SALT',       'u{Wd@5qp_wU-1*Zu.;O]Ko|dsS-PnA@1!]Bb+b:>zc$g+}GK(e ib/vl@0vi)^$v');

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
