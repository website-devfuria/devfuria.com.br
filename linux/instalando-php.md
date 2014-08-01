---
layout:      materia
title:       Instalando o PHP  no Linux
description: Como instalar PHP no Linux
---


### Fedora


Instale o software:

	# yum install php php-common php-pecl-apc php-cli php-pear php-pdo php-mysql php-pgsql php-pecl-mongo
	php-pecl-memcache php-pecl-memcached php-gd php-mbstring php-mcrypt php-xml php-soap


Reinicie o apache:

	# systemctl restart httpd.service



### Ubuntu

	# apt-get install php5 libapache2-mod-php5 php5-curl php5-gd php5-idn\

Reinicie o apache:
	
	# /etc/init.d/apache2 restart
