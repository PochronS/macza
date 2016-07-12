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
define('DB_NAME', 'sylwia_6');

/** MySQL database username */
define('DB_USER', 'sylwia_2');

/** MySQL database password */
define('DB_PASSWORD', 'aneta1');

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
define('AUTH_KEY',         '864efd0a379f436ada9919cf09926368a505fa168622bfe592f83cc82fa94722');
define('SECURE_AUTH_KEY',  '7713e861992e1ba1392cbcff86bb84bbf35835b9098a137f8f5e8c15e4d4c578');
define('LOGGED_IN_KEY',    'eccaf853eb545db9b4685a556bc87fea95fb883231cc5f84777023f7312e6840');
define('NONCE_KEY',        '7e954bab7c578202ce0ffcbb93f4308a57b17ef6d774928c85cf455516d982e5');
define('AUTH_SALT',        'b27b2ae5c8be74725d3c89ddb21f62633d298b54c8faa85417a63caebf9ad9a8');
define('SECURE_AUTH_SALT', '1bbf2fdf0aab2cf307623fdd5e1ec39c385e03d91f1d39930ea7f83bdf44a660');
define('LOGGED_IN_SALT',   '9220fad34727465528975b48b4dd670a3cdfa0224a19b1bd05cbf286f7712943');
define('NONCE_SALT',       'f00bbdd8c558a713b408bdd8826f4717b56a2f003beaa59fc88544919d9ea0d3');

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
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME', 'http://www.ziolowe.ehost.pl');
 *  define('WP_SITEURL', 'http://www.ziolowe.ehost.pl');
 *
*/

  define('WP_HOME', 'http://www.ziolowe.ehost.pl');
  define('WP_SITEURL', 'http://www.ziolowe.ehost.pl');

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', ABSPATH .'wp_content/tmp');

