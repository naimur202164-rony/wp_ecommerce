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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'kgw1,3io&58G r<Z>m:>`A<$Y6Td5%@&MirI(`p8_bUZN@pPOBFQV<@q;8&yBFjH' );
define( 'SECURE_AUTH_KEY',   'Vb.)bO0*uT-^cOHN%V%Y|V>}dUeS5X5.IY(XVpuJSj-Aev53gst_=t@#3=<(w.{-' );
define( 'LOGGED_IN_KEY',     'D+saL^DC+F/z8xF4{e?xU.Z*L:{oRS(8LAL;:_}+3mHWFQ|lFy)uL&(>9mRu8Md^' );
define( 'NONCE_KEY',         'B0Kg@q:A8#v56DM.>*J(wy:77|(RD]u_[0`E})l! 6O!3]mT.DhYcv(km*v}T[|,' );
define( 'AUTH_SALT',         '!so|ip%:x>cr}UYk_v|0SAwn16jG^]$SgHdrqIVB/=:$wfb<l6+r$O>ovpz[-X H' );
define( 'SECURE_AUTH_SALT',  'xPoaEfV1=$*RrMfuN^s6Ng b+1&MB+l`umxhkV|cA.&%754t<$}lmL,bYCZzHW%6' );
define( 'LOGGED_IN_SALT',    '}vnJDHxmP$@%$y58z/lQoE,V~(/WjQx4bx^mHVU5%V;ML+9{-Tk7P~wH@]KZa@r`' );
define( 'NONCE_SALT',        'UmXPCZ{Z?KxCNu(P+E!aW9$I+l`H,L#YLvV3Vs5pT!&cJseELNnH*h7*!c7qWHLK' );
define( 'WP_CACHE_KEY_SALT', '-ELlsVOe^F*bX:L,},o,X3D`nc.D+.@4X-UyEJ;2h|T9DH~j,viV0Ayf`tEhUmNz' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
