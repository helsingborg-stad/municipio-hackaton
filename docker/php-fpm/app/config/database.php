<?php

// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */
define('DB_NAME', getenv('WP_DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('WP_DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('WP_DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('WP_DB_HOST'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('SSL_PROXY', true);
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'municipio_';