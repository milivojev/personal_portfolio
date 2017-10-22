<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'personal_portfolio');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[}xLc${M=[pJnn`6.WjI$3zI&{[krm8||=@f&HKp+1I:@DfoI*23=1i>kYCj}m@w');
define('SECURE_AUTH_KEY',  '%3d![&P5woWJ3SHwtTq+GznyCy2xMHYg.H@n]/.@jzOni7#o*3QB F=hDBffX+X=');
define('LOGGED_IN_KEY',    '!x&i3XJ?P %[uNd0v4>CW7`Y(3s4~i[<fC`_RjUvf5 6:S ZUXEU*Fb&$E_=Ak%y');
define('NONCE_KEY',        '-]ct6gqmufo8K.MymDd]3jg]:Eo#zxl%)~H9fs`eZ0/skm**^f_kdHpI-@V4Y~& ');
define('AUTH_SALT',        '=p%QHbncNK.YeP0`OE%sBeuTD(Giiak$3fg%LA5$xl[ 1ge<hMxRU#Dcti99-^5c');
define('SECURE_AUTH_SALT', 'GJq_/*gOVwR(!i&#:iFp)s.%%=*l714b49|_D61e`=h}<tGz3vq@xsO-;D^loV#s');
define('LOGGED_IN_SALT',   'kK5[C5Q3O+)}M%LO2d,`1 /&ppUT? Q]iY[1AjVPNT<^m9|jG$x=Z0 $`h1fso66');
define('NONCE_SALT',       'bvjfNQ;%F*FA;EptvugQxz[T0sR=/zx9-c!.S-Eo1O>UPViDxh|%w8*oy_8#2f9|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
