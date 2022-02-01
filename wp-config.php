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
define( 'DB_NAME', 'lotje-photography-db' );

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
define( 'AUTH_KEY',         'Lin@6-l$]2K^}Gf*QosH#vdY`|!*|eZsiviVO%dGpRw+Eg_h;zY+c-<yd .>&1wj' );
define( 'SECURE_AUTH_KEY',  '[EAQLz!H~y*h|.g4x@?f@,TvxE~V%h?zX.Pt_)L.yBLXx7LRI3`XB%X/;SUn*j=G' );
define( 'LOGGED_IN_KEY',    'Jdz~yw`+<RwXF`p:)*TucH0Bsv%B GY)wg`FUMRPL$!#(z=etVnMhGwTAgpM<[DZ' );
define( 'NONCE_KEY',        'j,Ak@#zC[#G6)Z==R>|lK,OcW+c@% 7{T!61mo.$fDmH]ugo-b! Eq^frhvU*4o$' );
define( 'AUTH_SALT',        '0]:Q_on7{L`G~ANO?~Lk_$w{XGDP #C!:R9`Dc%4BSDy|6.xUU`RqQudZ^<39fKP' );
define( 'SECURE_AUTH_SALT', 'i~RqHNlOs(B!->8zB.B#&cbX(u%~7yzU.vVz2QJw:}p?!xRJ!A?G:GuT:x*(zU:%' );
define( 'LOGGED_IN_SALT',   'X/=hM`t{+)p>0W yuSSqJtn-y<4b54>W/%,%CFVa~&9ecj]0^FbQ[wR7y+e *^Q;' );
define( 'NONCE_SALT',       '!D:ar!z(~e+jk|L28nn7@=- [Gh[#S @xwp$:Alo*{r7=bPPkC.~d`VCgX$z]jOm' );

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
