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
define('DB_NAME', 'tough_trainer');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '^mRQSkn*<__?~rG~gA-%y,]Nr%-wYtGhwF)ffB=+I,iU<!8I]aS_HU)iznTDX!`b');
define('SECURE_AUTH_KEY',  'W1WZUz}@=&=Ztn:j`PZ*E1s#W+OQ;]i?d[ktX!C;>|=(JI{1Rk6Ep|E0q2p6!J;>');
define('LOGGED_IN_KEY',    '-nQ}nY{RG-l$wkI+VSce4@&l0u][x7S3=Da.Fy-VDaVbLNQun2GDRMPP949%:jXI');
define('NONCE_KEY',        ']~e<?K~xXP]k/?`PNwOof6<uW 1]/O>DU7[hn0>bj(e.B,48tKZ+|Chs~+.4;:@9');
define('AUTH_SALT',        '&?WMIFK^~19J&EHUm).*80un(@ffDAb9ARj0v=US%_/ss+dziV]OvXid`?ek-w`a');
define('SECURE_AUTH_SALT', 'C.]ROo;]qE!7|wO0(=YqT9Ai3N[L:(OOUu?gas!iou{%rCccOlh}m!S$=@zu5qx]');
define('LOGGED_IN_SALT',   'U=+KhSB9]*|idO)wUzk_&X3_a).rQ%by? J~O?O>Y-9BpF?vx/ZUOOME>(pC=}dD');
define('NONCE_SALT',       'hoA.DwVBe28tTL`S(gdBAp53)GpuIh*O.tBkT$X]a{n/q^iV?i7deL%=UuDJ]&AZ');

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
