---
title: Les 4
layout: page
permalink: :path/:basename
nav_exclude: true
---

## RDBMS Beheer tool
{: .text-green-100 .fs-6 }

Er zijn verschillende tools die je kunt gebruiken en de afgelopen tijd gebruikt hebt.  
Bijvoorbeeld:
- Workbench
- Sequel Pro
- HeidiSQL
- PHP Myadmin


---
### Poort open zetten
Voor de externe tools moet je een poort open zetten, weet je nog hoe je dit in het docker-compose.yml bestand in stelt?  
Je geeft een externe én interne poort aan per container.  
De interne mysql poort moet 3306 zijn, anders werkt deze niet.  
De externe poort kun je zelf verzinnen, bijvoorbeeld 3356.  
Stel nu een externe poort in bij je mariadb service.  
Dit kan ervoor zorgen dat je mariadb service er bijvoorbeeld zo uit ziet:  
```yaml
  mariadb:
    image: mariadb:latest
    container_name: prog_m5_mariadb
    environment:
      MYSQL_DATABASE: '${DB_NAME}'
      MYSQL_USER: '${DB_USERNAME}'
      MYSQL_PASSWORD: '${DB_PASSWORD}'
      MYSQL_ROOT_PASSWORD: '${DB_ROOT_PASSWORD}'
    ports:
      - 3356:3306
```
Build nu docker opnieuw met het volgende commando:
```bash
docker-compose up --build
```

--- 
### Test de verbinding
Maak nu met je externe tool, bijvoorbeeld HeidiSQL een verbinding naar de database server.  
De host is: ```127.0.0.1``` ( localhost)  
De poort heb je net ingesteld.  
De username en wachtwoord vind je terug in je `.env` file.

---
### PHP Myadmin
Naast de stand alone tools is er ook een web based too, namelijk PHPMyadmin.  
Deze tool is web based en kun je op een server installeren zoals je ook met een website doet. Het voordeel is dat je niet een poort open hoeft te zetten.  
Zorg er altijd voor dat als je deze too gebruikt hij nooit `phpmyadmin` in de url heeft.  
Voor nu kun je de tool vanuit Docker Desktop openen.  

---
### Keuze
Probeer beide tools uit en bekijk welke too voor jou het prettigst werkt.  


---
### Volgende stap:
{: .text-green-100 .fs-4 }  
[WordPress header template en functies](header)


