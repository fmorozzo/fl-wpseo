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
define('DB_NAME', 'facilitylockers_wpseo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         '_%t 1^D2L!r1#0?(ve$rK%X=c+=*b(l`RLigB1HXuqm(<+[M5L>I#XmXTTzru;q#');
define('SECURE_AUTH_KEY',  'zV`^j;8Mf[^JB<AV!^gQ73rr&M9)jOI9<=T_zPMN)Az#`rwG`rVq_N3i)4]86h|^');
define('LOGGED_IN_KEY',    'qi!:GW]h>uTe<]g|ZJ2)Pe.[cTL/C4*L)m`OR_8,,DTR1MeVl:.#phUR$hke^MIe');
define('NONCE_KEY',        'FEK,.q}gh_|`&AvbO!!7]f/&[wIDI*:,4;fmz0?=;!)|y!k&d%/iu[KGuiL7iz79');
define('AUTH_SALT',        '/&+xFCr+%Gn-_@2o||AWn)XLHGBZseF:2c9L E/ufhvD#$+o9nQ1H%Gw8J_N,yt7');
define('SECURE_AUTH_SALT', ';<:AEYT8tg~Tay)Yy7yWE5:XVm5g(`A27m b(r%bhSN}@V,Mj^L#kxUM=:8UE#8R');
define('LOGGED_IN_SALT',   '-3ALYuJK?+OB)H+~!@3>LIp2#wmlms)q!Txr3~[6OBi/Ax;E|W<&?x<+:hq]e&Gc');
define('NONCE_SALT',       '5T]$nA6M:y0?E)KHMSSc/&ZgNpzh~^GuCL8(noxqd[ J+!8;n5%CJ@GMs ):C~>C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fl_';

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
