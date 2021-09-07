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
define( 'DB_NAME', 'webkahve' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'Wk68PjzaWCj5Uk5Ic5PZq9lycxHQ4axiJ1poQ6kLPPGAvSQ5SpbKRHwE4vYYOdMs' );
define( 'SECURE_AUTH_KEY',  '401dp5Z4bk6XFCNG4Nt1kfFe046ZE8m8qbYcjc4aoRyLC9tTSSSfj9VLmF6uODtb' );
define( 'LOGGED_IN_KEY',    'MncoQen0Aw2m16nqIjJx6QHmjgfJooVkDcYlelYtfZkDElRtJ2aoBgvDTyrSKbAa' );
define( 'NONCE_KEY',        'JWyCVkDw0WH0BhYltYc3SFpZLmLWHmH8QSvxpEoxEmgo2O323S889FnigSOSoICy' );
define( 'AUTH_SALT',        'UqaQjnKQvYgeT1azewWM5wVn49IfdIQnn2umEDubd7bIYBq5V38AoP094UbYLA5x' );
define( 'SECURE_AUTH_SALT', '08ntfqxjGjaznbi1iTv7f7rS3zcf9YGjWGoKlzaWS1Os6oAcH6acFjk1cCBWt2FS' );
define( 'LOGGED_IN_SALT',   'XbO7CpvP8sAz6i0I4AjfnqIpF6L9Hob6KxsTvm01vT0cmtvEle9aaISUUilPAlRq' );
define( 'NONCE_SALT',       'G4N3kGQ9DFeamM0lZ9GgcVgHQoRsX8PUA01AoFBTAjVUp71KbVGUZEyMZGb6qi5J' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
