---
layout:      grid93-article
title:       JavaScript - Insert Before (DOM)
description: Referência prática da função insertBefore() - JavaScript
menu:        javascript-refs
---

Isto é um rascunho!

A função `insertBefore()` recebe dois argumentos. O primeiro é o nó a ser inserido. O segundo argumento é o nó antes do
qual esse nó vai ser inserido. Esse método é chamado no nó que vai ser o pai do novo nó e o segundo argumento deve ser 
filho desse nó pai. Se você passar `null` como segundo argumento, `insertBefore()` se comporta como `appendChild()` e
insere no final.