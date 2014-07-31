Exibir erros
---

Altere o php.ini. Utilize seu editor preferido, utilizei o "nano";

Localização do arquivo no Fedora:
	
	# nano /etc/php.ini

Localização do arquivo no Ubunto:

	# nano /etc/php5/apache2/php.ini


Procure pelas linhas abaixo e altere os valores como se segue:

	error_reporting = E_ALL
	display_errors = On
	track_errors = On
	html_errors = On

Reinicie o apache:

	(fedora)# systemctl restart httpd.service

	(ubuntu)# /etc/init.d/apache2 restart





Corrigir msg de erro ao executar php -v "Unable to load dynamic library '/usr/lib/php/modules/module.so'"
---

Afeta também ao phpunit.


	

editar o arquivo abaixo

    /etc/php.d/mcrypt.ini

de:

    ; Enable mcrypt extension module
    extension=module.so

para:

; Enable mcrypt extension module
extension=mcrypt.so


Eu reinicie o apache.

Execute 

    php -v

A msg de erro não deve aparecer.


Fonte
    
    http://stackoverflow.com/questions/16677558/startup-unable-to-load-dynamic-library-usr-lib-php-modules-module-so