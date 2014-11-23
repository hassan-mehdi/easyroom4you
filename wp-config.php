<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'easyroom4you');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'RZd(:I2FYm{&[~aFj-dg4_!2cTAc7ztqNTV foY}|}!NGhl+d$.E.2F/[GT-O$JP');
define('SECURE_AUTH_KEY',  'h;)aGe2hH!L/FY|k*(k*hv+1qs:^RjG+4ph-T3OU,tu+rmm[m5IXnPwjn,YV]-I6');
define('LOGGED_IN_KEY',    '9ltgU3Gj=O$RHyw .[B_oNJEt_6`yfy)6sMXkdpltCZU4E`?f_;*hArWSt}(/Myp');
define('NONCE_KEY',        '88_PjX} 54U,WzOK1pE /A<)W*Mo<b$tq@7&A_:Ju#?J.=?|Z[[X%cp}jJg(7|vj');
define('AUTH_SALT',        '<ap|{=[+t~$OU!=E+G+0.o]Pa-`@`hZ7/GY*DhhXAc 1T?H6@;cq_NR#])oE;OMD');
define('SECURE_AUTH_SALT', '}k0Jy|IgVosvM_)$_gx~/76/gAhh~]${x1I.j@a_%GzQ.3Or0lrk:Por[!ks=W]Y');
define('LOGGED_IN_SALT',   'h?mC+)YTnpm_45)rp?Jmy~@A!$m_@S1Nw?ISz7=n]pu+-|!I~D~Uxq#,_,dnlI0+');
define('NONCE_SALT',       '7*+2ImA|Tlc Ke:S8*w:YDs-6</7beks:2)ujDT80&`uf|Np EuS+VHRZ_s+*n?g');

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
