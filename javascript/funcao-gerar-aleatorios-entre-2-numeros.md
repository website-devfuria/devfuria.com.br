---
layout:     materia
title:      Função para gerar um número randômico entre 2 números quaisquer
---

Função em JavaScript que gera um número aleatório inteiro entre 2 números quaisquer.

{% highlight javascript %}
/**
 * Retorna um número inteiro aleatório entre max e min
 * incluindo max e min.
 *
 * Fonte: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math/random
 */
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
{% endhighlight %}


Exemplos:

{% highlight javascript %}
console.log(  getRandomInt(0, 3)  ); // retornará 0, 1, 2 e 3.
{% endhighlight %}

{% highlight javascript %}
console.log(  getRandomInt(5, 10)  ); // retornará 5, 6, 7, 8, 9 e 10
{% endhighlight %}


<hr>
Fonte: [MDN - Math.random()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math/random "link-externo")


Veja Também
---

- [Como gerar um número randômico entre 2 números quaisquer](/javascript/gerar-numero-randomico-entre-2-numeros-quaisquer/ "Como gerar um número randômico entre 2 números quaisquer")
Para entrender, passo a passo, como desenvolvemos a função.
- [Como gerar números aleatórios em Javascript](/javascript/numeros-aleatorios/ "Como gerar números aleatórios em Javascript")
