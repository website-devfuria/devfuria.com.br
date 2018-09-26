---
title:       Instalando bcompiler no CentOS (compilador de PHP bytecode)
description: Aprenda como instalar a extensão bcompiler para PHP na CentOS trata-se de um compilador de PHP bytecode
capitulo:    linux-instalando-utils
---

O __bcompiler__ é um módulo experimental em PHP que compila seu código fonte.

Você deve instalar o útlima versão, no momentoe em que escrevo este artigo a versão mais atual é a 1.0.2.
Verifique a última versão no site [pecl.php.net/package/bcompiler](http://pecl.php.net/package/bcompiler)

Os pré requisitos para instalação são __apache__, __php__ e pacotes de dependência.

Como root, digite os comandos:

    wget http://pecl.php.net/get/bcompiler-1.0.2.tgz
    tar -xvf bcompiler-1.0.2.tgz
    phpize
    ./configure
    make
    make install
    make test

Se ocorrer um erro com __phpize__, digite no terminal

    yum install php-devel

Em seguida, entre no __php.ini__

    nano /etc/php.ini

Descomente (se não exister, adicione) a seguinte linha:

    extension=bcompiler.so

Reinicie o apache

        service httpd restart

Para ver se está tudo certo, execute o `phpinfo()` e verifique se as informações do "bcompile" estão lá,
tal como `bcompiler version`, `current bytecode version`, entre outros.


### Exemplo

```php
<?php
#
# Cria um arquivo novo
#
$fh = fopen("foo.phb","w");

#
# Direciona o compilador para o arquivo ainda vazio
#
bcompiler_write_header($fh);

#
# Grava o conteudo da nossa classe no novo arquivo
#
bcompiler_write_file($fh, "SuaClass.php");
bcompiler_write_footer($fh);

#
# Fecha o arquivo compilado
#
fclose($fh);
```


Documentação
---

- [Compilador de PHP bytecode ](http://php.net/manual/pt_BR/intro.bcompiler.php)