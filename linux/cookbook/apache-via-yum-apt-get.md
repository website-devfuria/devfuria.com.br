---
layout:      grid12-article
title:       Instalando e configurando o Apache no Linux
description: Aprenda como instalar o Apache no Linux (Ubuntu, Fedora e CentOS)
---

O __Apache__, de longe, é o servidor web mais popular do mundo.

Na família __HedHat__ (Fedora, CentoOS) normalmente utilizamos o __yum__ para instalação. O Apache é referenciado por `httpd`.

Na família __Debiain__ (Ubuntu) normalmente utilizamos o __apt-get__. O Apache é referenciado por `apache2`.



CENTOS 6.4
---

Instale o __Apache__ via __yum__:

    # yum install httpd -y 

Inicie o serviço.

    # /etc/init.d/httpd start


Configure para iniciar junto com o sistema operacional.

    # chkconfig httpd on

Para testar, abra o navegador e acesse `http://localhost`.

Uma página intitulada __"Apache HTTP Server Test Page powered by CentOS"__ será exibida.



FEDORA 17
---


Instale o __Apache__ via __yum__:

    # yum install httpd


Inicie o serviço.

    # systemctl start httpd.service

Repare que o Fedora utiliza esse tal de __systemctl__.

Coloque o __Apache__ para iniciar junto com o sistema operacional:

    # chkconfig --levels 235 httpd on
    
Para testar, abra o navegador e acesse `http://localhost`. 

Uma página intitulada __"Fedora Test Page"__ será exibida.





UBUNTU 12
---

Atualize o sistema.

    # apt-get update
    # apt-get upgrade 

Instale o __Apache__.

    # apt-get install apache2

Para testar, abra o navegador e acesse `http://localhost`.

A mensagem __"It works"__ deve aparecer.




### Fontes:

- [http://www.hardware.com.br/livros/servidores-linux/instalando-apache.html](http://www.hardware.com.br/livros/servidores-linux/instalando-apache.html "link-externo")
- [http://www.vivaolinux.com.br/dica/Instalando-servidor-Apache-+-PHP-+-MySQL-+-phpMyadmin-+-noip-no-Ubuntu-6.10-Server](http://www.vivaolinux.com.br/dica/Instalando-servidor-Apache-+-PHP-+-MySQL-+-phpMyadmin-+-noip-no-Ubuntu-6.10-Server "link-externo")
- [http://wiki.locaweb.com.br/pt-br/Instalando_e_configurando_Apache_no_Debian_6_Squeeze](http://wiki.locaweb.com.br/pt-br/Instalando_e_configurando_Apache_no_Debian_6_Squeeze"link-externo")
