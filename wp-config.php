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
define('DB_NAME', 'first_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'qlim2lim');

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
define('AUTH_KEY',         '~/FPY=>4!Sr5IR*=_*$;{O2#6)FbYK%dJu$6YlT:MLnlC-/*Tg<WpX{!j)qW&o!0');
define('SECURE_AUTH_KEY',  '`l0HU$Tf4C0pW+}]R+SEdt%D0;KbmNKX*=E#z:RMYP^e^WcY,`l:#+CV826.O~{B');
define('LOGGED_IN_KEY',    ')m6-Q2sUbH0+_UECbcR#j<:Do^#j5}y&0xUX7*9gF&R:bs1EKj^epT=k(]/1/YDy');
define('NONCE_KEY',        '-:mKm6;R?)&8qO:gH@Xp?i3SdX>:W0J;`:NAo,|{bPyoXf{x;0D-l6mv#);+TC6w');
define('AUTH_SALT',        '2s,qEbJg3Qm1$IeO(]_3/7-ncK6pj~ |[YWnH5WG055+D_r*<I;<Aag5_^TRGW:]');
define('SECURE_AUTH_SALT', '#2TGn&+I=dP;IG8)*,]vSRB<*|4b)ZGslF~T6BSL~$j9vDKN)o`B1|MD`^!Te5lN');
define('LOGGED_IN_SALT',   'Ht{2mLJz>L!p`EqLwZ{4=3MO2TL *n6wO<M<oY3DJ jzmYV$#1Zl $42/+%o#)E8');
define('NONCE_SALT',       'Pg_4b@81oM0VfFhd;w.<sc@,oOM~x65si&>@)BIT*d1P?q%k)m0y*/}92]hVG)tq');

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
