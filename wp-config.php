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
define( 'DB_NAME', 'okruszek' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '7w7<<5rT_-Lub:xc[&fT|D0nApF4u|0WNN~biJ=(Q;7^d6k9=:jp5kAy7H%3CV$7' );
define( 'SECURE_AUTH_KEY',  'B!#o3$7Z0?C9Ez;2wS];iOJd7ptC}@0EcNI4{e+.5!#>5i%? }S/5IA<<jPvY4hK' );
define( 'LOGGED_IN_KEY',    ')eQ`7K+*tk$ZRXXY`U$*$62[(mwWD^SsFFIg~2vo;Ih@oB}yQzjp72O83M+UYQUV' );
define( 'NONCE_KEY',        't$^6|UE|:GVpiX7U`gOI|BAUNX{W!(YhD{b[:tR=~vCB2y{P@5wm</x]B6M@,)i;' );
define( 'AUTH_SALT',        'KYkCJ.!U|/3*Qc<_;Gu*3(3^H%[*{kuJ+e{2O&)@)5.u9xQDp-*i&v HXH18TmrY' );
define( 'SECURE_AUTH_SALT', '!Hi NaVez6=y*zvAtW~vY/&+{s0jxk*SmZOsw!v=$Ebp8l%?[`2BY}-@71dOlHj~' );
define( 'LOGGED_IN_SALT',   'w6}N%|B4Shd)0yL%(h2,8YVC6N~s8o1=mE-+?QgAqqs:udA5>7vv9!V<^-}[NUyD' );
define( 'NONCE_SALT',       '1Kb}erC1oGob.mQ*;9^Vffpp1rCP@qh}M;}+st``;C7BXl&f0jwB7VG,;m?8x}6[' );

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
