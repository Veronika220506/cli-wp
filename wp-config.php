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
define( 'DB_NAME', 'wp-cli' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',          '+mAAb7Va0(amN_Hfq.U/$J5Z,8/R){kiwGrC6%wK>sd,U>7D4yC!E.;gq@@K^ugc' );
define( 'SECURE_AUTH_KEY',   'f^XM=<nA.B_8r ]Dux{.@$6&mstR;;O]auYIcJRX|3oQAkIc:` }(#HH<mE/U~T/' );
define( 'LOGGED_IN_KEY',     'j;Q3m!e@O3vB.IZvWrdp,Yl/[AOFs6^9ZSL<:_ SrUb1~r:Jr}(k?b|hv1p]LQXu' );
define( 'NONCE_KEY',         'Rs/Ea EL=z>+g8 ?l^yB<}uP6UDuqx9o O2k{|${MQSl3FaWn0Y~]A<dH[4gB)xX' );
define( 'AUTH_SALT',         'OT7[9^VP3O@J6EPZ6MoXGVkrq>e/3#B)3YRHqL]aS?$at[r/W&e~jV$yXG(A>8+b' );
define( 'SECURE_AUTH_SALT',  '[Sa#!?ju4XKmH#$N@xBUB<e=>iHW:~pb1#jz5H/1]g*&_N4yeHJ1o9&C](?fzG^8' );
define( 'LOGGED_IN_SALT',    '=O|{0/}:8?x`_R~=4P/2JMTfOtE$H&jNip~H iFPeiHv,-jMULhuGQyW4yA9Ek;1' );
define( 'NONCE_SALT',        'a}*mlj &D@U-MI(B0Ka%u*Bi3ZEJ%uG4euz@TeB(-eK$*I`{gvrSV8Mqx !65}~V' );
define( 'WP_CACHE_KEY_SALT', '@^NnqZ.OS}Pcpo36LAS{w}tFs3>C&^=PO,e&0,ZES3jeYke1U:sm5d3r$46})zP.' );

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
