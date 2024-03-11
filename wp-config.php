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
define( 'DB_NAME', 'redux' );

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
define( 'AUTH_KEY',         'Y.e1?$K/4y(CoWZ!9W18&qN|];pCd<=:g5 $_Ld)X7wj?vgg^d,`l.+fRFX*6V:v' );
define( 'SECURE_AUTH_KEY',  '%I$~n#W2RsJnC&^G:Dep:UQ~ZOgzr*>!d`:OduuA~;59F48DhAL3&_ky (}((8nR' );
define( 'LOGGED_IN_KEY',    'mSy,AMrsnC&0Y,bdieUtq!4RmKzli48v!&QlV^[Ea(G5Yf)Qt_bu7=q-_D]_+b{T' );
define( 'NONCE_KEY',        '|V,Un4qW@FeL;ykpT6]7n&rfZ84`.+U{PaWA!:kmS=`QR^359qBh.#G.lKwf>O~y' );
define( 'AUTH_SALT',        '4CECC(=kwjs)a-&z6|,U]i?z:I1X?,OP=|tp6KU;U2mTHAu/aPb0k^iuwsoHM`?$' );
define( 'SECURE_AUTH_SALT', '<ONMWV2F9)i6<T}bmC6tr,zbwY9V_%8?GLlh|l@#D.Vx!EMcR}p!IF_d=4KNm}>m' );
define( 'LOGGED_IN_SALT',   'oZd5*,Gqea.3x.D{uh1StpuiCr6aj+&/GbSQE?^F9Qt,6jjWTJ9%h1^XcgNGrO 6' );
define( 'NONCE_SALT',       'So`6(5&Mlr+0go<Aa{nM[T/R=EX((-Fy}zjY_n+^sfJ,Q<<dq@c#GA=#LsdNv9{`' );

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
