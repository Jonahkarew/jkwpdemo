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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'MycXYGra12agfn5coL4nOi395Jzdp5FM7WsnUI8bSfxpRJtDzXC0/QHJUjEHjhNLfJ6wemV90bsUp9ZtksU1yQ==');
define('SECURE_AUTH_KEY',  'ecl+ZI2cf1XRgjwX/LEpaLG7T1H/tizYlhRa7exHEPsVGthyi5c19G4LZ7OxJkaOBjTafMW3lZn79agUe82btg==');
define('LOGGED_IN_KEY',    't31VYvlfZBYGNSAmoLh71ZzaEv9/iYRbCoDsNFI4gbzH5wOsEpvevJOtF/wWdMOLIgzQR6IdSKE0D7eWTkc+gg==');
define('NONCE_KEY',        'XxHDM1RPiLHiNIkUT1vZqoAm4aGLkBSsSqhJ6dZ+kUTFO8WgNYpFUvRl0D3ebdwxsKnUqLL1fE2PjlLIp188qw==');
define('AUTH_SALT',        'ubIWFBdR7+63sds5lYdS7m+fMrTJ0HwLyur3WbmSqK6igr3h5jTn/ObGibdI111PANCvla5TFjf9Q1GapXlMfw==');
define('SECURE_AUTH_SALT', 'M9IwzEJ3vZFJJc+ZZ8A0RQvfvNw7/VNXMffhzvW1HfJiN2UyZnM+isUR2gxioDgMJfCtTFpG4jiqCQ0ZowipIw==');
define('LOGGED_IN_SALT',   'aCitzfsc2vsSeF2SuVE04hdpyyVK3DMcqh4X4n/TxA+B9ZhWh0a8mf2Ukaod5fZaX5m81t4epFQvJETGuVAqeQ==');
define('NONCE_SALT',       'dRLfiz/2aGlMDdGB4EeHURzO9wvasgq+RL2jzedkJRPp8HF4uYHc/cu3spZvm5+QtO33ylJhP+6wS3U7vWqMOQ==');

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
