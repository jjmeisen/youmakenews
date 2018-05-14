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
define('DB_NAME', 'makenews_db');

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
define('AUTH_KEY',         '?j12RR#R4:6!dm_499Tt[uO:5&H0rV>S9zxYXA`kRDYPsmp1J9,p-/Vgu6oP^Woe');
define('SECURE_AUTH_KEY',  'y@8jq>3GLlF(Z^ntb95uA=G:%5YkI@&~3cHf-kp<ESivf:mxU9@=QiPCTy_)BxIq');
define('LOGGED_IN_KEY',    ')fP)X%8r`M|R~II{o]O+yx~}X?2|dV6pPT<?Iz}(?6`[2Esc&Vq0FF:V3D1qqe=U');
define('NONCE_KEY',        ']L{)0]v<U<A81}lA}ZunA72wF4&0-%;nd|,08P>sZr9}IBkC{<U|&4qD#-L}K{et');
define('AUTH_SALT',        'nuaE}y7oAG4zwX]#>pf*2H0J{<lfN{}8 k@b,Ui&gB@]Na_rwq&i=0bdTxoqb~G,');
define('SECURE_AUTH_SALT', '>kYoc*cBapV/EpQsoj=RVkKx1J!dk>C5>efrN[GBjWzr%Me( 1:y/RI@gg7ndDjI');
define('LOGGED_IN_SALT',   '@8P#zli/kf}oar$2Q M]N;i~V_i0GVq5<xfW4iOG]kspyzCOB:FVzoVEg%3Dib-e');
define('NONCE_SALT',       'aeg,X~1O`~z??*F$jv[M>_SV#Y5^5KB/A:X3O+TkRn4Md.7~T~scf)t/ucIL@j_]');

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
