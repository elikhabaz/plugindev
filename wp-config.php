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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'plugindev' );

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
define( 'AUTH_KEY',         'iI8PCV<-43W6,Rdspx@yjuv=LeEM};i_Wi1RGq:s0L- MszQ-{FF@X#3aA|B*v x' );
define( 'SECURE_AUTH_KEY',  ')YVRM|aU?6KC<3}$c>XmW#%C.6SpDp&jS,)h4IEFrZ~`l DsZ]Ii9FC}&/f}A.`n' );
define( 'LOGGED_IN_KEY',    'SBfH/E @O=^ 8&=>sRe!#e!9l[uSO-nq7,)[]m&iEw]l.KPhdPdoJA1KGH(c#@{;' );
define( 'NONCE_KEY',        'ILm$1[cd)cef8t;:YK^@[8@`_(TY0`H:W?fWcShv.t<K5i~[IU.O2E=2O6Xc6at_' );
define( 'AUTH_SALT',        'Ejg!Z93Ro>t5u@eWlGJ^Wr0zof}o7;K>RydY/ CIZ?@zX4F_D;2!1aT*]Y&ZW+T*' );
define( 'SECURE_AUTH_SALT', 'mlE{J<n_}*A>hf3x~DJZ;-:0(.e9hZ+7hlqQ}1-2tTf(qTV%5!f;0`vt6roWw/6=' );
define( 'LOGGED_IN_SALT',   '-k E%7gJ{jwUcNh%GmGZs2#)H,`Fxdn`i+uftOj-rg8^ixx{?Ky)u><2@-ycd#N!' );
define( 'NONCE_SALT',       '$e1c!s}eg3NX{&{[t4(No7@?@11uUh=fxrc9l*=x=$JKri1Q`%KDOMU$+pcv]5@E' );

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
