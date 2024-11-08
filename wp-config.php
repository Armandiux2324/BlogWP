<?php
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
define( 'DB_NAME', 'blogwp' );

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
define( 'AUTH_KEY',         '4h<+ZVMJZK|ZpHJEfW&Q$}_P*4r)!r^1PWUO@IXM+<+b?O}]nJxV]*R7brRIy5gv' );
define( 'SECURE_AUTH_KEY',  'JBV}Q5Wx!heRXnM{,T)qrMxL}-LOGGFg&8I24n3C@Nk:Szks-Xduu:bg1DFjB~Vu' );
define( 'LOGGED_IN_KEY',    'J`O#I~L>vXq%M-6TB[*XH#_=&yjRK~q96rMO9nk]l__ozIyM]BQdj=#b0oxEG7/p' );
define( 'NONCE_KEY',        'xuP*Wi(]%i_5aHBb| YuG/hsU]ydX)]A`p}K])a76iqT),{3rhD4!,es]NZ_yaw,' );
define( 'AUTH_SALT',        'yT%~HZffr&aYn*iwK/TTpN7_$T=`pSFy|++PDZT(c:X$`dbm(P-_cc/S55.,BmDu' );
define( 'SECURE_AUTH_SALT', ',i-^yr);U%p;$T{MFy&`o@S/AolWDDhV/^O(<A*)vQR/%70dCxx&6*m5]3oQS;7I' );
define( 'LOGGED_IN_SALT',   'b.tlC%E=DFC{?a(/9=AI-l`Nz0utM~QYL0&`5q6=a$UEM~5M[2c!a^g+&UM0X3Nm' );
define( 'NONCE_SALT',       'WLLI$m4;uZdAy2Bj#BWY1yUW[bM@4P~5eKPYL-JEcD<#|2j #1+bGh*5EIC|Cr<w' );

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
