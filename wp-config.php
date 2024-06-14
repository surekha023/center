<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'center_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'w[^P!&7@(X ,aW/x= KHBMnl2O~`myQqwv*rf|2fH_2ctjG^HJ40MGO&|5QMS6C,' );
define( 'SECURE_AUTH_KEY',  'JN.1mKSE3&n _]|P1>Y>hfr:U$ierVPmcdn1rJi!qApGO{{`G-KcUmzIzKW > 5Y' );
define( 'LOGGED_IN_KEY',    'hPK?hXz0*#&Idw}k!zuv{Y_g<TY!6rzK;+8mk1_L{YdodKO;B,=d1RJN<^#K)-fP' );
define( 'NONCE_KEY',        ';[ki>>@P9}~WULEp=YH+1.pkG]qpJt8$#WV[RU#,r0 Hz%Mj ntarxnL.EVTN?(h' );
define( 'AUTH_SALT',        'dh!804a0ci|MS0[(&xzz(vjl+rM!$%Dndt)=SE?D16wCcK9^aAC_[ysiojJErk80' );
define( 'SECURE_AUTH_SALT', '[#yTq<T{ZOOj*iP~)GVuA%s(.AX{/Gzcmq4HR(B^)~!7qowuX%*CO%Eb)l|pXq}D' );
define( 'LOGGED_IN_SALT',   'D7vw)Pr6S%M4RtSLGmj{FaQWB+_K/rse7>H[@4<w_.cfX3.G@1`AT*Wtyw;^5}Cp' );
define( 'NONCE_SALT',       '5~L-&,[D,v_h5($@=pEY_ldu1%*g:hjTCO5tm_L`B=:mDvpu7Fjr66a{1CwNpgAU' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
