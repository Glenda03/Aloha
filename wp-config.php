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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'JstgB/Za=(hj&Jq| :HsOR6,:K=>M%Re7+d.`$/f8~2/`=W Gr7L ~A]0B`7s9d<' );
define( 'SECURE_AUTH_KEY',  'i5%;[YFM#ttYYr<0yCQf+FV&7/=/z8*.-i/D$kZ%YRbAnRrs<NVM8Cy+#@fqX,H4' );
define( 'LOGGED_IN_KEY',    'Ygy~byV=$F)3Ps-[]^#HKMzRy/ck>fxJhWNc$=}4`$*5:1gXWGDj/.z 2Jh}I7Oi' );
define( 'NONCE_KEY',        'd+[xAs0u0P@f$#X,Nr/mz#fjqnQe_{X,YZ..Hih/niO@JuU;FK#5L#>jVW&=s:1n' );
define( 'AUTH_SALT',        'p,WEFf`?0yrHbCx7LI>z2!FZ5Nd2el#1WLESWyu3OcF&u-.VM~Z$~wB+@kG`591o' );
define( 'SECURE_AUTH_SALT', '1sR_-*o?*M:Q*Jx;MZWXbBzl[+7ek,43NU>9Qmg51;}_k)|sty4$y=Kl4]K^brjY' );
define( 'LOGGED_IN_SALT',   ']RhoQweFU}9rP%n}<yV5I8j{R/jU=4?.$$2I@8jX^[13@p#b/A:g_{p&wf]&K.|F' );
define( 'NONCE_SALT',       '{zrB12-t5V [V__9_#D~!v*BVKG5f[mqDj^Lp?qa_MpMPB}L1PQFe)mjaOKPu&j:' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
