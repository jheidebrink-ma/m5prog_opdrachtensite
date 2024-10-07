<?php
// haal al mijn instellingen op
require_once('../source/config.php');

// haal de database verbinding op
require_once( SOURCE_PATH . 'database.php');

// Als er een item beken wordt waarbij ik de id mee geef in de url 
// dan kan ik deze optie gebruiken:
// Bij het ophalen van mijn data zal ik dan wel de query op basis 
// van het id moeten ophalen in plaats van de slug
if ( isset( $_GET['id'] ) ) {
    $sdg_id = (int) $_GET['id'];
    include(VIEWS_PATH . 'single.php');
    return;
}

include(VIEWS_PATH . 'home.php');
