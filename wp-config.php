<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thuctap' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'jr:5_jntAMi#``f]68}#?~5N{3zG#h+<R}nF+Q]dr *[7?!9!.PK`>qcgNn|gvYV' );
define( 'SECURE_AUTH_KEY',  '8<cc-Y~lfa/oGuNfT{<|2||E[b^#?ug]0:brsL,9 J;:Q0+2X5B0P*62~L!55X.A' );
define( 'LOGGED_IN_KEY',    ' |1gDZ-Qf$Np^,vKxG3|Ks1m?di9Jh~y%8b,Xl|R]/oH?%KM#K_L}m^eKha~K/,}' );
define( 'NONCE_KEY',        '{{WZ>q@&L/EWa:IiO&s6Bo)Ue)bT7x--Wp0h5ay58lWo+(%)kdL#U60#.}$0]# ^' );
define( 'AUTH_SALT',        'G#f8!Uq:`T(=#WiJmX14vav.|Qi=xol?(dZt+rV~0Pk|.2fnV/G<8Sk+mCLbZL7>' );
define( 'SECURE_AUTH_SALT', 'MPWHa4e7gkuNcAfR=wJhaIjP$9WV<Ta!=.]*Qh>_^Ue;&nfIgge[W3a=-6TE2%EI' );
define( 'LOGGED_IN_SALT',   '.,Tg1bsLF:y)RP*p>]68FS&XcTRV(a}Gc5z~gt$_<Vy}Cck|GDp%pg~1h4%jbd#K' );
define( 'NONCE_SALT',       'K+<pDu8c5_ng&oeI1$GT{[dKy1Fbm%B{%Vw=.q&og$@;LcbX>ShC3Ztv}nq9#VfJ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
