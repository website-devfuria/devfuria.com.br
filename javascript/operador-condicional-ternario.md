---
title:       Referência prática do operador ternário condicional em JavaScript 
description: Esta estudando JavaScript e tenho dúvidas quanto às diferentes formas de se fazer um if/ else ? Então este artigo é para você...
---

O operador condicional ternário é um atalho para o condicional `if`.

    condition ? expr1 : expr2

- `condition` é uma expressão que é avaliada como true ou false.
- `expr1, expr2` são expressões com valores de qualquer tipo. 

O operador condicional é o único operador ternário de JavaScript.


### Exemplo 1

```javascript
var isMenber = false;
var fee = isMenber ? "$2.00" : "$10.00";
console.log(fee);
// $10.00
```


### Exemplo 2


```javascript
isMenber = false;
"The fee is " + (isMenber ? "$2.00" : "$10.00")
// The fee is $10.00
```


### Exemplo 3

```javascript
resultado = (a > b) ? "a é maior que b" : "b é maior que a";
```

O código acima é equivalente ao de baixo:

```javascript
if (a > b) {
    resultado = "a é maior que b";
} else {
    resultado = "b é maior que a";
}
```



Referências
---

- [MDN - Referência JavaScript - Operador Condicional Ternário](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Operators/Operador_Condicional "link-externo")
