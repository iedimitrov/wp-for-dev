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
define( 'DB_NAME', 'cloudsky_wp767' );

/** MySQL database username */
define( 'DB_USER', 'cloudsky_wp767' );

/** MySQL database password */
define( 'DB_PASSWORD', '-Sa-174pvl' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'o73suy1lgif0y7tux9ksmiqm8yl1p5anyhnfrebvymudyrjh97hou54sserfd7wl' );
define( 'SECURE_AUTH_KEY',  'xxjdptqohop2fyskyy6ydasj6jzdkwo1lq4i5zid0kgclvngjo9ssjhpa9d7yokm' );
define( 'LOGGED_IN_KEY',    'zubangvbzpddjik8qtixm0ulfq0spiegl3mngdamc0hw6bufu0la2gkbocoqhzbe' );
define( 'NONCE_KEY',        '7ik3woelfxoi4rxhma9qjzg173tw6bvv5xlcgu7vzxxgukgwnk0stwcufik0z6kr' );
define( 'AUTH_SALT',        '8s0365wtvhzqm6fss5meopchf2jloo5ybiwag6rn1j1cgefk1j0nschkxcqlbqr5' );
define( 'SECURE_AUTH_SALT', '0gcupfgobf1tjze5rrk1xsomozivgtxc6eu5ykxvdxom4r2xevv12iod9hqolabl' );
define( 'LOGGED_IN_SALT',   'yzmqhaprivkm2nxujzqb9kzb2tyfiassfchqgdp8jva94xkclwcmxxafsqecovve' );
define( 'NONCE_SALT',       'elcr8b0053jwtt6e15mlw00jxlh2oh1hxrliznon19dixbs3jphjreknv0bhewgv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpq7_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
