---
title: Les 6
layout: page
permalink: :path/:basename
nav_exclude: true
---

## Verwerken van url
{: .text-green-100 .fs-6 }

Je request komt nu aan in de `index.php` nu moeten wij in de index.php de request verwerken en de juiste informatie ophalen.

---
### 1- Pas de index.php aan
Haal de url op, bijvoorbeeld: http://localhost/genre/single  
Plaats deze php code in je `index.php`
```php
var_dump( $_SERVER['REDIRECT_URL'] );
```
Als je de bovenstaande url bekijkt dan zie je dat je in php de url kunt opvangen.  

---
### 2- Array
Zet de request nu om in een array door de bovenstaande code te vervangen door:
```php
$request_url = explode('/', $_SERVER['REDIRECT_URL']);
```

---
### 3- Juiste pagina ophalen
Zoek nu het laatste onderdeel uit de array.  
Dit is de slug van dit nieuwsbericht
```php
$mijn_pagina = end($request_url);
```
Controleer dit maar:  
```php
echo 'ik bekijk nu het bericht: ' . $mijn_pagina;
```

---
### 4- Controleer
Bekijk je website nu in de browser.
Kun je de url aanpassen en zie je nu dit terug in de waardes op het scherm?

---

{% include commit_push.md %}

---
### Volgende stap:
{: .text-green-100 .fs-4 }  
In de volgende pagina ga je één enkele single weergeven.  
[Data uit database ophalen](database)


