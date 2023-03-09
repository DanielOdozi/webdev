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
define( 'DB_NAME', 'toptech' );

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
define( 'AUTH_KEY',         'K;{S.4[otSKM}$g_W^V }CR<FBIIEAPH92%=3hrar(SY/kj|?Q8@ a:-4wsWeD/]' );
define( 'SECURE_AUTH_KEY',  '@v#~ND4v]eiM*5p+{i*>yOw{o+Ombb*GMlHUw ?yVD5EHUvoEJz7ohMq1xrq@@1(' );
define( 'LOGGED_IN_KEY',    '@#jX,[h2Ga5{$B=KnW3K] 5$NU.Oe6tbQ&ur:QlRfYN[c3@Fh9Aj2*:8vc:C5 d`' );
define( 'NONCE_KEY',        '[h30TCv>})9ZVILWh$A+X.EU}83hFVWa@EHT&)gjz7@pBH1rsq?S7bX:>q+>G8Ad' );
define( 'AUTH_SALT',        'a3;]j~kOol|%u;!-%2TuIlx%s13%aw:.;+~+,p8S9c/wj)mvDmj`L.0J1S9Zl)mf' );
define( 'SECURE_AUTH_SALT', 'h*dJF-%4@k$V;IID*&`^+:<YyQ~C5#J$G0!!4XY-.IU;*`HE](~SO:wc9h$TgQ)S' );
define( 'LOGGED_IN_SALT',   '[tz.&uF$]LO4)<8+iE8D)$t-._4XcYL&g~A8&SQ(eyx@[-!)iDKpgdHN3fmu%r(2' );
define( 'NONCE_SALT',       '/Qy@]=}LV,9NnYJXigS<vQ/ev{!F SDG;clhd5]{mMM{``x1VCUEQ&rb:h9AxTie' );

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
