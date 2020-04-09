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
define( 'DB_NAME', 'notespoint_db' );

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
define( 'AUTH_KEY',         '0`ZfV=01GS,k[mElPX/ek(lET88:.TH*ueSL1hiVkL9.RHV{137!QuGhGXDNYg.Q' );
define( 'SECURE_AUTH_KEY',  '~W49.ymPdb|N]2=kw$N+ B,/T8$UW+^UZjub90H^G&u&f3GAcrQ=-]NGJng}8NRR' );
define( 'LOGGED_IN_KEY',    '?!$YWK,vFK]#L>$A^xKkoF9_/V{lO_;r0 |Ma6YZepf 85Sq~-QjOGYUkn ;1`S*' );
define( 'NONCE_KEY',        '#l&2l9(rLj2fpHz7MOxQDad$/-P3gLl^7B(:#>zmM*LUCiTkw%jutyEDvka!I-z/' );
define( 'AUTH_SALT',        'XL-YHhj]<LLno<.G?kUd}A>k9Fk}}pq1RF:=tOdKnE72$>JLj:1B =;dQp/&p0VH' );
define( 'SECURE_AUTH_SALT', 'ML`^C=V_?6VdfE@ (d8.ZVFmP6Yy/^E[*J()Qlbx1f.Mr&dU<Z.cJyY0:VUj#YDb' );
define( 'LOGGED_IN_SALT',   'Y@T4[>W:w.2(|v-9Qvh|f|%&0a FZEMvJto@4MPL_(|2K4$y,@x)v]MC]2A-CKwN' );
define( 'NONCE_SALT',       '6KA=0Z:<oI,0jd,YqbIKu{(K,zecjW?fXpA;{*W}C~m45#R=w/N1Lb,t{n_bBkyr' );

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
