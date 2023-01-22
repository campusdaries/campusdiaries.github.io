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
define( 'DB_NAME', 'test234' );

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
define( 'AUTH_KEY',         '+Q!onh~([QEX-pz}GaGYZjot;9BL`T7~-0NJa%=a#&$D4%5eydP%;^e}#>*f45M>' );
define( 'SECURE_AUTH_KEY',  ' ul?hjDGo2PBs8}Nb/Xt7!,`H)*v4/5H2YPtK{qf[Ag{9BXaT3IVq$n1SZ ThN}=' );
define( 'LOGGED_IN_KEY',    '6,x?huIHF!f`(bQ4ioidgZj<||S-Tz:<}&,4V?~3|07>W3?&,fKq>qqQEUo&&ly ' );
define( 'NONCE_KEY',        'SN i|(r,c>M(_q_>ogA3mZMmbg`V4B~K@-S8DN|*?_6z,10cRJ}J[gRPKg,17rMN' );
define( 'AUTH_SALT',        '<3:KY-/iN8^-I8N}h 3Kj3i0t39PnuTW/HlVfGldhs4gRUw&Y&i;0BDXHpdV::=K' );
define( 'SECURE_AUTH_SALT', '8#Nz]4?$:vUvI#}(IX>q(_4yoGP<[!sQ8@0oS@p.2!C9 U_HTBDya;KlA+.lXx!0' );
define( 'LOGGED_IN_SALT',   'CDeuILfv#p(G,B07a&1Keh9gExK%?=d[iunak/]ku#9&hhu~qH.7 I>++xMZ9-c:' );
define( 'NONCE_SALT',       'C;D!-m36C/W}{g5jVD~!:@~7y:*s-SJG<Mz=SEf%NVcUi<|eF-[u7m_bIFD0{~Gh' );

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
