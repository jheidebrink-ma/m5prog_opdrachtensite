---
title: Les 1
layout: page
permalink: :path/:basename
nav_exclude: true
---

## HTML bestanden
{: .text-green-100 .fs-6 }
Nu je de structuur hebt van je project is het tijd om ervoor te zorgen dat je ook iets kunt zien.  
Aan het eind van deze les heb je 3 verschillende pagina's op je website.  
Wij werken vanaf nu met `*.php` bestanden zodat wij straks dynamische content kunnen plaatsen.  

---
### 1- Bootstrap
Het is nu tijd om de html pagina in te delen.  
Je kunt hiervoor gebruik maken van een standaard template van het frontend framework Bootstrap.  
Hier vind je meer informatie over [Bootstrap](https://getbootstrap.com).  
### In deze les beginnen wij ook met de vormgeving, maar voor nu is de structuur belangrijk.
{: .text-orange-100 .fs-3 }
<br>
![website.png](images%2Fwebsite.png)

---
### 2- HTML
Hier kun je diverse Bootstrap voorbeelden vinden: [Download Bootstrap Examples](https://github.com/twbs/bootstrap/releases/download/v5.3.3/bootstrap-5.3.3-examples.zip)  
Ik gebruik voor nu het voorbeeld [CDN-starter](https://github.com/twbs/examples/tree/main/starter/)  
Bekijk hier de complete HTML pagina: [index.html](data%2Findex.html)  
In de `index.php` plaats ik de basis HTML stuctuur uit de `index.html` zodat ik een complete HTML pagina zie op mijn website.

---
### 3- Navigatie
Zoek nu in je source het gedeelte op van de navigatie en pas deze zo aan dat je kunt linken naar de volgende 3 pagina's: 
1. index.php _( home pagina )_
2. single.php _( detail pagina )_
3. about.php _( over deze site pagina )_

---
### 4- About en Single pages
Kopieer nu de index.php naar de `single.php` én `about.php`  
Je hebt nu een website met 3 dezelfde pagina's.  
Verander wel de titel en een paar stukken van de tekst zodat je weet welke pagina je bekijkt.  

---
{% include commit_push.md %}

---
### Volgende stap:
{: .text-green-100 .fs-4 }  
[Bootstrap via Sass en Webpack](webpack)