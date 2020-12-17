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
define( 'DB_NAME', 'dbvv2phvt5tgkr' );

/** MySQL database username */
define( 'DB_USER', 'ur9bmn6bfehux' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wa3rh87k5pnh' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '{mL]zt{n48TWzmJ*1ob!py@)${lUlOLg(l}i$EBe([K[-e>X7mT~;OV1T^LmTZ/N' );
define( 'SECURE_AUTH_KEY',   'vf0+XQ<5OXYwI7U%es0FDhQwsur]icfF9/<6OA+q)RD$ loJv3./,n0F 45oQB}d' );
define( 'LOGGED_IN_KEY',     'zB`QTl9v1)T(8b]U_D!b$Q)D/u)B/KS~LPjR|N6pU S){=Wvzq_j_Wq$z){<`^2?' );
define( 'NONCE_KEY',         'mFlBM[ABp8&LL-U:?~k)D7y#kUYgEF5L+){IVv,Jr$9UmSi#vxEVl+-7z(ZxyBQr' );
define( 'AUTH_SALT',         ';ArKa& S+LCL!fvDaw;XqE*&z;^+,pOaGRw,oQ,a]#V 5d:{MJtrKZG8=V$J(un<' );
define( 'SECURE_AUTH_SALT',  'W!|R%V?G2!0@H*^L?&y_b2PW-Uw_6)$,;2bJo)sBS D[1-&)pAL0?j3{>{MM+ zR' );
define( 'LOGGED_IN_SALT',    'gzCg4u4CoKI_3PGpDp2c{D-*i=VNoN+O9>xxpTZzo61kftiUo,UC;&v:g-f4@ii-' );
define( 'NONCE_SALT',        'hM*lm>50`l}Jz~MH[TJDKb.^+&01?|`N3;An7 uHRqXBli@U+3{M:WQ|D2{=*R>|' );
define( 'WP_CACHE_KEY_SALT', 'lg}sf[E,+fBg%*C;tkx_`u`la-W(]u:Z|A5(&{34RK]e>%En#YC)#-Y(%Ks4lIHe' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mbc_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
