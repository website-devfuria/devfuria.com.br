---
title:       Hello World com Slim Framework
description: Este artigo é um Hello World com o micro framework Slim
capitulo:    "php-slimframework"
ordem:       1
---

O Slim é um micro framework para PHP.

Cabe a você decidir se deve usá-lo ou não. Eu não vou ficar aqui dando uma de garoto propaganda do Slim, até porque não
acho ele maravilhoso, tão pouco acho que ele seja a "solução da lavoura". Ele é uma ferramenta, talvez seja uma boa
ferramenta, mas é só isso.

Eu produzi alguns projetos grandes com o Slim e ele caiu muito bem nos tipos de projetos que eu tive que encarar. Gosto
do Slim, primeiro porque ele pe micro, segundo porque ele é bem simples de usar.

Ele ajuda a criar interfaces REST, veja o [projeto no GitHUb](https://github.com/slimphp/Slim) e a
[documentação oficial](https://www.slimframework.com/).

A __primeira coisa__ é habilitar o servidor para reescrita de URL do servidor web. Se o seu servidor é o Apache, veja este
artigo explicando [como habilitar o mod_rewrite no Apache](/linux/apache-habilitar-mod_rewrite-no-apache-mod/). A segunda
coisa é instalar o Slim...


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

Enquanto atualizo este artigo, a versão mais atual era a 3.8.1, no comando acima você poderá aproveitar parar especificar
a versão do Slim que deseja instalar, veja:

    composer require slim/slim "^3.0"

No terminal do Linux você deve receber uma mensagem parecida com esta...

    Using version ^3.8 for slim/slim
    ./composer.json has been created
    Loading composer repositories with package information
    Updating dependencies (including require-dev)
    Package operations: 6 installs, 0 updates, 0 removals
      - Installing psr/container (1.0.0): Loading from cache
      - Installing container-interop/container-interop (1.2.0): Loading from cache
      - Installing nikic/fast-route (v1.2.0): Downloading (100%)
      - Installing psr/http-message (1.0.1): Loading from cache
      - Installing pimple/pimple (v3.2.2): Loading from cache
      - Installing slim/slim (3.8.1): Downloading (100%)
    Writing lock file
    Generating autoload files

### Hello World

Agora crie o arquivo `/www/foo/index.php` com o seguinte conteúdo.

```php
<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App();

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    echo "Hello, $name!";
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
        .htaccess
        composer.json
        index.php

Para testar basta acessar via navegador `http://localhost/foo/hello/seu-nome`.

## Resolvendo problemas

Caso você recebe o erro `400 Page Not Found`, certifique-se de que tenho acessado a url por completo, veja:

    # Esta dará certo !
    http://localhost/foo/hello/seu-nome

    # As demais darão errado...
    http://localhost/foo/hello/
    http://localhost/foo/hello
    http://localhost/foo/

Caso você receba o erro `500 Internal Server Error` poderá consultar os arquivos de log do Apache.

No Ubuntu, o arquivo encontra-se no seguinte local `var/log/apache2/error.log` você poderá abrí-lo em um editor de texto
qualquer ou ainda visualizar pelo terminal através do utilitário [cat](/linux/utilitario-cat/) dessa forma...

    cat var/log/apache2/error.log

Normalmente aparece o erro `RewriteEngine not allowed here` é por que esquecemos de
[habilitar o mod_rewrite no Apache](/linux/apache-habilitar-mod_rewrite-no-apache-mod/).


## Exercícios

1. Instale o Composer
2. Instale o Slim
3. Faça o Hello World funcionar
4. Crie um projeto no git e suba o seu código.
5. Compartilhe com a gente.


## Projetos Compartilhados

Envie um email para sitedevfuria@gmail.com com o link para o seu projeto e encontre ele na lista abaixo...

- Seja o primeiro a divulgar o seu trabalho
- Seja o segundo a divulgar o seu trabalho
- Seja o terceiro a divulgar o seu trabalho



