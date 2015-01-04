---
layout:      grid12-article
title:       DOM - Document Object Model
description: O que você precisa saber sobre o DOM (Document Object Model)
---

Isto ainda é um rascunho...


Quando um documento HTML é baixado no navegador, esse navegador precisa transformar em uma página Web o que é basicamente
uma longa string de caracteres. Para tanto, o navegador decide quais partes são parágrafos, quais são cabeçalhos, quais
são texto e assim por diante. Para evitar que os pobres programadores de JavaScript tenham de fazer exatamente o mesmo
trabalho, o navegador armazena sua interpretação do código HTML como um estrutura de objetos, chamada
__Document Object Model__ ou __DOM__. Como resultado da maneira pela qual o código HTML é escrito - como uma hierarquia
de elementos aninhados, marcados com tags de início e fim - o __DOM__ cria um objeto diferente para cada elemento, mas
vincula cada objeto de elemento ao seu elemento circundante (ou elemento pai). Isso cria uma relação pai-filho 
(parent-children) explícita entre os elementos e torna mais imediata a visualização do __DOM__ como uma estrutura em árvore.

__Document Object Model__ ou __DOM__, é a API fundamental para representar e manipular o conteúdo de documentos
__HTML__ e __XML__. A API não é especialmente complicada, mas existem vários detalhes de arquitetura  que precisam ser
 entendidos.

Trabalhar com a árvore __DOM__ de uma página é uma das tarefas mais comuns do JavaScript no lado do cliente. Isso também
é uma das principais causas de dores de cabeça ( e dá ao JavaScript uma má reputação), porque os métodos __DOM__ são
implementados de forma inconsistente nos navegadores. É por isso que usar uma [boa biblioteca JavaScript](/javascript/bibliotecas/),
que abstraia as diferenças dos navegadores, pode acelerar significativamente o desenvolvimento. Considere ao menos
aprender 2 ou 3 bibliotecas JavaScript.

O acesso ao __DOM__ é caro; ele é o maior gargalo no que diz respeito a desempenho no JavaScript. É por isso qeu o __DOM__
costuma ser implementado separadamente do mecanismo JavaScript. Do ponto de vista de um programador, faz sentido usar essa
abordagem, porque uma aplicação JavaScript pode nem precisar do __DOM__. O ponto principal é que é o acesso ao __DOM__
deveria ser reduzido ao mínimo, leia o artigo [Reduzindo o acesso ao DOM]() para obter mais informações.





Métodos diretos para acessar o documento
---

O __DOM__ define várias maneiras de selecionar elemento, você poderá consultar um documento através de uma das abordagens
abaixo:


### Selecionando elementos pela identificação

Qualquer elemento HTML pode ter um atributo `id`. O valor desse atributo deve ser único dentro do documento - dois
elementos no mesmo documento não podem ter a mesma identificação. Você pode selecionar um elemento com base nessa
identificação exclusiva com o método `getElementById()` do objeto __document__.

```javascript
var elemento = document.getElementById("identificacao");
```

Leia mais sobre a função [getElementById()](/javascript/refs/getelementbyid/)


### Selecionando elementos pelo nome

A atributo HTML `name` se destinava originalmente a atribuir nomes a elementos de formulário e o valor desse atributo
é usado quando dados de formulário são enviados para um servidor. Assim como o atributo `id`, `name` atribui um nome
a um elemento. Ao contrário de `id`, contudo, o valor de um atributo `name` não precisa ser único: vários elementos
podem ter o mesmo nome e isso é comum no caso de [botões de seleção](/html-css/formularios/radio-buttons/) e 
[caixa de seleção](/html-css/formularios/combobox/) em formulários web. Além disso ao contrário de `id`, o atributo 
`name` é válido somento em alguns elementos HTML, incluindo 
[formulários](http://www.devfuria.com.br/html-css/formularios/intro-formularios-web/), 
[elementos de formulário](http://www.devfuria.com.br/html-css/formularios/), tag `iframe` e tag 
[img](http://www.devfuria.com.br/html-css/formularios/intro-formularios-web/).


```javascript
var elementos = document.getElementByName("nome-dos-elementos");
```

Leia mais sobre a função [getElementByName()](/javascript/refs/getelementbyname/)


### Selecionando elementos pela tag

Para obter um objeto semelhante a um array somente leitura, contendo os objetos __Element__ de todos os elementos `span`
em um documento, por exemplo, você poderia escrever:

```javascript
var spans = document.getElementByTagName("span");
```

Leia mais sobre a função [getElementByTagName()](/javascript/refs/getelementbytagname/)


### Selecionando elementos pela classe CSS

A atributo `class` de uma HTML é uma lista separada de zero ou mais identificadores por espaços. Ele descreve uma maneira
de definir conjuntos de elementos relacionados do documento: todos os elementos que têm o mesmo identificador em seu
atributo `class` fazem parte do mesmo conjunto.

A [HTML 5](/html-css/) define um método `getElementByClassName()` que nos permite selecionar conjuntos de elementos de
documento com base nos identificadores que estão em seu atributo `class`.

```javascript
var elementos = document.getElementByClassName("nome-da-classe");
```

Leia mais sobre a função [getElementByClassName()](/javascript/refs/getelementbyclassname/)


### Selecionando elementos através dos seletores CSS

O padrão da W3C conhecido como [API de Seletores]( "link-externo") define métodos JavaScript para obter os elementos
que coincidem com determinado [seletor CSS](/html-css/seletores-css/). O segredo dessa API é o método `querySelectorAll()`,
ele recebe um argumento de string contendo um seletor CSS e retorna um objeto [NodeList](/javascript/refs/dom-nodelist/) 
representando  todos os elementos do documento que correspondem ao seletor.

Leia mais sobre a função [queryselectorall()](/javascript/refs/queryselectorall/)



Navegando pela árvore DOM
---

Os métodos para encontrar elementos __DOM__ que descrevemos até aqui foram muito direcionados, estamos pulando 
diretamente para um nó específico na árvore, sem nos preocuparmos com as conexões no meio. Após ter selecionado um 
elemento do documento, às vezes você precisa encontrar partes estruturalmente relacionada:

- parent (pais)
- siblings (irmãos)
- childrens (filhos)


### Localizando um pai (parent)

Todo nó de elemento possui um pai, execeto o nó do documento. Consequentemente, cada nó de elemento tem uma propriedade
chamada `parentNode`, uma referência para o pai do elemento distinto.

```javascript
elem.parentNode
```


### Localizando filhos (childrens)

Um elemento só pode ter um pai (parent), maspode ter muitos filhos (childrens). Você pode encontrar todos os filhos de 
um elemento, usando a propriedade `childNodes`. Ela é, na verdade, uma lista de nós que contém todos os filhos do elemento,
no ordem de origem.

```javascript
elem.childNodes     // lista completa de filhos
elem.childNodes[0]  //
elem.childNodes[1]  // Acessando filhos individualmente
elem.childNodes[2]  //
//etc...
```

Podemos também localizar o primeiro filho:

```javascript
elem.firstChild
```

Ou o último filho:

```javascript
elem.lastChild
```

### Localizando irmãos (siblings)

Assim como podemos navegar para cima e para baixo na árvore __DOM__, também podemos ir de um lado para o outro, obtendo
o próximo nó ou o anterior (ambos no mesmo nível). As propriedades que utilizamos para isso são `nextSibling` e `previousSibling`.

```javascript
var proximoIrmao  = elem.nextSibling
var anteriorIrmao = elem.previousSibling
```



Acessando os atributos
---

Em breve!


Manipulando o DOM
---


<!--

Lista de especificações
http://www.w3.org/DOM/DOMTR

https://developer.mozilla.org/fi/docs/DOM

https://dom.spec.whatwg.org/

-->