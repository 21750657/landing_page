<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'task2_db' );

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
define( 'AUTH_KEY',         'DfQ,/xg=|q,k1JCn`ye(}e)t9kQbybGKlQ=}_:lsn=`Zrf=iuaF/mI# `&bS1|hk' );
define( 'SECURE_AUTH_KEY',  '2]~bULTD_)G:D!6Ak=vZ+owrJZkB8-JY>4e~Pw]zOe=4QJBYh1Vq9gN<j#wh-WvX' );
define( 'LOGGED_IN_KEY',    '#R9|{`k{(3B uv)Rw(/K_onNCYNP(ioXSOH 3x(za>~xgqoW8T.!z@T_s-1*,O:R' );
define( 'NONCE_KEY',        'iCTg|RagEMR:8#$4qe9eC%O-7yo=lU~n9<^ Lipbx)(%=Pau1t3e`O4l?Oy`rd<6' );
define( 'AUTH_SALT',        'QD`N0wid1Sc3 6bY(5sQfLWzEh>qx`KoTY,2Z,B$.h5Up@)FQ`tE- 8353x,esD%' );
define( 'SECURE_AUTH_SALT', 'e-wmXm|LrkA&}KI=a#;9QhT_jn.`DE=w9:>[mu(oEN=;LnEzMM&)j*9K+}v.{SoR' );
define( 'LOGGED_IN_SALT',   ' Y9z%=BRJcTOfg4lafkA{HvJwrn ]UN&RYb-o/#aS}8+x5zUE`AYdl#6&P/`7E%z' );
define( 'NONCE_SALT',       '!EteK]>0+*u7w7eg4M L3%2PN9=T0z7>i7 V;*NP0)S]ezp9zs#6h)ZMN0)2zH$j' );

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
