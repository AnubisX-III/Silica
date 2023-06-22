<?php

define('FS_METHOD', 'direct');

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbs11090908' );

/** Database username */
define( 'DB_USER', 'dbu4884316' );

/** Database password */
define( 'DB_PASSWORD', 'JplIKnWkrvqVGyPQUTob' );

/** Database hostname */
define( 'DB_HOST', 'db5013220075.hosting-data.io' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'mUg}:_2.Hy&&:bnV(=E=sbew30?p%rv?[>>^khCd/_9Q*/e^`FU@YV(Xkax!oi$_' );
define( 'SECURE_AUTH_KEY',   '+j`{MWi:<^U:JxX<$p)|HTA-3kz>l-J/,KvpuE.~:X|=tI67pHo3GTB0Tm&6Xs6-' );
define( 'LOGGED_IN_KEY',     'kIDM/E3 Fu@s86Xk~wL]dm?FzzA??t^[NUrXsr dF^eoz50[9>jcfR0X@O=GDHZi' );
define( 'NONCE_KEY',         'D?#yhaz9:## /i}g:XyEW/y-f<+C#&&e=y_.~=blc_O66lcM>L%g0sAwLJJvwC)J' );
define( 'AUTH_SALT',         '9QA~7@#5;[a6R$(|<L1J17iT~d45]5qn3y[Eeo#=5;:U*lWm{wu.RJ0IC52c+t./' );
define( 'SECURE_AUTH_SALT',  'X4Axd`GK8z+der}?A_x=DX~@g^O/u,1kv)raWzn?Ci%pL-2ujWM_VS(%=t7^C+4Q' );
define( 'LOGGED_IN_SALT',    'sIZ#/|rr;irNJiRTHD^Y/Xsi,t:sHgrH0fi@u[VC kYa^bN3Om}!s[Xuszv_=2|(' );
define( 'NONCE_SALT',        '*y:_^7fF=XTG5@1KIA+wq?|;+Ski ~fmJqM,5+[g^=^sjq1L4NMlS G.&V4WJ]qQ' );
define( 'WP_CACHE_KEY_SALT', '7>R5%RJ{B&ZSsB7}H4iXvd0s]NV8BJM@:K`;i>g!5;=Iyc<9g>~^^$<lPF.3irRc' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ZJXVVoEK';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
