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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iO1vMg6j+Ow9V/fSygIfTQ69j9ijfgavi/DZxSf7QONIQ2WJ0LrGeVVbeuLYGNwEMyfQyiS/N0AoXXqSuK3S6g==');
define('SECURE_AUTH_KEY',  'NDlX21KzTiQBVDaWkOiLWO9fA6vWRB4eSGMF98MTpoLXg7ImQ37f1tUr8BkCc7Iu34BFnuWz1q+LkT54JtqCfA==');
define('LOGGED_IN_KEY',    '4dba2g4evMRv8VGy9/tXInNAcqpj0ZEC2VaLtWZfHC0jONXsuizvLJK6in4rLdFxiRetOOPkSbf/3kbm0Q4ekg==');
define('NONCE_KEY',        '6CZGHfLtrfM+g2DtJbweoeEiTKRpL4wLBlWpzr802yaJ17GL9taWG9t+eICaLb5+OPpSR6jPMFxOB75iYUgi3A==');
define('AUTH_SALT',        'XqMOGDF7wnzfsvq/WJI2EiO8kAXJKNnUcN4vsV7HvXzLLnkhnwS5e0nV/YqqownDGZAHo5h++uCxPDXDfFGHzQ==');
define('SECURE_AUTH_SALT', 'vUdZIF8zAW6rfElIr+XIMuOLUjnlSGIuTZrsiFHQ+vKLcpk4vL+jA0dJd6j5OkhqNMeilBPlypcs8t6ylet88g==');
define('LOGGED_IN_SALT',   'JX+uoRCl2gUOnhvWfUsvNSBa4/tfTxRzS+NxV/3m72YTYX7K3vFZiDvsl20UtRyL4n0IFLxk7Htpq+/0OhHZBw==');
define('NONCE_SALT',       'rzIFCCMQUELE8Rn7K/n63V1UqGnyMwuvNTvWq/jMu+6LXZ8hpVVdXcv66iQOT5wl63EVCev0UX3Gim5xA8FmBQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
