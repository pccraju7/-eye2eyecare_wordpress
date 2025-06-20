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
define( 'DB_NAME', 'eyetoeyecare_db' );

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
define( 'AUTH_KEY',         'YwSH9m@wG&oxb@OZT=X{C3[3{t*Z2r?(hj6ZdSrmxzt`BL<tK&is`2f@rb_5:FzD' );
define( 'SECURE_AUTH_KEY',  'TX6j0baP*a5I~v:^NecdZ,/owtkcSda/])AJ+r=0v;XFyy8O(>5MBjdpJ.g<L*CC' );
define( 'LOGGED_IN_KEY',    'n>5vD`S8?J3+D8L:,A86w=RJ5Y)I19K+sq3L_46b^b>sv{n{UAj`{IicjOY/jAH2' );
define( 'NONCE_KEY',        'xUZ_eaY<a1b&rqbEN3ZqFY? 3F8!V+*G@ m}$0I371d];;{w`Ds40/j?6Df74Xo,' );
define( 'AUTH_SALT',        '+STvV:/23J4;|tefi#ght5VTi3W1OYgu`~{{`.Z``^r5}&OcmApJUN:tKT>K- ,*' );
define( 'SECURE_AUTH_SALT', 'm;Y~1b=IYn=M;5e[?tiw%@oga0[Y-GwUq SVaOn!0. IHQH0[%eBB[hEPtpxc;jA' );
define( 'LOGGED_IN_SALT',   ';,]V(70d2[u(%o4yQV*?O2D&)Ec*|vC!]4gSxzhR*JJM@R6_g+|zWj;U,?*csN2$' );
define( 'NONCE_SALT',       'RZYPc3^vjy2-5:KDC%*ce=DI(L2Mf<jpt ecpCcKG[b%NOzO[=y>cSWBj+}A_mwm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
