---
title: Les 5
layout: page 
permalink: :path/:basename 
nav_exclude: true
---

## Overzicht pagina maken vanuit de database
{: .text-green-100 .fs-6 }

Je hebt nu de data opgehaald uit de database, deze ga je nu weergeven op de home pagina en linken aan een single pagina.

---
### 1- Implementeer loop
In de while loop verwijder je nu de `print_r` omdat je weet dat alles werkt.  
Vervolgens laad je nu op deze plek de `card.php`  
Als het goed is zie je nu meerdere keren hetzelfde kaartje langskomen op jouw index.  

---
### 2- Verwerk de data in card.php
Binnen de `while loop` heb je nu een variabele `$single`  
Deze kun je ook in `card.php` gebruiken, weet je nog wat voor een type het is?  
Zoek nu de plek op waar je bijvoorbeeld de `title` wilt weergeven.  
Plaats daar de volgende php code om een onderdeel uit de `$single` array weer te geven.
```php
<?php echo $single['title'] ?>
```
Zo ziet de titel er dan bijvoorbeeld uit in de card.php
```php
<div class="card-header">
    <h4 class="my-0 font-weight-normal"><?php echo $single['title'] ?></h4>
</div>
```

---
### 3- Geef nu ook de andere velden toe
Zorg ervoor dat ook de afbeelding zichtbaar is uit de database.  
De code daarvoor kan er zo uit zien:
```php
<div class="card-img">
    <img class="card-img-top" src="<?php echo $single['image'] ?>" alt="<?php echo $single['title'] ?>">
</div>
```

---
### 4- Join query
Kun je nu de query zo aanpassen dat je ook de artiest naam en genre kunt weergeven bij de kaartjes?


---
### 5- Controleer
Bekijk je website nu in de browser.
Als het goed is zie je nu de content uit de database boven de singles staan.

---

{% include commit_push.md %}

---
### Volgende stap:
{: .text-green-100 .fs-4 }  
In de volgende pagina ga je één enkele single weergeven.  
[GET / POST / REQUEST](requests)


