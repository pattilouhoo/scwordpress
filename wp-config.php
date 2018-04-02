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
define('DB_NAME', 'scwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '.X_x#%E0KTB!VlOM1>~yN::N>JKN)zENl6=FPHa{<[gA?xsqt5>tt#V@PgN1,Fm$');
define('SECURE_AUTH_KEY',  '>Hv?)# dfM;d:J&*s&@K8O_F@`+(1|5Fur;k:3q*:SMPS5-O=&gTT4(lMEjV{f1}');
define('LOGGED_IN_KEY',    '~bv=Y;?b[/g^#?QnykCc,CX-&5Xg{2{hVVqZ?86BLdmL0Vn5^-#w0ly-mL3/2j;]');
define('NONCE_KEY',        '}V}f&u%xV69pu,U>Q=)O.1[ Lk0!waM4WZlt6c/eBE<K(|),F<)d]jM4l]%RJJ>r');
define('AUTH_SALT',        ')Y>##@6Xt_aE38=KKuFAmqTbtVQ<- ,M]@tbD4eL=E5yTQ72)cW,kDwkO@r^ 8P=');
define('SECURE_AUTH_SALT', 'tqoLXr{nmZJb4d$QLX<7i|l*(2tf9QP>G?Armu@pj9yU#Ik vlJ|xzr,3 kIY_|d');
define('LOGGED_IN_SALT',   '45D[KU (u?ZRG,xMA&Lnrp~2s>+O/r!&{}T[{Mi6:(zrf:v>xK$lk9|gItM><_+0');
define('NONCE_SALT',       ',k(@>`$JZwN`$0yj0RMg=]mt`zHkc$SmI5{+92D5o+r,Ed`:+yAxm-JZ%-Z,:bAS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
