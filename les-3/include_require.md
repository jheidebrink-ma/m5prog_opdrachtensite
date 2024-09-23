---
title: Les 3
layout: page
permalink: :path/:basename
nav_exclude: true
---

## Hergebruik van bestanden
{: .text-green-100 .fs-6 }

In PHP worden `include` en `require` gebruikt om externe bestanden in te laden, wat helpt bij het **hergebruiken** van code en het beter structureren van projecten.  
Het verschil tussen de twee zit in hoe ze omgaan met fouten.

![illustration.png](images/illustration.png)

#### Include
{: .text-black-100 .fs-4 .fw-500 }
**include** zal bij een fout, zoals een ontbrekend bestand, een waarschuwing geven maar het script verder laten uitvoeren.  
_Dit is handig als de ingeladen code niet essentieel is voor het functioneren van de pagina._  
Als je achter include `_once` plaatst dan zal dit document maar één keer geladen worden, zo voorkom je dubbele code.  
**Voorbeeld: include( '../views/footer.php' );**

#### Require
{: .text-black-100 .fs-4 .fw-500 }
**require** daarentegen, zal bij een fout een fatale foutmelding geven en de uitvoering van het script volledig stoppen, omdat de ingeladen code als cruciaal wordt beschouwd.  
_Dit is handig als de ingeladen code essentieel is voor het functioneren van de website._  
Als je achter require `_once` plaatst dan zal dit document maar één keer geladen worden, zo voorkom je dubbele code.  
**Voorbeeld: require_once( '../views/data.php' );**

#### DRY
{: .text-green-100 .fs-6 .fw-500 }
Binnen de software ontwikkeling werken wij volgens het **DRY** principe, dit betekent dat je zo min mogelijk dubbel werk doet.  
De afkorting staat voor:  
**D**ont  
**R**epeat  
**Y**ourself  

---
### 1- Views
Maak buiten de `public` folder een map aan en noem deze `views`.  
Deze folder is niet te benaderen vanuit de browser, en zal straks verschillende **views** ( weergave ) bestanden gaan bevatten.

---
### 2- Zoek duplicate code
Bekijk nu de 3 php bestanden in jouw code en zoek stukken code die regelmatig voorkomt.  
Plaats deze code in een nieuw bestand in de `views` folder.  _( knip en plak )_ 
Ik maak bijvoorbeeld een `navigation.php` bestand aan en plaats daar mijn menu in.  
Zie bijvoorbeeld dit bestand: [navigation.php](data/navigation.php)  
Herhaal dit ook met de **header** en de **footer**. 

---
### 3- Laad de externe code
Plaats nu op de plek waar je de code hebt geknipt een `include`, `include_once`, `require` of een `require_once` om ervoor te zorgen dat dee nieuwe code geladen wordt.  
Maak zelf een keuze wat je het beste kunt gebruiken.

---
{% include check_result.md %}

---
{% include commit_push.md %}

---
### Volgende stap:
{: .text-green-100 .fs-4 }  
[Loops](loops)