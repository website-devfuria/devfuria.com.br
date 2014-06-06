---
layout: materia
title: Instalando e configurando o Apache no Linux
---



FEDORA 17+
---


Instalar o software:

    # yum install httpd


Colocar o apache para iniciar junto com o sistema operacional:

    # chkconfig --levels 235 httpd on
    

Iniciar o serviço:

    # systemctl start httpd.service


Para testar, abra o navegador e acesse http://localhost
uma página intitulada "Fedora Test Page" será exibida.



CENTOS 6.4
---

Instalar o software:

    # yum install httpd -y 


Iniciar automaticamente:

    # /etc/init.d/httpd start
    # chkconfig httpd on

Para testar, abra o navegador e acesse http://localhost
uma página intitulada "Fedora Test Page" será exibida.


UBUNTU 12+
---

    # apt-get install apache2

Para testar, abra o navegador e acesse http://localhost
a mensagem "It works" deve aparecer.


Caminho de redirecionamento do apache
/etc/apache2/conf.d


Ajustando o DocumentRoot no Fedora
----------------------------------

Eu não consegui alterar o local, então 
optei por dar permissão de escrita e alterar o dono das pastas.

Mudar o dono da pastas /var/www/html de root para o seu usuário:
	
	# cd /var/www/
	# chown seu_usuario:seu_usuario html/ -R


Alterando as permissões:

	# chmod 777 -R html/
	


Ajustando o DocumentRoot no Ubuntu
----------------------------------

No Ubuntu eu já consigo trocar o local.

Altere o arquivo "default" no seguinte local:

	# nano /etc/apache2/sites-available/default

Eu utilizei o "nano" como editor de textos.

Procure entender o arquivo e altere o caminho para:

	/home/usuario/NetBeansProjects

... o exemplo acima condiz com meu HD, obviamente você deve
escolher a pasta que faz sentido no seu HD.


Reinicie apache

	# /etc/init.d/apache2 restart


Habilitar .htaccess no Centos
---

	http://dev.antoinesolutions.com/apache-server/mod_rewrite