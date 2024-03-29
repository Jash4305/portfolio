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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'W*lFK$8:YYigGwV%EHCyO?u`ZC@$(h~Wyn3PB]U=q/fx.H!NN]{vsz]r@>w[=,Qg' );
define( 'SECURE_AUTH_KEY',  'K5#5aWcM-O)YTJgbbVDO_s5in~X%(1.*j[UdG#8]u/r0%[)}l=,1.4U];2NV/C+u' );
define( 'LOGGED_IN_KEY',    '<sE#j3DY>/}DYE$=TD*co(UVFY;n[GppRY1uG=:_s?0A/y4,wwF.2GtDDfcmYfEH' );
define( 'NONCE_KEY',        '+G-CdB6[s,{ng*OdkIFX~z(UbypBPWe0PcS4?gTBs}nh{)Vm:u1vwKc*:nW}@=}2' );
define( 'AUTH_SALT',        'NxJFXV@)vN)c:vf]GyE,8%e.jj,NA4Hh.?2:ON=!.YROV7Gi^2>tnur9;MLUrMq/' );
define( 'SECURE_AUTH_SALT', 'suU[X{@`&-$Bf7.kA#I(2s1?/5K`nq$>~#:Ree ]9RqimEgi9ky9^esHELi#}.rB' );
define( 'LOGGED_IN_SALT',   'ml)=ja}EXg7TlD}f7:MUU%-KQ5k&(9j%WbOy<2^o-%$>/FMqo7 H[k/[RO1]P9&J' );
define( 'NONCE_SALT',       'auU3SOZ.;;ygd ^N(`BCCo~[@2Vr=u*o%P@uZu piYBwnu=|?=xp.z4ZLm),(GvQ' );

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
