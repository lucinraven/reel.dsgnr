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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'reeldsgnr_database' );

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
define( 'AUTH_KEY',         ':z(&dMhQaS6f)dpth-ibW}bvRb:{oT-1f<#qn;WHWW0I*Mtx6lBdj)VF;_uc8cb%' );
define( 'SECURE_AUTH_KEY',  '&Mh MAXpH`vf&oNzc;/Ux}9>.;r]/?9[.{sb%l{}<6.2Q2~,a|t)Lh*(s |?yGsK' );
define( 'LOGGED_IN_KEY',    'XP1N8PE][}L~ez`U80z5P++VtB(x_Z7o2Ac:,QYd|cgs<%4(ok/xX&(BJd2s+e<C' );
define( 'NONCE_KEY',        'ZvM9R1`5J1+1,eZTHrz^(YC~]0;D4&kG%a-x^pTUoGPb{:73X* }yY7AT]F+p2ex' );
define( 'AUTH_SALT',        'n>H)9F!F>Q!/Zsh^}rEIQQeO?/?Z`Cjf$BV2{,D,,D~VxXeC;6H l0 ?tHVeYx.E' );
define( 'SECURE_AUTH_SALT', '0/>U.mt-3r9+le~?NWLB!J/j[Du-OsaEdDlun&9F.H{gZ7QQ{_b9CV+Q]x$(O&bG' );
define( 'LOGGED_IN_SALT',   'rduP`$;V%3l4C|w0m2bIEz`Imxf!%8|:k,LWyOuvxTri9u{J->3>#Rn{B0t]Et!D' );
define( 'NONCE_SALT',       '*xB` 8D 8M_f_i/=0FSkrtXB@Xynw}dR`@tGNnI}&rG?eLSu7G@=(^w9p`|*v-Wx' );

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


test 