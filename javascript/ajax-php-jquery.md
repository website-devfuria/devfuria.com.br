---
layout:      grid12-article
title:       Aprenda a utilizar Ajax com PHP e jQuery
description: "Aprenda neste artigo a utilizar Ajax com PHP e jQuery, <br />também veremos os métodos curtos: <br />jQuery.post(), jQuery.get() e jQuery.getJSON()"
---

Aprenda neste artigo a utilizar Ajax com PHP e jQuery. Pressuponho que você tenha um servidor web instalado, como o 
Apache por exemplo e a linguagem __PHP__ também devidamente instalada e habilitada. Além de ter um conhecimento mínimo
das linguagem __JavaScript__ e __PHP__.

- [jQuery](http://jquery.com/ "link-externo") é uma biblioteca JavaScript criado por John Resig.
- [PHP](/php/) é uma linguagem de programação do lado do servidor criada po Rasmus Lerdof.

Se vc caiu de paraquedas nesta página, não deixe de ver as matérias anteriores relacionados ao final deste artigo.

Nosso objeto é criar um arquivo [HTML](/html-css/) incluindo a biblioteca __Jquery__ e criar um requisição __AJAX__ 
simples através do método `$.ajax()` "apontando" para o arquivo __PHP__ denominado `script.php`. Obteremos como resposta
um texto plano com o valor da variável global `$_POST`.

Mostrar a estrutura de arquivos facilita o entendimento do que vamos fazer, então nossa estrutura será...

    /var/www/
        projeto/
            script.php
            indexhtml

Utilizaremos o HTML abaixo como modelo.

```html
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Ajax com PHP</title>
        <meta charset="utf-8">
    </head>
    <body>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
    //
    // Aqui entram seus códigos em JavaScript
    //
    </script>
    </body>
</html>
```


O método `ajax()` aceita um objeto __JavaScript__ como parâmetros contendo a configuração de sua chamada Ajax.

```javascript
var request = $.ajax({

    //
    // A propriedade `url` é local, arquivo, script, alvo de sua requisição.
    //
    url: "script.php",

    //
    // A propriedade `type` é o verbo HTTP (GET, POST, HEAD, etc...)
    // 
    type: "POST",

    //
    // A propriedade `data` são os dados de sua aplicação.
    //
    data: "campo1=dado1&campo2=dado2&campo3=dado3",

    //
    // A propriedade `dataType` refere-se ao tipo de dado que o servidor deve retornar a requisição.
    //
    dataType: "html"
});

// 
// O método `done()` recebe uma função de callback
// que será executada caso a requisição tenha sucesso.
//
request.done(function(resposta) {
    console.log(resposta)
});

//
// O método `fail()`recebe uma função de callback
// que será executada caso a requisição falhe.
//
request.fail(function(jqXHR, textStatus) {
    console.log("Request failed: " + textStatus);
});

//
// O método `always()` recebe uma função de callback
// que será executada quando a requisição de sucesso estiver completa.
//
request.always(function() {
    console.log("completou");
});
```

Podemos encadear os métodos `done()`, `fail()` e `always()` tornando o código mais sucinto, veja:

```javascript
$.ajax({
    url: "script.php",
    type: "POST",
    data: "campo1=dado1&campo2=dado2&campo3=dado3",
    dataType: "html"

}).done(function(resposta) {
    console.log(resposta);

}).fail(function(jqXHR, textStatus ) {
    console.log("Request failed: " + textStatus);

}).always(function() {
    console.log("completou");
});
```

A requisição aponta para um arquivo em __PHP__ denominado `script.php` que contém o seguinte conteúdo.

```php
<?php
var_dump($_POST);
```

Os dados de resposta, em nosso exemplo, serão:

```html
array (size=3)
  'campo1' => string 'dado1' (length=5)
  'campo2' => string 'dado2' (length=5)
  'campo3' => string 'dado3' (length=5)
```


<hr>
Documentação Oficial: [jQuery.ajax](http://api.jquery.com/jQuery.ajax/ "link-externo")



Métodos mais curtos
---

### jQuery.post

```javascript
$.post("script.php", "campo1=dado1&campo2=dado2&campo3=dado3", function( data ) {
    console.log(data);
});
```
  
Para testar o código acima, utiliza o `script.php` abaixo.

```php
<?php
var_dump($_POST);
```  

<hr>
Documentação Oficial: [jQuery.post](http://api.jquery.com/jQuery.post/ "link-externo")


### jQuery.get

```javascript
$.get("script.php", "campo1=dado1&campo2=dado2&campo3=dado3", function( data ) {
    console.log(data);
});
```    
  
Para testar o código acima, utiliza o `script.php` abaixo.

```php
<?php
var_dump($_GET);
```  

<hr>
Documentação Oficial: [jQuery.post](http://api.jquery.com/jQuery.post/ "link-externo")

    
### jQuery.getJSON

```javascript
$.getJSON("script.php", "campo1=dado1&campo2=dado2&campo3=dado3", function( data ) {
    console.log(data);
});
```    

Para testar o código, acima o `script.php` deve retornar um string [JSON](http://www.json.org/ "link-externo"), algo 
parecido como o exemplo abaixo.

```php
<?php
echo json_encode(array("nome" => "fulano", "idade" => "alguns-anos"));
```

<hr>
Documentação Oficial: [jQuery.getJSON](http://api.jquery.com/jQuery.getJSON/ "link-externo")

    
    
Veja também
---

- [Introdução ao Ajax](/javascript/ajax/)
- [Como era utilizado o Ajax no começo](/javascript/ajax-no-inicio/)
