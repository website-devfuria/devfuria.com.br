---
title:       JavaScript  pattern.exec()
description: Referência prática da função exec()
serie:       JavaScript e Expressão Regular
ordem:       2
---

Em JavaScript também temos a forma `pattern.exec()`.

- `pattern` é expressão regular, 
- `exec()` é a função que evocamos para executar a expressão regular e
- o parâmetro `string` passado na função é a nosso texto de pesquisa (assunto).

```javascript
var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

resultado = string.match(pattern);

if (resultado) {
    console.log("casou", resultado);
} else {
    console.log("não casou", resultado);
}
```

Se a expressão regular casar com a string então a variável `resultado` conterá um array com a parte que casou, mas 
apenas a primeira ocorrência.

Se olharmos mais atentamente, poderemos observar que a função `exec()` não apenas retorna um array como também um objeto
(arrays são objetos em Javascript). O valor da variável `resultado` é:

```javascript
console.log(resultado[0])       // "exemplo"
console.log(resultado['index']) // 19
console.log(resultado['input']) // "Casa com a palavra exemplo."
```

Se a expressão não casar, o valor da variável `resultado` será `null`.

Se a expressão estiver sintaticamente errada o script será interrompido.
