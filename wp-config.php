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
define( 'DB_NAME', 'db_kejarkoding' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password1234' );

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
define( 'AUTH_KEY',         'AeoQ)T!MmO@D(gc{)DjQ(>5h%&v6A*j90rXj1ATf6@~hNbqGiAeSW%2=$GsR4r2C' );
define( 'SECURE_AUTH_KEY',  'm8!sXTODm$J2LGY5$e9./8R`%-4}E8gz+L;5qP)|4$kRPR]e3`pHRvBa3j>RHZy$' );
define( 'LOGGED_IN_KEY',    'z!QD-UuW{~2mfU%*e]uW9kIvXf#)6xUL5Rvi!<yCg%hXfTW6-2Gn3UzGL2--{Hi0' );
define( 'NONCE_KEY',        '=QaG$}ORB4~;Iqym![i?+v]P b8CH?&zI^3ANE5KEt)8*8gM)HWK(_T}67X)hMFC' );
define( 'AUTH_SALT',        '*T10T.=[HFW_3Aq)xLHB0hin}b.iK,4{%1OjplhN8Kv:}@J/4dHbP4)6P-g+KN:|' );
define( 'SECURE_AUTH_SALT', 'g5_Na/:qkD0Xgq$0yt^D.*Qi8DQ,EFF6kk>GYZsFzVt6Quql|q?J=A]Z!qbCG{*7' );
define( 'LOGGED_IN_SALT',   ',-;tWR<aNdA#2!xShy5pPwc5 -%F+Wcic@I4Xv_fbJo71B!a{d26;5(B3e=]}?k]' );
define( 'NONCE_SALT',       'j+b3y@RC|oQ*soIph ~%?c[}:Q9.bYK.)f<KmiF9TvXT(d0gNpD+;F-!|Q>Y*yP+' );
define('JWT_AUTH_SECRET_KEY', 'sekolah100%');
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

