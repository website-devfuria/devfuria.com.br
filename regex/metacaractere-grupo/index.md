---
title:       "Metacaractere grupo ()"
description:
capitulo:    er-metacaracteres
ordem:       13
---

O metacaractere grupo agrupa opções, dentro do grupo podemos ter um ou mais caracteres, metacaracteres e outros grupo.

Grupos servem para agrupar.

Podem conter outros metacaracteres e inclusive outros grupos.

A expressão regular `boa-(tarde|noite)` casa com `boa-tarde` e `boa-noite`, mas não casa com  `boa-sorte` e `bom-dia`.

![Figura ilustrando o metacaractere grupo](../metacaractere-grupo/metacaractere-grupo-01.png "Expresão regular: metacaractere grupo")

Outro exemplo seria a expressão regular `(super|hiper)mercado` que casa com `supermercado` e `hipermercado` mas não casa
com `minimercado` e `mercado`.

![Figura ilustrando o metacaractere grupo](../metacaractere-grupo/metacaractere-grupo-02.png "Expresão regular: metacaractere grupo")

Junto com o [metacaractere opcional (?)](/regex/metacaractere-opcional/) temos o exemplo `(in|con)?certo` que casa com
`incerto`, `concerto` e `certo`.

![Figura ilustrando o metacaractere grupo](../metacaractere-grupo/metacaractere-grupo-03.png "Expresão regular: metacaractere grupo")
