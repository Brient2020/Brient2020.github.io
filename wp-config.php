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
define( 'DB_NAME', 'brient2020_tk' );

/** MySQL database username */
define( 'DB_USER', 'brient2020_tk' );

/** MySQL database password */
define( 'DB_PASSWORD', '63NfPrSBYB48CLsf' );

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
define( 'AUTH_KEY',         '-$nd>z~0Fk<405xKd8>57KxiOz9n>PSaCojluZSS@Djr+ZE=&QdT(x)N^I/VP8tt' );
define( 'SECURE_AUTH_KEY',  'OlzzB6 &NVi!hb}5+4!6m$g VgiGE|pVZhFYMPd0T 79BA3Kl|b?:]AdO+G?}&}p' );
define( 'LOGGED_IN_KEY',    '0`*1ga.-{P0N%6bc7v-sy:lMv^C bP!R6V%AE@A!}]?@V=LOlO_T[/zYjK&}TnPk' );
define( 'NONCE_KEY',        'HZ^<J1dAl 9o#Ce7spIh2Ev1^&OuwqP:Jax12gR:V#d6mm-3rXg.[fW&Fw79^?%*' );
define( 'AUTH_SALT',        'f?(a,N.o^u]dRB+gc|+BdPa([XMu;qOD#TlZ*N<c= y^EcjgptHnOb/x2P]Pasv[' );
define( 'SECURE_AUTH_SALT', '}6ld|DDuVuNZw}S]$`uUD<*d18&1}#p?ozo[5bht4=~t`Qy#H2iU7Tg]-z)C(#`E' );
define( 'LOGGED_IN_SALT',   'G/.%?H8%}:< xj!{s)Pb>g%?=B+ESG)/l]!42CpRNKwNNsie%(CPU*nc^]snvyL%' );
define( 'NONCE_SALT',       'G0%pLZC0Xo_GFf[9F+niAqXhux{U16q1zI1SxNxDYK.$%/PyldXA$~.lr5HltMQ-' );

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
