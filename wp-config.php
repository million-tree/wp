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
define( 'DB_NAME', 'milliontree_dbx' );

/** MySQL database username */
define( 'DB_USER', 'milliontree_dbu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ctry0vbd5e4isvcc2c60' );

/** MySQL hostname */
define( 'DB_HOST', '139.59.94.129' );

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
define( 'AUTH_KEY',         'WX(`#0.7okQ?`x}>/mZoP4a^5GYj*q.US|uEGI?^mO+U2bi8]ikh+o-i:C>^~sSW' );
define( 'SECURE_AUTH_KEY',  'x AULWGd*)_|%lLK&}0 ph,|?T88sL-uhezr~m#]B)<]Lx&{+jO`x%}bK!/*R np' );
define( 'LOGGED_IN_KEY',    'b89R]vMauxnHGqf PFz_cSX/Xh9g_d~L<QFHEYNrBx^?(,1wfZ2BSUP+`eRrsvbG' );
define( 'NONCE_KEY',        'bf[<t;b6i,LH{U>fxX@Pg~r#>X[[[g4a!A y/nF`Q=;QDeYGu(S[[QYPB8X{jJ`$' );
define( 'AUTH_SALT',        'So6^LumL)My@@a_C0_a@e7<F{EfO2ESu^JaRvXXB@j*J)f (zj54/Y!EXPay<hIX' );
define( 'SECURE_AUTH_SALT', ')lnfd/w1>/ UL.$g,qa.x0aS@h9}SgxOg&[6gm>F{|!n oe+x5Fx}N69_MXM7Nsn' );
define( 'LOGGED_IN_SALT',   'Xu/2-IQHG][AAO&jTfJfIC#+>UKCo}!)bf2&]q;nk)A>C@]4,OnxfH7J@7DoEVFj' );
define( 'NONCE_SALT',       '!q0!!7G*0+=U|1Akq<yl[di_h].M,@[-PjS4w.EpN6,w{)n[/6;-VkybZZK-@wEl' );

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
