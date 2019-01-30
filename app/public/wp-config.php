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

// ** MySQL settings ** //
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
define('AUTH_KEY',         '487805joE5L9dvfwHxi4m8A9O7jjd1cnblhuoMFSV6Ck19c8uVCbsFrrpdoSOmDg/RwGeAmh/BMrp1EVZG1U6g==');
define('SECURE_AUTH_KEY',  'S7nO7Wj5iZd/UX7ba9Y04W8qtdVW6Hpwt4typyl+guYuDzxoSpZUsUYqP4sheI44EDR3rg8NGaOVgrrKgJ8k9A==');
define('LOGGED_IN_KEY',    'ZW6S17aQYdGFG5U9aVv815ktRYD//jsq5gC5Fo+1XYH1MGKaN7NC47z+9u0oi2wHjZr0pCdAMwYtLnc4JKwMaw==');
define('NONCE_KEY',        'NEIx6GD7qhDlxBa4DkPnYn+sgd/RIrtmWxFNmyS/XWg3FgVwZGRjWPu0m8U13cn3aIoo6Tg+Srd7yDhaSMQJ5A==');
define('AUTH_SALT',        'EMmRxCTxzkuCJCEJJaHlltdu0L+hd7QXFP6SUqy/7YD9SHzM9Kqowi9zDm8XylyGFpxgCtfibndVkA7VvSbOvA==');
define('SECURE_AUTH_SALT', 'LAG3/lm+kmbvIPbt6i1JDaB+H37SRczmoS9DR8S53wZs/rWe430lkDXc9r0kELzqB3Ec6P+/00SCFkkTvJ72sw==');
define('LOGGED_IN_SALT',   'fIwg3BT3oj0eoICciorig1KJs2KT2WlkC6Gk+shIlDInUICNyD6I/4iP8aYLUu27lEDTeIvk+3RUhZ001lkMRQ==');
define('NONCE_SALT',       'f9xFflT7ZdnQ/6vSEnqYGKq/bHCnghy4eoEapGFJWCvGMkJye1Mk1NF59OnxsKR6Jcoi4SeII5Qdma0TSWELqA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
