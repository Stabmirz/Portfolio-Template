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

define('FS_METHOD','direct');

define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'portfolio');

/** MySQL database password */
define('DB_PASSWORD', 'Password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'R??(ha0F<XaoU3b!a%k-&rrS,|i(I`wUG;p}Jv(ue2Slz3R6MGcRKMh787Gm>HA*');
define('SECURE_AUTH_KEY',  '>,KT.JHp&,L)w?H8!j0sx3({!(ST.pymf,wty`%0~{OH.e_MqSt4IDoaJ,{,BVUw');
define('LOGGED_IN_KEY',    '$]oj#9]*[k@I2GHbw1H `*8Ij@j}.Mwe75#$>*n(kHb|Ly3#hQ$[,AAn05LHP_Hm');
define('NONCE_KEY',        'c~NW=ueh2y@!EQ.<.V}#<i/!U5y6wXlmYLdj[rmF}<PfZYw3-2R`K.S0!NbVgdb<');
define('AUTH_SALT',        'adf$&;s(J0sN._!~nDE!XbCc9ptnqjN_}{;*2N_?rB57R}9CWZBlO2+6cbAQ.#>L');
define('SECURE_AUTH_SALT', '&Tc-&C U;cn.$!B}0&#-b)&iZOo9ER758>>Sg])L5xPM~[36$S7;#&;!f*n)8y ,');
define('LOGGED_IN_SALT',   'khE,%NB4N]z|XNLLkg7H(42{8TERH`[aPj8=G)DuE|SLZX}dMIK)v#jk}#pX#*|C');
define('NONCE_SALT',       'G?7BiJ[? bBFp%6fTVz5;Za{OgW`676Pg+So2.ArwGf![Z`? [F3I}lhJho>c2Z%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pt_';

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
