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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'apte-pro' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'zD :8GH$r>)q:[6od7{)IIb%gwHQ=VeH0|Tn0BJ6KUbl6bOCN,yXsY1J **,Q*1x' );
define( 'SECURE_AUTH_KEY',  '$VfBEFPh?LyJl!;oG.!Y4D@8=%cv>p#d3uhIyhc<c4NXsQ#XQ1/6y*(==qozJL[)' );
define( 'LOGGED_IN_KEY',    ')=gGNpNd|K)~y9,:V!r$r(jRo97t}ux!??QPyr*dktdT:k;ymNBmE?aC/14(ds/}' );
define( 'NONCE_KEY',        '<E(Y {8MKP..TY*^}QN?E.pfu<#S#{+sJ_Z x45JVm&_!]i`iiC>fau!Z`=+|_5?' );
define( 'AUTH_SALT',        '|<d!L+`iOucTA}!a@xnDz.C1k=x5L pL7t<|J{W&lN7z{{3O`^=0h(t~KEi^YT^+' );
define( 'SECURE_AUTH_SALT', 'agS}JRpZ%mEiOFg.0;;BN9~#ZXdJ8=#@v>}ron9Yxjl&4Kd.;g/Ol,?Z8hsvO*@f' );
define( 'LOGGED_IN_SALT',   'JXs!]7(0[K#p?#kjdMiP.F{}{G=<JCoakrBFq4.|)AQF(Pjg=RLovT 4|}1z6C>Y' );
define( 'NONCE_SALT',       '}d?l0qlj]Y,]VM;l;a]&8*&,GB/%!D?PS+LMcWFb)D8(e7`mC0s&9|eiJvr_dnBy' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
