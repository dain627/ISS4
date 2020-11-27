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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '.liquOA`AGB1LM/?_$GzIk(P&+nScVA);HS>h9p;+N.VfT6KI`0uUpvxD7(Y<7%@' );
define( 'SECURE_AUTH_KEY',  ']#~Jv5MGe%)#gy-NP&C1dK{xg{Ij&t)$OFw@:W1-`i*sYbaP=-pEmnY!(q<dM2Qp' );
define( 'LOGGED_IN_KEY',    '4S$b{,ZzRBVcjm5+6D4M=T&6@wo~{Bo=Jqr]Fj^;c[pj![kkj.cN^U]>=m76=/Mi' );
define( 'NONCE_KEY',        'pf4oi|e|8ejc9nl;?>xxB&=/IN,Y![<DoY~~}/km;YCmyYFDa:xOEMr8dIzfA:]:' );
define( 'AUTH_SALT',        'wqMy^I7EasX(CvF9oPw+xk_=e!R*xZ)@dg-,]G2mGYkr 61ZtNSCt?MtFRMO+dVs' );
define( 'SECURE_AUTH_SALT', ']jq/&&9sHy&b#s_+!wdf%&q<GRLHpjz)JUe-Rc0YL(J@KSpi#`iH ao4ce@:2cIT' );
define( 'LOGGED_IN_SALT',   '?[p[4$M_ R!r^|W.*iPP6:MfNT~Z}2@ RUGB;)W;al_.zgtA%},;E>4g>1SN+?}!' );
define( 'NONCE_SALT',       'TVC8GlX}.j?4|8ve1R>n{tb<s*s]Y=&#Q8fq<GiKe4Z_xvn>Q(*rT|NJVZ>i=6]=' );

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
