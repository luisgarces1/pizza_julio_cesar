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
define( 'DB_NAME', 'pizza_julio_cesar' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'I4:N-xRzu-.[ R^O1Q1Mq!/,hErHUMO=)zY:Ek3jZ0G>9+]BA)Cze6yd(iL2+r9:' );
define( 'SECURE_AUTH_KEY',  'y:w9AQAVJHU`$?I:!&b*en}0d=;*YTiw|~WbFk?p}tmK7i_!T _G-ME|TdRmznR^' );
define( 'LOGGED_IN_KEY',    'jM;URy{5oMhp`*lB%/RI&#diX]&7v2uun5s6nXQ>mie8;8Yg{WpG J4F(Tkx1q&3' );
define( 'NONCE_KEY',        '*X-n>qJcL~xkk4AhN|75{wx75Qr$UQ*pMFb6*PTY1NjIm}d@zpQf,$90I8;st8#Q' );
define( 'AUTH_SALT',        'd$h,}y>+3e ZsG<i<^ /NXhEfNLv)^]lcs!NhA)KZ;Gui/@F7{0@>+ilxLvFU#_Q' );
define( 'SECURE_AUTH_SALT', '6~~QZ#MIh,!43a#IL9Cu_OPzQTjdmE.jXmzOcNP<<*c1n;j|kgeC3(QwrovxDC&G' );
define( 'LOGGED_IN_SALT',   'uU5;-xHfK?Dm[s1GJ!![RA}:C.9H4[/&3|NTV-[F3],S]=2S@[`?I$I{Smv.xjvR' );
define( 'NONCE_SALT',       'H3k.,YDA_cMFzkDi m)C`=:21G_M<tVh33{Zd4mL B!4mh>vMaBa3?9A{sJ(Y^*j' );

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
