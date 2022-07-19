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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bd_constructora' );

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
define( 'AUTH_KEY',         'X|u{N`yj@M/Ub &l->@#;aKl3[vD,R_`(FSXctln_xDm+GlUo$v^~JXGXn4%3E/v' );
define( 'SECURE_AUTH_KEY',  'mAyDvAE;h9bZxLqcq82.z33+CpRMHs/a{Tb2t.UN*#FjH9U:@HL0|1s2yo=+J:To' );
define( 'LOGGED_IN_KEY',    '*gv$z;Tq5!AKv?=@}oUU1KydQiO`R6tn|GX>Lnt2Bq7t4hFio/c_1AROSeAV33(d' );
define( 'NONCE_KEY',        '3p-3:E?IS$L*^n+#s{s0SzYnDV%~!eC%$/R2BA_,qNEByZL4wdI6tl`]Vxr&l)M(' );
define( 'AUTH_SALT',        '}e28SLE3@QPuv~=H4Bc$4la8L6KCVLC&bc--sz2.d.7UmQJVbOpL<*_6tnt qB@o' );
define( 'SECURE_AUTH_SALT', 'WhPnh5>cwwBlL -A3A]G/*MF0hoYL=E|CBkSR%6HdEdomZF/qhf|/W1Y#2q-;Zf0' );
define( 'LOGGED_IN_SALT',   'nGSuM~l?Os?a`S>$H~BH>Wv37FZ7%{Cvb rb`&5V*r`myr+,_TKof-x::Aq<5[JT' );
define( 'NONCE_SALT',       '7`xqFcsi=m<,M1#o:)C`AN.U8{K[wbss;!.}fEu]Zl[CE:D%q.<}l}pBPTOstagC' );

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
