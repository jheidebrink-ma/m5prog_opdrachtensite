<?php
/*
 * Load the current settings using the .env file
 */
$envSettings = [];
if (file_exists(dirname(__FILE__).'/.env')) {
    $envSettings = parse_ini_file(dirname(__FILE__).'/.env');
}

/*
 * DB settings
 */
define('DB_NAME', (isset($envSettings['DB_NAME'])) ? $envSettings['DB_NAME'] : 'example');
define('DB_USER', (isset($envSettings['DB_USER'])) ? $envSettings['DB_USER'] : 'username');
define('DB_PASSWORD', (isset($envSettings['DB_PASSWORD'])) ? $envSettings['DB_PASSWORD'] : 'pass');
define('DB_HOST', (isset($envSettings['DB_HOST'])) ? $envSettings['DB_HOST'] : 'localhost');

