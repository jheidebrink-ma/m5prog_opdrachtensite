---
title: Les 4
layout: page
permalink: :path/:basename
nav_exclude: true
---

## RDBMS (relational database management system)
{: .text-green-100 .fs-6 }

Een RDBMS (Relational Database Management System) is een systeem dat gegevens opslaat in tabellen, waarin elke tabel bestaat uit rijen en kolommen.  
Deze tabellen zijn onderling verbonden door relaties, wat het mogelijk maakt om complexe gegevensstructuren te beheren.  
RDBMS'en gebruiken SQL (Structured Query Language) voor het uitvoeren van bewerkingen zoals het opvragen, invoegen, bijwerken en verwijderen van gegevens.  
Dit type systeem waarborgt de integriteit van de gegevens en maakt het eenvoudig om gegevensconsistentie te garanderen, wat essentieel is voor veel toepassingen in verschillende sectoren.

---
### Docker
In jouw `docker-compose.yml` staat het volgende stuk code:
```yaml
  mariadb:
    image: mariadb:latest
    container_name: prog_m5_mariadb
    environment:
      MYSQL_DATABASE: '${DB_NAME}'
      MYSQL_USER: '${DB_USERNAME}'
      MYSQL_PASSWORD: '${DB_PASSWORD}'
      MYSQL_ROOT_PASSWORD: '${DB_ROOT_PASSWORD}'
```
Hier zie je dat er een **RDBMS** in de vorm van een **mariadb** container hebt.  
Hier staat jouw data in opgeslagen.  
Sommige mensen hebben ook nog een volume, dat betekend dat de data niet binnen de container is opgeslagen maar erbuiten.  
Voor nu maakt dan niet uit.

---
### Volgende stap:
{: .text-green-100 .fs-4 }  
[RDBMS beheer tool](tool)
