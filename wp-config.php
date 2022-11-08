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
define( 'DB_NAME', 'rnf' );

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
define( 'AUTH_KEY',         'GmT2;gD,#FqDXe;G:)ECQyi#4E`b{&;m/_Xs$;A%uMDh+zTeov&TZe|o/@-J5/mR' );
define( 'SECURE_AUTH_KEY',  'bx:4X>?]{Z^Ys}7 *s|U~HGwm-su{@qu).nxc6{(1zSjtlFLvU/ HahP]Y`ELBKI' );
define( 'LOGGED_IN_KEY',    '$K2a({N!S3?J@I,#pPV]Wd>u5~JoVxo1Y]`wz<:I,]n(alS^$5 px-1__/ZR09]<' );
define( 'NONCE_KEY',        'CAYT4KC| bpk9Qd0ioaZv_!$ob=(6Uf);#^ T;;K6KNYS*RIwpu|+[^ x_&`s|~ ' );
define( 'AUTH_SALT',        'GS5~z8t9DX9)45lf}zpop6;MGM7Qh.H<WMAWr&(?]i$@>=X.]vl0Tyvkegid4cp6' );
define( 'SECURE_AUTH_SALT', 'Tzx3%Y1@Ugy`nfi2Itp#dKB#[0}, @hD7 o^V_Z ?$X:zBV/d!$ 4f7Uv!69gZ[a' );
define( 'LOGGED_IN_SALT',   'H-W#^5_FlU|BWM<8MW-x[K=0[r2 2zGy1rFxHf!%II}wvq6rygK-l+0BLZ!T2Qo?' );
define( 'NONCE_SALT',       'SoA5WFOO?:#m%QL~h-h|rNw9WN&1Od#tsS<0[M%Au[<]R5JRR~zD97CA1DY4Abs[' );

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
