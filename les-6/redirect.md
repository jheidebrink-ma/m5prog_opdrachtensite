---
title: Les 6
layout: page
permalink: :path/:basename
nav_exclude: true
---

## Redirect naar index.php
{: .text-green-100 .fs-6 }

Voor gebruikers en zoekmachines is het belangrijk dat een url zo leesbaar mogelijk is. 
Binnen ons project gaan wij nu leesbare url's implementeren, dit betekend dat de naam van het nummer in de url staat in plaats van het id uit de database.  
Hiervoor gebruiken wij een htaccess bestand.

--- 
_Een `.htaccess`-bestand is essentieel voor het afhandelen van alle requests via een enkel `index.php`-bestand omdat het je in staat stelt om URL-rewrites te configureren.  
Dit betekent dat je schoonere, gebruiksvriendelijke URL's kunt maken die er beter uitzien en gemakkelijker te onthouden zijn, terwijl ze toch naar dezelfde index.php-file verwijzen._


---
### 1- htaccess file
Maak een nieuw bestand en sla deze op in de root van de `public` folder.  
Noem dit bestand `.htaccess`

---
### 2- Configureer
Plaats de volgende code in dit bestand:
```shell
# zet de engine aan
RewriteEngine On

# zeg wat er moet gebeuren, in dit geval verwijs ik alles zonder een punt naar de index.php-file
RewriteRule !(\.) index.php [L]
```

---

{% include commit_push.md %}

---
### Volgende stap:
{: .text-green-100 .fs-4 }  
In de volgende pagina ga je één enkele single weergeven.  
[verwerken van url](request_url)


