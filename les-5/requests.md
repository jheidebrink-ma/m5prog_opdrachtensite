---
title: Les 5
layout: page 
permalink: :path/:basename 
nav_exclude: true
---

## Overzicht pagina maken vanuit de database
{: .text-green-100 .fs-6 }

In PHP worden GET, POST, en REQUEST gebruikt om gegevens te ontvangen van een formulier of een URL:  
**GET:**  
Hiermee haal je gegevens op die via de URL worden meegestuurd. 
De gegevens zijn zichtbaar in de browserbalk en worden opgehaald via $_GET[].  
_Geschikt voor kleine en niet-gevoelige data._

**POST:**  
Hiermee verstuur je gegevens via het HTTP-body, waardoor ze niet zichtbaar zijn in de URL. 
Je haalt de data op met $_POST[].  
_Geschikt voor grotere en gevoeligere data, zoals wachtwoorden._

**REQUEST:**  
Dit bevat zowel GET als POST data en haalt informatie op via $_REQUEST[]. 
_Meestal minder specifiek, omdat het uit beide methodes kan komen._

---
### 1- Get waarde ophalen
In `single.php` kun je het stukje code om de single `id` te definiëren zo aanpassen dat er een waarde uit de url opgehaald wordt.  
Gebruik daarvoor de `$_GET[]` methode.  
Ik roep mijn single pagina nu ana met een variabele single:  
`http://localhost/single.php?single=2`  
Deze kan ik bijvoorbeeld zo ophalen:
```php
$single_id = $_GET['single'];
```
Om errors te voorkomen als er geen parameter verstuurd is pas ik dit stukje code zo aan dat hij een waarschuwing geeft.
```php
if ( ! isset($_GET['single']) ) {
    die( 'Geen single gevonden' );
}
$single_id = $_GET['single'];
```

---
### 2- Get waarde versturen
Ga nu naar je `card.php` en maak een `a href` tag die de gebruiker naar de single.php pagina stuurt.  
Dit kan er bijvoorbeeld zo uit zien:  
```php
<a href="/single.php?single=<?php echo $single['id'] ?>" type="button" class="btn btn-sm btn-outline-secondary">Bekijk</a>
```

---
### 3- Controleer
Bekijk je website nu in de browser.
Als het goed is zie je nu de content uit de database boven de singles staan.

---

{% include commit_push.md %}


