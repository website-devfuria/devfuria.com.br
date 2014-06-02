---
layout:     post
title:      Desenhando retângulos (strokeRect, fillRect, clearRect e rect)
permalink:  desenhando-retangulos
categories: javascript canvas
---

Existem 4 métodos para desenharmos um retângulo: strokeRect, fillRect, clearRect e rect

Todos os métodos esperam 2 argumentos [na verdade 4] que especificam um canto do retângulo, seguidos de sua largura e altura.

Veja a assinatura das funções abaixo.

strokeRect(x, y, width, height)
fillRect  (x, y, width, height)
clearRect (x, y, width, height)
rect      (x, y, width, height)

"Normalmente especificamos o canto superior esquerdo e, então, passamos um valor de largura e altura positivos, mas também podem ser negativos. (David Flanagan)"

A imagem abaixo ajuda a entender melhor o esquema: