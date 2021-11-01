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
define( 'DB_NAME', 'wp_test' );

/** MySQL database username */
define( 'DB_USER', 'damian' );

/** MySQL database password */
define( 'DB_PASSWORD', '33damian22' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'cydKfJvkQd0T%WgGWJr_xTZbQ:zOW-M8wdt[S<wQpzr)g`poS`3c8v_|>w{K|d};' );
define( 'SECURE_AUTH_KEY',  '(2;mV0F:Fn:uv:&Ffxr%lz?!EYL?WYu7Yaf^>3^_F7@y2PSyYv>mRhDdU Jt0rQ>' );
define( 'LOGGED_IN_KEY',    '!~PsQ,y1L<=8!Z|9>tZd!e{q0}&6riz`wn~XJ.lv|.0d**F+Nah~~HC6(zgcL_~A' );
define( 'NONCE_KEY',        'G?qGdmF4UdAmQlq.TkXEMfj!<l+N,Kjtav=XHbki-B8;Y9P)i[=p)Z!Vnnd:gb3*' );
define( 'AUTH_SALT',        '=bLphV|mJTIm;4sKi?wM{?Ok>1#)]=%]/9LQ/-&i*Y %]6);&u=7gsqLJwG%EuB|' );
define( 'SECURE_AUTH_SALT', '%bFQF:Pa&=>[o|h*@KW#gp^.rH&W[;!?9qnv]>k~*!->C1K91(v$DOXQ.l5 Yn!*' );
define( 'LOGGED_IN_SALT',   '<pu/`@I*4,Or966D*sR70DI*53?twgVCb#M/od?T%LGPm!X7=#GwT(?fog:dIsj+' );
define( 'NONCE_SALT',       'Q>8l_$`; t>LW(ElK1q{g-EJ#;lAxiP! ^D/H<Fyy({KNgJb/1e>eYdc_#J_y6Ll' );

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
