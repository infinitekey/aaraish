<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'xndealpk_wp464' );

/** MySQL database username */
define( 'DB_USER', 'xndealpk_wp464' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p--]271(F76u-0S3' );

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
define( 'AUTH_KEY',         'j1m6ghmhaedvq4zuue9zw90rmwglgspl0dryp4femlnbmwemalbnslfwbgqzq8lf' );
define( 'SECURE_AUTH_KEY',  'blznek9crzyn7kwt3qvnewbcoif5lwsfakrfaiug1xsgj1o6wemqjism2xf2crvz' );
define( 'LOGGED_IN_KEY',    'yclcp2hp6wtd3kelzhdd171vpawqgyq2cmjpu0sg2y7p8hhkuraujhcvooskwc9x' );
define( 'NONCE_KEY',        '4pxd5as0qmeqgtcaxbj3lia30zhmgy7ppeaaomks0h5xsanshm248uawovzjtfgl' );
define( 'AUTH_SALT',        '8chxaqyrf7zabpzas3ad1tacw60vlyw5rgsy0a0kdfokdr6jd1pxikm018an7aot' );
define( 'SECURE_AUTH_SALT', '1hmmfmqz9fyrghyhobqmm2nw1toexznb6rzpa6kzruicgrsy9dfrsdgpjtuogzvq' );
define( 'LOGGED_IN_SALT',   'ybtrehccmhoevp6vufanr7wzptghs6hwd8xbglea9vqajnvpgepaddkwttngvlfr' );
define( 'NONCE_SALT',       'ah2qttrbihvdafntmgy6obyebqod1grlnxmenwqdrrdoytdfjgjex8sl3gfecv4j' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp89_';

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
