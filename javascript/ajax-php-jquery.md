---
layout:      grid12-article
title:       Ajax - Aprenda a utilizar Ajax com PHP e Jquery
description: Aprenda a utilizar Ajax com PHP e JQuery
---

Este artigo ensina como utilizar Ajax com PHP e JQuery. Pressuponho que você tenha um servidor web instalado, como o 
__Apache__ por exemplo e a linguagem __PHP__ também devidamente instalada e habilitada. Além de ter um conhecimento mínimo
das linguagem __JavaScript__ e __PHP__.

- [JQuery](http://jquery.com/ "link-externo") é uma biblioteca __JavaScript__ criado por [John Resig](http://jquery.com/ "link-externo")
- [PHP](/php/) é uma linguagem de programação do lado do servidor [Rasmus](http://lerdorf.com/bio/ "link-externo")

Se vc caiu de paraquedas nesta página, não deixe de ver as matérias anteriores relacionados ao final deste artigo.

Nosso objeto é criar um arquivo [HTML](/html-css/) incluindo a biblioteca __Jquery__ e criar um requisição __AJAX__ 
simples através do método `$.ajax()` "apontando" para o arquivo __PHP__ denominado `script.php`. Obteremos como resposta
um texto plano com o valor da variável global `$_POST`.

Utilizaremos o HTML abaixo como modelo.

{% highlight html %}
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
{% endhighlight %}


O método `ajax()` aceita um objeto __JavaScript__ como parâmtros contendo a configuração de sua chamada Ajax.

A propriedade `url` é local, arquivo, script, alvo de su requisição.

A propriedade `type` é o verbo HTTP (GET, POST, HEAD, etc...)

A propriedade `data` são os dados de sua aplicação.

A propriedade `dataType` refere-se ao tipo de dado que o servidor deve retornar a requisição.

{% highlight javascript %}
var request = $.ajax({

    url: "script.php",
    type: "POST",
    data: "campo1=dado1&campo2=dado2&campo3=dado3",
    dataType: "html"

});
request.done(function(resposta) {

    console.log(resposta)

});
request.fail(function(jqXHR, textStatus) {

    console.log("Request failed: " + textStatus);

});
request.always(function() {

    console.log("completou");

});
{% endhighlight %}

O método `done()` recebe uma função de callback que será executada caso a requisição tenha sucesso.

O método `fail()`recebe uma função de callback que será executada caso a requisição falhe.

O método `always()` recebe uma função de callback que será executada quando a requisição de sucesso estiver completa.

Podemos encadear os métodos `done()`, `fail()` e `always()` tornando o código mais sucinto.

{% highlight javascript %}
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
{% endhighlight %}

A requisição aponta para um arquivo em __PHP__ denominado `script.php` que contém o seguinte conteúdo.

{% highlight php %}
<?php
var_dump($_POST);
{% endhighlight %}

Os dados de resposta, em nosso exemplo, serão:

{% highlight html %}
array (size=3)
  'campo1' => string 'dado1' (length=5)
  'campo2' => string 'dado2' (length=5)
  'campo3' => string 'dado3' (length=5)
{% endhighlight %}


<hr>
Documentação Oficial: [jQuery.ajax](http://api.jquery.com/jQuery.ajax/ "link-externo")



Métodos mais curtos
---

### JQuery.post

{% highlight javascript %}
$.post("script.php", "campo1=dado1&campo2=dado2&campo3=dado3", function( data ) {
    console.log(data);
});
{% endhighlight %}
  
Para testar o código acima, utiliza o `script.php` abaixo.

{% highlight php %}
<?php
var_dump($_POST);
{% endhighlight %}  

<hr>
Documentação Oficial: [jQuery.post](http://api.jquery.com/jQuery.post/ "link-externo")


### JQuery.get

{% highlight javascript %}
$.get("script.php", "campo1=dado1&campo2=dado2&campo3=dado3", function( data ) {
    console.log(data);
});
{% endhighlight %}    
  
Para testar o código acima, utiliza o `script.php` abaixo.

{% highlight php %}
<?php
var_dump($_GET);
{% endhighlight %}  

<hr>
Documentação Oficial: [jQuery.post](http://api.jquery.com/jQuery.post/ "link-externo")

    
### jQuery.getJSON

{% highlight javascript %}
$.getJSON("script.php", "campo1=dado1&campo2=dado2&campo3=dado3", function( data ) {
    console.log(data);
});
{% endhighlight %}    

Para testar o código, acima o `script.php` deve retornar um string [JSON](http://www.json.org/ "link-externo"), algo 
parecido como o exemplo abaixo.

{% highlight php %}
<?php
echo json_encode(array("nome" => "fulano", "idade" => "alguns-anos"));
{% endhighlight %}

<hr>
Documentação Oficial: [jQuery.getJSON](http://api.jquery.com/jQuery.getJSON/ "link-externo")

    
    
Veja também
---

- [Ajax - Introdução](/javascript/ajax/)
- [Ajax - Como era utilizado no começo](/javascript/ajax-no-inicio/)
