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
define( 'DB_NAME', 'hplg_htplug' );

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
define( 'AUTH_KEY',         'lDe!9OED~1Ydt5(TUORD&G6&B5SJ5Qj9%C#63I#qBR{((@Babvb4){~1X-N2:Om-' );
define( 'SECURE_AUTH_KEY',  ',^?gy[AQ?3]G!a7XA8OG5Ad$*uvS{/l?lFma49WnM;,$W3>B(L#/6}AKq}6/Es=J' );
define( 'LOGGED_IN_KEY',    'vo(]bs}WJL]uZufhCdr3Xaz/B{~7~t?YPs YRa$8zr#:ps]cwp%26kL7PF !nJtF' );
define( 'NONCE_KEY',        '7)0tICE7MKR!*GqUTYye/Akb,l[oZ;pdr*`1?ya::{9P>]Sj]3|5jXLl_,.pU%Si' );
define( 'AUTH_SALT',        '`Y1W)R:P.iP{%chI<%h1D82>8.u&)#3%`nO5._<]G*Z2=G[GJjjR7?~(/wLJFOn:' );
define( 'SECURE_AUTH_SALT', 'iPc{@_35Sw4Gs_.gTWK@c54P*{wRbks4S(c)SF8L5GOGh+t!z7)B<~Q(vgl*L7c5' );
define( 'LOGGED_IN_SALT',   '<P8C=k&!iy#^b~< %1OTY]C|n[%PQXdB|J}O9Ofy.)UeHo/bETiwmmN^|RC_>7&B' );
define( 'NONCE_SALT',       'COqz,<Ht0RYdzdw)7r8$*V-VPB=,>pJlEe3chU)j;VEp8Mjc(3}B3x0x7]nG/Yfc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hplg_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
