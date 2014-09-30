---
layout:     grid12-article
title:      JavaScript - O básico da sintaxe
description: Um guia rápido e básico da linguagem JavaScript.
---


### Variáveis

As variáveis são declaradas com a palavra chave `var`, como segue:

{% highlight javascript %}
var i;
var sum;
{% endhighlight %}

Também é possível declarar varias variáveis com a mesma palavra chave `var`:

{% highlight javascript %}
var i, sum;
{% endhighlight %}

E pode-se combinar a declaração da variável com sua inicialização:

{% highlight javascript %}
var i = 0, j = 0, k = 0;
var nome = "Fulano";
{% endhighlight %}

Antes de usar uma variável em um programa JavaScript, você deve declará-la. 



### Tipos

Os tipos em JavaScript podem ser divididos em duas categorias:

- tipos primitivos
- tipos de objeto

Os tipo primitivos incluem números, strings e valores booleanos.

Os valores especiais `null` e `undefined` são valores primitivos mas não são números, nem string e nem booleanos.

Qualquer valor em JavaScript que não seja número, string, booleano, null ou undefined é um objeto.

O [typeof](../refs/typeof/) é um operador unário colocado antes de seu operando, o qual pode ser de qualquer tipo. Seu valor é uma string 
que especifica o tipo do operando.

{% highlight javascript %}
typeof "foo"; // 'string'
typeof 123;   // 'number'
{% endhighlight %}



### Números

Ao contrário de muitas linguagens, JavaScript não faz distinção entre valores inteiros e valores em ponto flutuante.
Todos os números em JavaScript são representados como valores em ponto flutuante.

Literais inteiros:

    0
    1
    100

Literais em ponto flutuante:

    3.14
    100.09
    0.33333



### Strings

Para incluir uma string literal em um programa JavaScript, basta colocar os caracteres da string dentro de um par combinado
de aspas simples ou duplas.

{% highlight javascript %}
"" string de cumprimento zero
'testing'
"other testing"
{% endhighlight %}

Para concatenar strings utilizamos o operador `+`.

{% highlight javascript %}
var msg = "Hello " + "word"; // "Hello word"
msg = "Welcome to my blog, " + name;
{% endhighlight %}

A propriedade `length` determina o tamanho da string.

{% highlight javascript %}
"palavra".length // 7
{% endhighlight %}



### Booleanos

Os valores booleanos são representados por `true` e `false`.



### null e undefined

A palavra chave `null` indica a ausência de um valor.

Mas também há um segundo valor que indica ausência de valor: `undefined`.

O valor indefinido representa uma ausência mais profunda, é o valor de variáveis que não foram inicializadas.



### Conversão

A linguagem é muito flexível quanto aos tipos de valores que exige.

As variáveis em JavaScript são __não tipadas__. Você pode atribuir um valor de qualquer tipo a uma variável e, posteriormente,
atribuir um valor de tipo diferente para a mesma variável.

JavaScript converte valores de um tipo para outro de forma livre.

Se um programa espera uma string, por exemplo, e você fornece um número, ele converte o número em string automaticamente.

Se você usa um valor não booleano onde é esperado um booleano, JavaScript converte adequadamente.


### Condicional - if / else

{% highlight javascript %}
if (n == 1) {
    // executa este bloco if
} else if () {
    // executa este bloco else if
} else {
    // executa este bloco else
}
{% endhighlight %}


É possível obter resultados semelhantes usando o [operador condicional ternário](../refs/operador-condicional-ternario/) `condition ? expr1 : expr2`.

{% highlight javascript %}
resultado = (a > b) ? "a é maior que b" : "b é maior que a";
{% endhighlight %}

O código acima é equivalente ao de baixo:

{% highlight javascript %}
if (a > b) {
    resultado = "a é maior que b";
} else {
    resultado = "b é maior que a";
}
{% endhighlight %}



### Condicional - switch

{% highlight javascript %}
switch(action) {
    case 'draw':
        drawit();
        break;
    case 'eat':
        eatit();
        break;
    default:
        donothing();
}
{% endhighlight %}

### Laço for

{% highlight javascript %}
for (var i = 0; i < 5; i++) {
    // Will execute 5 times
}
{% endhighlight %}



### Arrays

Em JavaScript, [arrays](../refs/arrays/) são um tipo especial de objeto que representam um conjunto ordenado de valores
numerados.

{% highlight javascript %}
var a = new Array();
a[0] = "dog";
a[1] = "cat";
a[2] = "hen";
a.length // 3
{% endhighlight %}

Uma forma mais conveniente de utilização de um __array__, na verdade a mais usada:

{% highlight javascript %}
var a = ["dog", "cat", "hen"];
a.length // 3
{% endhighlight %}



### Funções

Uma [função](../refs/funcoes/) é um objeto que tem código executável associado. Uma função pode ser chamada para executar esse código
executável e retornar um valor calculado.

{% highlight javascript %}
function add(x, y) {
    var total = x + y;
    return total;
}
{% endhighlight %}



### Objetos

Um objeto em JavaScript é um conjunto não ordenado de valores nomeados.

Para criar um objeto vazio:

{% highlight javascript %}var obj = {};{% endhighlight %}

Podemos criar um objeto com propriedades e métodos: 

{% highlight javascript %}
var obj = {
    name: "Carrot",
    "for": "Max",
    details: {
        color: "orange",
        size: 12
    }
}
{% endhighlight %}

E acessar as propriedades dessa forma:

{% highlight javascript %}
obj.details.color      // orange
obj["details"]["size"] // 12
{% endhighlight %}

Outro exemplo.

Funções também se comportam como objetos.

{% highlight javascript %}
function Person(name, age) {
    this.name = name;
    this.age = age;
}
{% endhighlight %}

Instanciamos o objeto.

{% highlight javascript %}
var obj = new Person("You", 36);
{% endhighlight %}

Alteramos os valores das propriedades.

{% highlight javascript %}
obj.name = "Simon";
obj.name; // print 'Simon'
{% endhighlight %}



### Fontes

- [https://developer.mozilla.org/en-US/docs/Web/JavaScript/A_re-introduction_to_JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript/A_re-introduction_to_JavaScript "link-externo")


