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
define( 'AUTH_KEY',          'p3pn<&ObRGcZnKj[!WK4`@;t 6MZ]NJH|38HM[B]02VRHkdj(:v}~.(ufr2ZuElf' );
define( 'SECURE_AUTH_KEY',   'U>_<6# tW&gC [`5v,8!:fl Iy`2I]v^U1Z<XzsuP`$Aje) X}9ox]a&IRbT]EYw' );
define( 'LOGGED_IN_KEY',     '.9J-jM%yO)%mb|hrKk:79,B3*?vFa044|rg#sOt,Q-A/xVOm[cZ!wbQBg}dtdfz/' );
define( 'NONCE_KEY',         'E@@Nqj#*dkc&g+Nx?n0W$^<;Z9w:{dH4@BC4ZF@S[D[+JzALzm7[B?U|o6Mr}9@T' );
define( 'AUTH_SALT',         'HA&LAN_+0/nT&SK(h>@wY/GG=Ff>.L$[pM^P<I93BHYZMq,N=>WS}txh@FMHC(mY' );
define( 'SECURE_AUTH_SALT',  'GY&2[mtO7o*?Y.S-Q``u6#9,k !b#Jg-/_<ocp*wogBIURj?(#i8Z9JCMj~Kb%BB' );
define( 'LOGGED_IN_SALT',    'RSAryJF6bkX&a0r_X=]cvf<(5oKfFZNzA6*Ywi%Dqh6RH<qN;|o8x{-7 ]VUqo^A' );
define( 'NONCE_SALT',        '7^h])j~/^H=3yz2~n%v]~oPaq#12qXc`)`aSX{2}dmb32fOEZ$*e+2$MSa,*HHl(' );
define( 'WP_CACHE_KEY_SALT', 'oxWFk&r&XWqP|^-m|eW^~=Zt<CNswL-)QD PsbGiLA@}6/`5+Tg^wRVmJgq!Mpk#' );


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
