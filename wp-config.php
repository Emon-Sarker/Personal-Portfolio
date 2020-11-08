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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Code1' );

/** MySQL database username */
define( 'DB_USER', 'Emon' );

/** MySQL database password */
define( 'DB_PASSWORD', 'e6l5IoCGzil5HOs3' );

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
define( 'AUTH_KEY',         '2fX4xy>,^4rr|Q<7W`lO^S=H !Gr@[,>Y+.POUfB`6R)5c0y1}R(T6~XS{VHPU<t' );
define( 'SECURE_AUTH_KEY',  'R TEg6yUo]Fgz##$fRK#[9_1n/.!GoB&RGEEi/tadmg<:3b4tmo2bWzF8{o#U#Q.' );
define( 'LOGGED_IN_KEY',    'm /Xp@ub&vSz=P(7*`}9q4>&m1yw;<lG;8C5I)fna;Gv6#U60j3D`c*=U0lX)%/|' );
define( 'NONCE_KEY',        'j2hY$?0^([+ENI|RbNz^3]#zD<T=|^npj3i#ZII2(+$@03 q}#~kz~q??|{X}nH6' );
define( 'AUTH_SALT',        '{ur ulVyJspDb]cOfAh%;SXR/:+PhVP-=|r|W.nN/0k,1BnAZ)SV7PT8I/Frb2Y]' );
define( 'SECURE_AUTH_SALT', 'J,RuLF8/;z~:4y(sZT~_Zy;p;<D1oaqrxe2zs3(l!{S]3b%yS+N[A=ZoSF;SB_.O' );
define( 'LOGGED_IN_SALT',   '*ff/VGXvFa_m<)gh39K]m;xCV]9^_KdK*&,T@x?p>(PuOrn1d]0vjEt0rw,hTNT!' );
define( 'NONCE_SALT',       'aVby`J0b`V|$syV)l5~Pg_|yZnHzwn=5 };E**];:}M6j<H%:>Xxo8RL.D.p!S2,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'em_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
