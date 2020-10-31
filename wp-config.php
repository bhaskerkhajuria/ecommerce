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
define( 'DB_NAME', 'bjuexbuawr4uhnav2pdk' );

/** MySQL database username */
define( 'DB_USER', 'ulol4gzhkjtd062a' );

/** MySQL database password */
define( 'DB_PASSWORD', 'GSyOlNUfEZjX8dLQOuFR' );

/** MySQL hostname */
define( 'DB_HOST', 'bjuexbuawr4uhnav2pdk-mysql.services.clever-cloud.com' );

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
define( 'AUTH_KEY',         ')C>#9do*nF=$(?NKai~T)G%R7)pXuyfBFS`4Q{tTibilq,`4ho}C:mKWYS{h-m^J' );
define( 'SECURE_AUTH_KEY',  '=YnpUTwlBI~HWk6;]Oo ^zE(HEnSS:@R*-{I?54;ml4tOn>t/xEkXcx&LtTL&,10' );
define( 'LOGGED_IN_KEY',    'KdU.ZiNW7Rll:KM}#z2<c92G6s_q_&G<yto<l0$.!mEqp1KRx,sO-%,iYqq?D)w.' );
define( 'NONCE_KEY',        '4Kzl^!(?H qgh;a>.el![W.u1?AX`)Esx}d;Avj98sX)LSt8s(kv.2lEhQ+cIiQd' );
define( 'AUTH_SALT',        ',TEF#{m1iN6r1dFb03F6^*i?Nia/;b(wJl.tgKl*M~P$/>P/VwQq)c,cXBh*<!g!' );
define( 'SECURE_AUTH_SALT', 'k:WS9c=/Npz[aYe3r|Js{4az`)>HFpB-oSXpKab7^ne_LC-&@:/RgJ}D!m;J/R^o' );
define( 'LOGGED_IN_SALT',   'yZ300NhDwpLLm`h{}&w+gQ0Qv.W=X4@gOMIUciQ@flAi/dy3|P>jG~nn&<C--&*s' );
define( 'NONCE_SALT',       'Ig!H9Kanr/mSPT5-wM7L`oyt%mtn~NlTY[iynp,ZYd9PzV4jhCdRezwyx7;QL6bK' );

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
