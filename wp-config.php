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
define( 'DB_NAME', 'wordpress-practice' );

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
define( 'AUTH_KEY',         ';lyj~s?AbqjqB/#Rc#GaAT3bzfH*(3?9TU90]LgZ4<b6~Z@Gkz2KOprLRj_bvD@g' );
define( 'SECURE_AUTH_KEY',  '0daka@!#jw@*UiS_b]47KPI8^hmPPf.g4%?7w:|$:Y-)(Jpe?w[M5/`}/nd4?h&,' );
define( 'LOGGED_IN_KEY',    '#fVWqE|.!UxhHS,Ffg7om4QqQP<rknnq1:.24vN^Fqc`Q+kq6lT5r{ZbP<ad~&w-' );
define( 'NONCE_KEY',        '/j;+>A2VA~$vehP}a]/!<W7SD.zZ(a0F?YT%gz(a:Z<FUA?t-$ZHyf#nS=|PXOha' );
define( 'AUTH_SALT',        'n~SyR]+3{F2iE X3/_Q &`E}egRP14J;Cd8q=3LesrQ[-?SSq+NKeoOq{jz~w*-;' );
define( 'SECURE_AUTH_SALT', 'QSzW:Mpc;>U6Lt3Lk]btl)hOAQw={[L+ABK )x(!<Wm_Z0tN gDi`RGu(1Kn}tHf' );
define( 'LOGGED_IN_SALT',   'V`QX]3:^P@_*.s$U!=k@;$xBa*zu9A6=*|WsnEd/=?_DCCIvPF2yMnb>8j? @xmP' );
define( 'NONCE_SALT',       '<30TCnzWAsk70PhfH &pA70XGmO+=&K5f/4Jn5Wrj%]67wXO3*d$O6%bn%5%UOQl' );

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
