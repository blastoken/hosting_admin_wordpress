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
define( 'DB_NAME', '2asix07_hosting' );

/** MySQL database username */
define( 'DB_USER', '2asix07_hosting' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Rf2ZrGaNOE' );

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
define( 'AUTH_KEY',         'PA0@k&/_WXjI^`bL0-XqB~*OwBw=yk.Ml de#]X1r;.i1}k.]c(1f@_ol[RwjbQJ' );
define( 'SECURE_AUTH_KEY',  ')}|4$?G_@zamG<rR@U:h?1$E0M_HViLJZVHvr14P8jX[zO`|U?cqLNN7QRRGudW8' );
define( 'LOGGED_IN_KEY',    '$dA]d)1%a3)c1iV+gZ@0(*=:6Fx~+:[>sO~NTWAtX_^C]om&YFGO?E6fn!=+bN-%' );
define( 'NONCE_KEY',        'L~W.L_k~HOG})6? n7V_U=!MyRE9/[iSgEpS]>W:[2bNnM#O+=C_?a-J*j%sDq= ' );
define( 'AUTH_SALT',        ')smy_vSm/^|31gZY{hdhC>(IAy`{:&[`cAY>oOt`,^.! ,6{)xGpyK~$~PoF<p<>' );
define( 'SECURE_AUTH_SALT', 'pp7v|A>2N=YEGfv~K1.QMoi5VDi85G@%(X7^4hUox[oW>[#Z:A`n<;Zeqb4p}1,#' );
define( 'LOGGED_IN_SALT',   'NL@{+wkUfCA#pTwXz;U|`6t8Ht3[ol!n3r]}Oq;Dv,4k<pE4 a90+O^b Tr=n1ER' );
define( 'NONCE_SALT',       'yHj##bnT=Ql$Bd3Z%Cv-lS{j:h_G2V%~C}!%1PuiVhC8<K_aFZ=>4whrK}+K@J>I' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_hosting_';

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
