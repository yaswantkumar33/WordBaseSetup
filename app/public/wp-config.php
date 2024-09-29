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
define( 'AUTH_KEY',          'xs4p@}2(@Y$.u./!}-Vy|:Q?0Bcu`i?zfAi<@Cp~v3Dzb;ziC!^v_ri)Ov7WwVY0' );
define( 'SECURE_AUTH_KEY',   '(G9!TX{U^PH vWT#7QXaSv34tFS]~mDCvPb}_P8%*w]dX6s8RM&^{F.S9{WvFwHS' );
define( 'LOGGED_IN_KEY',     'dzf^_M[3l,oUC#=FcfZt!jfM]|).:Y2 s(9E_C4aNxNLY&;{$0^j7I3b}NQ4xL79' );
define( 'NONCE_KEY',         'p%X!.v`+#3Lq MoJ19[%1UY=y(PJ&*wjW0r-QkoU-to&C]`:7i,lE)Rl@&S/8%eO' );
define( 'AUTH_SALT',         'ogpwmGbrPv{SP<%z<R<77bRT1LH0,oG}}1Vg7)RGb{`fncvSm`]eJrg$bR~a^>?$' );
define( 'SECURE_AUTH_SALT',  'mD~=y!fR39Q?$9lN$;uXT<61.WNX&Om@{5O,kFjpV`D cSf.%d>mapX[I_$wc{G0' );
define( 'LOGGED_IN_SALT',    ']_1La@_LANt^FS%UVp+Yw/`T!F{Uda[Zg{`6#CJbo!X3iid^`,4KDNgn>9r%V{Qc' );
define( 'NONCE_SALT',        '}cg.5d71D<wDPv4hYyBdNC({jWx>z:c%EU4ff6sCb>N^_Y*J|[bW5(8,zn8<:WzI' );
define( 'WP_CACHE_KEY_SALT', 'G(P`yUg,N]Q|vq<k~+cIy=pi?c|Bw=x9uLGX0e*6Zfb3mF1`>59Ne?Si$rS=.4lN' );


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
