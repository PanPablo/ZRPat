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
define('DB_NAME', 'zrpat');

/** MySQL database username */
define('DB_USER', 'zrpat');

/** MySQL database password */
define('DB_PASSWORD', 'patent');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '5(WZ}:?D8Ea|EQQ:O=K+~(mxk]gVQEu_{hqSqwVfHd54FiKq-n-YGVv|T+{ 6IiL');
define('SECURE_AUTH_KEY',  'lPaw_&WyXA?2JBhy-<r4aq|GG{v:EEJEFJ9Dngz8_Q:SIad m1TSZ{aPR?_3-re#');
define('LOGGED_IN_KEY',    '.(!5k&RNeo|#G>Z)$8HD]tfukoq)53sSD~3z-j&2-Up00 /xKI 0.T4axgKnrxoM');
define('NONCE_KEY',        'nK~V!>&ID31=dl>cTcO!?e)29&?c9{hDck(^FZob@+RL=7O3CfG%=cTSJx:Z=)]w');
define('AUTH_SALT',        'wk,.d%+C<#O+O;<a&CEi_Hkpx[oU`v9{ UmGj:i*ym5-O-0.G[%nQ(ueb 1?+>+)');
define('SECURE_AUTH_SALT', 'F01ZYeg1_>nZ{Vgx.j&2G{fnJ|]-A-[5(q]33va@*Q57qWZ40g1GC@m6*:i@KCzX');
define('LOGGED_IN_SALT',   'o6[[zS56_lI^m;Y4Ro0`}#}M^[@ze--u&#JPH}*_*Ri0];!g<^<s}Awm:&8z%UJ0');
define('NONCE_SALT',       'sIO[O|q5kF9FAeciK6j9F/tUiw+>m>oAy=p]Qb*8K9<l_+!~^t<x9hxjspro~P>r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'zp01_';

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
