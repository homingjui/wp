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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'yR4pwAXR' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '1:`#m@RjWpG5eZGp%4y{|!8gx?APL;@48i(^S#$j:O[Fy,YYR,bM#Oqv>AoG[Ke4' );
define( 'SECURE_AUTH_KEY',   '1-.c,>(1lFiO++4s2n*RrR^6w|z()!=+{6r 8dhYiBCc2v-[A~y*`[OIru,}p0Z!' );
define( 'LOGGED_IN_KEY',     'gNTH3.f&jx.zFXYxSFXB{qXg+/q=Z(n%?k=q;Tp~[t|&N7%[vkLDh]TO;JbHjdpF' );
define( 'NONCE_KEY',         '!VU,vAO4JdmOhvWjYu<PZq)*mT{%+<((n-$mvKd{k2H7E#EG}Em>svWy&<qewiir' );
define( 'AUTH_SALT',         'w0LV&B%v5ONl,Av;[y;6lekugHHGG<Ptdh;)sy>hC&0<yPaBtziw!wDV^NXrMYs^' );
define( 'SECURE_AUTH_SALT',  ' 0WR1MX>u% 4YeVDxWv{6cYRVZBm9yC:jm$k(>dojXM]Ux%On~QI0c`z.+_v8q&u' );
define( 'LOGGED_IN_SALT',    'k^/UCYHhNU?7a3!+D|VRnxv85=)XA_yCpAhj$7Be$&m^Znlhhq5@fb)#](-7T3b~' );
define( 'NONCE_SALT',        'V{9;yn_biog452L#X|lZ;TkQZXQKX*??Sd~3hDw1aXf0RhrY,9{YPCJ4MQ`u~`h~' );
define( 'WP_CACHE_KEY_SALT', 'lUL2O)UhIB2jq!j5v3{QEe<^VDrFmE#:jlyw@]DA[fr`>_B3JYAi|:`_?HL(~CL5' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
