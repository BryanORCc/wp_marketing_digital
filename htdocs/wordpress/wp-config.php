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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'a9_1kY;C5G!_WRy_e#~JzS9~]1_V[Wc*Olz2UFQG&KLS~5aD!4t()L%XBuE+Z>Pi' );
define( 'SECURE_AUTH_KEY',  ';TGbx4*A?K6};8#r@QiE)ZE !mM6eMDmfJLt-LHcjfYU?M,[K$/!>b[-b^<,A.G:' );
define( 'LOGGED_IN_KEY',    '*s)$kY{ak6|8nP7`.dJuyFsU([ImAjq~)>>fV>ZrGL-|#NjX@UZcfxm;ru0`ifw[' );
define( 'NONCE_KEY',        'Evie##NILs(GAUYd@XM2FxZnm5}i3<-/gScH>, /c_57-hN5~%3~6x?TfBc.GMl(' );
define( 'AUTH_SALT',        'PR|j&kHTNu}~$( /lBIg(@,fCFO{#7%h8t=mE&}E>=%28)k{]{|zFx%;Fx!alnKW' );
define( 'SECURE_AUTH_SALT', ')5bENCvbc_!_N ^4^}1v_Deo%d2BC{.Ur;H:ViE7kjP& qvj3}G:CqI Z!9vqE&F' );
define( 'LOGGED_IN_SALT',   '-FdAaBt:7GJyuFFFrI~vqy)k?/lqX%q)~{[k^8b8xKj4zy7JU7G=[[_VWbur&lLF' );
define( 'NONCE_SALT',       '>[vv2zLcua8hhkF#*E{ILsjda<%L8IxUe`>wIg(@>62*F.r!,Fh,-=iIXDVO8{5)' );

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
