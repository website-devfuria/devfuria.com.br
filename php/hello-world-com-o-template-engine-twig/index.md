---
title:       Hello World com o template engine Twig para PHP
description: Neste artigo além do hello world veremos também como instalar o Tiwg através do composer
capitulo:    "php-twig"
ordem:       2
---

## Instalando o Twig

Você poderá instalar o template engine através do composer, neste caso, você deverá ter o composer devidamente instalado
em sua máquina.

Imaginado que você possui o composer instalado, vamos instalar o Twig através do composer. Crie um pasta qualquer em
seu documentroot, eu estou utilizando o nome `foo`.

    mkdir /var/www/foo
    cd /var/www/foo

A instalação é feita através do comando abaixo.

    composer require twig/twig:~2.0

O comando acima pode variar conforme a instalação do composer, por exemplo, se você fez uma instalação local o comando
deve ser...

Enquanto atualizo este artigo, a versão mais atual era a 2.0, no comando abiaxo você poderá aproveitar parar especificar
a versão do Twig que deseja instalar.

    php ~/composer.phar require twig/twig:~2.0

No terminal do Linux você deve receber uma mensagem parecida com esta...

    ./composer.json has been created
    Loading composer repositories with package information
    Updating dependencies (including require-dev)
      - Installing twig/twig (v1.35.0)
        Downloading: 100%

    Writing lock file
    Generating autoload files



## Hello World com Twig

Na pasta `foo` crie a pasta `templates/` e tamém o arquivo `index.php` com o conteúdo abaixo.

```php
<?php

require "../vendor/autoload.php";

$loader = new Twig_Loader_Filesystem('./templates');

$twig   = new Twig_Environment($loader);

echo $twig->render('index.html', array('name' => 'Fabien'));
```

Deixe eu fazer uma breve explicação de cada linha...

Se você instalou o Twig corretamente então, precisaremos fazer referência a "lib" (library, biblioteca).

    require "../vendor/autoload.php";

O "Loader Filessytem" irá determinar onde estão nossos templates, para tanto será preciso criar a pasta `templates/`,
caso ainda não tenha criado.

    $loader = new Twig_Loader_Filesystem('./templates');

Na sequencia precisaremos recuperar o ambiente (environment) passando o "loader" como parâmetro.

    $twig   = new Twig_Environment($loader);

Com o ambiente "em mãos" poderemos renderizar o template que quizermos, é exatamente o que estamos fazendo nesta linha....

    echo $twig->render('index.html', array('name' => 'Fabien'));

Executamos `$twig->render()`, o primeiro parâmetro é o local/nome do template, o segundo parâmetro é um array de
variáveis que delegamos para o template. Em nosso exemplo, teremos disponível no template a variável `name` com que
contém o nome ``Fabien` (o criador do Twig).

Conseguiu acompanhar?

Certo, então para testar você terá que abrir seu navegador e apontar para o arquivo `index.php`.



## Exercícios

1. Sim claro, instale o Twig e
2. Faça o hello world funcionar
