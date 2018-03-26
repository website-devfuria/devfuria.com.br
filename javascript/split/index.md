---
title:       Referência prática ao método split() em JavaScript
description: O método split() divide um objeto do tipo string em um array de strings separados pelo 'separador especificado' e obedece a um limite.
capitulo:    "js-referencia"
ordem:       4
---

O método `split()` divide (splits) um objeto do tipo string (`String object`) em um [array](/javascript/arrays/) 
de strings separados pelo "separador especificado" (parâmetro separator) e obedece a um limite (parâmetro limit).

Sintaxe:

    str.split(separator, limit)

Exemplo:

```javascript
var str = "Isto é uma cadeia de caracteres"
var arr = str.split(" ")

console.log(arr)
// [ 'Isto',
//   'é',
//   'uma',
//   'cadeia',
//   'de',
//   'caracteres' ]
```

### Percorrendo com for in

```javascript
var str = "primeiro, segundo, terceiro"
var arr = str.split(", ")
for (var i in arr){
    console.log(arr[i])
}
// primeiro
// segundo
// terceiro
```

### Acessando pela chave do array

```javascript
var data_qualquer = '24-02-2009' 
var arr_data = data_qualquer.split('-')

console.log(arr_data[0]) // 24
console.log(arr_data[1]) // 02
console.log(arr_data[2]) // 2009
```


### Impondo um limite

```javascript
var str = "Apples are round, and apples are juicy.";
var splitted = str.split(" ", 3);
console.log(splitted) // [ 'Apples', 'are', 'round,' ]
```


### Método split com expressões regulares

O separador também pode ser uma expressão regular.

```javascript
var names = 'Harry Trump ;Fred Barney; Helen Rigby ; Bill Abel ;Chris Hand ';
names.split(/\s*;\s*/)
// [ 'Harry Trump',
//   'Fred Barney',
//   'Helen Rigby',
//   'Bill Abel',
//   'Chris Hand ' ]
```

Veja a nossa seção para aprender sobre [expressões regulares](/regex/).


 
Fonte: - [MDN - split](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/split "link-externo")
