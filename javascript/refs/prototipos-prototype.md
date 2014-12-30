---
layout:      grid93-article
title:       JavaScript - objeto prototype
description: Referência prática do objeto prototype - JavaScript
menu:        javascript-refs
---

Um protótipo é um objeto (o que não é uma surpresa) e toda função que você cria recebe automaticamente uma propriedade
`prototype` que aponta pra um novo objeto em branco. Esse objeto é quase idêntico a um objeto criado a partir de um
[objeto literal](/javascript/refs/objeto-literal/) ou pelo construtor `Object()`, exceto que sua proprieade `constructor`
aponta para a função que você criou, e não para o objeto embutido `Object()`. Você pode adicionar membros a esse objeto
em branco e, mais tarde, ter outros objetos herdando desse objeto e utilizando as propriedades dele como se fossem
criadas por você. (Crockford, O melhor do JavaScript, pág. 21)

Antes ou depois de as instâncias do objeto existirem, você pode acrescentar uma propriedade que pertença ao __protótipo -
um objeto abstrato que representa o molde a partir do qual são feitas as instâncias do objeto__ . Ao designar uma
propriedade e um valor ao protótipo do construtor, todas a instâncias do objeto (incluindo aquelas que já forma criadas)
adquirem essa nova propriedade e esse novo valor. (Danny Goodman, JavaScript & DHTML - Guia Prático, pág. 70)

Definimos a função `Coworker()` e instanciamos os objetos `c1` e `c2`.

```javascript
function Coworker(name) {
  this.name = name;
}

var c1 = new Coworker("João");
var c2 = new Coworker("Maria");
```

Ao adicionar a propriedade `status` ao objeto `prototype` ambas as instâncias são atualizadas.

```javascript
Coworker.prototype.status = "trabalhando"

console.log(c1) // Coworker { name="João", status="trabalhando"}
console.log(c2) // Coworker { name="Maria", status="trabalhando"}
```

A partir desse ponto, a atualização da propriedade de uma das instâncias não afetará a outra. 

```javascript
c1.status = "férias";
console.log(c1) // Coworker { name="João", status="férias"}
console.log(c2) // Coworker { name="Maria", status="trabalhando"}
```

Se, após as modificaões citadas acima, você alterar o valor da propriedade do protótipo, os valores da propriedade do
protótipo designados individualmente não refletirão a alteração do protótipo.

```javascript
Coworker.prototype.status = "quase de férias"
console.log(c1) // Coworker { name="João", status="férias"}
console.log(c2) // Coworker { name="Maria", status="quase de férias"}
```