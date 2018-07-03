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
define('DB_NAME', 'portifolio2018');

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
define('AUTH_KEY',         'x7U<&?O2/OF6iG`+^K?6 IXz=.nJR-Oa=R1S08T%wXsCM7v:!&e}(1k>:N6h~,e)');
define('SECURE_AUTH_KEY',  'X9$GA&/mqi6dsk&C)f?$g4pFcjQ)=B;zZtyZKC8g26@M{.7UFW^9:Iq=]h0A,5PD');
define('LOGGED_IN_KEY',    'bAb2R-sAi]![`F(W4kVw HG?;lK>&X<vH1g@ITo`J:o({fsw(+>NlEX{c*U&(|BA');
define('NONCE_KEY',        't(7M_qQQTkn1e?m_O555y,`jaJ%x:J>w8?T6]84O9{*=mrhz?H{Bx)[Tvxk@>Rv`');
define('AUTH_SALT',        'm3j8{XlF9lpgE 4^7rB$zIvZ<9L 02>.Au$LaB|D@Z$&G|L z,;wUZ~m$P:!|T0k');
define('SECURE_AUTH_SALT', 'fl1^pziPK94t+N3%W_PD!NbbkH=BuIhY-jo2]vN0/6;R(m~@ii^5B|)#j`HU)qY`');
define('LOGGED_IN_SALT',   'JGPJr{HG?J-Ac/h0cxSY$RP+Uz, ==6CA8,l~cF7M=#w[8`ky]e+`lR0B=P1`jLe');
define('NONCE_SALT',       '%DR6^(;5#;kbQcj.A@Uv.X);%f3bf+IO/I%ky1guvWk1Zt&t1<GC7;./ph-BG-$y');

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
