---
title: Les 6
layout: page
permalink: :path/:basename
nav_exclude: true
---

## Verwerken van de data
{: .text-green-100 .fs-6 }

Je hebt nu de juiste gegevens opgehaald uit de url, deze moet je nu gaan koppelen aan de database.

---
### 1- Voorbereiding database
Zorg ervoor dat je jouw database voorbereid door een extra veld toe te voegen aan de verschillende tabellen.  
Noem dit veld `slug` en zorg dat dit een varchar van 255 karakters is én dat deze uniek is.

---
### 2- Voeg data toe aan database
Zorg er nu voor dat je in jouw database bij elk item een unieke slug hebt staan die je kunt gaan opzoeken.

---
### 3- Haal de juiste informatie op.
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
In het overzicht heb jij als het goed is nog ene link naar de singles.php pagina staan.  
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

---
### Volgende stap:
{: .text-green-100 .fs-4 }  
In de volgende pagina ga je één enkele single weergeven.  
[Data uit database ophalen](database)


