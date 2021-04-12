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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-first-assignment' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '}O$5;I1zn1?-ds7iPXkBYRa.$Iu3)ts>9)nthCz|BKX{h$xlZu]xtW16}4B5Ha!c' );
define( 'SECURE_AUTH_KEY',  '=$/#wp;Daoaa5mIfk$5`?ggm6qv#v<@:Y/t#=G7[H,jw*YJmSeyDzpn*[RaV(bm9' );
define( 'LOGGED_IN_KEY',    '+yc*YBH};t(c|h=B*qbm3OcKPH!/k5hF>28}2*>._f3?q|m3@0(7.4bCo-D!(p`y' );
define( 'NONCE_KEY',        'c`)w{,;0NA/:}PLjv]><5CuKLO8d/h wOdD`cW_7Fy]^;~_XT^X9/k*qSLrn}3Rw' );
define( 'AUTH_SALT',        'C0_exc?BH*X~EOLt61t^f],35 G,|boVz~J:9~tPq!`UW.uGjjHYwkJPg,2|&9,f' );
define( 'SECURE_AUTH_SALT', ']FB[`MuT4,3gnoB&V8:! V1CsWd#G? sKllu$QjG R}-7k_H[6Nf/,pG^S52Sa*B' );
define( 'LOGGED_IN_SALT',   '`;_a{BDj%Q_}PT1iXV<`t)E5/K2&AkF1:B~zS`$K3xrV~MzBfZX;e13D[vswA`GT' );
define( 'NONCE_SALT',       'I_E[y,ib>GlaJYNP|9Tq  #[V>o,6d)J~nOV7_iGZ!>/KHhjbOL*(0v)f i,aK8@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
