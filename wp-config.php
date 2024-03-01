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
define( 'DB_NAME', 'oneplus5t' );

/** Database username */
define( 'DB_USER', 'the_rom_project' );

/** Database password */
define( 'DB_PASSWORD', 'Arakhshan@#143' );

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
define( 'AUTH_KEY',         '&2.3jR8)Mipd^J~aZFwCHS.bEAk5PBvNd*a4s8FHV2>1or8Q|~tQk8vi*nhzjz)d' );
define( 'SECURE_AUTH_KEY',  '|fK*BBeY-h$<Ps`Vj]/)/SNO:_6B,{#ooy}$FhwCda07w}iM0b,w)?Zjm YbhHw2' );
define( 'LOGGED_IN_KEY',    'N0(I?8LxRBp~R4rJuM@<#@FS{%XC_q:38p-j >v@ K84OdmxPZjI-k-b*LC,5ReA' );
define( 'NONCE_KEY',        'Y0zE?MxwYvH!lmu2_svM*0Zee/lCX`;&stM;gf_]0YD^^#(|*j(O_{jI1!7P4 ou' );
define( 'AUTH_SALT',        '8Qr0Kh6n`,4)*POnT1QRbCKUd8-:&$<O(U`*hx:xQNH:8d=x0#bMP[^^pKl- _I#' );
define( 'SECURE_AUTH_SALT', 'RZMk)l@I:PFKkz@UFskx^SP1USY6g8CX`X!NZNZs6j8b/8UA@jPsU2ZuiXS-=N{V' );
define( 'LOGGED_IN_SALT',   'p+nXaj=97kNe~!{Y&{h8Wv2p|E&|j>caLx62=o1Ih}9P<jU|8}w~[GCM)<L2oFEt' );
define( 'NONCE_SALT',       '$]jS:Zl+DRBtNd/`))7uGtt_A:C>/lixc*1fC4*J7soi],^{0Z1]FM1n} vY#3@d' );

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
