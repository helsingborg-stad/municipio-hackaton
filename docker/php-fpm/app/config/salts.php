<?php

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the
 * {@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org secret-key service}
 *
 * You can change these at any point in time to invalidate all
 * existing cookies. This will force all users to have to log in again.
 *
 * IT IS STRONGLY RECOMMENDED THAT YOU DO CHANGE THESE
 * VALUES AS THEY ARE CRITICAL FOR A SECURE IMPLEMENTATION.
 * THESE VALUES SHOULD BE DIFFERENT FOR EACH INSTALLATION AND
 * BE TREATED AS A SECRET.
 *
 * @since 2.6.0
 */

define('AUTH_KEY', 'somethingrandom');
define('SECURE_AUTH_KEY', 'somethingrandom');
define('LOGGED_IN_KEY', 'somethingrandom');
define('NONCE_KEY', 'somethingrandom');
define('AUTH_SALT', 'somethingrandom');
define('SECURE_AUTH_SALT', 'somethingrandom');
define('LOGGED_IN_SALT', 'somethingrandom');
define('NONCE_SALT', 'somethingrandom');
