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
define( 'DB_NAME', 'website2' );

/** MySQL database username */
define( 'DB_USER', 'root1' );

/** MySQL database password */
define( 'DB_PASSWORD', '2t24vz1EA4hiZSQP' );

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
define( 'AUTH_KEY',         'stB<=c%j;P,:&MDlD&EF/j*15lewB0{0qgWk.>kPjr5<%vF:Wy$>MiEX8#!~`Gd!' );
define( 'SECURE_AUTH_KEY',  'l5UUY(WyNEXJY7m_oD74C1,0aV,BtLKr![paA.FeP({oD_x#G+:0${ w?N 9W~Im' );
define( 'LOGGED_IN_KEY',    'QZ= S](Y7wx3X^50`e^{`IR0/5xU13WX3$pY]<B1!q9Sx^vQK1q>7H*dTNqETp@S' );
define( 'NONCE_KEY',        '_&i_h~v4:>DlY9REJ~ |[SF0/2svl2.1Ex/vLtHo-BLTn$D@M8MR@D!^GS`4YF[[' );
define( 'AUTH_SALT',        'gD-;EOw23QVc?NQ&#7zq(d <ZIaScbq=1+*AcH*?Ql e%vn)eA=a0]Q}^e:Y;(+o' );
define( 'SECURE_AUTH_SALT', ':Jvx=^[BjDe12Cj2_vp51SLc,H68kwU&v,*W7$?$)]$x~[1|mOA=*j!BXq[$G%U(' );
define( 'LOGGED_IN_SALT',   'CG23Duu.%=q]oOA*1gk;x^|nms:3+{9Y1T~1WJ)P!t:Mgkb#]hyjg18:==wrjHLL' );
define( 'NONCE_SALT',       'M6VWs%F4a5SQw}< 4w)1opez5Pk=C`p u!eC(N^EScgp?+41T%T/Ol2rUnSL2/#8' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
