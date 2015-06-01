---
layout:      grid93-article
title:       JavaScript - getElementsByName()
description: Referência prática da função getElementsByName()
menu:        javascript-dom
---

A atributo HTML `name` se destinava originalmente a atribuir nomes a elementos de formulário e o valor desse atributo
é usado quando dados de formulário são enviados para um servidor. Assim como o atributo `id`, `name` atribui um nome
a um elemento. Ao contrário de `id`, contudo, o valor de um atributo `name` não precisa ser único: vários elementos
podem ter o mesmo nome e isso é comum no caso de [botões de seleção](/html-css/formularios/radio-buttons/) e 
[caixa de seleção](/html-css/formularios/combobox/) em formulários web. Além disso ao contrário de `id`, o atributo 
`name` é válido somente em alguns elementos HTML, incluindo 
[formulários](http://www.devfuria.com.br/html-css/formularios/intro-formularios-web/), 
[elementos de formulário](http://www.devfuria.com.br/html-css/formularios/), tag `iframe` e tag 
[img](http://www.devfuria.com.br/html-css/formularios/intro-formularios-web/).

```javascript
var elementos = document.getElementsByName("nome-dos-elementos");
```


### Exemplo 

Este exemplo ilustra o retorno da função: sempre um [NodeList](/javascript/dom-nodelist/).

```html
<!-- HTML -->
<input type="radio" name="opt-moedas" value="real"/>Real
<input type="radio" name="opt-moedas" value="dolar"/>Dolar
<input type="radio" name="opt-moedas" value="euro"/>Euro
```

```javascript
//
// JavaScript
//
var elementos = document.getElementsByName("opt-moedas");
console.log(elementos);
```

Juntos, HTML e JavaScript, produzem o seguinte resultado:

    NodeList[
        input property value = "on" attribute value = "real",
        input property value = "on" attribute value = "dolar",
        input property value = "on" attribute value = "euro"
    ]

Podemos acessar cada elemento, individualmente, através de seu índice.


```javascript
console.log(elementos[0].value); // real
console.log(elementos[1].value); // dolar
console.log(elementos[2].value); // euro

```