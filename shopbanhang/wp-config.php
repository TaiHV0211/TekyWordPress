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
define( 'DB_NAME', 'shopbanhang' );

/** Database username */
define( 'DB_USER', 'shopbanhang' );

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
define( 'AUTH_KEY',         'qC9mvaO]&b*Zs I#:N?6u2{YadYd3Td M!i`m/5O*6>9K)X7+lAUj+FPfN+B/jLk' );
define( 'SECURE_AUTH_KEY',  '5brDpbn()fF?f7iccEmFXP0FR]FqzNoV<DXNED@l$poqeNGjVf)y>5u*5|F5/dk2' );
define( 'LOGGED_IN_KEY',    'h@RESA+}J-a(E?H[PphtYkLg9wfeTDk8Y$2oDe6Q&LP=rQSzfeZj`*_z&*8c m.*' );
define( 'NONCE_KEY',        'c3^aJDwO%Wn7]x%<b(&23Ja&s5oq?t8:B9RWxcq}sbY@yZ(zt)E&*`#O{DS9RWlL' );
define( 'AUTH_SALT',        '|-&b}E<B6vhe*~iz/WLUNn)dVq:90MWBS_~orm#xHp>~a]fdWEEYB*}9upS~Qf-G' );
define( 'SECURE_AUTH_SALT', '3Q/f7VqG7RJ+w`I(8-k,_}[9huF{(IzEjk2{q|xU]*_P#O-vmtjX(B4}EIt|`YtI' );
define( 'LOGGED_IN_SALT',   'H&=>PT)kJ6z,h&,li*7^Gq2$n6:A#>Mz)dLj_}}[A9r^$o}MLe=/<2$%,O)WHD`}' );
define( 'NONCE_SALT',       '4aj81sXbv^*?Sz:QP`.=,f&.`}@UJ}eCcWD*(pPFgH=+xW-09{iM0 +I{9TcxW^U' );

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
