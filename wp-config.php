<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'bcpl_one' );

/** MySQL database username */
define( 'DB_USER', 'bcpl_one' );
define('FS_METHOD', 'direct');

/** MySQL database password */
define( 'DB_PASSWORD', '!@#admin!@#' );

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
define( 'AUTH_KEY',         'fSe7G[Aft*oilZE0?x6r}qaks C<7`;[K]*^e#`YH V8M$Kd.z0WcmQUR(kG>?0x' );
define( 'SECURE_AUTH_KEY',  'xKXnw6l+E]aW.B,&*`^Nbuv.9BezyCwvMQH4<R/LIf&-Xa?Zp@b{)gc3iK,LWR7T' );
define( 'LOGGED_IN_KEY',    'JF%i$+Nkv|ANRvtH)*N/p_[H=X%_!SolP_,%l6_2Um_OnV5]1R8d[7+IvvU{b$<6' );
define( 'NONCE_KEY',        'ao*7 UAP ea][=z~4tE5}Io*6(:=1&i*#;hgJo0wrO`o|JX,L4%-98y4TuA()z1>' );
define( 'AUTH_SALT',        'l%#3;.:<Y@&EA > LWYi]xaog5Sh1<7.X(bv@z!EHd0=M$#@SOzNp+C3WFku+El#' );
define( 'SECURE_AUTH_SALT', 'p~)~L~!@IO/p)11uxYVJUd9X2UNU0[cDBmo>38D}P:R+yPIdQ9<:a#HLZ5V<02=0' );
define( 'LOGGED_IN_SALT',   'W<sNpC@(S(}PT0E6ZEr),1b&<}<XBx/`XCGH1MR8P;8TvMpdBSSzT*c%M3k?V!KY' );
define( 'NONCE_SALT',       's8ysYX,&m13hp@{c*E6}Xq#p~y:Cv6 9uc1>}[0ysM}9>{E,Se+#H`~mJz90z^wZ' );

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
