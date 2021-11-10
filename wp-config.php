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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'myplaced_WPBKC');

/** MySQL database username */
define('DB_USER', 'myplaced_WPBKC');

/** MySQL database password */
define('DB_PASSWORD', 'KL:qNsu*RBKR/.DVa');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '8c9a88d8c08c0fe553c0a99bc7cc339fd8a04b4887137cc6eff520278ebe489f');
define('SECURE_AUTH_KEY', '45bdc7142ab35cbd07dfcd4eba46a01197e1ffabcdefd2dd28751e90db17e2ff');
define('LOGGED_IN_KEY', 'b52ae1ba3454ef9e23d9eb6d9d03c32060d38fd9ad2d44e0480b5e2fae3528fb');
define('NONCE_KEY', '8ae0ac7a16c9912b94a783fadc573886c61b5b49d3af61d249123dc30db0959e');
define('AUTH_SALT', '5b05ddf16e33a8953c4d65f23dc0b74c53376ec18834440eb46b3cffc3377d75');
define('SECURE_AUTH_SALT', '1e298e3a81261e1653487f8aa82f68a035ca6081870ecb6d86f3bd24b1bb2bfc');
define('LOGGED_IN_SALT', 'b2cdc794bb887a44f491ebedb2f21bdc07c90b3e240cadf5604f651d8f1bf5fa');
define('NONCE_SALT', '8b033b4466f46565e7c397565313962719159d4ce4576b19e50cbdb57d86c2ec');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'PrJ_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
