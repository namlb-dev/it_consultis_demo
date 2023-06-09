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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'URQzfIjnvzrt2GKZrViTlkmLfS9YiulyfKlnIQB/OvbejbZ3fjY4SMLHk4/CWvdYqE51mQb+u/ATDAY0FaKwxg==');
define('SECURE_AUTH_KEY',  'yNU+LaPDqwOUb+Y4YjufrcDxePZQsR90H9Dga/KVE9wMFa0vQZxEn3C4QZNuw4e7HIVV5u+w1ICJWFlio5kQSw==');
define('LOGGED_IN_KEY',    'np30ZQqc92vLwKnOHhP9Tp31V8EdQsvO5HeZOjoWpwnSZ5hJnKSM9tCYeFDu8LayrlZiSSGArq0ReC/GwYjtrA==');
define('NONCE_KEY',        'RIcFs7wshltyuIlxGMM7VUceScaWK45ABgjD4w3A8eccYPbYgSraVw/PQ1/p0t+isuc46tnrCUQzW4i05W7wHQ==');
define('AUTH_SALT',        'v8QFJzXLTzSkEN7t8ejlkj9Zz2SSpl4PyS+64dDvonYAhgmnD0q8agyrYSs/OCIGVcifKWMc3PNdZ0Bsc+eilA==');
define('SECURE_AUTH_SALT', 'N0bpN1jW16dmTfahlqETJ9kOMwW9MkRJDGwgdbSW5UpH/vU3C34ExEO13uQRi8Ul82TRxZOBN16Grz5wZjpP/Q==');
define('LOGGED_IN_SALT',   'jtp1ZlnfHO7/rLBShflHM/7dqmyvEL+vUfu9ytpkSxrv2RoGg4+cFdsDr+5QGyeDF/r9qEfsbYvSvuCP5FyIeQ==');
define('NONCE_SALT',       'ZFZ3tyz3DF+FUG62J3hhKQRiDF/zrcs2g0fOMO1z1bYacy1yDneaWrrgiwsMMjtGxVjhnxG1BFS3up6YeoRJuw==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
