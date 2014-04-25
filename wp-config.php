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
define('DB_NAME', 'entity');

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
define('AUTH_KEY',         'S[}~;oxB*qO1x}L?GAjI{H/r!Pk~n{*{NhW82M%_^+JGYO`y$ ^WouuYZrVIok5D');
define('SECURE_AUTH_KEY',  '*^[Uj<vujWlI7V!<En7)Y#cpuzC9]2tB0ihv%#ASHC[>No&hj@hnQtc;$AAK.yYb');
define('LOGGED_IN_KEY',    '(Irebjx+Y&*zH/8cXkEp@!xk7Q gJh#EKU>paHxWQ%_d-Vaq9Om/54?V. gka=9x');
define('NONCE_KEY',        'NzBi6PH|wzz6he)cff@L7wDg 5ks^ZtxrfiqKHTN|H8^|#eZE}aI+kCWeD>BSedT');
define('AUTH_SALT',        'Bu!a#I*PhB8G`C n-nQQ+4<6n%z/n87qrV7`bo`tLo<}Vuo.?G>/lZq!54;^nm:m');
define('SECURE_AUTH_SALT', '$%T?f9QZThocf5]Ag0[yId6^Y={48:pKLHO:>sG8|s@.:.i|;!P,yA9EbOQ[h~N_');
define('LOGGED_IN_SALT',   'Xf^Eta+bk~!s*_])Td9rkI<U,CxDoOUy#%#9Bm3yOuFPn~3>(2VVnSSBr3bRAA4L');
define('NONCE_SALT',       'n+An3}Z~mOAY`Dmu(QwGo%r&=U-G5*X,.R2ALSD)8wmCR<kr0WE~$.%N7_R,NAU}');

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
