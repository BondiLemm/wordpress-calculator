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
define( 'DB_NAME', 'mysite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'mCnZ2/R!CwCr<CKe0uvkPnf?ZhGZk1r%VX>Fdgdd`7#rJmXGoTf)D^myDB7?1y>K' );
define( 'SECURE_AUTH_KEY',  '@z8:NY1b.R1`HeR;H$7P`DC1YxEs6bCAsqd(d!M6iZF)Y%]UHXe)!ho9=X(+7Sj?' );
define( 'LOGGED_IN_KEY',    'Q@&e)-*5HY=m4[sPPdr*cc?8QU@Gz*+fEG&MJ,?c({lp=G*!MJPK7N-nA@#^aCzE' );
define( 'NONCE_KEY',        'Ih(2>5X@7@kXq? bI8 [}R*=*OV=$X1sF)nw_0:VPFCNeid@t;d)r=DTe}KN!f&?' );
define( 'AUTH_SALT',        'I<|YH n5-@U-u=-T#738 Ym`$VxIeV[f/rdMuxD)^U1R[yr{`l?[80v.PKzZIjLK' );
define( 'SECURE_AUTH_SALT', '5;ZI{}l{](K~][^no?Wd]@vE*0lUo^8/L.^3|ND0-f)>h+kZpcOM>s*tD0D9] f*' );
define( 'LOGGED_IN_SALT',   '[RJ5urs:57x~KV])Bi, m(=b+zlG` D!]mwze3sN:,7SQ^yfjWrniB53x[4khLy0' );
define( 'NONCE_SALT',       'uM8@0%<S95Gylspij/ >}pb1[uZ]%t=hOd pF}g}LB[/cg<_W[AB@h:{By,MTmKJ' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
