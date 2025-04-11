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
define( 'DB_NAME', 'buituanhuy_istudy' );

/** Database username */
define( 'DB_USER', 'buituanhuy_istudy' );

/** Database password */
define( 'DB_PASSWORD', '***' );

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
define( 'AUTH_KEY',         '0KACi3L`It=Tml3$^SM2Njxf)]4(b5W<Dc=tv.)0$+w>hzV]wG^b!~!Mir7&Q2Wn' );
define( 'SECURE_AUTH_KEY',  '>x*sDu*Ho>)Q#XcP)gmSc+==dh5~/wP0j:P/T6_0-JiVDH3k3V+;4{d;3_s$6 cE' );
define( 'LOGGED_IN_KEY',    '~oPq m5 rG-=q((Y8+|WRX02(JM6DC)F/N|o/0M&vij[;bPR=a8ohY25[](Eh,m)' );
define( 'NONCE_KEY',        'q2$#Hk<?]$WnmA{DoXRYtc3/N;>6H)D5#ka=/!e[>.1;=8</`)75Nx(N:ifk KK|' );
define( 'AUTH_SALT',        '#J5=AC.*I,YrFSTw-Z({ary):9GOy7}jYe8oD77DRED5Yq.)$+(|jGpvt&pkn2^,' );
define( 'SECURE_AUTH_SALT', 'T5@aQB(OW]%H-fPd$G{E(PzF#guCk4]*f{oD4~BLy_}ydLmQ0v#St+E93cY|!oV)' );
define( 'LOGGED_IN_SALT',   'WyyVUN pr5s=0i>B>drHL[b,llPGXqDV*aEw-3ikE6R/(i?qbE(guw,I#+ec8n}7' );
define( 'NONCE_SALT',       '0Gm=$?q+Re},*)RMZjcSS}+gF[K=)v8ZoZa%lyxO?qnM@tz9ZZVcT53w_bZXa(]T' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bth_';

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
