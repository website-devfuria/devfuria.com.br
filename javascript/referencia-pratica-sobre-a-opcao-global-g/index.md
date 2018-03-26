---
title:       Referência prática sobre a opção global g (expressões regulares)
description: Você está montando sua expressão regular em JavaScript e pintou a necessidade de ver vários resultados...
capitulo:    js-regex
ordem:       5
---

Como trabalhamos com mais de um resultado?

Considerando o exemplo abaixo, notamos que a ER casa com mais de um resultado.

    assunto: "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo."
    regexp: "/ca.a/"

Como programamos isso? Vejamos o código abaixo.

```javascript
var string = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.",
    pattern = /ca.a/,
    resultado;

// Executa nossa expressão
resultado = string.match(pattern);

if (resultado) {
    console.log("casou", resultado);
} else {
    console.log("não casou", resultado);
}
```


Se a ER casar com a string então a variável `resultado` conterá um array com a parte que casou, mas *apenas a primeira
ocorrência.* Se você precisar das demais ocorrências terá que fazer uma pequena alteração na ER, veja:

    pattern = /ca.a/g,

Tivemos que incluir a opção "g" de "global", leia mais na 
[documentação oficial](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/match?redirectlocale=en-US&redirectslug=JavaScript%2FReference%2FGlobal_Objects%2FString%2Fmatch "link-externo")



Vamos aos resultados em cada função....
---


### match()

Incluí a opção global `g` como descrito acima e percorri o valor da variável `resultado` que agora é um array.


```javascript
var string = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.",
    pattern = /ca.a/g,
    resultado,
    i;

// Executa nossa expressão
resultado = string.match(pattern)

for(i = 0; i < resultado.length; i++){
    console.log(resultado[i]);
}
```


### exec()

Repare apenas que a opção global `g` teve que ser utilizada, sem ela o navegador (Firefox) entra em um loop infinito.

```javascript
var string = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.",
    pattern = /ca.a/g,
    resultado;

// Executa nossa expressão
while(resultado = pattern.exec(string)){
    console.log("casou", resultado);
}
```


###  test()

Diferentemente da função `string.match`, o valor da variável `resultado` será `true` ou `false` e a opção global
`g` não funcionou, sou seja, não descobri uma forma de olhar as demais ocorrência, apenas a primeira.



```javascript
var string = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.",
    pattern = /ca.a/,
    resultado;

// Executa nossa expressão
resultado = pattern.test(string);

if (resultado) {
    console.log("casou", resultado);
} else {
    console.log("não casou", resultado);
}
```
