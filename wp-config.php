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
define( 'DB_NAME', 'cntt' );

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
define( 'AUTH_KEY',         'fKc<l6qa~PxySc0;j=-42vPeY971u}!Y,`p=6?!}r?;OzQdg1O#XIpj4< %:z8=4' );
define( 'SECURE_AUTH_KEY',  '}sc_m-7Z2r0>.b^t;+hx[.<8rvCE!z1kOr!D,qEck^Ed?Q_P>/WtCjJ2Vc0`wPP0' );
define( 'LOGGED_IN_KEY',    '~Ly3RIZmgR3:s1ap;jj fw6i|n~~12vsNdyCXSk*(Aq0u{/1s;q*ym/3#ca$4].>' );
define( 'NONCE_KEY',        'J4Yu-;:uAS`q.M5CjU4r)^2g#u_x6n(6cC*HuxGy;U}ihSOo^Y]G!3.Ubcv]e-< ' );
define( 'AUTH_SALT',        'r 5Fp~[|q8GGo>CN(QM&:T%2m-;W=@V(<};,pbdBKnS<SowFN?@vB`)ZY?0OvuUZ' );
define( 'SECURE_AUTH_SALT', ' <LgteZTP5_&zK<3/--nVw.x_fO_Bf!XL6mMgYF=v+fwM,(V=o&%Uo[P#IsB8}%_' );
define( 'LOGGED_IN_SALT',   '&^q)@2)9DaZ:G0FPnc,5YA(?vc?&Q5G>?R R8j<U}vdr4_jQ*]5:msVul~<2X1g3' );
define( 'NONCE_SALT',       '(~=A87j]]oDB/5z2H-iB4G=u87H5%1YVTp?`,OT6}YX%(}.{<?Kfyb0j1V$ $zz8' );

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
define('WP_ALLOW_REPAIR', true);
