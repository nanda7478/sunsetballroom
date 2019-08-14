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

define( 'DB_NAME', 'tminfote_sunsetballroom' );



/** MySQL database username */

define( 'DB_USER', 'tminfote_james' );



/** MySQL database password */

define( 'DB_PASSWORD', 'L66}@xlVixhs' );



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

define( 'AUTH_KEY',         'yzh}S=~1{Yv8;d8^si4H*qT:vukF6+26WcxI|u%o+Ni8C9PrC5~kayQ(s0Mk]|f3' );

define( 'SECURE_AUTH_KEY',  'NV*5aM]4qyP*W4goUocDC7)=;EXk`OAHt8rFq*M=r?%xweZ2D1t/=91}4BYtL#mU' );

define( 'LOGGED_IN_KEY',    ')/,+*3jIG9P)2soiZ5~U.n8i!K#W%HMT:=MxF<?x4o1|<E;VQNt(Triv&K.Za@>h' );

define( 'NONCE_KEY',        'r%`o2@(py~Bi5zLX*2yL#YAKX_{w_X[$nT,/^`*mj6tR^1]EnS,,9uxJQl;WS_E5' );

define( 'AUTH_SALT',        ';9lM`7OCfjeut}CZ/{0/XushMnP;!wYxQ4w)|D|8Y.VBUz_X3 }BpLQL?2@4#<!u' );

define( 'SECURE_AUTH_SALT', 'WNzhwc6-Q ZUqfOTpKHg<EY.TlC3AH5hqJzjIW#vm~}B-OsJIQjh(,NBaU2LSgOR' );

define( 'LOGGED_IN_SALT',   'N#U(L([{F<RMJ=gh %w~B)<}|4@5[/j/OkqA6a(g.HYGw)`Io/R_)+SIT2~T(jGn' );

define( 'NONCE_SALT',       ';$KJ:qk.k~h 4auO][Ntb=MMqzZc]x1f$UGe*3cPU2Wd@H.|1^N#n4uzgNQSFZ^V' );



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wpsb_';



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

