---
title:       Após instalar o Debian Wheezy
description: O que instalar depois de instalar o Debian Wheezy
capitulo:    linux-artigos
ordem:
---

O básico:

    apt-get install build-essential
    apt-get install curl libssl-dev

Git:

    apt-get install git git-core
    git-gui gitk não estão disponíveis

Java runtime:

    apt-get install openjdk-7-jre

Apache:
        
    apt-get install apache2

MySql:

    apt-get install mysql-server
    mysql_secure_installation

PHP:

    apt-get install php5 php5-common libapache2-mod-php5 php5-cli php-pear php5-mysql php5-curl php5-gd


Phpmyadmin:

    apt-get install phpmyadmin
    
    
Chrome
    
    apt-get install chromium chromium-l10n


Fonte: [wiki.debian.org/Chromium](https://wiki.debian.org/Chromium)