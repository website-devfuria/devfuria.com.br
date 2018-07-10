---
title:       O método GET
description: Neste artigo, veremos como funciona o método GET na linguagem PHP
capitulo:    "php-http"
ordem:       1
---

Toda vez que você acessa uma URL na web através de seu navegador você está realizando uma requisição do tipo GET.

Também poderia dizer que você está requisitando um arquivo, página, recurso, com o método GET.

Além do método GET temos o POST, eles são a dupla mais famosa, mas na verdade temos 9 métodos.

Os métodos também são chamados de verbo, acho que esse é nome politicamente mais correto.

![](http-method.PNG)


Imaginando que temos um arquivo chamado `index.php` em algum lugar de seu HD, se montarmos o par "nome=valor" abaixo
poderemos manipular o(s) valor(res) "dentro" do script PHP.

    index.php?nome=valor


O PHP utiliza-se de variáveis chamadas superglobais para lidar com "alguns aspectos". Uma dessas variáveis é um array
que acumula os valores recebidos pelo método GET.

    $_GET

No exemplo anterior devemos acessar da seguinte forma:

```php
<?php
echo $_GET['nome'];

# aqui eu utilizei o `echo`, mas poderia ser qualquer outra função, 
# por exemplo, poderia utilizar o `var_dump()`
```

Percebeu que `$_GET` é um array ? Você pode executar `var_dump($_GET)` para ver seu conteúdo.

E, antes que você me pergunte, podemos utilizar mais de uma variável, basta separar pelo símbolo `&`.

    index.php ? var1 = value1 & var2 = value2 & var3 = value3 & etc...

No exemplo acima eu utilizei espaços só para você visualizar mais facilmente, mas não deve ser feito dessa forma.

Veja abaixo forma correta, ele é conhecida como __query string__.

    index.php?var1=value1&var2=value2&var3=value3


## Estratégias

Agora você está habilitado para utilizar a estratégia que quiser (ou a que conseguirimaginar). Por exemplo, você poderá 
exibir links em sua página com opções para seu código, veja:

```html
<a href="index?aba=produtos">Produtos</a>
<a href="index?aba=negocios">Negocios</a>
```

Os marketereios, normalmente, utilizam o código UTM para rastrear os links que vem de fora de seu site. Eles distribuem
seu link com um código, quando o usuário clicar no link o sistema podera saber de onde veio (originou) o usuário, por 
exemplo:

```html
<!-- Aqui é uma página de um site qualquer, ou à vezes é um email marketing -->
<a href="destino?utm_source=123456789">Site Legal</a>
```

Como eu disse, é a sua criatividade que conta para fazer um bom uso deste recurso. Neste ponto é importante frizar que,
a partir de hoje, fique mais atento para os sites e sistemas que você visita e tente observar como eles fazem uso intensivo
de parâmetros na URL.


## Dicas

Você poderá manipular o array `$_GET` diretamente, não é muito convencional fazer isso, mas também não tem nada
de mais. Veja um exemplo:

```php
<?php
# Qual será o tamanho desse array ?
var_dump(count($_GET));

# Será que eu posso criar chaves/valores à vontade ?
$_GET['foo'] = 123;

# Então também poderei reescrever os valores ?
$_GET['foo'] = $_GET['foo'] + 877;
```


## Duplicando variáveis

Um hábito muito comum é a duplicação de variáveis como a demosntrada a baixo. Conforme o exemplo, você não precisa 
atribuir o valor de `$_GET['foo']` para a variável `$foo`, ao invés disso, utilize diretamente a variável `$foo`.
Caso contrário, você estará criando 2 variáveis sem necessidade. Se o seu sistema não for muito crítico em relação a
uso de memória, então não vejo grandes problemas em criar uma variável extra. Em muito casos, duplicar as variáveis,
ajuda na leitura do código.

```php
<?php
$foo = $_GET['foo'];

# agora temos duas variáveis `$foo` e `$_GET['foo']`
```

Cabe a você decidir se duplica ou não, e por qual razão tomou esta ou aqquela decisão.


## Exercícios

1. Crie um script chamado `index.php`.
2. Experimente `var_dump($_GET)` sem parâmetro algum.
3. Experimente `var_dump($_GET)` com parâmetros.

