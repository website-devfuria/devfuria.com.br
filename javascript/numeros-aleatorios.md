---
layout:     materia
title:      Como gerar números aleatórios em Javascript
---

A função `random()` do objeto `Math` retorna um número pseudo-aleatório.
{% highlight javascript %}
    Math.random();
{% endhighlight %}


> A função `Math.random()` retorna um ponto flutuante, número pseudo-aleatório no intervalo [0, 1), isto é, de 0 (inclusive)
> até 1, mas não incluindo 1 (exclusive) e que você pode, em seguida, dimensionar para o intervalo desejado.
>
> Fonte: [Mozilla Developer Network / Math.random()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math/random "link-externo") 

Em outras palavras, a função retornará um número entre 0 e 1 (podendo incluir o 0 mas não o 1), veja os resultados:

    0.5824683890332182
    0.15599339785628574
    0.19135110741912686
    0.4996250046384343
    0.0008728340690463687


Para gerar números aleatórios na casa do inteiros, devemos multiplicar o método por um inteiro qualquer:
{% highlight javascript %}
    Math.random() * 10
{% endhighlight %}


Agora devemos utilizar a função `Math.floor()` para retirar a parte flutuante (números decimais).

{% highlight javascript %}
    Math.floor(Math.random() * 10)
{% endhighlight %}



O código acima irá gerar números aleatórios no seguinte "range" 0, 1, 2, 3, 4, 5, 6, 7, 8, e 9.



### Como gerar um número randômico até um valor máximo qualquer!


Se nossa preocupação fosse apenas um teto máximo para o número aleatório, bastaria somar uma unidade ao valor desejado.

O código abaixo gera números aleatórios entre 1 e 10.

{% highlight javascript %}
    Math.floor(Math.random() * 10 + 1)
{% endhighlight %}



Não pense que estamos somando 10 + 1 e multiplicando por `Math.random()`. Na verdade, multiplicamos 10 por `Math.random()`
e, somente depois, somamos uma unidade.

Podemos transformar nosso código em uma função onde recebemos como parâmetro o valor máximo aleatório.

{% highlight javascript %}
function getRandom(max) {
    return Math.floor(Math.random() * max + 1)
}
{% endhighlight %}



Veja outras receitas
----

Como gerar um número randômico booleano (entre 0 e 1):

{% highlight javascript %}
    Math.floor(Math.random() * 2);
{% endhighlight %}




Como gerar um número randômico tipo bytes ou octet (entre 0 e 256):

{% highlight javascript %}
    Math.floor(Math.random() * 256);
{% endhighlight %}






Como gerar um número randômico no "range" dos inteiros positivos (entre 0 e 65536):

{% highlight javascript %}
    Math.floor(Math.random() * 65536);
{% endhighlight %}




Como gerar um número randômico no "range" dos inteiros incluindo os negativos (entre -32768 e 65536):

{% highlight javascript %}
    Math.floor(Math.random() * 65536) - 32768;
{% endhighlight %}




Como gerar um número randômico entre 2 números quaisquer
---

Como exemplo, vamos imaginar que queiramos gerar números aleatórios entre 3 e 5 (range 3, 4 e 5).

Antes que você fique ansioso(a), eis aqui nossa função:

{% highlight javascript %}
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
{% endhighlight %}


Se quiser entender como chegamos nela, leia o texto...

Para gerarmos números aleatórios inteiros, devemos utilizar a função `Math.floor` que arredondar para baixo o ponto flutuante.

{% highlight javascript %}
    Math.floor(Math.random());
{% endhighlight %}


O código acima gera sempre o valor 0, então para obter números aleatórios até o limite máximo de 5, por exemplo, devemos
multiplicar pelo número desejado (no caso 5).

{% highlight javascript %}
    Math.floor(Math.random() * 5);
{% endhighlight %}


O código acima irá gerar 0, 1, 2, 3 e 4

Para incluir o número 5 (nosso limite maximo) nos resultados precisamos somar com 1.

{% highlight javascript %}
    Math.floor(Math.random() * (5 + 1));
{% endhighlight %}


O código acima irá gerar 0, 1, 2, 3, 4 e 5

Agora podemos estabelecer um limite mínimo, por exemplo, 3.

Então precisaremos somar 3 no resultado final (cuidado! eu disse somar no resultado final).

{% highlight javascript %}
    Math.floor(Math.random() * (5 + 1) + 3);
{% endhighlight %}


O código acima irá gerar 3, 4, 5, 6, 7 e 8

Conseguimos um limite mínimo (3), mas estoramos o limite máximo (5). Podemos resolver isso subtraindo o valor mínimo (3)
do valor máximo (5).

{% highlight javascript %}
    Math.floor(Math.random() * (5 - 3 + 1) + 3);
{% endhighlight %}


O código acima irá gerar 3, 4 e 5

Mas queremos transformar isso em uma função reutilizá-vel, então podemos substituir o valor 5 pela variável `max` e o 
valor 3 pela variável `min`.

{% highlight javascript %}
    Math.floor(Math.random() * (max - min + 1) + min);
{% endhighlight %}


Agora é só criar a função...

{% highlight javascript %}
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
{% endhighlight %}


