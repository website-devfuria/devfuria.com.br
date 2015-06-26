---
layout:      grid12-article
title:       Habilitar mod_rewrite no Apache
description: Aprenda como habilitar o módulo mod_rewrite no servidor Apache
---

Esta é uma atividade corriqueira e que sempre nos esquecemos de como fazer, então aqui vai a "cola"...

Vou mostrar como fazer isso no servidor Apache em uma máquina Debian/Ubuntu.

Vamos habilitar o módulo de reescrita.

    $ cd /etc/apache2/mods-available
    # a2enmode

Também precisamos fazer uma pequena alteração no arquivo de configuração do Apache, o problema aqui é você encontrar o
dito cujo. Normalemnte ele se encontra neste local

    /etc/apache2/sites-available/default

Em minha máquina (Ubuntu- Vivid Vervet) o local é este aqui...

    /etc/apache2/apache2.conf

De qualquer forma você deve procurar o trecho abaixo.

    <Directory /var/www/>
            Options Indexes FollowSymLinks
            AllowOverride None # <---- ATENÇÂO
            Require all granted
    </Directory>

E alterar conforme abaixo.

<Directory /var/www/>
        Options Indexes FollowSymLinks
        AllowOverride All # <---- ATENÇÂO
        Require all granted
</Directory>

Agora basta [reiniciar o Apache](/linux/apache-como-reiniciar-servidor-apache/) `/etc/init.d/apache2 restart`, você deve executar como root ou utilizar `sudo` no
início do comando.