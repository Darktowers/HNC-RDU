<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rdu21');

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
define('AUTH_KEY',         '3Ud?F5e{Bp_V8:7DKh1a@+BX<*-z_-e}$F`13wc%7,SrLZ K}|~-fCZ{QiZy6Zjl');
define('SECURE_AUTH_KEY',  'Ffp<-,.kN!db)DbvSv$0|[[$b2%*0vN?8f6y4O=t^#4]Bt&44y#Xi]+`B>sxA$RP');
define('LOGGED_IN_KEY',    'SU8XP=k=3EMnFzkNz[W*-_U3^K#Mb9N,*%ATD, y=b#n_8U<H~oGGS/8E/BJB;fK');
define('NONCE_KEY',        '!z{+Ic8D&v1*X&N@u=W{fI:t 2a-+O+Ba?vg]Hg-&z|ILc4(6B4oj#`2p/-8sGH)');
define('AUTH_SALT',        '#EW(:lij5s#(RP*uA!v-e^~T#0`|@cS%%+uV7b3tJZy*u@L<ofkb+ef]+>9YI&R2');
define('SECURE_AUTH_SALT', '0TDnqX+|PZB-a)>Cakae#v!.8.k3jXo-FLs9RdysR6g`n9|Y|,|r@zP=#+BR0Ka]');
define('LOGGED_IN_SALT',   'ij0.ZUpqK)6`5(0<wobkx-GI0@Vy$PR+AFOaa-*jUY-X;IztQ-CNNI:sI%,7qFrm');
define('NONCE_SALT',       '-QUx* XKN|l~*j}?%SD<(4~_nY7=8p9d}5lSm1<(AbPP7#nTb,H^bJT!q$Ab]1@v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
