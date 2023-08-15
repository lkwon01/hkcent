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
define( 'DB_NAME', 'hkcent24_wp545' );

/** Database username */
define( 'DB_USER', 'hkcent24_wp545' );

/** Database password */
define( 'DB_PASSWORD', 'p38S[o17d)' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'rf5d0y04hjbmcthhg0mfjfl9wx9js4oqe87n7rri4wvqnh2n9lha5nvh99hwrtqh' );
define( 'SECURE_AUTH_KEY',  'zdxyq5twehfajpdzptmezvjhqjqi0tfrbs1wng1lfxv9zt34gykfzd5f0tpnvosc' );
define( 'LOGGED_IN_KEY',    'so9bcdgmhgohygyw01yonbp7zff8ws9g8cdv4swbr09cserfh1cprqwpngq8wc5u' );
define( 'NONCE_KEY',        '4pyjphj144vdxoap4oxpuoxthznbhotrouackqce3tkhlsnfhihmfend2zfhztnm' );
define( 'AUTH_SALT',        'ufkgahg5hggwpew4hq1xxnd0ahica2na1jkhm3ey6ghttatnfgpswtfciu2py7ut' );
define( 'SECURE_AUTH_SALT', 'z9rwzjbevwft99iz9pyrz3yh4rsaro0zkbh35vtyj9tm88cbr61lm0uqsq4l70b7' );
define( 'LOGGED_IN_SALT',   'wwxp3kofrcowrpixww8zdsmmz1mqkhjirtafdm1bjjc4cfomrsldypjpibe4d8lj' );
define( 'NONCE_SALT',       'u0qmmli5nncgdv3bmuvdrzqpobgiyxaspwfunazc57pcehjjca8qfqonwcovuntj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppf_';

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'hkcent.org' );
define( 'PATH_CURRENT_SITE', '/Dagengo/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
