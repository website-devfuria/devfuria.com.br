---
layout:     materia
title:      Javascript - sintaxe
descriptin: Javascript - sintaxe
---

### Strings

Para incluir uma string literalmente em um programa JavaScript, basta colocar os caracteres da string dentro de um par
combinado de aspas simples ou duplas.

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

    "palavra".lenght // 7


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

{% highlight javascript %}
function add(x, y) {
    var total = x + y;
    return total;
}
{% endhighlight %}

### Objetos


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

Instaciamos o objeto.

{% highlight javascript %}
var obj = new Person("You", 36);
{% endhighlight %}

Alteramos os valores das propriedades.

{% highlight javascript %}
obj.name = "Simon";
obj.name; // print 'Simon'
{% endhighlight %}


### Fontes

- [https://developer.mozilla.org/en-US/docs/Web/JavaScript/A_re-introduction_to_JavaScript]("link-externo")


