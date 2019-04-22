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
define( 'DB_NAME', 'xcyber' );

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
define( 'AUTH_KEY',         'bIK**(T~n_*bKEnb8SW{cm0_n2:[K<_;`Z2Bfp)h3>wte%9ysO{7,}e<Rub41)^k' );
define( 'SECURE_AUTH_KEY',  'CPpxn)6-A-47V6]zQH nA6b|N>]5OglZeow]&DrLHf5d][sX~+)1bb`Rs3v2w8ax' );
define( 'LOGGED_IN_KEY',    '%=EbMdzQI=80R~j0V4OwGHZPo*CK&yvhL[m1RBK215=$L+o!!Gw@<Y-wIKLw><Qv' );
define( 'NONCE_KEY',        'qGGX24[XA*9-SAk--68I?,xnDzw-qz4Tm:+KELP^G8tVz2=WS&5o)!`F!R%68v6R' );
define( 'AUTH_SALT',        'C`eEO;5Mykl9)/IIxvZKI$b&;;P9*!+npb=0rT/tuJTf=ZNr2krv&=K3{T3Al8}P' );
define( 'SECURE_AUTH_SALT', 'N!%sB{I@)fT6`MuEXfCDoO3LxA[rqlY(LHr<D5CG*5yG:bZ=)hyg0/gg^dk#W!2/' );
define( 'LOGGED_IN_SALT',   'Dl8W<[K$Ao_wZW;aETw77<-,7F/Ts{]libz1X);:hZl)^TL0BXRVRx~):w8K{HC.' );
define( 'NONCE_SALT',       '[:MlQ_e1;*i{bYve>#2B?[?y<%>vOatZJHB{9?Njg_*$C%bv9 5fQN|]F>TAt08_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xcyber_';

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
