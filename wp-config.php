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
define( 'DB_NAME', 'lircayhub' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'i!nl(+dnV4UpQ~2bPBoKB#eIAY+^PC cIa=/#!FH#4bUrw(zY8L3hPHCA+MeU9W^' );
define( 'SECURE_AUTH_KEY',  'cdK/<ag4u+4JmhG-e0k 3I<y*mDSKu<r>Vo[x]~$MzwCHOh@7Oa6TknmzSRA~lCu' );
define( 'LOGGED_IN_KEY',    '0$&i^(P{odqUx2{#;MZfI)FyryR&c0FuVjjL?<.Yl{55;Aq6u1$}ie%A3YBzIxO[' );
define( 'NONCE_KEY',        'F.[+joDrNypJvrAwV^[+~8zpZA83}U?mOrgKQ?sxy^u<a`xZcRH)e@adl-NJ{YMD' );
define( 'AUTH_SALT',        '|Ctki|u>B?]G:Z-E_^&eAh(L4@:>#cWao)?A}iPDvMX@L[+:8.ld!JdHxEkru^y<' );
define( 'SECURE_AUTH_SALT', 'er|%|Cs0>v<2F~,pd1i.,,Z7L<eevQ.`Owt8Kg~tR]q]Gg%g3JDqMPn/]|:f*;jq' );
define( 'LOGGED_IN_SALT',   '/5ft-^r]N8?tN)2tu=JKKwiZt|I%>zAWgq#*r$]EX#tb4hRzZFVi$q9<[ik9mHW3' );
define( 'NONCE_SALT',       ',79`i_EUx9<=q|W$^lxvKzu1;#XPa3ET?be^To]XPaj_BLe|k6~/$d7Fr:G;1V%]' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
