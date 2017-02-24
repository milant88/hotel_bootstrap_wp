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
define('DB_NAME', 'hotel');

/** MySQL database username */
define('DB_USER', 'milan');

/** MySQL database password */
define('DB_PASSWORD', 'Polasata88');

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
define('AUTH_KEY',         '?4xHBqI^iR.7WR^Xbs.&b(EWPXx!TDN#pr<0*6lkO~E_dI%&zd/_(oH3HQQo7RsJ');
define('SECURE_AUTH_KEY',  'tR0z8`|J?|f3a2<Bb2+.TVYw:;&!?~B55!uW077|e@ENCK07dx*s9_ 0s x9M^L+');
define('LOGGED_IN_KEY',    'N?G^.wX|_%>,i!}91(^00aqTVFC;~@*pO3l~S{<.)M%Iw<N 3hJP$7PIo1t:7V?f');
define('NONCE_KEY',        '%HPPA>/zcN8SWB8R|H*/)H.TJklFS)5}<u%*}{QP+W;Y@FY6aGl8-}} i6x]a9[q');
define('AUTH_SALT',        'd&j`d/#ElV>eZA4Xlx}+7D,V{GG<&apx9zMF[_m`F>nD t6`gU>|mygUt`D2xhz8');
define('SECURE_AUTH_SALT', 'FJFTOakDwsDNo:>W{uC7D-E[KRFl$|zT)f~BY>P_}U_NYAtt<fWgU(MLNQGyFI9&');
define('LOGGED_IN_SALT',   'ZZLteY2G B`-a!]V9,]2l)Q#Pr4E]VVz8tp8M:.+9bN{$iulbX$O$jBU4(;V8-6W');
define('NONCE_SALT',       '5$gR%uV6O ]6|Kc~)aA.$w~GRfMxK,k):%TaRPMepFG$wh,;n[ipR=)+/ %t{ep|');

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
