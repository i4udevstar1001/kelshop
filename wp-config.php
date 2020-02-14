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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '&A;`;)g{dvnIx=_3^2qSd@1]ovUVB>;BQID]w-kGR>#cV?3kK{&rpi(sVge$(Ik>' );
define( 'SECURE_AUTH_KEY',  ']JV+4Iw#HSXjxK#8_)Iuf816 GCgjS}6`qQ@]D`HY}&+w4>2c{j<m;AFFe&l!8z|' );
define( 'LOGGED_IN_KEY',    'y]DStAy0NosP%[|9dP H!}^ojoE)g,%sRT5ro=)OZp|`20>>E4_qo3ZpXw6QNY].' );
define( 'NONCE_KEY',        'o-uIqwOE~Kw?cFT(b^m4Fh31hE=;k:|fRy`GI2o7sUyre4ZwT5w:67dhN8{a#WW`' );
define( 'AUTH_SALT',        '2w@l?_d.K+%s(~RH 5j|I<VC(oNy{*<y55$X]>IA+3n.KJ)c>Lqm-hR`oyh-zE!E' );
define( 'SECURE_AUTH_SALT', '`cUs_|Y((Sd~ 3.jiL]=vGbo<Kn0&g[1KLjO^kK!R~/v`5+a2Av>Q=Bpn,5^*AmI' );
define( 'LOGGED_IN_SALT',   '>a>p|9sK #;,SluR/{Kp40!SHndv?zr[<8pKZO>r5lX&Nd=:iOA^d^R3ev<;V=vr' );
define( 'NONCE_SALT',       '3CJ{;<c ~g|| Of0pv1s_#1>5_RV,f${c XCm;{pCIN&j@Of<@#]-9txFzx$N0%b' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
