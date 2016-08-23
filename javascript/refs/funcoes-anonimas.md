---
title:       JavaScript  Funções anônimas
description: Entenda o que são e como funcionam as funções anônimas em JavaScript
---

Em JavaScript podemos escrever funções naturalmente como o exemplo abaixo:

```javascript
function foo() {
    // código
    // código
    // código
    // código
}
```

Porém, essa forma não é a mais usual, o mais comum é atribuir-mos a função a uma variável.

Essa técnica recebe o nome de __função anônima__, repare que a função não possui nome algum, veja código abaixo:

```javascript
var foo = function() {
    // código
    // código
    // código
    // código
}
```

A palavra `foo` é o nome da variável e não o nome da função!

O `return` faz com que algum valor seja retornado e interrompe o funcionamento da função.

```javascript
var foo = function() {
    // código
    // código
    // código
    return "alguma coisa";
}
```

Uma função pode aceitar uma quantidade fixa de parâmetros (dados para serem trabalhos dentro da função) e também 
uma quantidade desconhecida de parâmetros através da matriz [arguments](/javascript/refs/funcoes-argumentos/).

Abaixo conferimos um exemplo de função que soma dois números.

```javascript
var somarDoisNumeros = function(parametro1, parametro2) {
    soma = parametro1 + parametro2;
    return soma;
}

console.log(somarDoisNumeros(5, 3));
// print 8
console.log(somarDoisNumeros(2, 4));
// print 6
```
