---
title:       "MySQL, resolvendo o erro 'Can't connect to local MySQL server through socket"
description: "Aprenda a resolve o erro 'Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (2)"
capitulo:    linux-artigos
ordem: 
---

Este erro pode aparecer em contextos diferentes:


### Ao reiniciar o MySQL

No CentOS, ao reiniciar o serviço do __MySQL__ podemos receber a seguinte mensagem de erro:

    Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (2)


A solução encontrada foi renomear o arquivo existente para um nome qualquer como no exemplo abaixo:

    mv /var/lib/mysql/mysql.sock /var/lib/mysql/mysql.sock.bak

E (novamente) reiniciar o MySQL.

    /etc/init.d/mysqld restart

- - -
Fonte:
- [stackoverflow.com/questions/11657829](http://stackoverflow.com/questions/11657829/error-2002-hy000-cant-connect-to-local-mysql-server-through-socket-var-run/20680577#20680577)


### Ao definir a senha de root

No CentOS, após a instalação do __MySQL__ via __yum__, devemos inicializar o serviço e somente depois definir a senha.

Mas quando instalamos e definimos a senha antes de inicializar o serviço a mensagem de erro é exibida:

    Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (2)

Neste caso, a solução encontrada foi reinstalar o __MySQL__, execute:

    yum reinstall mysql mysql-server

Não perca a ordem da instalação! Inicie o serviço:

    yum reinstall mysql mysql-server

Agora sim você poderá definir a senha de root:

    /usr/bin/mysql_secure_installation

Dica: deixe em branco (apenas precione enter) a primeira pergunta...

    In order to log into MySQL to secure it, we'll need the current
    password for the root user.  If you've just installed MySQL, and
    you haven't set the root password yet, the password will be blank,
    so you should just press enter here.

    Enter current password for root (enter for none): 

.. pois ainda não definimos a senha de root.




