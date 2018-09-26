---
title:       Instalando e configurando o PHPMyAdmin no Linux
description: Aprenda como instalar e configurar o PHPMyAdmin no Linux
capitulo:    linux-instalando-db
---

O PhpMyAdmin é um aplicativo responsável por oferecer uma interface amigável de trabalho ao usuário do banco.


### Ubuntu 15.4 (Vivid Vervet)

    apt-get install phpmyadmin

Responda as perguntas do instalador e, ao final, abra o navegador, digite `localhost/phpmyadmin`. A tela de "login" deve
ser exibida, digite novamente o usuário do MySQL (root) e sua senha. Pronto, você está dentro do sistema, agora é possível
manipular o MySQL com um interface amigável.


### CentOS


Talvez seja preciso instalar o EPEL antes:

    wget http://dl.fedoraproject.org/pub/epel/6/i386/epel-release-6-8.noarch.rpm
    rpm -ivh EPEL-release-6-8.noarch.rpm

Instale o software:

    yum install phpmyadmin -y

Reinicie o apache

    /etc/init.d/httpd restart



### Fedora

Instale:

    yum install phpmyadmin

Reinicie a apche:

    systemctl restart httpd.service



### Para acessar sem ter que digitar senha


Edite o arquivo abaixo...

    nano usr/share/phpmyadmin/libraries/config.default.php

...alterando as seguintes variáveis

	$cfg['Servers']['auth-type'] = 'config';
	$cfg['Servers']['user'] = 'nome_do_usuario';
	$cfg['Servers']['password'] = 'Senha_do_usuario';

Para alterar apenas a senha, digite no terminal...

    mysqladmin -u root -p'oldpassword' password newpass