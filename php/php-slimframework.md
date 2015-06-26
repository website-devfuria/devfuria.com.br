---
layout:      grid12-article
title:       Slim um micro framework para PHP
description: Este artigo é um Hello World com o micro framework Slim
---

A primeira coisa é habilitar o servidor para reescrita de URL do servidor web. Se o seu servidor e o Apache, veja este
artigo explicando [como habilitar o mod_rewrite no Apache](/linux/apache-habilitar-mod_rewrite-no-apache-mod/).


### Composer

Você deve ter o composer devidamente instalado em sua máquina.

    cd /www/foo
    composer require slim/slim

O comando acima pode variar conforme a instalação do composer, por exemplo, se você fez uma instalaão local o comando
deve ser...

    cd /www/foo
    php ~/composer.phar require slim/slim

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

Basta acessar via navegador `http://localhost/foo/hello/fulano`.