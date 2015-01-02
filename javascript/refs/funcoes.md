---
layout:      grid93-article
title:       JavaScript - funções
description: Referência prática de funções - JavaScript
menu:        javascript-refs
---

Uma função é um objeto que tem código executável associado.

Uma função pode ser chamada para executar esse código executável e retornar um valor calculado.

Exemplos:

```javascript

// Soma dois números
function add(x, y) {
    var total = x + y;
    return total;
}

// O mesmo exemplo porém, simplificado:
function add(x, y) {
    return x + y;
}
```



### Protótipo de função

    function name([param,[, param,[..., param]]]) {
       [statements]
    }

- __name__: o nome da função
- __param__: o nome do(s) argumento(s) passado(s) para a função.
- __statements__: as declarações que compreende o corpo da função


As funções em JavaScript são parametrizadas: um definição de função pode incluir uma lista de identificadores, 
conhecidos como parâmetros, que funcionam como varáveis locais para o corpo da função. Frequentemente, as funções 
utilizam seus  valores de argumentos para calcular um valor de retorno, que se torna o valor da expressão da chamada de
 função. Além dos argumentos, cada chamada tem outro valor - o contexto da chamada -, que é o valor da palavra chave `this`. 
(Flanagan, JavaScript O guia definitivo, pág 150)

Além dos parâmetros declarados, toda função recebe dois adicionais: __this__ e [arguments](/javascript/refs/funcoes-argumentos/). 
O parâmetro `this` é muito importante na programação orientada a objeto, seu valor é determinado pelo padrão de invocação.

Há quatro padrões de invocação em JavaScript:

1. método
2. função
3. construtor
4. aplicação

O operador de invocação é um para de parênteses `()` que é posto em seguida de qualquer expressão que produza um valor
que seja uma função. Os parênteses podem conter zero ou mais expressões, separadas por vírgula. Cada uma delas produz
um valor de argumento. Cada um desses valores será atribuído aos nomes de parâmetro da função. Não há erro em tempo de
execução quando o número de argumentos e de parâmetros nãO coincidem. Se os valores informados excederem os argumentos,
os valores excedentes serão ignorados. Se for o inverso, ´undefined´ será atribuído aos valores faltantes. Não há
checagem de tipo em valores de argumento: qualquer tipo de valor pode ser passado a qualquer parâmetro.
(Crockford, O melhor do JavaScript, pág 24)


Veja um exemplo:

```javascript
// Função que soma um monte de coisas.
var sum = function (  ) {
    var i, sum = 0;
    for (i = 0; i < arguments.length; i += 1) {
        sum += arguments[i];
    }
    return sum;
};

console.log(sum(4, 8, 15, 16, 23, 42)); // 108
```


<hr>
Fontes

- [MDN - JavaScript reference - Standard built-in objects - Function](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Function "link-externo")
- [MDN - JavaScript reference - Statements and declarations - Function](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/function "link-externo")
- [MDN - JavaScript reference - Expressions and operators - Function](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/function "link-externo")
- [MDN - Glossary - Function](https://developer.mozilla.org/en-US/docs/Glossary/Function "link-externo")


Veja também
---

- [Funções Anônimas](/javascript/refs/funcoes-anonimas/)