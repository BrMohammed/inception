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
define('DB_NAME','mariadb');

/** Database username */
define('DB_USER','von');

/** Database password */
define('DB_PASSWORD','0000');

/** Database hostname */
define('DB_HOST','mariadb');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_ALLOW_REPAIR', true);

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
define('AUTH_KEY',         'vh#CT!Q*~qPp47&2-UnE-`%]XUxJ2FyR(F(>~$qZXSmUUw)tx5RAl<YC*L*eo7.^');
define('SECURE_AUTH_KEY',  '-Ze1]={xzN>-)+7Ed) |{[^)s8FKdVx:%VFY}V:q#>[.!r?crR9^g{wf|io;I}g4');
define('LOGGED_IN_KEY',    'WI4yyTF ecor940-w82dmn9zq*Z^ar[t>B}DewK<2kue(GfkS`+~$C*]oh>9zU,V');
define('NONCE_KEY',        'P.DmBQuV.O*l&osWtJ.]4M?qHYdLyDo5,{{r;OSt+T_i3l+oF,uo3S)}ez[05}CX');
define('AUTH_SALT',        '8A[ywDqr=$.4(4Dg|j&kCd^,zuaL_yuU(.|z~-v:KgeTXrXji]4W;kr9V7uu4Dw@');
define('SECURE_AUTH_SALT', 'xoczo(Z}naPf0E;rH%Hi%qe/]-h|^SIr a8|dy?U(}jiD?A<Xq{Mxbq{<!3:em`Z');
define('LOGGED_IN_SALT',   'P |yB$Z]bCux&]5]a$O5Bj=Lnw#1RUh]_B~^GpX!puEft[SFAE74kcV}*-Ffc#m_');
define('NONCE_SALT',       '+<xY8 z/@W,#4-eQ:kn>Jrt-c#4`@p{;xr}xuE7tq~GJS{yU15/0^}F,@jNNBI+$');

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

#define('FS_METHOD', 'direct');