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
define('DB_NAME', 'perrobueno');

/** MySQL database username */
define('DB_USER', 'perrobuenoadmin');

/** MySQL database password */
define('DB_PASSWORD', 'admin73');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&qNR1z?+Y~${OQbn3G`wK};bOY:z<u6k<@*-lLBoR=zg,ch~+;AJ/CTY.1-lMxSV');
define('SECURE_AUTH_KEY',  '9)5/,qUvS+X+?OE;xNFoHjQ|SBJIV/>0R9B.Loy3RE_[5FnpJZNE1tmgiuXO6|)h');
define('LOGGED_IN_KEY',    'a~E*O4RF(U9gRI,@9 cm4<v7vH1e8:2; lZ=(/e,&&B1nMe.#W-Y}v{{uyy?Wo#B');
define('NONCE_KEY',        '^qn[Q1?~oBSX>PAabS_+@&|>JK<e,O_-/DKe85)D|xO(%VD+,e_2(I(>nFE~<qZH');
define('AUTH_SALT',        'U]XKD+dp+/M>`v83@y:On4-bL0lQ2JcU-_*2DiGSWyqnsig-=82hT[VN-t@a.|eX');
define('SECURE_AUTH_SALT', '=sCb y|i*-gi*uYgiJe$;hOw{{s1Ap[:B|w|P*91hM7RuKT0yh~J}zN1-e4A*C$|');
define('LOGGED_IN_SALT',   '@fh DyTj`vX`0%`pMtPLQSXH-89S//K,K&9OPxu//$x#T~ %Gvs(^U-V`=_AZU+j');
define('NONCE_SALT',       '@YDxR)/M!Jp16*Qg% Y)DGq(gW6b+UzhE2J)NpcARu/<E(%^nz2W-i=VxJo,s.{|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbpb_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD','direct');