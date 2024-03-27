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
define( 'DB_NAME', 'Fiesta' );

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
define( 'AUTH_KEY',         'ko^>u(MDB>DScg_pS3q}FpK?)6t$0K}.0pvgAk=ZW]i+]IIf=JbMSg7J3piYx+=I' );
define( 'SECURE_AUTH_KEY',  'cm=5lldZ3eb)I#R p3~2iAEt0[P[f;d/om&{><5@VlPP}mhVS<;[I,LiV;GM[x-j' );
define( 'LOGGED_IN_KEY',    'h33V6t6zMy_c<_j_V}Y[D0cK;E8<9^cptjUc^]cc@ony`F<{Tre[JowQ%.hXX6w`' );
define( 'NONCE_KEY',        'j-~vpE`-}(-fV-tZe|ieMi9MDT.mAJ_(7@m-X6FY:9b|9M3@(e8@0:]MjF<(/f8,' );
define( 'AUTH_SALT',        'c>51=-hMoHFzHdgklUQ`DrHuab;/(GN(i^~vD&@RA^jpR|tg!G[q^/[dvMUNr-2g' );
define( 'SECURE_AUTH_SALT', 'ArrO<xtbh|7^mBrB1|bRvrBg68v7Wvz)uQX<Ju:<A*(eLObA0r]nbT2kIshEzCpC' );
define( 'LOGGED_IN_SALT',   '?&[Uya*97j(C58$[C8Pp4(F2<zJWU&A3RaPn7M3By?cOl02t/E:JrXm3JdgH|J1R' );
define( 'NONCE_SALT',       '5wI4wwY9=0rNw)F2Ql<DgExO!QJ!.0{oKe4`=cxKoBIEg9K?{Y2~.bR&(8WkTP6X' );

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
