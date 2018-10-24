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

// ** MySQL settings ** //
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
define('AUTH_KEY',         '2StPKSKedDCFHsXfHTY8S2HwkNxeT2MclInaKGNKANuI6g2ebeXpn1yWBaSCJZSln4IZIwXVnSrdOyJFrA9e0g==');
define('SECURE_AUTH_KEY',  'H7lM6D0RdI837EMZTP+BOrW5xwzToZkqT41ktnPKTAI+diyVIJlLOe3NkytrpJYHjM1fvath7INtcQ6W+RsRoQ==');
define('LOGGED_IN_KEY',    'JYuq7r445sBWc6A3Y0OgjSRvh1CRABiB7HnIEUGvhr2NiQaL9+Bc94GEMWNVAFkRrb7opvispCPMFNRXkUJ3/Q==');
define('NONCE_KEY',        'HIjl+j1Dr7xPSS8irotA3i/x41TIe6b2oeUuG+LaRUJFcdz4O5j2tedvEmPlCruvtHWS4pYk5NrJtfRaJTeM5Q==');
define('AUTH_SALT',        'yyeHzKl/xOuc1WaIZ4zAIB4DoWN5L7CY8qiqFQj+eygyRKTgf6mni3q6t/NebMY5KEzx4PicYRqt5zOZN8jAEw==');
define('SECURE_AUTH_SALT', 'Jlz7SFd0IK98GhW25rsV7PS5oIkOu3Oxk6YkxnCcTH2j/SZg1/yd0ui0gyIaMHUqcJT7smgrvSQm0VRW9+6iUg==');
define('LOGGED_IN_SALT',   'qE2HdgJh16ehWlU+iT/vUd8kHD9mshvGbMBlqBhDrXqNRAkgUXZnYDvJQ26Oqd3j0r2qvn6N/1t0mlvPpNlZwg==');
define('NONCE_SALT',       '2f9aRJCXjgPnNEyiwb6ay0zbYsT3jsth2oIudXUjmi4AVZ9XaZ3AHdz59jiLPlPP5sxunvRMGe1tiZcNSqDnPA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
