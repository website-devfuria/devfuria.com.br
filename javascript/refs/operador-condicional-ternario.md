---
layout:      materia
title:       JavaScript - operador ternário condicional
description: Referência prática do operador ternário condicional - JavaScript
---

O operador condicional ternário é um atalho para o condicional `if`.

    condition ? expr1 : expr2

- `condition` é uma expressão que é avaliada como true ou false.
- `expr1, expr2` são expressões com valores de qualquer tipo. 



### Exemplo 1

{% highlight javascript %}
var isMenber = false;
var fee = isMenber ? "$2.00" : "$10.00";
console.log(fee);
// $10.00
{% endhighlight %}


### Exemplo 2


{% highlight javascript %}
isMenber = false;
"The fee is " + (isMenber ? "$2.00" : "$10.00")
// The fee is $10.00
{% endhighlight %}



Referências
---

- [MDN - Referência JavaScript - Operador Condicional Ternário](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Operators/Operador_Condicional "link-externo")
