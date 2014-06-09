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

