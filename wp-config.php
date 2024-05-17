    <?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'cR7*Pu@CLEZMMftUH[.wDFK{b}(m;J>Y!VLk? wK$r6T|51D*7F@./o=!l>l_14!' );
define( 'SECURE_AUTH_KEY',  '/JI|#jgr`d uU6~I>$Z ]OKQ5A GL*`4AruX7n86R8T!!xErh3G6/~d GArZ__Ve' );
define( 'LOGGED_IN_KEY',    '($=k*^xWKhzD}e<dFAzk%#W&Au+Df>K]LPM[M`NVbU$Iy8,=@^y6#AAy(.IN`Yuv' );
define( 'NONCE_KEY',        's-Y>*Qn8_D4,}[XqOjZ;Eo/SEoL<$+4>DVnzQP05BI):,R]*y+52q4S1zn:IQ&z!' );
define( 'AUTH_SALT',        '.SH_V+N`N&UH820P~d5v?ir=F&PHe6#{UH*F#9$W03IFUmgU0_Hyx[TfU(>vt#)T' );
define( 'SECURE_AUTH_SALT', 'J~.&m.ObsVK,y(p>PrO0Ir5Qq]<N#!&Al-Ngrj;9%fD2un)Q{^$SBrHS8*CCMAla' );
define( 'LOGGED_IN_SALT',   'dHW] *|wlbT~7hZ|GqbaMjZ.fIFCsD@RnBal(dBsdi]<qOdF&!nuU%kRM.(Jyiyw' );
define( 'NONCE_SALT',       'L?]|@;i#)o^3*6Mg}cJo@9h/=uUz^0CACVACs%[-**<tcf93b?(sR$S+E(8+,BDS' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define( 'FS_METHOD', 'direct' );
