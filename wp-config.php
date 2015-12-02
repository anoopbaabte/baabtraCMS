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
define('DB_NAME', 'baabtraCMS');

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
define('AUTH_KEY',         'BK6iTgiyP^ULLzm~KYlL6Juic-wT5mOL lQ0=o@i|ThTEkBX$LKDk.8Y&m;j<Sk}');
define('SECURE_AUTH_KEY',  'fF_oiro`Y#zQFj78Xn,tGx[|VaiiXW4hb%FZQ1OT.d1qYz8-WH8xdS5@/E04T^c<');
define('LOGGED_IN_KEY',    '2:iZRcu0Hl7YZF?9+SDdXCG45c<FppZJ9*y~fbl8R/s13Do&=}0Czc`X# 3?2S5p');
define('NONCE_KEY',        'adw!FDmjOclU~R*ed.0kLu5M ROX4SyK/yTECf#dK}CVC@</Q[yCzDGb`6Tb74%S');
define('AUTH_SALT',        '~PO92B:se54v|A,^mzQb1^|2s_xZeMT^ FP/b*oe,H{Kz_x@B%m-x_#P r48E~|&');
define('SECURE_AUTH_SALT', 'N7uI d`Q yz,AMZ>t1L!_f!rhs@Ue0PLa[lCe T2[1C FRB*,)t%R,L,!/k=} |F');
define('LOGGED_IN_SALT',   '*<CWJie/^C2JSX,CS.sWmi}0W^~fKDO%EheHkdLJAlxunv#[&=H#[QPZQsj{i)[]');
define('NONCE_SALT',       'MRnE^m{-esX.<d&|tEMS=PX61~@{:4U:S(vxDY:gF9fT`a4j6Ijl=j4t*mSGZ]Ob');

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
