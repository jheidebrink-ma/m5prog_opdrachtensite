---
title: Les 2
layout: page
permalink: :path/:basename
nav_exclude: true
---

## Webpack integreren
{: .text-green-100 .fs-6 }

Deze les een stuk minder verschillende stappen, dus heb je meer tijd om een mooie website te maken.  
Om onze SASS en JavaScipt te compilen maak ik gebruik van `npm` in combinatie met `webpack` om de assets te renderen.  
{: .mb-0 }
## Let op, straks wordt er een **node_modules** folder gegenereerd, deze mag niet in git.
{: .text-red-100 .fs-4 .mt-2 .mb-4 }

---
### 1- Structuur
Eerst heb je een structuur nodig.  
Maak in je thema map een aantal folders en bestanden die je als basis nodig hebt:
- src/js _( dit is de locatie van je javascripts die niet minified zijn )_
- src/js/main.js _( dit is je js bestand met minimaal een console.log() functie erin )_
- src/scss _( hierin staan je SASS bestanden )_
- src/scss/main.scss _( je scss bestand met bijvoorbeeld je sass code )_
- package.json _( hier staat in welke packages er nodig zijn zoals een sass compiler  )_
- webpack.config.js _( hier zijn de functies gedefinieerd voor het compilen van de sass )_  
Je kunt een voorbeeld van dit pakket bestanden ook hier downloaden: [example](data%2Fexample.zip)

---
### 2- package.json
In de [package.json](data%2Fpackage.json) kun je aangeven hoe je project heet en wat de locatie van `webpack.config.js` is.  
Je vind ook diverse dependencies die nodig zijn voor het compilen van dit project.  
Daarnaast zie je ook welke scripts er zijn en welke actie die uitvoeren, bijvoorbeeld `dev`

---
### 3- webpack.config.js
In de [webpack.config.js](data%2Fwebpack.config.js) vind je de acties die uitgevoerd worden tijdens het compilen.  

---
### 4- Packages installeren
Het installeren van de packages doe je via `npm`.  
Navigeer daarvoor in de terminal naar je thema folder en voer het volgende commando uit:  
```shell
npm i
```
_( npm install )_
Je ziet nu een `node_modules` folder in je thema folder.  
### **Note:** Zorg ervoor dat je de node_modules in je `.gitignore` hebt staan zodat deze niet gepushed wordt naar je repo.
{: .text-red-100 .fs-4 }
  
---
### 5- Packages compilen
Om de `sass` en de `javascripts` te compilen en in een `dist` folder te plaatsen kun je het volgende commando uitvoeren:  
```shell
npm run dev
```

---
### 6- Scripts toevoegen aan de website 
Geef in je header aan dat je de css wilt laden uit je dist folder, bijvoorbeeld zo:  
` <link href="/dist/css/main.css" rel="stylesheet">`

---
### 7- Scripts toevoegen aan de website 
Geef in je footer aan dat je de javascript file wilt laden uit je dist folder, bijvoorbeeld zo:  
`<script src="/dist/js/main.js"></script>`

---
### 8- Controleer
Bekijk je website nu in de browser.  

---
### 9- Customize 
Pas nu de `scss` en templates nu aan zodat de website voldoet aan de eisen van jouw project.

---

{% include commit_push.md %}
