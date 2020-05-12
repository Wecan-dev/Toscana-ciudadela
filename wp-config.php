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
define( 'DB_NAME', 'db_ciudadela' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$-<VnFrgS*!aa/>N~B:yJQLhYs!C]TCT,ZdMhu/FTs<~O@C?)l-stox=[`m@c}U7' );
define( 'SECURE_AUTH_KEY',  'Ww*Qc:yv&B/?zYbE;5tM,Ax8K5PL*JCxFBGhL6R*v->*3QA6CfYY|_qGZs/7,*7F' );
define( 'LOGGED_IN_KEY',    'k1&zwT65HVHY !I;>xx{55i5C_6=;Y01mlsf9gDT<-Yi){J7p5<Pv-FGPA-gHI$x' );
define( 'NONCE_KEY',        '.OC,=X-~}k^BP#ppK5yd09sC 1v[sNl*<fm.#dx<Qrl JF=z:PvXj+3`z<bTZl/b' );
define( 'AUTH_SALT',        'iTn5D]Zg<Re#-#qen%+Xe.zR]BhHNmD{:zOg)~q*$)b{*[HtIW>;V)WwzR$D.)Q/' );
define( 'SECURE_AUTH_SALT', '>k^0oB83N&k9UZaJ!cT&FdZ^N~r,D85c~&XL|v2F;ALA.{7 80V&.089@s|k7!-+' );
define( 'LOGGED_IN_SALT',   '<nsrFfvvKp]5l`ca..yQ0c.o1W[)*:tc5`=F`=cNbQ:_+VP>Q]l*[p@!2+EB.Hnc' );
define( 'NONCE_SALT',       '>AqfCzIfAdUxOEV|m^)f%c)f$TsaHd{LzEHlz.(~8cu,.)6.Av4~a>1m5 LLcu8{' );

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
