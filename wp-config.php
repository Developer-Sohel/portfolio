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
define( 'DB_NAME', 'Portfolio' );

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
define( 'AUTH_KEY',         '-P|>7=xg/<R?;xOPwj0^Z_/6$y2C*Q&.SN8@0_Y&R!;.l3S3haZzT1e:@wvfD1:+' );
define( 'SECURE_AUTH_KEY',  'Svm&chd~)&NXM*jL~&l^N+~[A!CPKE3^)h1:S%J2vC<d>^%[f%yY.$f{JX[MPPAo' );
define( 'LOGGED_IN_KEY',    'PK z=dV}n}BgAMTZ;SSI{fd]]`/w(3F5[-6.dR&-9N 6,!W9~?U;t=bz8pS7:T3b' );
define( 'NONCE_KEY',        ' 8Gwmtg(iBt(T).`lrJ`%bG10VR9)~krjLdD97{ZUj]?AwYJ[4R@EHzu.9z(#2gM' );
define( 'AUTH_SALT',        'kSDQm.L?[O[`oN?@ dhfQT3M ],H5l0gm-X!^>[[(+@)!p*yCzO?@|M,X&@18:|c' );
define( 'SECURE_AUTH_SALT', 'HsOYDE-D<`Ly8ua2RZ&%#z-}WO5+l,$EnKl^jpsy;m Z&9?S{_$-qRX`^!7FT~d%' );
define( 'LOGGED_IN_SALT',   '0 h?[jLCRKwqQ{tUEC=A5gU-~Z@b##&}=)T|d(XTp2A52l71V=/j}k_-gO3<F*9=' );
define( 'NONCE_SALT',       '*f?P2[~FVmI$a1prb=Iui^d&88{mP,Lk2oPhx[>;DiBYM;0b{Z_S|wofNTUG7H$j' );

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
