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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_ganesha-antik' );

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
define( 'AUTH_KEY',         'k+o?56mEqm*CET`SYJXH$;4Ds>1O%TPWP!I;I$CmhCP4OT%PcO7J|X*J195%_4P5' );
define( 'SECURE_AUTH_KEY',  '?$f?xr>]j|88b`+LKN.mqVW!m_PP9t.|.eRa~J SFol Wo(i4|8`wq]i~!4u)TA1' );
define( 'LOGGED_IN_KEY',    'LA-=$ZlvkU.A6nJ.7OL{>/3)Xf]{9h[m.:ZttADV[0;@%=B0OlK/<FUUeFAPk@Jn' );
define( 'NONCE_KEY',        'k[Tbt]Jg.v10)-)F%cy9JA*UMv!bwlLY7SRy|YEl3sRe)i493fi5g06V:t=!0a|@' );
define( 'AUTH_SALT',        'TB]SaAyC:3b/OG=SurT7A)TKSnEsqI6p:b&ZAR$mnBCeiQ~kClF(DF=-ktwi0{iI' );
define( 'SECURE_AUTH_SALT', '_o^y~K_=7N?N[0k$]/u6WEI*<C2B[0ieCp-5us:LmHdkWu*(_U^4/>T&S?086$Sv' );
define( 'LOGGED_IN_SALT',   '!N?W</<TN(-%p44~1#4`C)Jkj|oR.hk:OjZ3#zxTes`BGW.hQumGv.!,<^XvDVEk' );
define( 'NONCE_SALT',       '?/un{F@4=-_ ~6$KV4|S9O(K*4~K(:x7,2bjVdY&KG^e]YSbX;m)ZNv2xT}7K6j^' );

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
