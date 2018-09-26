---
title:       Instalando e configurando o Apache no Linux
description: Aprenda como instalar o Apache  no Linux (Ubuntu, Fedora e CentOS)
capitulo:    linux-instalando-apache
---

O __Apache__, de longe, é o servidor web mais popular do mundo.

Na família __Red Hat__ (Fedora, CentoOS) normalmente utilizamos o __yum__ para instalação. O Apache é referenciado por `httpd`.

Na família __Debian__ (Ubuntu) normalmente utilizamos o __apt-get__. O Apache é referenciado por `apache2`.

Para o pessoal do windows, siga este tutorial [Instalando o servidor Apache no Windows](http://www.superdownloads.com.br/materias/instalando-servidor-apache-no-windows-linux.html)

<!--
Lá na frente, quando você estiver pronto para publicar o seu site ou o seu sistema, você precisará de
um __Servidor VPS__, trata-se de um servidor virtual privado. VPS é a sigla de "Virtual Private Server", em português,
Servidor Virtual Privado. Veja uma lista de [servidores VPS](https://www.melhorhospedagemdesites.com/servidor-vps/) para você escolher.
-->


CentOS
---

Instale o __Apache__ via __yum__:

    yum install httpd -y

Inicie o serviço.

    /etc/init.d/httpd start


Configure para iniciar junto com o sistema operacional.

    chkconfig httpd on

Para testar, abra o navegador e acesse `http://localhost`.

Uma página intitulada __"Apache HTTP Server Test Page powered by CentOS"__ será exibida.




Fedora
---

Instale o __Apache__ via __yum__:

    yum install httpd


Inicie o serviço.

    systemctl start httpd.service

Repare que o Fedora utiliza esse tal de __systemctl__.

Coloque o __Apache__ para iniciar junto com o sistema operacional:

    chkconfig --levels 235 httpd on

Para testar, abra o navegador e acesse `http://localhost`.

Uma página intitulada __"Fedora Test Page"__ será exibida.




Ubuntu
---

Atualize o sistema.

    apt-get update
    apt-get upgrade

Instale o __Apache__.

    apt-get install apache2

Para testar, abra o navegador e acesse `http://localhost`.

A mensagem __"It works"__ deve aparecer.




Como reiniciar o Apache
---

No Ubuntu/Debian podemos utilizar o comando abaixo.

    /etc/apache2/conf.d/apache2 restart

No CentOS/HedHat utilizamos o seguinte comando:

    /etc/init.d/httpd restart

Leia o artigo [Como reiniciar o servidor Apache](/linux/reiniciar-servidor-apache/) para maiores informações.




Lendo logs de erro no terminal
---

Você pode, caso precise, ler os logs de erro ao trabalhar com o Apache.

Família HedHat:

    tail /var/log/httpd/error_log

Família Debian:

    tail /var/log/apache2/error.log