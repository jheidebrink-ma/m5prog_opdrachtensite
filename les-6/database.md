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
### 3- Controleer
Bekijk je website nu in de browser.
Kun jij nu de informatie goed zien en ophalen?

---

{% include commit_push.md %}

---
### Volgende stap:
{: .text-green-100 .fs-4 }  
In de volgende pagina ga je de juiste data weergeven.
[Juiste view ophalen](view)


