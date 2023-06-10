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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '[I?f.OG4|u/OQ~kGlz!2R?St%6Rk%B+IV=cF~@:nx,;4J#>e B%{s|u}&:gix<Bs' );
define( 'SECURE_AUTH_KEY',  '1yW3uBSLR,=Tq%l5NqtrXzNM~az?ybe=s5$VNkTG$S,yWmz)4,Fr5sv&%tj-HoI~' );
define( 'LOGGED_IN_KEY',    '3y/C{ExC]:%ACwLq:`vQ)]QKB&p@h<tNVGO1e_a_j4FtbsH>lucOP(O8lEr3DR;&' );
define( 'NONCE_KEY',        '7IHP*3`]](4-vdFyS=N{ Dhm34#pS_y>I[AwTyDjW:x%CQNc{Jc`{ZB2q($0$KER' );
define( 'AUTH_SALT',        'zWyRrYES[Qq9s*}]]fCT2N9cg^hb,B?b]6c_-qb]4Qa*i&Cn7_msP=P4j/(M`xHE' );
define( 'SECURE_AUTH_SALT', 'T9o$C4bbqzV.??Cnx?}B4lWt3.bA=MKm)?6+&ssI5*;v4hF.SrV!wu [E;HNd]Hm' );
define( 'LOGGED_IN_SALT',   'G#[(aheo{6f&]3ugj9w)nOGXHr$!nU18ZfMNnmI{;a8Z]#IHVv*;/VeR/L6?YUSQ' );
define( 'NONCE_SALT',       'bkx$(+UD]B@laLdZ*Dmp]f8YEj_A~DC?_A1v+~WUWLZ^?Z*zR2%iq4C~A2n[Oyf.' );

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
