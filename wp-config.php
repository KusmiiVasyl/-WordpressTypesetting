<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'S(I=CM)[#QNAtH{B=T#Qz>o-z:s6EKRFB@Z6fG<HdJcG%adOBEL64#Q ~}Oa`sLN' );
define( 'SECURE_AUTH_KEY',  'mbNm)l.7)tP}]Nw50[<Z0m:EJ=LS&*q_;|PKUVy}[<i|Voy]b/w{[j45-vdLO3rr' );
define( 'LOGGED_IN_KEY',    'Eqmg3ix9[OQrCw%kKSo8Bu:Jx`}3XO*`}(3}arq>P}1V-y&SZ4G0ah8Z$@vpo<]{' );
define( 'NONCE_KEY',        'ce&7`G,!n )URzZho.`Hu!8Za%W}VV.iF2YK#o{p</7]{5SNyz6UF=rX/|l]>z7h' );
define( 'AUTH_SALT',        'u=o8W6$8C/NzOdF2Kd?%N64y1LgOF7WV6,.}=&5&K:q/x8I`-,7o+oyHF 5TqYB&' );
define( 'SECURE_AUTH_SALT', '`,x;O 8Ja}3h5_e-PX4H iQ,DOT)}|M/9M bW:9;tqF1gu?=VnPAEDQ7up!)A`,(' );
define( 'LOGGED_IN_SALT',   '  PCWqG]wv`-YE:[.jWEH@7g{M<[c_`w{}Yv.*M%[!Us/J,eN-H5Q_[jpB&7foef' );
define( 'NONCE_SALT',       'mvYMK1P<9Tc2{D=7|7r1|-2=sZkUU-#N)Qr9v^&V8VjPm/M^W9;|Y9/Gj?DRkZIx' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
