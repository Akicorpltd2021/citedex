<?php
define( 'WP_CACHE', true );


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
define( 'DB_NAME', 'aquilisiicacea' );

/** Database username */
define( 'DB_USER', 'aquilisiicacea' );

/** Database password */
define( 'DB_PASSWORD', 'JDAconseil2022' );

/** Database hostname */
define( 'DB_HOST', 'aquilisiicacea.mysql.db' );

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
define( 'AUTH_KEY',         'W#{YY5|+O-GPO:S uGvA*ZqM1K]9Sp EBz?DHEYywP&.vW2}X8X4ii<cR>sNh}sF' );
define( 'SECURE_AUTH_KEY',  'p?n&m7I/tw#;3h-6TalaVzq;&dZ{V2W^s?Z;&S@],HyVjKP0nX?9~(S,in!d(FSs' );
define( 'LOGGED_IN_KEY',    '#UI)Gde?, ,x[6KshGl-|/QW9f$hr$ORVXhvE?2G1jq~f#6S#H&7x@NXmMap5Ywz' );
define( 'NONCE_KEY',        ':xRcAa3:1+OrMV-Zh@>Y}mNJ;oP)o&.yCP^-Rd,87P>vg*}2Lsz9&o(t.l6pGaxP' );
define( 'AUTH_SALT',        ']Uy=&_T=bD`uv-Ij$#58$T=)663 W@>S!:oa.HKup*jUDbSJ ne~i1a[0G}VfI$%' );
define( 'SECURE_AUTH_SALT', 'n#>IZ7r5W%x1ik1wavk[Q*~GCqi:MotPn8bYktjS`4Eko53*e&b!.8rT.22+ZGT]' );
define( 'LOGGED_IN_SALT',   '9B<q{47!p(E*~JqP]!lRO1/<eP.8SqnJhl/r,kgB&`Q[ll#w!<?YXB +H#-4|~K(' );
define( 'NONCE_SALT',       '$DK$K!nS#/ZFz$P$2yx`H-Bd/ Z dQ]p9oaIOA9?^z<G`%&z2no$We~iPG2_RzS|' );

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
