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
define( 'DB_NAME', 'xstore' );

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
define( 'AUTH_KEY',         ',-7Ze,YCc3;c`(dBsju=o1w8s2o1]]PWr}G-xh}0GQ/krn0A&mvB7L%0ORT<NAt)' );
define( 'SECURE_AUTH_KEY',  'XDd?PUg[7O+m+v,sgQCdTmVvN[!QRh1k-/Bf2*V&=!CtGv73(ap|J0i.JLD=N-Gm' );
define( 'LOGGED_IN_KEY',    '_Q)$E!:F3.wZNgMoNyaivFZsNb;wlHp2uBXb}`5,A%4wd,!-SA}s+(s6ms2f-BXq' );
define( 'NONCE_KEY',        '<j<&9kqLaa?qMRN@m|nl:yA<3`#c^Q:]x2^R%O4(ZbV&P sm|C3;t!&Gf[:ypj0W' );
define( 'AUTH_SALT',        'g5FNC~c~]zR%L.u%o ],,5}a1y<A|aIm$tB,gyevVjDz<3~6cyl~!ylSa=^<%nxu' );
define( 'SECURE_AUTH_SALT', 'F00rBj=f#*!%I_3o,<@q(U*IcB%wUbXb9_49~s:_Up.dX#X7:jo mfi%uC9MhOQ`' );
define( 'LOGGED_IN_SALT',   'yZHo UD9r%M,Z=Ez*C$Q)L#S[scSQ(Y=aO>cV=v^S-k<G8Lcc(9zu+>Zj9zk^)[k' );
define( 'NONCE_SALT',       'qv)n!0i0k9gpo|_|=q?Zq4gndTZ:@iH?:q58MRXKYMYc*E:A s{6r N^!1l9@-0y' );

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
