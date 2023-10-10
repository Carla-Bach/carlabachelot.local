<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oz+F4Wrjc808RSp4j4xVlhLFgR8FPFdPmpOwMONNYc13CiJcVhTrTpkVy2R9wXIvgvrCUCrWbgvAdFrTIDv5OA==');
define('SECURE_AUTH_KEY',  'wrHexbkppp5W4WYldPqeBxcGFg6f/+3aUu6eb4A71T0haupL4+3hpbvh12eV+0VrliNWbqy1XaDD7svLRgFbXA==');
define('LOGGED_IN_KEY',    '2kx63c/Q8oimx1P4XvqDqdm0NulnQwtlZJuhrjBNM84TLEkpfQjqjWjy+W4wCXiukjQFdqtXtxm7Y9KlwFopOw==');
define('NONCE_KEY',        'mm3cgk9djrjdeH2vPyRRDIFvReLjeOJh9UxfTcVOaXxZHnqid07idsnKva6yZxSGlYV7hNy+CXyQ3704PTQpmw==');
define('AUTH_SALT',        'C9vO8QA8exsiXfR9NK71M1WE1C1FmJjFjPGJJrsRksVPz9xPFeJRtqXDMnNPQBMBQ/IwZW9ZkYzrJlzJ4iuGKw==');
define('SECURE_AUTH_SALT', 'NR/MJhoqmgF3aNrIBrJjy6fLZlSMiI+Va7Xo4oeml4v83lApk7LiadOjD+flUCo+S+w60csl+XyCGP9LAb8/pg==');
define('LOGGED_IN_SALT',   'uv85U4NIb31QxOM5Y4XpMUPFdTw3AXhmfMmt+9BVLiZDhsKIhgONhz57e73KepBKBDJcF1afJIpKOvrLYMKtcw==');
define('NONCE_SALT',       'L1Bh6fpyOnz0tYl1gynhrSUI1Zp7Aw7fw7RPRuPRZ8lNDxpZHKttgsSZxZ5IL6yk0hx2CeY2Ax9xKxPjt6W61A==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
