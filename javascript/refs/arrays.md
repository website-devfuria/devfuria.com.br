---
layout:      materia
title:       JavaScript - arrays
description: Referência prática de arrays - JavaScript
---

Em JavaScript, arrays são um tipo especial de objeto que representam um conjunto ordenado de valores numerados.

{% highlight javascript %}
var a = new Array();
a[0] = "dog";
a[1] = "cat";
a[2] = "hen";
a.length // 3
{% endhighlight %}

Uma forma mais conveniente de utilização de um array, na verdade a mais usada:

{% highlight javascript %}
var a = ["dog", "cat", "hen"];
a.length // 3
{% endhighlight %}


Eles são indexados a partir do zero.

O primeiro elemento de um array está na posição 0, e o último elemento está na posição equivalente ao valor da propriedade
`length` menos 1.

{% highlight javascript %}
var arr = ["esse é o primeiro elemento", "esse é o segundo elemento"];
console.log(arr[0]);              // "esse é o primeiro elemento"
console.log(arr[1]);              // "esse é o segundo elemento"
console.log(arr[arr.length - 1]); // "esse é o segundo elemento
{% endhighlight %}



Referências
---

[MDN - Referência JavaScript - Objetos Globais - arrays](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/Array "link-externo")