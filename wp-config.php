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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '+_TvQ7It5&4.Ji}d LdWv_,R6Wv-F99o4IT(MLw<)<&|765YoqgqV]A%.tf),RUU');
define('SECURE_AUTH_KEY',  '4HrpD!l0wIS F@*:Qd8qh{Z$^0Ceg6yyy.m`S-BjJqu<2cOO]!f ]]~Z5sek>seP');
define('LOGGED_IN_KEY',    'ybvpJT!W!Wy2)Tw<M^wkeP}@u$k^HR0U=$E>I{/Xcq7A>VPiwL::71p7=5I}75z-');
define('NONCE_KEY',        'hfopt[ur{MENQObVWu+x+LV;k)#(%2V`=/@[]I R(?C}v5be|?/O=RgWRpzZ^Wd{');
define('AUTH_SALT',        '-1M:>yXa)!IJ-|1:It@6YVeAB?lbh{$56OSXrbmdchPhD}/L<Y5I/PV`bxOI]6Jc');
define('SECURE_AUTH_SALT', ':AeY9D*,j%rL/Qm~!<I>H9D:v QPE&~v`Q?6D?7`SG@=I`!%wg 3C=TpF^5zw`Vn');
define('LOGGED_IN_SALT',   '^QE&jQ6F7V*yUm[>|Ee4B)mh+(^P(X(FHK5X2-pGFW%xQ^ON_-y}&?`Dy@n&9m1n');
define('NONCE_SALT',       '=CdSc2U?unmmyry^CG24!WjpOCIw4eC>jg-{&i_UAkSveJv&slr&?Y<qFk#cpJG3');

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
