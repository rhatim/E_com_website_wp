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
define( 'DB_NAME', 'dbwebsite' );

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
define( 'AUTH_KEY',         '=W&Zc-pDW)^8D8^Mm$ZHx|C=j2i1}rh`+hFpA&om@R_h(3MvjaOXkI]LT TK`W2(' );
define( 'SECURE_AUTH_KEY',  'E2Z}%4tu28A$lL-dRr 5E LK*+4B@kZ> 7E3,fC{Sm7.ZlL9HZatG=IsN,9?GE{[' );
define( 'LOGGED_IN_KEY',    '+ucmZyp*@meBg/H.d0%A/*P%81k7@dM${A[aP|aavM`}^@U8ZbnaqCZ~kJ8.HhH;' );
define( 'NONCE_KEY',        'ip?uGrw!}jmJho$)HhpV8m6N:9WqpP@P/G( Mi,=7d.*:Lf&CJ4?w|p1$G-qu)iH' );
define( 'AUTH_SALT',        '8V@*JTjsImb<Ja{n4o@e|IGo5[>~xAdw8D:^h#[d&G3J)r3RDDphE:O;|HvLH~[}' );
define( 'SECURE_AUTH_SALT', 'vl^2Wmvt=.[&k+.c=`snnmuB &y0u?YG(Urpo/=<[ ,o`FedkpWkt{wj+57pJ&b.' );
define( 'LOGGED_IN_SALT',   '?Vv8l$nlrrO&/#?TQ`7mPWeW[eKjsQMFsBd|A0vx>}*S+]-B$UUumfeK,2.n]*L9' );
define( 'NONCE_SALT',       'edG{XJuga#7o9dY+-Q-Y(j|MS_yM+V+}CTy<w|wIgJ-Os8Tpe-d}UbEM~3ezNpC5' );

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
