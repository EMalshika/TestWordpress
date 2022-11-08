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
define( 'DB_NAME', 'TestWordpress' );

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
define( 'AUTH_KEY',         'hS;L,eU3lbfY2:r?%}m9 G.{Cog~v.p~<T,;It$;p~~>0wo2Q[Wv)y!nokqT<wq2' );
define( 'SECURE_AUTH_KEY',  'dP{$L@T*sT4M/#u8LJ_&bd&/`!_H<_+ahy+m:+.%i0lUY_CBb],A,1.AdFr?ggW=' );
define( 'LOGGED_IN_KEY',    'NH&K:wT[wZ7wFcbs+80#%TkXgskG@sV6a-DJpdpI=Q53u]qoUvFc* H>.Rb?~c}M' );
define( 'NONCE_KEY',        '~-`T-.in/H4xUw.aVF<FG!sJvB`?@!i:f[B<S[aRj~:v:|H5uxgmO#b>GdX`hB!*' );
define( 'AUTH_SALT',        '17Q1Th8UOng]gjywWf0tE@caz] {gX)o/M}-~uYd,O1T|6Ni#N4D<$o<Z0,t|SOw' );
define( 'SECURE_AUTH_SALT', ':PPUsHdx~Y!h7/+@}=w6ThlTyvH(Nl7a-DcA]LJ5[Adwoe%b>PR.od[GW6#F/tR ' );
define( 'LOGGED_IN_SALT',   '+g}/|?*yljT%&dipqwm^5@%AzDlX^/vmVd=(XR#`l9>:D`44sVe%xD>G[9o,8$cG' );
define( 'NONCE_SALT',       ']vu-[%0iNCoH0Gz)]B+FUJBfq4%a<|:tIRH}bdyy.7G.rX7c,^;?:kV3G7-h*H[J' );

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
