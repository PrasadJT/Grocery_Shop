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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Grocery_Shop' );

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
define( 'AUTH_KEY',         'tL#_}F]7MmHhwBjS1*bVE/,x5Z`H5wclFt+vH+~%?ktsBNQ;EkDSsR0MO9H|G!NN' );
define( 'SECURE_AUTH_KEY',  '.geNg{N:^K_<(?*i>=AAo21@_aYq.ySR[6QvU@)Vaj{#cE>ww*c|0>s/h7mEBR/2' );
define( 'LOGGED_IN_KEY',    '1FZ$*<y_^&{aa:mU:1fV$cjhn`ncJVnM[h4bT5}_DC#h>;m}7 o4lPcoq|PuV=C-' );
define( 'NONCE_KEY',        'K}HlXTI~$t)}@G&%wkN/zZ109w@H&_4J[[x(cTWaqaE-@l%:95Uc+&x~|yOiU*>C' );
define( 'AUTH_SALT',        '-43|q9x3NxeeHI2A9+?~+.Cr)ksc[j>Pk/6[&v@:kSUepKE:cO)bIi%oad`B&Wjz' );
define( 'SECURE_AUTH_SALT', 'z-<igd2Po@dvaDf`25h3,MD.twRGPn/(>=xqz;><4wN4(~$euCzv;ENlsXIfBf0l' );
define( 'LOGGED_IN_SALT',   'JgS(ai+4yKF3m86<]modr8da- r.sboC]u{3Rwl9PZR/fDhy/i5^K>*tJ3eG4R1O' );
define( 'NONCE_SALT',       'h6,nTUp4miZT]%zUl=y6CGT7g8}{uc5<Tk_DuF,7S>d#*6/R/pO88S? To*46h&8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kdjl_';

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
