---
title:       Introdução ao Ajax
description: Este artigo é uma introdução a técnica Ajax e ao objeto XMLHttpdRequest
serie:       Ajax
ordem:       1
---

__Ajax__ é o acrônimo (sem letras maiúsculas) de Asynchronous JavaScript and XML

O termo foi inventado por Jesse James Garrett e apareceu pela primeira vez em seu ensaio de fevereiro de 2005: 
["Ajax: A New Approach to Web Application"](http://www.adaptivepath.com/ideas/ajax-new-approach-web-applications/ "link-externo").
O termo foi inventado pelo Jesse, mas o objeto __XMLHttpRequest__ (o que faz a coisa toda acontecer) foi introduzido no
mercado pela Microsoft em meados do 1999.
 
 "__Ajax__" foi um jargão popular por muitos anos; agora é apenas um termo útil para uma arquitetura de aplicativo Web
 baseada em scripts de requisições HTTP. (Flanagam em seu livro "JavaScript O guia Definitivo", capítulo 18 Scripts HTTP)

Ajax é um conjunto de tecnologia: JavaScript, XML e uma linguagem do lado do servidor que não está contida no nome mas
é igualmente importante.

No começo, os dados circulavam principalmente no formato __XML__, mas com a criação e popularidade do formato 
[JSON](http://www.json.org/ "link-externo") este último passou a ser o formato dominante. É por essa razão que Ajax é
considerado apenas um "termo útil".

A idéia essencial do Ajax é fazer uma requisição ao servidor sem ter que renderizar toda a página HTML, o que 
era custoso para a época devido a conexão com a Internet ser bem lenta. Porém, o mais legal é que você faz isso integrado
a linguagem __JavaScript__. Essa combinação explosiva deu origem a uma nova era de aplicações web.

   

Seu primeiro programa Ajax
---

Crie um arquivo denominado `foo.txt` e insira nela uma única linha com o seguinte conteúdo: `Texto plano!`.

Para executar o código abaixo você poderá utilizar as ferramentas do navegador. Eu estou no Firefox e estou utilizando
o FireBug, se você estiver usando o Chrome, aperte a tecla `F12` para abrir o plugin equivalente.
   
{% highlight javascript linenos %} 
var xhr = new XMLHttpRequest();
xhr.open("GET", "foo.txt", true);
xhr.send();
xhr.responseType = "text";
xhr.onload = function(){
  console.log(this.response);
}
{% endhighlight %}

Na __linha 1__ criamos um objeto __XMLHttpRequest__.

Na __linha 2__ inicializamos a requisição com o método `open()`

O método `open()` recebe três argumentos, sendo os dois primeiros obrigatórios.

O primeiro argumento é tipo (verbo) de pedido [HTTP](https://developer.mozilla.org/en-US/docs/Web/HTTP "link-externo")
 que você deve enviar (GET, POST, DELETE, etc...).

O segundo é o local a partir do qual você deseja solicitar dados. A URL pode ser relativo ou absoluto, mas devido às 
preocupações com segurança entre domínios, o destino deve residir no mesmo domínio.

O terceiro argumento do método `open()` é um valor booleano que especifica se o pedido é feito de forma __assíncrona__
(true) ou síncrona (false). Um pedido síncrono (sincronizado) congelará o navegador até que tenha terminado. Um pedido
__assíncrono__ (dessincronizado) ocorre em segundo plano no aplicativo, permitindo que outros scripts sejam executados.

Na __linha 03__ evocamos o método `send()` para enviar a requisição.

Na __linha 04__ definimos que a resposta do servidor será um texto plano. Não precisamos fazer isso pois esse é o valor
padrão, mas eu quis deixar as coisas explícitas.

Na __linha 05__ definimos uma função para o evento `onload` do objeto __XMLHttpRequest__. Este evento será executado
caso a requisição seja realizada com sucesso. Neste caso, o resultado será `texto plano!\n` e estará acessível através 
da propriedade `responseText` do objeto __XMLHttpRequest__.



Lendo arquivos XML
---

O mesmo exemplo poderá ser utilizado para ler um arquivo __XML__. Crie um arquivo denominado `arquivo.xml` e insira o
seguinte conteúdo.

```xml
<?xml version="1.0" encoding="utf-8"?>
<receita nome="pão" tempo_de_preparo="5 minutos" tempo_de_cozimento="1 hora">
  <titulo>Pão simples</titulo>
  <ingredientes>
    <ingrediente quantidade="3" unidade="xícaras">Farinha</ingrediente>
    <ingrediente quantidade="7" unidade="gramas">Fermento</ingrediente>
    <ingrediente quantidade="1.5" unidade="xícaras" estado="morna">Água</ingrediente>
    <ingrediente quantidade="1" unidade="colheres de chá">Sal</ingrediente>
  </ingredientes>
  <instrucoes>
    <passo>Misture todos os ingredientes, e dissolva bem.</passo>
    <passo>Cubra com um pano e deixe por uma hora em um local morno.</passo>
    <passo>Misture novamente, coloque numa bandeja e asse num forno.</passo>
  </instrucoes>
</receita>
```

O código abaixo fará uma requisição __Ajax__ para ler o conteúdo de um arquivo __XML__. Repare que o valor da propriedade
`responseType` é `document` e não `xml`.

{% highlight javascript linenos %} 
var xhr = new XMLHttpRequest();
xhr.open("GET", "arquivo.xml", true);
xhr.send();
xhr.responseType = "document";
xhr.onload = function(){
  console.log(this.response);
}
{% endhighlight %}



POST
---

Para fazermos uma requisição do tipo __POST__ além de utilizar o verbo `post` como parâmetro da função `open()` também
devemos utilizar a função `setRequestHeader()` para setar o cabeçalho da resposta.

Passamos os dados (campos e valores) como parâmetro para a função `send()`.

```javascript
var xhr = new XMLHttpRequest();
xhr.open("POST", "script.php", true);
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
xhr.send("campo1=dado1&campo2=dado2&campo3=dado3");
xhr.responseType = "text";
xhr.onload = function(){
  console.log(this.response);
}
```

O arquivo `script.php` deve ser como abaixo.

```php
<?php
var_dump($_POST);
```



GET
---

A requisição __GET__ não precisa do método `setRequestHeader()` mas é sempre uma boa pratica utilizá-lo. Para passar os
dados (campos e valores) devemos concatenar a string junto com o segundo parâmetro do método `open()`.

```javascript
var xhr = new XMLHttpRequest();
xhr.open("GET", "script.php?campo1=dado1&campo2=dado2&campo3=dado3", true);
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
xhr.send();
xhr.responseType = "text";
xhr.onload = function(){
  console.log(this.response);
}
```

O arquivo `script.php` deve ser como abaixo.

```php
<?php
var_dump($_GET);
```


- - -
Fontes

- [w3 - XMLHttpRequest Level 1](https://dvcs.w3.org/hg/xhr/raw-file/default/xhr-1/Overview.html "link-externo")
- [whatwg - XMLHttpRequest](https://xhr.spec.whatwg.org/ "link-externo")
- [msdn.microsoft - XMLHTTPRequest (XHR) and AJAX Support](http://msdn.microsoft.com/en-us/library/hh772834%28v=vs.85%29.aspx "link-externo")
- [dev.opera - Introduction to XMLHttpRequest Level 2](https://dev.opera.com/articles/xhr2/ "link-externo")
- [MDN - Using XMLHttpRequest](https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest/Using_XMLHttpRequest "link-externo")
- [MDN - XMLHttpRequest](https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest "link-externo")
- [MDN - AJAX](https://developer.mozilla.org/en-US/docs/AJAX "link-externo")