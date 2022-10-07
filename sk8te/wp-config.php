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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sk8te' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'u8vTmZO3pnhW0f4E8BVT21hqJLmrPbrkQczkzwXd7T47kg8H5ZEOh01ZPN5nKIYq' );
define( 'SECURE_AUTH_KEY',  'tAJkwAQeCJiJh3FPbiBw1TIVBQs3qTUPIVuT6VPhz9ycVltA0ewyqpwFHopjQOMq' );
define( 'LOGGED_IN_KEY',    '76SVTpKUbdCn0dtwQ7DHej69thcGzbnDDPXgS5nT26Msvfj3ZgCADjM6DMiKIdWS' );
define( 'NONCE_KEY',        'IB1wgdFzKHV23oievUFTsIsmlIVkItQryIpDEdVvs42I700tOjHCQd3vzbccAC8l' );
define( 'AUTH_SALT',        'oMPfrkgFpv1Qs2za5xOOYS1iyqd9MbEGiAh4deRmTIi8xAJaw46BRQGDZrkeQt45' );
define( 'SECURE_AUTH_SALT', 'PRQFbY7Om4xZmSr6rVeCZ1FLLpfPIJtlX73QhNr8oY5dXnlJJb2ZMbQhi6kdyGgR' );
define( 'LOGGED_IN_SALT',   'MuJ3WUiNwKabItPD5clRP3wptmzQRgh8qlKTph74RR3L9HPvTzff25FAVe4lY4Ge' );
define( 'NONCE_SALT',       '1LmXT2es7IV0eO5biKT5Q45Tvn9uCoqHbt66HgkYlBaSD9jexKEjxS2KvQIOTcbD' );

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
