---
layout:      grid12-article
title:       JavaScript - funções
description: Referência prática de funções - JavaScript
---


Uma função é um objeto que tem código executável associado.

Uma função pode ser chamada para executar esse código executável e retornar um valor calculado.

{% highlight javascript %}
function add(x, y) {
    var total = x + y;
    return total;
}
{% endhighlight %}


Exemplo de funções em JavaScript.

{% highlight javascript %}
var x = function(y) {
   return y * y;
};
{% endhighlight %}


{% highlight javascript %}
var math = {
  'factorial': function factorial(n) {
    if (n <= 1)
      return 1;
    return n * factorial(n - 1);
  }
};{% endhighlight %}




Referências
---

- [MDN - JavaScript reference - Standard built-in objects - Function](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Function "link-externo")
- [MDN - JavaScript reference - Statements and declarations - Function](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/function "link-externo")
- [MDN - JavaScript reference - Expressions and operators - Function](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/function "link-externo")
- [MDN - Glossary - Function](https://developer.mozilla.org/en-US/docs/Glossary/Function "link-externo")
