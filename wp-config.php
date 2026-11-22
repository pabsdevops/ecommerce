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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'simso' );

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
define( 'AUTH_KEY',         'q<6SjVk)bb<@GcS1%Zy3>|%sc[JmmJ&2($&;]1c!%fPxyma#}gD?6l..U}#|=%@p' );
define( 'SECURE_AUTH_KEY',  '-cw~@G%~A)*TzO0-j/sMj.OEaR9AUCeZ0|Vv)U{I2hGY9+ 1`n9{vU-Lr0dv#a<[' );
define( 'LOGGED_IN_KEY',    'H ;Qvew/&D8mD{X2Ae>u{BUeTm6FY.#9bBNfp-UM/|RLa=iU1`T6S-oWL%bE&UUv' );
define( 'NONCE_KEY',        'qIS1}EY=~gaHLY@~meEws^0`4}mKgNC{|QS}*B NqJ686,!np<feF([fmC#V qZt' );
define( 'AUTH_SALT',        '/](|3{EfP?`Jd&{=T$!h=_sA-4AI{a=Q=`-EGAUg9F6+im=7<RSt^.FQ9gyQeoDF' );
define( 'SECURE_AUTH_SALT', '%PHiN{XK-P6P:cvLN.ddFC 7)?x*S3VB}$>bo6&>wm!>qoDt:K,-k(+!?A%mRNIz' );
define( 'LOGGED_IN_SALT',   'AwdjV`0{|+[ItA&LcZJ%Np9ZK;i@zBb JI&6{fI`WRr-!6&E*K)^ahT*P{VLZz/x' );
define( 'NONCE_SALT',       'amx(&{<Hb`$CC;UzJE0v^Fv}y.@gUQ)pv}tnp^gAJ8K&jE4)V+2NUgVwl`jVJUa#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
