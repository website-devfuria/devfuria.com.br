---
layout:      materia
title:       Python - Sequências
description: Python - Operadores e fatiamento de sequências
---



### Operações com sequências

Sequências são coleções ordenadas embutidas: strings, listas, tuplas, buffers

Operadores:

+ `s[-i]`      acesso a um item pelo final
+ `s+z`        concatenação
+ `s*n n`      cópias de `s` concatenadas
+ `i in s`     teste de inclusão
+ `i not in s` teste de inclusão negativo



### Fatiamento de sequências (slicing)

+ `s[a:b]` cópia de `a` (inclusive) até `b` (exclusive)
+ `s[a:]` cópia `a` partir de `a` (inclusive)
+ `s[:b]` cópia até `b` (exclusive)
+ `s[:]` cópia total de `s`
+ `s[a:b:n]` cópia de `n` em `n` itens 

!["Figura ilustrando o fatiamento de sequencias em Python"](abacaxi-fatiado.png "Figura ilustrando o fatiamento de sequencias em Python")

### Atribuição em fatias:

+ `s[2:5] = [4,3,2,1]`  válida apenas em sequências mutáveis


### Funções nativas p/ sequências

+ `len(s)` número de elementos
+ `min(s)`, `max(s)` valores mínimo e máximo contido em s
+ `sorted(s)` devolve uma lista com itens de s em ordem ascendente `sorted(s, cmp=None, key=None reversed=False)`
+ `reversed(s)` retorna um iterador para percorrer os elementos do último ao primeiro


Algumas funções com strings
+ `chr(n)` retorna uma string com um caractere de 8-bits cujo código é n
+ `unichr(n)` retorna uma string com um caractere Unicode cujo código é n
+ `ord(c)` retorna o código numérico do caractere c (pode ser Unicode)
+ `repr(x)` conversão de objeto para sua representação explícita em Python
+ `len(s)` número de bytes da string




Fonte py_sintaxe.pdf
