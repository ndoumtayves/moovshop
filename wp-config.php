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
define( 'DB_NAME', 'MoovShop' );

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
define( 'AUTH_KEY',         'oqScv07dO;I[ZxX,]T-%N]n`( vnq`5quUpQisY9y$cB`bNoI7}n{#-*}%7~Ziec' );
define( 'SECURE_AUTH_KEY',  'rD7P%_^P$|6d#SX,h=GiQ70!4yWzxOQ9F1]p(1iY>qKH.Q&YSfA{buS3G;Cu3hp7' );
define( 'LOGGED_IN_KEY',    'NUzrCF_tV%sef+;qJC*{o7{RYZ?i.@r9ii%G7vo/h)l<b9RJ4[/qj=,X^}y+}R#c' );
define( 'NONCE_KEY',        'LA~v@0Tb#[X]R~*)4}GnX:m]-z%9]-HO(i/z%hhP9l16n)2iQ;P.VzU5Q`r~wW!>' );
define( 'AUTH_SALT',        'oq_={pUTvy8-AM7OsIoY_To a8lep`y5Dd~.!;E@9h:s>e9$.m`TkJSH8hlUMLVR' );
define( 'SECURE_AUTH_SALT', 'pyV9fX7)8p_2;^ CilSx7*_~$#Yq;{X?7vvBQ;hKXQHU4ZoP:{a|$i2OVuJA6 X!' );
define( 'LOGGED_IN_SALT',   'U4[mDlwL!l#Ko~EV7qM3ypIfrZ%.Duv iT{z*Bmf,JdV@;1`2H8|+Gut$4H6jQ(s' );
define( 'NONCE_SALT',       '#>DDt!HS_sf:6DF@ONfouqpLwWGm&,@>HF0Wj_8yDzb<+E$0NE,a7[sK@nz&r[{C' );

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
