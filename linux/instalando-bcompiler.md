---
layout:      materia
title:       Instalando bcompiler no CentOS
description: Aprenda como instalar o bcomipler no CentOS
---


Verifique a última versão no site: http://pecl.php.net/package/bcompiler

Pré requisitos: apache, php e pacotes de dependência.

Como root, digite os comandos:
    
    # wget http://pecl.php.net/get/bcompiler-1.0.2.tgz
    # tar -xvf bcompiler-1.0.2.tgz
    # phpize
    # ./configure
    # make
    # make install
    # make test

Se ocorrer um erro com __phpize__, digite no terminal

    # yum install php-devel

Em seguida, entre no __php.ini__

    nano /etc/php.ini

Descomente (se não exister, adicione) a seguinte linha:

    extension=bcompiler.so

Reinicie o apache

        service httpd restart

Para ver se está tudo certo, execute o _phpinfo()_ e verifique se as informações do __bcompile__ estão lá, 
tal como "bcompiler version", "current bytecode version", entre outros.

        

