---
title: Les 5
layout: page 
permalink: :path/:basename 
nav_exclude: true
---

## Single pagina
{: .text-green-100 .fs-6 }

Als je op een single klikt dan is het fijn om naar een detail pagina te navigeren, daar gaan wij nu mee aan de slag. 

---
### 1- Implementeer de database
Maak nu in de `single.php` dezelfde verbinding met de database als je in de `index.php` hebt gemaakt.  
Plaats de queries tot en met de while loop boven de plek waar je de data wilt weergeven.

---
### 2- Variabele van een single
Voor nu plaats je bovenaan dit document een variabele `$single_id` en vult daarin een ID van je singles tabel, bijvoorbeeld `1`.

--- 
### 3- Pas de query aan
Nu moet je de mysql query zo aanpassen dat er een variabele id in komt, door een WHERE toe te voegen.  
Bijvoorbeeld:  
```mysql
WHERE singles.id=?
```
Mijn query ziet er momenteel zo uit:
```mysql
    SELECT singles.*, artists.title as artist_title, genres.title as genre_title
    FROM singles
    LEFT JOIN artists ON singles.artist_id = artists.id
    LEFT JOIN genres ON singles.genre_id = genres.id
    WHERE singles.id=?
```

### 4- Bind een parameter
Omdat wij gebruik maken van een prepare waarbij van te voren zeggen wat de query is en later een variabele invullen heb je minder kans op `mysql injecties`.  
Bij het binden van een parameter kun je per parameter aangeven welke type het is, je hebt keuze uit:  
**i** - integer  
**d** - double  
**s** - string  
**b** - BLOB  

In dit geval is de `$single_id` een int, daardoor is de bind code als volgt:
```php
/* Bind the slug */
$stmt->bind_param('i', $single_id);
```
Plaats deze code na de `prepare` regel.

### 5- Verwijder de while loop
Je hebt de while loop niet meer nodig omdat je nu maar één item ophaalt uit de database. Daarom kun je de while loop vervangen met een enkele regel.  
Deze code:
```php
while( $single = mysqli_fetch_assoc($result) ) {
    print_r( $single );
}
```
Kun je vervangen door
```php
$single = mysqli_fetch_assoc($result);
print_r( $single );
````

---
### 6- Controleer
Bekijk je website nu in de browser.
Als het goed is zie je nu de content uit de database voor één specifieke single.  
Pas nu de weergave aan zodat deze pagina er goed uit ziet.

---

{% include commit_push.md %}

---
### Volgende stap:
{: .text-green-100 .fs-4 }  
In de volgende pagina ga je één enkele pagina of blog item weergeven.  
[overzicht pagina](overzicht)


