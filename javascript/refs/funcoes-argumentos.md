---
layout:      grid93-article
title:       JavaScript  argumentos de funções
description: Referência prática de argumento de funções
menu:        javascript-refs
---

Um parâmetro extra que está disponível para funções quando elas são invocadas é a matriz `arguments`.
Ela dá acesso à função a todos os argumentos que foram fornecidos com a invocação, incluindo algum a mais que não foi
atribuído a nenhum parâmetro nomeado. Isso torna possível escrever funções que possuem um número de parâmetros variável.
(Crockford, O melhor do JavaScript, pág 27)

Veja um exemplo:

```javascript
/**
 * Cria um função que soma um monte de coisas.
 */
function sum() {
    var i, sum = 0;
    for (i = 0; i < arguments.length; i += 1) {
        sum += arguments[i];
    }
    return sum;
};

console.log( sum(4, 8, 15, 16, 23, 42) ); // 108
```

Veja outro exemplo:

```javascript
/**
 * Retorna o maior dos argumentos passados
 */
function findMax() {
    var i, max = 0;
    for (i = 0; i < arguments.length; i++) {
        if (arguments[i] > max) {
            max = arguments[i];
        }
    }
    return max;
}
console.log( findMax(4, 8, 15, 16, 23, 42) ); // 42
```



