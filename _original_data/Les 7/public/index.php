<?php
// haal al mijn instellingen op
require_once('../source/config.php');

// haal de database verbinding op
require_once( SOURCE_PATH . 'database.php');

// handle incomming request
// controleer de url, is er misschien een categorie geselecteerd?
$url = explode('/', trim($_SERVER['REQUEST_URI']));
// remove empty values 
$url = array_values(array_filter($url));
// and set a default
if (empty($url[0])) {
    $url[] = 'home';
}

switch ($url[0]) {
    case 'sdg':
        define('SDG_SLUG', htmlspecialchars($url[1]));
        include(VIEWS_PATH . 'single.php');
        break;
    case 'home':
    default:
        include(VIEWS_PATH . 'home.php');
}

// debug part to show the url array
// echo '<pre style="background:#ff0; position:absolute; padding:3rem 5rem">';
// print_r($url);
// echo '</pre>';

