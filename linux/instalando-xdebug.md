---
layout:      materia
title:       Instalando o x-debug no Linux
description: Como instalar x-debug no Linux
---



### Ubuntu

Dica: talves seja muito mais fácil instalar pelo Software-center, caso não consiga...

Instale os seguintes pacotes:

	# apt-get install php5-dev php-pear

Com o PECL (pear) pode-se instalar novos pacotes no estilo `apt-get`, instale o x-debug:

	# pecl install xdebug

Agora é preciso atualizar o arquivo `php.ini` com a inclusão da extensão __x-debug__. Mas antes, precisamos saber aonde
está a extensão, execute:

	# find/ -name 'x-debug.sos'2> /dev/null

O sistema lhe mostra o caminho, anote-o.

Abra o arquivo __php.ini__ (`/etc/php5/apache2/php.ini`) e no final do arquivo ou na seção de extensões,
inclua a seguinte linha:

	Zend_extension="/usr/lib/php5/caminho-anotado"

Reinicie o apache

	# /etc/init.d/apache2 restart


### Fedora 17 e 18

O __Apache__ e o __PHP__ devem estar instalados.


Execute

	# yum install php-pecl-xdebug


Reinicie o apache

	# systemctl restart httpd.service
