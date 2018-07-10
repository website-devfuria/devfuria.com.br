---
layout:      basico3
title:       tag img
description:
capitulo:    "html-imagens"
ordem:       0
---

<img src="materialdesign-principles-metaphor.png" style="width: 150px; height: 150px" />

A tag `img` insere uma imagem no documento.

Ele é um elemento inline, portanto, as imagens são organizadas à esquerda umas ao lado da outra.

As propriedades...

- src: é uma abreviação de __source__, define o local da imagem
- alt: define um texto alternativo caso não se encontre a imagem

Segundo o exemplo abaixo, a imagem será exibida no seu tamanho original, ou seja, sem alteração.

    <img src="sua-imagem.png" alt="[texto alternativo]" />

O texto da propriedade `alt` está entre chaves [], isso é um costume meu, mas não é necessário.


Podemos alterar seu tamanho mexendo nas propriedades `height` e `width`, conforme exemplo.

    <img src="sua-imagem.png" alt="[texto alternativo]" height="100" width="100" />

Mas, diz as boas práticas que o HTML não deve ser usado para estilização. Seguindo esse preceito, utilizaremos CSS para
interferir no tamanho da imagem.

    <img src="materialdesign-principles-metaphor.png" style="width: 200px; height: 200px" />


https://stackoverflow.com/questions/492809/when-to-use-img-vs-css-background-image







