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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Cb@Dv ^~$+GY#D7M;%bg)RDE*&=])av1Yo%%skPqiCj|}H`fKZ=I=}kwY)|P~`h&' );
define( 'SECURE_AUTH_KEY',  'Hg~:W/l4w!9>~K@;~>>9@~l4}7r[f_@^@;W%.TA~mDcrUy}1Yl5X*jv.z{qxLPsF' );
define( 'LOGGED_IN_KEY',    ',21Xw8e}=Xk[O!*DG|y&sl#D&Ru:dle^RVci6QX-z#2M~ysL,wQCO;*EINpt2*1K' );
define( 'NONCE_KEY',        '7%Ry08EN$em(z_4EBme7P}N%EO.)XY^MLKbZRRs D^qDKuD5I7=6t>_eZQA`=R||' );
define( 'AUTH_SALT',        'vhJV9&Dv=b?&0:zU@[k|a,,~rA]fpXLDap`sr;)]w!1IRXkzHtH.8QMx(vRYV(Hk' );
define( 'SECURE_AUTH_SALT', '4~6.ll$Q@S{ELrF mXiIEg>&rNDIA:ya%0n5PqHhEDHuyk{vF,lC[o8:/T>!fK0c' );
define( 'LOGGED_IN_SALT',   'lEbsb<Q>A8d=R {5Xc[^vV_VtC^6FXR]SNFfNnlL bTt;lxlF,S,g~Qu<k?IQiLy' );
define( 'NONCE_SALT',       'Z[xV7#1<5D`EL-Y5E_h[aMp4-)MDm6e=m(UV+&Zg&=9v7sQJ}6Me]yp%O7u`Zh%4' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
