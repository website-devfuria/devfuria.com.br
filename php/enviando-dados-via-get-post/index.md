---
title:       Enviado dados via GET e POST
description: Estamos no navegador criando dois tipos de requisições GET e POST
capitulo:    "php-http"
ordem:       4
---


POST
---

Criar uma requisição do tipo POST depende de um __formulário web__, se você entende um pouco de HTML, irá se sentir mais
à vontade.

Dentro da tag `form` temos duas propriedades importantes.

- action
- method

A `action` será o script de destino, quer dizer para onde enviamos os dados e `method` será o método __get__ ou __post__.

Cada campo (input) que inserimos gera um par `nome=valor`.

A propriedade `name` será o nome e a propriedade `value` será o valor.

Apenas uma observação, o que o usuário digitar nas "inputs" será armazenado e sobrescrito na propriedade `value`. Se o
usuário não digitar nada, o valor inicial será considerado. Inclusive se não tiver valor definido para `value` e o
usuário não digitar nada o servidor receberá `""` (__string de comprimento zero__).

Tente localizar o que eu acabei de lhe dizer no formulário abaixo (arquivo `index.html`).

```html
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Nosso singelo formulário </title>
        <meta charset="utf-8">
    </head>
    <body>

        <form action="destino.php" method="post">
            <p>
                Name:  <input type="text" name="username" value="João da Silva" />
            </p>
            <p>
                Email: <input type="text" name="email"  value="joao@dasilva.com" />
            </p>
            <p>
                <input type="submit" value="Submit me!" />
            </p>
        </form>

    </body>
</html>
```

Precisamos criar nosso arquivo de destino `destino.php`e, então, inserir o conteúdo abaixo.

```php
<?php
var_dump($_POST);
?>
```

Abra o arquivo index.html em um navegador qulaquer e clique no botão "Submit me", você deve estar vendo a seguinte informação:

!["Figura ilustrando uma pequena requisição HTTP"](var-dump-requisicao.png "Figura ilustrando uma pequena requisição HTTP")

Como `$_POST` é um [array]() podemos alterar o script PHP para:

    echo $_POST['username']; // print João da Silva
    echo $_POST['email'];    // print joao@dasilva.com



GET (via formulário)
---

Para criar uma requisição GET altere a propriedade `method` para "get" do nosso HTML.

    ...
    <form action="destino.php" method="get">
    ...

E, obviamente, altere o script PHP como mostrado abaixo:

```php
<?php
var_dump($_GET);
?>
```

Temos o mesmo resultado, veja a figura:

!["Figura ilustrando uma pequena requisição HTTP"](var-dump-requisicao.png "Figura ilustrando uma pequena requisição HTTP")

Logo, também podemos fazes isto:

    echo $_GET['username']; // print João da Silva
    echo $_GET['email'];    // print joao@dasilva.com




GET (via URL)
---

A requisição do tipo GET não depende exclusivamente de um formulário, ela pode ser feita através de um __link__ (URL).

Vamos começar com a __URL__ que aponta para seu script.

    /local/onde/esta/seu/script.php

O sinal de interrogação separa o script dos dados.

    script.php ? dados

Os dados nos separamos com o par nome=valor.

    script.php?nome1=valor1

Tendo mais de um par, utilizamos o sinal `&` para separá-los.

    script.php?nome1=valor1&nome2=valor2

Tente memorizar o esquema abaixo.

    script ?  par1  &  par2  &  par3  & etc..


Em nosso exemplo, a URL ficaria assim:

    destino.php?nome=Joao da Silva&email=joado@dasilva.com

Se você acertou o caminho do script verá que o resultado continua idêntico.

!["Figura ilustrando uma pequena requisição HTTP"](var-dump-requisicao.png "Figura ilustrando uma pequena requisição HTTP")


E ainda podemos fazer isto:

    echo $_GET['username']; // print João da Silva
    echo $_GET['email'];    // print joao@dasilva.com


Podemos concluir que o GET pode ser disparado através de um formulário html e também através de uma URL.

Isso significa que podemos criar [âncoras](/html-css/ancoras/) com URL igual a que acabamos de criar.

Altere o HTML como demonstrado abaixo, repare que eu apaguei o formulário e inseri uma âncora com nossa URL.

```html
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Nosso singelo formulário </title>
        <meta charset="utf-8">
    </head>
    <body>

        <p>
            <a href="destino.php?nome=Joao da Silva&email=joado@dasilva.com">Submit me!</a>
        </p>

    </body>
</html>
```

Obs: Para que o HTML continue válido é preciso substituir os sinais `&` por `&amp;`.


## Exercício

1) Experimente cada um dos exemplos que ensinamos em sua própria máquina, tenha a certeza de que entendeu o que está
acontecendo e de como funciona o processo:

- exemplo POST via formulário
- exemplo GET via formulário
- exemplo GET via link (âncora)


2) Agora faça pequenas alterações, acrescente um campo qualquer e veja sua nova versão funcionando.


