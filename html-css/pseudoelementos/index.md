---
layout:      basico3
title:       Pseudoelementos
description:
capitulo:    "html-conceitos"
ordem:       5
---

Novamente encontramos o prefixo __pseudo__ invadindo a praia do HTML e CSS.

Se você já leu um artigo sobre __seletores__, já deve estar ciente do significado de "pseudo". Mas caso não tenha visto,
"Pseudo" é um prefixo utilizado na língua portuguesa para indicar um teor falso cujo conteúdo não é real ou verdadeiro.

Neste caso (dos elementos), o significado cai muito bem, pois o elmento criado não é bem um elemento, portanto, podemos
dizer que é um falso elemento.

E porque digo isto ? Porque você não poderá utilizar todas as propriedades de estilização, algumas funcionarão e outras
não. Eu deixei, abaixo de cada item, o link para a documentação. Nela você encontrará os detalhes de cada pesudoelemento.


## : ou ::

Os dois pontos dobrados (`::`) foram criado na CSS3 para diferenciar os pseudoelementos das pseudoclasses.

Se o objetivo for estar atualizado com a CSS3, então utilize `::`.

Se o objetivo for manter a compatibilidade com navegadores antigos, então  utilize `:`.


## ::first-line

Aplica estilos a primeira linha dos elemento block-level.

```css
p::first-line {
  color: red;
}
```

Veja uma [demo](exemplo-first-line.html).

Fonte [mozilla.org/docs/Web/CSS/::first-line](https://developer.mozilla.org/pt-BR/docs/Web/CSS/::first-line)


## ::first-letter

Aplica estilos a primeira letra dos elemento block-level.

```css
p::first-letter {
    color: red;
    font-size: 200%;
}
```

Veja uma [demo](exemplo-first-letter.html).

Fonte [mozilla.org/docs/Web/CSS/::first-letter](https://developer.mozilla.org/pt-BR/docs/Web/CSS/::first-letter)


## ::after

Cria um pseudo-elemento que é o __último filho__ do elemento selecionado. É frequentemente utilizado para adicionar
conteúdo decorativo à um elemento utilizando a propriedade `content`.  Este elemento é __inline__ por padrão.

```css
.exciting-text::after {
    content: "<- now this *is* exciting!";
    color: green;
}
.boring-text::after {
    content: "<- BORING!";
    color: red;
}
```

Veja uma [demo](exemplo-after.html).

Mas veja também o artigo [content](../content/) para maiores informações e exemplos.

Fonte [mozilla.org/docs/Web/CSS/::after](https://developer.mozilla.org/pt-BR/docs/Web/CSS/::after)



## ::before

Cria um pseudo-elemento que é o __primeiro filho__ do elemento atingido. É frequentemente utilizado para adicionar
conteúdo decorativo à um elemento utilizando a propriedade `content`. Este elemento é __inline__ por padrão.

```css
.ribbon {
    background-color: #5BC8F7;
}
.ribbon::before {
    content: "Look at this orange box. ";
    background-color: #FFBA10;
}
```

Veja uma [demo](exemplo-before.html).

Mas veja também o artigo [content](../content/) para maiores informações e exemplos.

Fonte [mozilla.org/docs/Web/CSS/::before](https://developer.mozilla.org/pt-BR/docs/Web/CSS/::before)



## ::selection

Utilizado para selecionar o conteúdo de um elemento.

```css
::selection {
  background: red;
}
p::selection {
  background: blue;
}
```

Veja uma [demo](exemplo-selection.html).

Fonte [mozilla.org/docs/Web/CSS/::selection](https://developer.mozilla.org/pt-BR/docs/Web/CSS/::selection)


## Veja a lista completa dos pseudoelementos

Tabular...


Ajudenos a completar essa lista!!!
