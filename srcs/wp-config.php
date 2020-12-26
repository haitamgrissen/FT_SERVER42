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
define( 'DB_USER', 'fibo' );

/** MySQL database password */
define( 'DB_PASSWORD', '4916' );

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
define( 'AUTH_KEY',         ':wM>7R&)1yix//</^|Po[jsEQ&d:]xonsQ9hxW:p;GqVC}0Tow__gWk|a#Z&%:c}' );
define( 'SECURE_AUTH_KEY',  '&|9+hpZ/iX}yO9yO# 90|<_$U]NM8k3WjnlXL&hEp8~XB/<p7Bp+NKV/aO?#!mHl' );
define( 'LOGGED_IN_KEY',    'D,yf^cFWP0)2,{#lsc$?5;J>6f:nIJG5D8s=Rk {U*pbkzjfi=4,KZcUBEB=pO,7' );
define( 'NONCE_KEY',        '8D;+`9UBs,hTUtLC?s-:s!/@0f(Nh!0usNhhC,B#,%uQ7H]TG4^N^TB&F{9Fh7!z' );
define( 'AUTH_SALT',        '9:ZteYw^ l!Y7hV>twuDZ|GwUi1|;Di*s?bu15;imKmNm-`c(L8SrhXYk*X6it>z' );
define( 'SECURE_AUTH_SALT', '_TPLr,N)@-ypb5A2NpJxEc>cW.h=%7!}Vw+`[V5Hg*>@O$li^#cfF)zq9sW6h+@k' );
define( 'LOGGED_IN_SALT',   'RT|BxxfzsO}%j}PfE!zV7:I5FP-_Y^4*}DY3/QEhEo=!_u157GaCK40xLL@1x[Nr' );
define( 'NONCE_SALT',       '/W??JUeW!GGe8J#.HO%}f%fVcIsn1Na~I>tdGh;=a}fKK@{ V?6pp%GDb CTPLGq' );

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
