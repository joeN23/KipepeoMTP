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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '](S`tXsiZ,U3^bu*cCw<N8xD(<a]Z;67~GC`JK,`ENmPY9HT=5F!W j+`P ?MqAP');
define('SECURE_AUTH_KEY',  '~P8dWYP[ym|l^~~*tq4sh>Y$}jB(+UQEX}?ZV8NK@;Z3B,R[Je#|>]Mp{/PoIf|0');
define('LOGGED_IN_KEY',    'g~H@)x!4^l%dywMyg`kLXCU;Sz|zEpFiUYYY$vDa//p$`82,YbB+CbWOo:fVM:Uw');
define('NONCE_KEY',        ' d H:6(9}0RGfYe-/L+k/^sfLr_Y_hvSOEd%ezh14*tV4E~8[mM,d})F~q2An`u|');
define('AUTH_SALT',        '2H)^G[*;llF*kA 3W`dhcm#6!7/G?-eCh`]am3HmIzhuiNm(Sz[d/iZ Gv{MlGfL');
define('SECURE_AUTH_SALT', 'IGD_l<cVF9;]@#rV7D AXt~#l)*+0bjYr1^9SU 7ea=cZpkAh|vdxoqfvuRmC3H}');
define('LOGGED_IN_SALT',   'j)wfO3afv)oV,x:o8c=ISCFYQ5F;VliVm:?`Vdy A4^FB@B<WyHmQ~KD[a}_HCsJ');
define('NONCE_SALT',       '3{toO6uKI=<.7UaITjU&I*Pc:@~^mRh7;(+M2Ogi:!>]|BiDr9tIv$Vg6<O%8OGj');

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
