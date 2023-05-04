<?php
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
define( 'DB_NAME', 'wp_c1xbx' );

/** Database username */
define( 'DB_USER', 'wp_vpjop' );

/** Database password */
define( 'DB_PASSWORD', 'y~yUj0BZmS1%O5J~' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'JN9nF!WR:T~f#)]+M7KOyI9*3@Ea6e-Dun5_!Ah~|!::|#[L4_7coR8m%N6sXV8K');
define('SECURE_AUTH_KEY', 'dwb4d+%Wpf4Rb97V0i&[JnqE0AG85&!:etp+4:+TGw87x6n6I@((7xL~qQ0h4C9(');
define('LOGGED_IN_KEY', 'MT86I@@20#ao&4L02L5E7m]HL5)CrV0Y6!037:J|81yX%2/w7q@1r;b3+0g453;t');
define('NONCE_KEY', '((73)R%~IDk7SUKPMwVo68dHHS;JCu~2L6Qy29r00-5Ta]d@My:BoSFZ-S*;-X-F');
define('AUTH_SALT', 'e0/Vcr(:Ui!;r8:_A!+958D5(PbD306Qe!~2j%qT%|d;7%Z;1;7b:SlBi87pl5aO');
define('SECURE_AUTH_SALT', 'O9U83KM-:646H8sS4y9[T5k_a0m5)di:!8]6KinOG9E8k2e79)Td27[pYR69yi-k');
define('LOGGED_IN_SALT', 'E80DTk&OTzi9#jUf5REJJ&[B03/[|TD7T1L/Ow_%W!Kr)&nR8X3bIF]&j@A30/@p');
define('NONCE_SALT', 'C9_|75[MbZZY]U32HT2L96_fFNBaIY06@zhZmH;U[|d&6w-9f]#N~PMc4btYg1uo');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'QrkxXu_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
