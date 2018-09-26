---
title:       Instalando o PHPUnit no Linux
description: Como instalar o PHPUnit no Linux
capitulo:    linux-instalando-php
---

Esta é a receita oficial do __PHPUnit__.

Instalamos o __PHPUnit__ em qualquer distro através do PHP Archive (PHAR).

    #
    baixe a  ferramenta
    #
    wget https://phar.phpunit.de/phpunit.phar

    #
    dê permissão de execução
    #
    chmod +x phpunit.phar

    #
    mova o arquivo (precisa ser root...
    #
    mv phpunit.phar /usr/local/bin/phpunit

    #... ou usar o sudo)
    sudo mv phpunit.phar /usr/local/bin/phpunit

    #
    teste
    #
    phpunit --version

Antigamente podíamos instalar através do __Pear__, mas esse processo não será mais suportado.

Caso você esteja precisando desinstalar sua versão através do Pear utilize o comando abaixo

    pear uninstall phpunit/PHPUnit

- - -
Fonte

- [Getting Started with PHPUnit](https://phpunit.de/getting-started.html)
