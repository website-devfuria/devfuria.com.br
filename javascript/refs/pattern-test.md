---
layout:      grid93-article
title:       JavaScript - pattern.test()
description: Referência prática da função test() - JavaScript
menu:        javascript-regex
---

Em JavaScript também temos a forma `pattern.test()`.

- `pattern` é a expressão regular,
- `test()` é a função que evocamos para executar a expressão regular e
- o parâmetro `string` passado na função é a nosso texto de pesquisa (assunto).

```javascript
var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

resultado = pattern.test(string);

if (resultado) {
    console.log("casou", resultado);
} else {
    console.log("não casou", resultado);
}
```

O valor da variável `resultado` será `true` ou `false`.

Se a expressão não casar ela retorna-rá `false`.

Se a expressão estiver sintaticamente errada o script será interrompido.


Veja também
---

- [Expressões Regulares em JavaScript](/regex/javascript-expressoes-regulares/)