<?php
/**
 * Display all errors
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// voorbeeld met het ophalen van alle data en dan de titel weer te geven

// hier maak ik eerst een database verbinding
$connection = new mysqli('mariadb', 'db_user', 'mijn_p@ss#', 'bo_opdracht');

// met deze query haal ik de juiste database op.
$sql = 'SELECT * FROM sdg ORDER BY title';

// nu voer ik de query uit en krijg ik een resultaat object terug.
$result = $connection->query($sql);

// als ik het resultaat heb opgehaald dan kan ik door het resultaat lopen
// 
while ($item = $result->fetch_assoc()) {
    echo '<h2>' . $item['title'] . '</h2>';
    echo '<img src="'. $item['image'] .'">';
    echo '<p>'. $item['content'] .'</p>';
}

/**
 * <h2>titel nummer 2</h2>
 * <p>afbeelding2.png</p>
 * <p>een mooie tekst</p>
 */