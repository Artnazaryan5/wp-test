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
define( 'DB_NAME', 'wp_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '!hw2:(BQ0Pv&5/v:Em+A(~+46(HO@87M@Rh[CfRJA14V2oNh0;3q3P)|2!ZgK#Uu');
define('SECURE_AUTH_KEY', '@]p679N5aNaZ-D9ygI]WLtT94@O(d)mzduEy)A48-2oWGfNho/7)c6HvAUazqz5f');
define('LOGGED_IN_KEY', 'adYL&0a7Qt62cE:FZR9R8nLDE|0A*sVp|A)u(*k3pc~c7K63-F93iy45ej!0epkJ');
define('NONCE_KEY', 'i06VDk7s4-D!fBw|8W835&+M3F-5k%TRC]02KtUs_59Na;/f;U@0Q~6v#ym(u*7q');
define('AUTH_SALT', 'DaMI][c5g5EC44U4I4VIb&2pf~Y:yvY&91%e8R9~~[#74_S81I63hXn37DqrX_0A');
define('SECURE_AUTH_SALT', 'Q!9NSU9x12995R327|Q9/3X1[r(;*9A(;DlV9N5!5v56MK9p/nvjp/Ga64:&V]&O');
define('LOGGED_IN_SALT', '*+Sp2yniYc)oAF48;W5E2Rh|3~5F76|gg|vY5sq2L4NW1j0*s658sOcjSe&E7|AJ');
define('NONCE_SALT', '9R+7SE6W&ds21nQ;2fD1Ljcik6lW951-8!BBi7i/n)64/TE(SbPe@GKW3*U@17R8');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'GPAzO7u_';

define( 'WP_DEBUG', true );


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
