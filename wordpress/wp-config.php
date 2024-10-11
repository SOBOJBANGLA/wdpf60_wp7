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
define( 'DB_NAME', 'wdpf60_wp7' );

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
define( 'AUTH_KEY',         'BN+[~nxq&eR5 E*tWFroMP96jEe8tF9*|f 8=//xfRzy||Oq:4a=%f~_u]1RQ[+u' );
define( 'SECURE_AUTH_KEY',  'cL~#aQvbfTBIMq#6VOnb,S@2o97ubJs ?}=}tJLu@`Z=ltN`0_^h<rnd<ZSGG7]Z' );
define( 'LOGGED_IN_KEY',    'kY(5A+]Iz-(PaO3!m+Wwdw^;tAI3r#-{YWs+V) 2>f{,gM<#r@X 1u0chd*_SdQK' );
define( 'NONCE_KEY',        'X!$1*qB,=P#O)OnB)6=m2q?Hr2HImSt}@3a!Y6w&9*<;YfS.;>=b4i0<.pB;}[#_' );
define( 'AUTH_SALT',        '4R),cve6B9}DBT3-7 Zd(I&6.2P}nukrF89T8nqhWdvdwjK?S7/y~v&6U)Wz4Z3k' );
define( 'SECURE_AUTH_SALT', 'w*w7RPMmMyFH]#TQJec,%r/lRh.iQ58E$r@Sd;~ 7^&:~`J_fYf5m$fEB@Xy.)u2' );
define( 'LOGGED_IN_SALT',   'sLTt/$( vvB`>^frqS(7<>QkPNS+W|?s,$rf5v])*?() {KC}JGeFhC[.k&A<cSG' );
define( 'NONCE_SALT',       'FV*?b7b6~,!.6E}<NDUxGPB:zDhZ-@4HCe34zf8+[dZ8N+]od=Jz_S}>wA<s0rOR' );

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
