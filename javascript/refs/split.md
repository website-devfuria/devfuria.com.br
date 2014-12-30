---
layout:      grid93-article
title:       JavaScript - split()
description: Referência prática ao método split() - JavaScript
menu:        javascript-refs
---

O método `split()` divide (splits) um objeto do tipo string (`String object`) em um [array](/javascript/refs/arrays/) 
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


<br>
Fonte: - [MDN - split](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/split "link-externo")
