<?php
define('WP_CACHE', true); // Added by SpeedyCache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newbasan_wp524' );

/** Database username */
define( 'DB_USER', 'newbasan_wp524' );

/** Database password */
define( 'DB_PASSWORD', ']56A(pS8k1' );

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
define( 'AUTH_KEY',         'smpnjt16fgf0zrbxwozyrm7azptfypebkucptktyboulntdx0vvepdmqse6twyeg' );
define( 'SECURE_AUTH_KEY',  'nllha3sniwqpaisy7vz1ogkgkm0tocerahcflti64nrjpxr4nx9nej4jhvoayoun' );
define( 'LOGGED_IN_KEY',    'kruy9ke7dajx7uqypq3tyc28dlskvrtgssoiup2xcllvpjodpaakyusfuos4kgih' );
define( 'NONCE_KEY',        'vvfxm4jsvmprrghiztiics0f1wpkogl0mbdemxfwztmzuwsqqek41ch8kfkwttsz' );
define( 'AUTH_SALT',        'rnqqujze1xg2qhifvidbbby690vphqgacovbv2k1tfeggsykuytzuxlxsy0txm1h' );
define( 'SECURE_AUTH_SALT', 'l0zkfjywmzeo6iliab2m4dptexoxbaq90dt3zwrcha0dhqizi0xsj8keddkejxwz' );
define( 'LOGGED_IN_SALT',   'yquzofzq9xzdvpttpn08z2pltipmnnrmmmtm0lsub6m6pn8djd5ouyy2nrdhjwgk' );
define( 'NONCE_SALT',       'cenuiopru5z9axfteerr8ost8r4dbkueeckj8euzmjeek8iofzjvlkhggr6mofc8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdv_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
