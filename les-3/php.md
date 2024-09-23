---
title: Les 3
layout: page
permalink: :path/:basename
nav_exclude: true
---

## PHP
{: .text-green-100 .fs-6 }

PHP (Hypertext Preprocessor) is een server-side scriptingtaal die voornamelijk wordt gebruikt voor het ontwikkelen van dynamische webpagina’s en webapplicaties.  
Het wordt op de server uitgevoerd, waardoor het mogelijk is om interacties met databases, gebruikersinvoer en andere dynamische content te verwerken voordat de output naar de browser wordt gestuurd.  
PHP is gemakkelijk te integreren met HTML en wordt vaak gebruikt in combinatie met databases zoals MySQL om krachtige, interactieve websites te creëren.

![PHP-logo.png](images/PHP-logo.png)

### 1- Openen van php
Voordat je php functies kunt gebruiken moet je eerst in je script aangeven dat de server een stuk php code moet gaan parsen _( verwerken )_.  
Dit doe je door php te openen: `<?php`

### 2- Afsluiten van php
Net zoals met het openen van php moet je deze ook afsluiten.
Dat doe je door met deze code: `?>`  
**Maar** als je **na** de `php` code geen `html` code hebt staan in je document dan mag je php niet afsluiten.  Het kan dus zijn dat je in een bepaald document wel php opent, maar niet afsluit.  

### 3- Data types
Elke variabele die je definiëert heeft een bepaald data type. Deze data types kom je in elke programmer taal tegen.  
De volgende 5 data types zijn de meest voorkomende:
#### 1.	Integer
Een geheel getal zonder decimalen, bijvoorbeeld: 42 of -5.
_Voorbeeld:_  
`$age = 25;`
#### 2.	Float (Double)
Een getal met decimalen, bijvoorbeeld: 3.14 of -0.5.
_Voorbeeld:_  
`$price = 19.99;`
#### 3. String
Een reeks tekens, zoals tekst of woorden, bijvoorbeeld: "Hallo wereld".
_Voorbeeld:_  
`$name = 'John';`
#### 4. Boolean
Een binaire waarde die true (waar) of false (onwaar) kan zijn.
_Voorbeeld:_  
`$is_logged_in = true;`
#### 5. Array
Een verzameling waarden in één variabele, bijvoorbeeld: een lijst van getallen of woorden.
_Voorbeeld:_  
`$fruits = array('Apple', 'Banana', 'Orange');`

### 3- Quote gebruik
Bij het definiëren of weergave van een string in je code kun je twee verschillende quotes gebruiken met verschillende resultaten.  
**Enkele quotes: `'`**   
`$name = 'John';` Wanneer geprint laat deze de inhoud van de variabele zien: **John**  
`$varname = 'literal text for $name';` Wanneer geprint laat deze variabele zien: **literal text for $naam**  
**Dubbele quotes: `"`**  
`$name = "John";` Wanneer geprint laat deze de inhoud van de variabele zien: **John**  
`$varname = "literal text for $name";` Wanneer geprint laat deze variabele zien: **literal text for John.**  

### 4- Escape sequenties
Net als bij andere talen is het goed mogelijk om code te escapen zodat deze bijvoorbeeld niet uitgevoerd wordt of niet een string afsluit.  
In php escape je door gebruik te maken van een backslash `\`  
`\\` Geeft een **\\**  
`\'` Geeft een **'**  
`$varname = 'I\'m not crazy!';` Wanneer geprint laat deze variabele zien: **I'm not crazy!**  
Bij gebruik van dubbele quotes kun je ook gebruik maken van de volgende karakters:  
`\n` geeft een **newline-karakter**  
`\r` geeft een **carriage return-karakter**  
`\t` geeft een **tab-karakter**  
`\$` geeft een **dollar-teken ($)**  
`$varname = "I'm not \"crazy!\"";` Wanneer deze variabele geprint wordt is te zien: **I'm not "crazy!"**

### 5- Expressies 
Expressies kunnen combinaties van variabelen, operatoren, waarden, functies en constanten bevatten. Het resultaat wordt tijdens het parsen geëvalueerd.  
_Bijvoorbeeld:_  
`echo 17 + 3;` Wanneer geprint laat deze variabele zien: `20`  
Een expressie kan ook een enkele waarde hebben.  
`echo 20;`  
**Let op,** php probeert je te helpen bij het parsen van code. Als jij gaat rekenen met een string dan kunnen daar onverwachte resultaten uit komen.  
In dit voorbeeld: `$waarde = '20appels' + 5;`
is de inhoud van `$waarde` 25  
Als één van de waardes niet met een getal begint dan krijg je een error, bijvoorbeeld:   
`$waarde = 'ik heb 20 appels' + 5;`  
`Warning: Uncaught TypeError: Unsupported operand types: string + int`


### 5- Commentaren in PHP
Binnen php kun je op verschillende manieren een commentaar schrijven bij jouw code.  Deze code zal niet uitgevoerd worden en daardoor ook niet zichtbaar zijn in de browser.  
```php
// Dit is een commentaar
```
```php
# Dit is een commentaar
```
```php
/*
this is a multiline
comment on more lines
*/
```
Laat de verschillende commentaren niet in elkaar voorkomen (genest) dat geeft verwarring



---
### Volgende stap:
{: .text-green-100 .fs-4 }  
[Include en Require](include_require)