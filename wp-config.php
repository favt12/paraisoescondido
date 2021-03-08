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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'td-onweb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Alexis98502789' );

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
define( 'AUTH_KEY',         '#T3my*N2X`9FZ`;5}nt:/AK42n^ %1~J3eUi#cFx${9..KY5V6 Cn>C8MGvU?,>-' );
define( 'SECURE_AUTH_KEY',  'HCHeTS`@D.s}T_blbeD~liEm%i3[NZcfs9)n{z1OoS`pg/UTl8-~z[x1CQGHHB*p' );
define( 'LOGGED_IN_KEY',    'MseYVV=z+6-c6e$4a7(OnD=/0Pvm&lHr,tRQt%fq:-v@KE]#rU%Zcm~]2OS:lX.C' );
define( 'NONCE_KEY',        'o (7M;yru PN3ubbY0UwN[%/o?&,|pO|xIR#RYdeFkMS]-lFx+ZNxc]N7j-Hu`_k' );
define( 'AUTH_SALT',        'FH[sLp[W^P5QrwFHmBfh`g;$=Dqbd>=/4fmF)q+<*Sc/JfJ[Zjjj1,pMp#;1y{v ' );
define( 'SECURE_AUTH_SALT', '/d hjrjfvGF4d^M7?~qPN)[}aIAE@b|bnK&Ff?cPS$Ywls~<fg}$dW#7>oF~J|<M' );
define( 'LOGGED_IN_SALT',   '5T55 >@Ec!nn=#]G!{!XUC2+7}$^CnD@L-rjqqo|3{>AND[?`^tV+1Jd!.YgU!FO' );
define( 'NONCE_SALT',       'tGyY60~~.WM+t,QQ7;=rJ>aj2{nRhQa{w*?WqSb)Ht_#P.wvXD/k/1 #Fm,I@l?[' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
