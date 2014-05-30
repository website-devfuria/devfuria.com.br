---
layout:     post
title:      O objeto window e o espaço global em Javascript!
date:       2014-03-29
permalink:  objeto-global-javascript
categories: javascript
---

O objeto window é o principal objeto de Javascript, é nele onde as coisas começam... principalmente a "poluição do espaço global"

Mas para entender esse negócio de espaço global precisamos entender tanto o objeto global como o objeto window.

Este artigo é 90% baseado no livro "JavaScript: O guia definitivo" de David Flanegan. Os 10% de minha contribuição são
(além dessas palavras introdutórias) o trabalho de compilar o assunto (que está todo fragmentado no livro, obviamente,
pois trata-se de um guia) e o exemplo final de como poluir o espaço global.

Obrigado David Flanagan!!!
