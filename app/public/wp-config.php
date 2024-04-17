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


define('AUTH_KEY',         'WmA5ltTQ4lJWRBkfdUt45YoprCXyTM0ZWOrxPYjj1BdvOYrY3pPnituk9/dY4n60cnkZpypRP9CFlX4Or6a4PA==');
define('SECURE_AUTH_KEY',  'whdMCAa2ewaj4Ey/0zsPFfWYpMpoyDESZjvkzZm2D+2CWlc06uAaCFp6UUFQUF3pvVmvm+FuwK5HVgRO5hiczw==');
define('LOGGED_IN_KEY',    'l/dODddZ37kwoMY+bqkU3jSNeiC/nMWkhlYLL82sYuATJTVHPc+ZQjurOdvzbNxQmVP2oaorxlsJ08d2qLy94w==');
define('NONCE_KEY',        'S0AdUIkw+/qiMA8JWld7/sVfvdY0YfiBXaZcvmkaRw7f+Sa7OvYpaJZDNLPxxsZAXqKA3BZtL9Oz0cqtPJf6yQ==');
define('AUTH_SALT',        'u4uF42oVoXr9hjmKJk4mIKzJim5UwFO1XkMEuLa87Dcd3hSNAvlAqc3ugWvINvBHQ+/dSqKgm/AGQtr65bxxRg==');
define('SECURE_AUTH_SALT', 'OeQoPKhd6AQrO73MaK/+ht4T4euD+6khXII64JDTvMmdylRJ8C+Gk7q3zSrvN56S2+EmJ4GtS5hzGevZx/heuQ==');
define('LOGGED_IN_SALT',   '+5HdqtrMSQIvVwZKN9QQtEFGSSUs16lk/RfPpOzXfQs4HIY/HHq6Fgd+nmLUvyyetr/NrvOhjne0ojWjXe4xzA==');
define('NONCE_SALT',       'iuqwm+5cupi2C2ADofGX4I4Rvzi8txF5rGLHXFlu49D9z5N9V5A8ErZUrM0PDKhYzBmgDuNB6Z/oFhu/hM/Idg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
