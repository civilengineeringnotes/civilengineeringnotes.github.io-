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
define( 'DB_NAME', 'brightnotes_db' );

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
define( 'AUTH_KEY',         'Dn>X$NR^f$~ae`RhKFon;tPL]r5 Das!!UO{U44~$U<L=_;iS:h/s4j$QG&(VY[c' );
define( 'SECURE_AUTH_KEY',  '_]Qi~N_r`bF9YP gK94g,raqwfw<Zl9Pa|Y,BfA|og]VIivwXiuY@clOxrTajntj' );
define( 'LOGGED_IN_KEY',    '4dv~fi2WZZ% u-7%I`MOB{YLH~Hce7qs]lP5FM05F2V-A$k0K]bP<JpFv%~TrYCh' );
define( 'NONCE_KEY',        'L .%J^a~[DlL+#u Y(oyD[OP10oM3<.jD{,]_%y0H$mfa)yKtQg_I`?X[oy#!.xM' );
define( 'AUTH_SALT',        '0t)z6567tZ&hBP1e/+)5Xly&9wi^BFNpH`c_~J]l+3t`|$gD=-}Lj!J19mdP~i?5' );
define( 'SECURE_AUTH_SALT', '%p(Rlm@d97ii$y4mt./Wy@|?;-Rsbu}BH[k ^%+I2B;#JkWawxFfH0a{6RnxYsN1' );
define( 'LOGGED_IN_SALT',   'n,wQR6,K/CQl*Y>73u3TInMmQ:iThMB$=u+,y]L19~Bs-py#oQ|14&];V@n_473M' );
define( 'NONCE_SALT',       'emhwnX6nNaCFSaKUvY}4RzZFeD;LSo xvz[<#I3Hl5._XVHvAorIe7o5y@ppPkG*' );

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
