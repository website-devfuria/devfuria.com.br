---
title:       Referência prática a propriedade prototype em JavaScript
description: A propriedade prototype é fundamental em JavaScript, dominá-la é abrir as portas para o conceito de 'herança prototipica'
capitulo:    "js-referencia"
ordem:       10
---

A propriedade `prototype` é usada quando uma função atua como construtora. Ela se refere a um objeto que serve
como protótipo para uma classe de objetos inteira. Qualquer objeto criado pela construtora herda todas as 
propriedades do objeto referido pela propriedade `prototype`. (Flanagan, JavaScritpt, O guia definitivo, pág. 764)

Um protótipo é um objeto (o que não é uma surpresa) e toda função que você cria recebe automaticamente uma propriedade
`prototype` que aponta pra um novo objeto em branco. Esse objeto é quase idêntico a um objeto criado a partir de um
[objeto literal](/javascript/objeto-literal/) ou pelo construtor `Object()`, exceto que sua propriedade `constructor`
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

Se, após as modificações citadas acima, você alterar o valor da propriedade do protótipo, os valores da propriedade do
protótipo designados individualmente não refletirão a alteração do protótipo.

```javascript
Coworker.prototype.status = "quase de férias"
console.log(c1) // Coworker { name="João", status="férias"}
console.log(c2) // Coworker { name="Maria", status="quase de férias"}
```



Extendendo tipos primitivos
---

A primeira coisa que precisamos saber sobre extender tipos primitivos da linguagem é que NÂO é uma boa prática e deve
ser evitado. Vamos nos permitir esse deslize apenas para entendermos mais do assunto.

Vamos direto para um exemplo prático. Imagine que queiramos clonar um array, no caso "clonar"  significa que a cópia
será independente, ou melhor, não terá vínculo com o array original.

Para criarmos um clone de um array qualquer podemos fazer...

    var a = []
    var b = a.slice();

Mas e se ao invés de evocarmos `a.slice()`, quiséssemos fazer algo mais direto como por exemplo `a.clone()`. Sabemos
que a função `clone()` não existe e teríamos que criá-la. Espero que você perceba que criar tal função para cada
array é algo inviável. A solução é criarmos a função `clone()` uma vez só no protótipo do tipo primitivo `Array` e ela
estará automaticamente disponível para todos arrays, tanto para os criados antes e após a definição.

```javascript
//
// Alternado o tipo primitivo `Array`
//
Array.prototype.clone = function() {
    return this.slice();
};

var a = [];
var b = a.clone()
```