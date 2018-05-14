---
title:       Configurando o PHP
description: Pequenas configurações do PHP (o básico do básico)
capitulo:    linux-instalando-php
---


### Para fazer o PHP mostrar erros

Altere o `php.ini` utilize seu editor preferido, eu vou utilizar o "nano":

Localização do arquivo no Debian (Ubuntu):

    # versão 7
    nano /etc/php/7.0/apache2/php.ini

    # versão 5
	nano /etc/php5/apache2/php.ini

Localização do arquivo no Fedora:

	nano /etc/php.ini


Procure pelas linhas abaixo e altere os valores como se segue:

	error_reporting = E_ALL
	display_errors = On
	track_errors = On
	html_errors = On

Agora [reinicie o apache](/linux/apache-como-reiniciar-servidor-apache/).



### Corrigir mensagem de erro "Unable to load dynamic library"

Ao executar o comando `php -v ` recebemos a mensagem de erro "Unable to load dynamic library '/usr/lib/php/modules/module.so'"
o pior e que ela também afeta o phpunit.

Editar o arquivo `/etc/php.d/mcrypt.ini` de...

    ; Enable mcrypt extension module
    extension=module.so

para..

    ; Enable mcrypt extension module
    extension=mcrypt.so


Reinicie o apache e execute novamente o comando `php -v`.

A mensagem de erro não deve aparecer mais.


- - -
Fonte

- [stackoverflow.com/questions/16677558](http://stackoverflow.com/questions/16677558/startup-unable-to-load-dynamic-library-usr-lib-php-modules-module-so)