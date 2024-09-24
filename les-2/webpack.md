---
title: Les 2
layout: page
permalink: :path/:basename
nav_exclude: true
---

## Webpack integreren
{: .text-green-100 .fs-6 }
 
Om de SCSS en JavaScript assets te compilen maak ik gebruik van `npm` in combinatie met `webpack`.  
{: .mb-0 }
## Let op, straks wordt er een **node_modules** folder gegenereerd, deze mag niet in git.
{: .text-red-100 .fs-4 .mt-2 .mb-4 }

---
### 1- Structuur
Eerst heb je een structuur nodig.  
Maak in je project een aantal folders en bestanden die je als basis nodig hebt:
- /public/src/js _( dit is de locatie van je javascripts die niet minified zijn )_
- /public/src/js/main.js _( dit is je js bestand met minimaal een console.log() functie erin )_
- /public/src/scss _( hierin staan je SASS bestanden )_
- /public/src/scss/\_custom.scss _( je scss bestand met bijvoorbeeld je sass code )_
- /public/src/scss/main.scss _( je scss bestand met bijvoorbeeld je sass code )_
- /package.json _( hier staat in welke packages er nodig zijn zoals een sass compiler  )_
- /webpack.config.js _( hier zijn de functies gedefinieerd voor het compilen van de sass )_  
Je kunt een voorbeeld van dit pakket bestanden ook hier downloaden: [example](data%2Fexample.zip)

---
### 2- package.json
In de [package.json](data%2Fpackage.json) kun je aangeven hoe je project heet en wat de locatie van `webpack.config.js` is.  
Je vind ook diverse dependencies die nodig zijn voor het compilen van dit project.  
Daarnaast zie je ook welke scripts er zijn en welke actie die uitvoeren, bijvoorbeeld `dev` en `build`.

---
### 3- webpack.config.js
In de [webpack.config.js](data%2Fwebpack.config.js) vind je de acties die uitgevoerd worden tijdens het compilen.  

---
### 4- _custom.scss
Plaats in dit bestand de volgende code:
```css
$body-bg: #fff;
$body-color: #111;

$blue:    #283d42;
$indigo:  #6610f2 !default;
$purple:  #6f42c1 !default;
$pink:    #e83e8c !default;
$red:     #e72d2d !default;
$orange:  #b6683a;
$yellow:  #ffc107 !default;
$green:   #28a745 !default;
$teal:    #20c997 !default;
$cyan:    #17a2b8 !default;

$font-family-monospace:  Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !default;

$headings-font-family: $font-family-monospace;
```

--- 
### 5- main.scss
Plaats in dit bestand de volgende code:
```css
@import "custom";
@import "~bootstrap/scss/bootstrap";
```
Eventueel kun je onderaan nog een paar regels css plaatsen om bijvoorbeeld de achtergrond aan te passen.  


---
### 6- Packages installeren
Het installeren van de packages _(dependencies)_ doe je via `npm`.  
Navigeer daarvoor in de terminal naar je project folder en voer het volgende commando uit:  
```shell
npm i
```
_( Een afkorting voor `npm install` )_  
Je ziet nu een `node_modules` folder in je thema folder.  
### **Note:** Zorg ervoor dat je de node_modules in je `.gitignore` hebt staan zodat deze niet gepushed wordt naar je repo.
{: .text-red-100 .fs-4 }
  
---
### 7- Packages compilen
Om de `sass` en de `javascripts` te compilen en in een `dist` folder te plaatsen kun je het volgende commando uitvoeren:  
```shell
npm run dev
```

---
### 8- Scripts toevoegen aan de website 
Geef in je header aan dat je de css wilt laden uit je dist folder, bijvoorbeeld zo:  
{% raw %}
`<link href="/dist/css/main.min.css" rel="stylesheet"> `
{% endraw %}
De andere links naar de css bestanden kun je verwijderen.

---
### 9- Scripts toevoegen aan de website 
Geef in je footer aan dat je de javascript file wilt laden uit je dist folder, bijvoorbeeld zo:  
{% raw %}
`<script src="/dist/js/main.js"></script>`
{% endraw %}
De andere links naar de javascript bestanden kun je verwijderen.

---
### 10- Controleer
Bekijk je website nu in de browser.

---
### 11- Customize JavaScript
Pas nu de `main.js` aan door bijvoorbeeld een `console.log` die aangeeft dat het script werkt toe te voegen.  

---
### 12- Customize CSS
Pas nu de `scss` en vormgeving een beetje nu aan zodat de website voldoet aan de eisen van jouw project.  
Bijvoorbeeld door de achtergrond aan te passen.

---

{% include commit_push.md %}
