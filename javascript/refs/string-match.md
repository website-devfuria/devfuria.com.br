---
layout:      grid93-article
title:       JavaScript - string.match()
description: Referência prática da função match() - JavaScript
menu:        javascript-regex
---

Em JavaScript também temos a forma `string.match()`.

- `string` é a variável contendo a sua string e
- `match()` é a função que evocamos para executar a expressão regular.

{% highlight javascript %}
var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

resultado = string.match(pattern);

if (resultado) {
    console.log("casou", resultado);
} else {
    console.log("não casou", resultado);
}
{% endhighlight %}

Quando a expressão casa com uma parte do texto, ou seja, quando encontramos algo na string de pesquisa, a função retorna
um objeto com alguma propriedade.

{% highlight javascript %}
console.log(resultado[0])       // "exemplo"
console.log(resultado['index']) // 19
console.log(resultado['input']) // "Casa com a palavra exemplo."
{% endhighlight %}

Se a expressão não casar, o valor da variável `resultado` será `null`.

Se a expressão estiver sintaticamente errada o script será interrompido.



Veja também
---

- [Expressões Regulares em JavaScript](/regex/javascript-expressoes-regulares/)