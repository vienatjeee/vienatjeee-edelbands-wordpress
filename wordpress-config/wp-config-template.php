<?php
// ** MySQL settings ** //
// ** Change these values to your database settings. ** //

// ** Database name ** //
define('DB_NAME', 'your_database_name');

// ** Database user ** //
define('DB_USER', 'your_database_username');

// ** Database password ** //
define('DB_PASSWORD', 'your_database_password');

// ** Database host ** //
define('DB_HOST', 'localhost');

// ** Database charset ** //
define('DB_CHARSET', 'utf8');

// ** Database collation ** //
define('DB_COLLATE', '');

// ** Authentication Unique Keys and Salts. ** //
define('AUTH_KEY',          'your_unique_phrase');
define('SECURE_AUTH_KEY',   'your_unique_phrase');
define('LOGGED_IN_KEY',     'your_unique_phrase');
define('NONCE_KEY',         'your_unique_phrase');
define('AUTH_SALT',        'your_unique_phrase');
define('SECURE_AUTH_SALT', 'your_unique_phrase');
define('LOGGED_IN_SALT',   'your_unique_phrase');
define('NONCE_SALT',       'your_unique_phrase');

// ** WordPress Database Table prefix. ** //
define('TABLE_PREFIX', 'wp_');

// ** Debug mode ** //
define('WP_DEBUG', false);

// ** Absolute path to the WordPress directory. ** //
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

// ** Sets up WordPress vars and included files. ** //
require_once(ABSPATH . 'wp-settings.php');
?>