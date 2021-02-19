<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'jeet' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Jeet@2509' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cLq*}a8(+Q?pI&Qba<&zCpNk,l#V@3r7vv_9Mj-CA@Qu4(|[vf73?7lzg/Ix:<J$' );
define( 'SECURE_AUTH_KEY',  ':URp_jlcSX]_dYvxVpmfL]FwD6=o<wr8&MIf1@A)$-htw}~YvW6;%zf`Mu;Aa(1W' );
define( 'LOGGED_IN_KEY',    'l](=2l)ReP[Yk8)H#J}}i0JwUEN{?Ua@[ 8}^dS:G_(DlFH%)Z&8&edoJ&T$a]yZ' );
define( 'NONCE_KEY',        '`{S0Q1bl#cO3?k(Z +b=Vc%<|zwjbmng=(dFRm7ZL>Fvz[E8KXz89=B40&*5? bw' );
define( 'AUTH_SALT',        '@,v-ZaA^(C-f:Ah%gX=cZi`WrphM,{#?xr|[:sy}ZF7SVS]jLpX~/IZ[_a*z)o %' );
define( 'SECURE_AUTH_SALT', '/)8u:aVp[hZa@ H2WofqS+?K-]EO}LIfz~2KQesV;0es/VU~1%X!RRlEg8UuYTlz' );
define( 'LOGGED_IN_SALT',   ':b{nGq|j3]>fYUK;ZBZI^Q+b.-gHxobW(z^9C34:Tmjcodufuqq%C$Vt%sk%-`73' );
define( 'NONCE_SALT',       ' ;J=U:(/OsD>,!4(&0-/@G!{LmERYHqG9!$!(;auF}3EZ9IcS5Y3M)&:/D [g|4l' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
