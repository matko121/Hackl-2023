<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'offsetcon_wp999' );

/** Database username */
define( 'DB_USER', 'offsetcon_wp999' );

/** Database password */
define( 'DB_PASSWORD', 'H2p[2nSP6]' );

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
define( 'AUTH_KEY',         '2c4dnhbbbitgblcqgqay7xcpvc95nkg3yqdnjp4ivomdnmxn2ka5rgcgevqmu2yo' );
define( 'SECURE_AUTH_KEY',  'uxca2g2ijzbpt8tywu6wxoxbcz7ouye3s0oiwtiiuhegid8io7uaxu1lz00gbdzi' );
define( 'LOGGED_IN_KEY',    '2tz3ysae49q3bvzaxgakhvikjgftu0nyb3vy2nmivvs4htf1g0vjpjoio2bm9ddv' );
define( 'NONCE_KEY',        '2tzgadkrh0vdsoq3bemsihr1alasjxkumkvqkvdzkebfzg4b0yafqxyxds3gu5uz' );
define( 'AUTH_SALT',        'zm1fyxwoinflj4ohheogyptoyakjv0a5fjpwuja668gvb6fmzvdvn73yka6yl2sp' );
define( 'SECURE_AUTH_SALT', 'ortandcjagyv52q1iqgma4czoe4sl6kyv08l04u4cd6id8coemgikngsmj9wjc3m' );
define( 'LOGGED_IN_SALT',   'okc0xgcdy94vwyrg2nj0im1aoobwvvxfvb8dkfhqkk5fefhck5oy9xamycolqrsi' );
define( 'NONCE_SALT',       'gj7vynopvb2vanbgieqrmc351m03gtgazrvlsshwhdru6urue8jvnggd5afler3x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppd_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
