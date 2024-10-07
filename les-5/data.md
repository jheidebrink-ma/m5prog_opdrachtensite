---
title: Les 5
layout: page 
permalink: :path/:basename 
nav_exclude: true
---

## PHP koppelen met een database
{: .text-green-100 .fs-6 }

In PHP kun je met een MySQL-database verbinden via de Mysqli-extensie `new mysqli()` of PDO-extensie `new \PDO()`.  
Bij gebruik van `mysqli` maak je eerst een nieuwe connectie met de functie `mysqli_connect()`, waarbij je de host, gebruikersnaam, wachtwoord en databasenaam opgeeft.  
Een succesvolle verbinding retourneert een connectie-object waarmee je query’s kunt uitvoeren.

In de komende stappen ga je zelf een database verbinding maken met de database.  

---
### 1- Configuratie bestand
Maak buiten de public folder een `config.php` bestand aan, bijvoorbeeld in een `source` folder. 
Plaats deze code bovenin je `config.php` om alle errors zichtbaar te maken in je browser: 
```php
/**
 * Display all errors
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
```
Hieronder gaan wij het algemene `.env` bestand parsen zodat dit systeem gebruik kan maken van dezelfde waardes.  
**Voorbeeld code**
Ik maak gebruik van een `ternary operator` bij het controleren of een waarde gedefinieerd is, dit is een ingekorte `if-statement`.
```php
<?php
/**
 * Parse een .env file waar de instellingen instaan
 */
$env_array = parse_ini_file(dirname(__DIR__, 1) . '/.env');

/**
 * Definieer een aantal constante met de waardes uit je .env file
 */
define('DB_HOST', isset($env_array['DB_HOST']) ? $env_array['DB_HOST'] : '127.0.0.1');
define('DB_NAME', isset($env_array['DB_NAME']) ? $env_array['DB_NAME'] : 'm5prog');
define('DB_USERNAME', isset($env_array['DB_USERNAME']) ? $env_array['DB_USERNAME'] : 'm5prog_user');
define('DB_PASSWORD', isset($env_array['DB_PASSWORD']) ? $env_array['DB_PASSWORD'] : 'wachtwoord');

```

---
### 2- Verbind met de database
Nu je de gegevens uit het .env bestand hebt geladen kun je ze gaan gebruiken bij het maken van een verbinding met de database.  
Je kunt met twee verschillende extensies verbinding maken met een MySQL Database, `mysqli` en `pdo`. Hieronder beschrijf ik beide manier van verbinden op de Objectgeoriënteerde manier.  
Functioneel is ook mogelijk, maar deze wordt minder gebruikt bij bedrijven omdat _functioneel_ als minder schaalbaar gedefinieerd wordt dan _OOP ( object georiënteerd)_.   
**MySQLi**
```php
<?php
$connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
```
**PDO**
```php
<?php
$dsn        = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';port=3306';
$connection = new \PDO($dsn, DB_USERNAME, DB_PASSWORD, DB_NAME);
```

Maak een database.php bestand aan in je `source` folder, haal daar de gegevens uit je `config.php` op én maak daarin een database verbinding.  
Het bestand kan er dan zo uit zien:
```php
<?php

// haal de configuratie op door het config.php bestand te laden.
require_once('../source/config.php');

// Maak een database verbinding waarbij je de constanten uit de .env file gebruikt
$connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
```

---
### 3- Data ophalen in je index
Maak nu een verbinding in je `index.php` met je `database.php` zodat je in de `index.php` gegevens uit je database kunt ophalen.  
Voordat je de data kunt weergeven meot je een aantal stappen doorlopen:  
1- Verbind met de database
```php
require_once('../source/database.php');
```
2- Maak een database query en plaats deze in een variabele
```mysql
$query = 'SELECT * FROM singles ORDER BY title';
```
3- Bereid de query voor om uit te voeren, de database weet nu dat er informatie opgehaald moet worden.
```php
$stmt = $connection->prepare($query);
```
4- Voer de query uit, de database heeft nu een query uitgevoerd, maar nog niet het resultaat terug gegeven.
```php
$stmt->execute();
```
5- Vang het resultaat op voor verdere verwerking van de gegevens uit de database.
```php
$result = $stmt->get_result();
```
6- Terwijl ik door de resultaten loop zet elke regel in een variabele die `$single` heet, het formaat is een **associative array**
```php
while( $single = mysqli_fetch_assoc($result) ) {
    print_r( $single );
}
```

---
### 4- Controleer
Bekijk je website nu in de browser.
Als het goed is zie je nu de content uit de database boven de singles staan.

---

{% include commit_push.md %}

---
### Volgende stap:
{: .text-green-100 .fs-4 }  
In de volgende pagina ga je een overzicht van de informatie uit de database maken.  
[overzicht pagina](overzicht)


