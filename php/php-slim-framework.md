---
layout:      grid12-article
title:       Slim framework  um micro framework para PHP
description: Este artigo é um Hello World com o micro framework Slim
---

O Slim é um micro framework para PHP, se você pretende criar uma interface REST ele lhe ajudará muito.

A primeira coisa é habilitar o servidor para reescrita de URL do servidor web. Se o seu servidor é o Apache, veja este
artigo explicando [como habilitar o mod_rewrite no Apache](/linux/apache-habilitar-mod_rewrite-no-apache-mod/).


### Instalando o Slim

Você poderá simplesmente baixar os arquivos e fazer referência em seus scripts ou instalar o framework através do
composer, neste caso, você deverá ter o composer devidamente instalado em sua máquina.

Imaginado que você possui o composer instalado, vamos instalar o Slim através do composer. Crie um pasta qualquer em
seu documentroot, eu estou utilizando o nome `foo`. 

    mkdir /var/www/foo
    cd /var/www/foo

A instalação é feita através do comando abaixo.

    composer require slim/slim

O comando acima pode variar conforme a instalação do composer, por exemplo, se você fez uma instalação local o comando
deve ser...

    php ~/composer.phar require slim/slim

No terminal do Linux você deve receber uma mensagem parecida com esta...

    Using version ^2.6 for slim/slim
    ./composer.json has been created
    Loading composer repositories with package information
    Updating dependencies (including require-dev)
      - Installing slim/slim (2.6.2)
        Loading from cache

    slim/slim suggests installing ext-mcrypt (Required for HTTP cookie encryption)
    Writing lock file
    Generating autoload files



### Hello World

Agora crie o arquivo `/www/foo/index.php` com o seguinte conteúdo.

```php
<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->run();
```

Não se esqueça de criar o arquivo `/www/foo/.htaccess`, ele se encarregará de fazer os redirecionamentos.

    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [QSA,L]

Após a instalação, sua estrutura de arquivos deverá ser semelhante a exibida abaixo.

    foo/
        vendor/
            composer/
            slim/
            autoload.php
        .htaccess
        composer.json
        index.php

Para testar  basta acessar via navegador `http://localhost/foo/hello/fulano`.

Caso você receba o erro `500 Internal Server Error` poderá consultar os arquivos de log do Apache. 

No Ubuntu, o arquivo encontra-se no seguinte local `var/log/apache2/error.log` você poderá abrí-lo em um editor de texto qualquer ou ainda
visualizar pelo terminal através do utilitário [cat](/linux/utilitario-cat/) dessa forma...

    cat var/log/apache2/error.log

Normalmente aparece o erro `RewriteEngine not allowed here` é por que esquecemos de 
[habilitar o mod_rewrite no Apache](/linux/apache-habilitar-mod_rewrite-no-apache-mod/).
