<?php
/**
 * Display all errors
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$file = "../.env";
if(! file_exists($file))
{

    die("geen .env bestand gevonden");
}

$envSettings = parse_ini_file($file);

define('DB_SCHEMA_NAME',(isset($envSettings['DB_SCHEMA_NAME'])) ? $envSettings['DB_SCHEMA_NAME']:"not set");
define('DB_USER',(isset($envSettings['DB_USER'])) ? $envSettings['DB_USER']:"not set");
define('DB_PASSWORD',(isset($envSettings['DB_PASSWORD'])) ? $envSettings['DB_PASSWORD']:"not set");
define('DB_HOST',(isset($envSettings['DB_HOST'])) ? $envSettings['DB_HOST']:"not set");