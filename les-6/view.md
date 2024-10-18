---
title: Les 6
layout: page
permalink: :path/:basename
nav_exclude: true
---

## Alles samenbrengen
{: .text-green-100 .fs-6 }

De database is nu voorbereid op jouw vraag vanuit de url.  
Nu is het de bedoeling om de correcte informatie weer te geven.

---
### 1- Maak de juiste views.
Zorg ervoor dat je een **overview.php** én een **single.php** in je views folder hebt staan. 
De inhoud van de `single.php` is gelijk aan de `single.php` in de public folder.  
De inhoud van de `overview.php` is gelijk aan de `index.php` in de public folder.

---
### 2- Geef de juiste view weer.
In jouw `index.php` moet je nu een keuze gaan maken waardoor je de correcte view weergeeft.  
Bekijk of ik een single bekijk of het overzicht wil zien.
```php
if ( empty($mijn_pagina) ) {
```
Als dat zo is haal mijn index pagina op én stop ik met het uitvoeren van de scripts. 
```php
require_once ('../views/overview.php');
exit;
```

Na deze if statement kun je de `single.php` binnen gaan halen.  
```php
require_once ('../views/single.php');
```

---
### 3- Geef de informatie uit de database weer
Op basis van de de vorige les kun je nu de data ophalen uit de database.  
Je hebt een variabele `$mijn_pagina`  
Deze kun je als slug gebruiken door bijvoorbeeld zo'n query te gebruiken:
```mysql
$query = 'SELECT * FROM singles WHERE slug=?';
```
Vervolgens moet je aan deze query de variabele binden.  
Welk data type is dit?
```php
$stmt->bind_param('s', $mijn_pagina);
````

---
### 4- Permalink ( link vanaf overzicht)
In het overzicht (`card.php`) heb jij als het goed is nog een link naar de singles.php pagina staan.  
Kun je deze link zo aanpassen dat deze de slug gebruikt?  Bijvoorbeeld zo:
```php
<a href="/single.php?single=<?php echo $single['slug'] ?>" type="button" class="btn btn-sm btn-outline-secondary">Bekijk</a>
```

---
### 5- Controleer
Bekijk je website nu in de browser.
Kun jij nu de informatie goed zien en ophalen?

---

{% include commit_push.md %}



