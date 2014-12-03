---
layout: grid12-article
title:  Como reiniciar o Apache
---



### Reiniciando o Apache


No Ubuntu/Debian podemos utilizar o comando abaixo.

    /etc/apache2/conf.d/apache2 restart

Como alternativa, o comando abaixo também funciona.

    service apache2 reload

No Centos/HedHat utilizamos o seguinte comando:

    /etc/init.d/httpd start

No Fedora, com alternativa, podemos utilizar o comando:

    systemctl resstart mysqld.service