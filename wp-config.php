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
define('DB_NAME', 'chuy');

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
define('AUTH_KEY',         '!=Kkh7XlMvA4qd.@;qte UPB7u#f*?YobVs-;W)$0lv1axjZkkzqP#?.oUB,GX<C');
define('SECURE_AUTH_KEY',  'IEC0Eqik<1Dk!ylZ_X+c$wd*2FUgUV1D).w*_[~yOGR;Af[)02CTI_Gw4tdQ`m;t');
define('LOGGED_IN_KEY',    'g@=yfg ~NF.AyqsDb1?p xpO;TyGrp=2%wk3vg)(YdAx>p&Xge%C-|mBzD:G3r:0');
define('NONCE_KEY',        'vo`oE2,]yI_E56|(1<@mbP;i_R7;JJ)=Quu=62r2wnlyDa?Y0wkg^*>Oc<VUw?S+');
define('AUTH_SALT',        '<oDN&h#AS*vy/aoEQF?~Koo+Q_b8WWIe{jLrB;$C<oT]h6r>x(kfJM9(eQa8{DJv');
define('SECURE_AUTH_SALT', 'L-/f!94]#;Q|/S2|izEQ23~+(4->}uOhr=_MjsH$z T~b5uS}Y/z8GUqr=]OH*/v');
define('LOGGED_IN_SALT',   '7<XL8MKeANIq<%Bh4HQQsw| q$:9ly}[Z]ml=tBbO&<iXX9nBs@sa dxPJQ,#z~u');
define('NONCE_SALT',       'aMX~/Qo5+ps:XcXGUQEZ9-Q%1G4m0QicQ+P)eQ}t3MS)b.hCVL]#qw6K(+aT? %R');

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
