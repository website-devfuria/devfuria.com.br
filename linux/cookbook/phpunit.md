---
layout:      grid12-article
title:       Instalando o PHPUnit no Linux
description: Como instalar o PHPUnit no Linux
---

Esta é a receita oficial do __PHPUnit__.

Instalamos o __PHPUnit__ em qualquer distro através do PHP Archive (PHAR).

    $ wget https://phar.phpunit.de/phpunit.phar
    $ chmod +x phpunit.phar
    $ sudo mv phpunit.phar /usr/local/bin/phpunit
    $ phpunit --version

Antigamente podíamos instalar através do __Pear__, mas esse processo não será
mais suportado. Caso você esteja precisando desinstalar sua versão através do Pear utilize o comando abaixo

    # pear uninstall phpunit/PHPUnit

<hr>
Fonte

- [Getting Started with PHPUnit](https://phpunit.de/getting-started.html "link-externo")
