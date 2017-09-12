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
define('DB_NAME', 'QualityFloorServicesDB');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'piracicaba7');

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
define('AUTH_KEY',         'Ew)YEIQXa,f;$QX]>%M?X0+>`Pdi@b8nf!;]wk$Z%h_qTNs&[xedXnF])7)??~.!');
define('SECURE_AUTH_KEY',  '531Qqh;d%lEw?}M;5[2[4)6~K-j}b*0:`l[u}pc~I/,F9}sn^l56;%F#SBGByj&O');
define('LOGGED_IN_KEY',    '>`C:-]932dj<w`Q?-N8d->lTE% OvIk.ei^|SX7L|Qo;;{L[yB[Olbm!jk]yNb3_');
define('NONCE_KEY',        '(JP2&b+fj&5SBWJ&nw3X{Z`sU0v!};H.!qzS;&U/9o[hq|H^ofZrc =r]aKL@]hP');
define('AUTH_SALT',        'X{E0kV1E?G/Udi aIFwb2~g4=6$/</q;5n$*+7c+|MEip]#M6a7]i7K$ 8tJXPX-');
define('SECURE_AUTH_SALT', 'NjPCFaWO7u#:;Vo8?-s88(gT=Z >n&}0UB_^Q&{pYok~^-8{WP<hNaag|/Xwf#RY');
define('LOGGED_IN_SALT',   'cg!WDDap9v9ZM42NPX(v7HfqXR!zK?t?({`&Dc#6xOm$UMnuM.B/eIM@F=&K*a|*');
define('NONCE_SALT',       'CFg+q`iKcb/odJIc^m)RfRt52j,}u;77y,$e;M)oNy:pUxR+ej-#6n)q%AO`Xs7p');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

