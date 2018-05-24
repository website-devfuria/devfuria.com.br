---
title:       Problema 01 do Projeto Euler
description: Este e a solução do primeiro exercício do Projeto Euler, o objetivo é encorajar você a seguir os exercícios.
capitulo:    logica-nivel-9
ordem:       2
---

Este é o primeiro problema do Projeto Euler.

O meu conselho é que você tente resolvê-lo sozinho, vai lá é fácil!

Depois volte aqui para comparar o seu resultado com o meu.

> If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9.
> The sum of these multiples is 23.
> Find the sum of all the multiples of 3 or 5 below 1000.

Traduzindo pelo Google...

> Se listar todos os números naturais abaixo de 10 que são múltiplos de 3 ou 5, ficamos com 3, 5, 6 e 9.
> A soma desses múltiplos é de 23.
> Localizar a soma de todos os múltiplos de 3 ou 5 abaixo de 1000.

Eu vou resolver em Python.

Comecei fazendo duas funções que me dissesse se determinado número é ou não múltiplo de 3 e 5.

```python
def eh_multiplo_de_3(numero):
    return numero % 3 == 0

def eh_multiplo_de_5(numero):
    return numero % 5 == 0
```

Mas aí eu percebi que poderia fazer uma única função.

```python
def eh_multiplo_de(numero, multiplo):
    return numero % multiplo == 0
```

E os testes para a função seguem abaixo.

```python
assert eh_multiplo_de(3, 3)
assert not eh_multiplo_de(4, 3)
assert eh_multiplo_de(5, 5)
```

Depois foi só implementar a função que somasse os múltiplos até um determinado limite.

Veja como ficou o código incluindo os testes.

```python
# -*- coding: utf-8 -*-

def eh_multiplo_de(numero, multiplo):
    return numero % multiplo == 0

def soma_multiplos_abaixo_de(limite):
    soma = 0
    for numero in range(limite):
        if eh_multiplo_de(numero, 3) or eh_multiplo_de(numero, 5):
            soma += numero
    return soma

#
# Testes
#
assert eh_multiplo_de(3, 3)
assert not eh_multiplo_de(4, 3)
assert eh_multiplo_de(5, 5)

assert 23 == soma_multiplos_abaixo_de(10) # 3 + 5 + 6 + 9
assert 78 == soma_multiplos_abaixo_de(20) # 3 + 5 + 6 + 9 + 10 + 12 + 15 + 18

#
# Resultado
#
print( soma_multiplos_abaixo_de(1000) )
```

Para descobrir o resultado imprima o valor de `soma_multiplos_abaixo_de(1000)`.




Indo além
---

Após resolvermos o problema no Projeto Euler um Fórum nos é mostrado para que possamos ver o resultado de outros
participantes.

Mostrarei aqui alguns que achei significativo.

___Exemplo 1:___

```python
# -*- coding: utf-8 -*-

def soma_multiplos_abaixo_de(limite):
    k = list(range(limite))
    x = list()
    for i in k:
        if i%3 == 0 or i%5 == 0:
            x.append(i)
        else:
            continue
    return sum(x)

#
# Resultado
#
print( soma_multiplos_abaixo_de(1000) )
```

___Exemplo 2:___

```python
# -*- coding: utf-8 -*-

def soma_multiplos_abaixo_de(limite):
    sum = 0
    for i in range(limite):
        if i%3 == 0 or i%5 == 0:
            sum += i
    return sum

#
# Resultado
#
print( soma_multiplos_abaixo_de(1000) )
```

___Exemplo 3:___


```python
# -*- coding: utf-8 -*-

def soma_multiplos_abaixo_de(limite):
    return sum([i for i in range(limite) if i%3 == 0 or i%5 == 0])

#
# Resultado
#
print( soma_multiplos_abaixo_de(1000) )
```

___Exemplo 4:___

```python
# -*- coding: utf-8 -*-

def soma_multiplos_abaixo_de(limite):
    return sum(filter(lambda x : (x%3 == 0) or (x%5 == 0), range (limite)))

#
# Resultado
#
print( soma_multiplos_abaixo_de(1000) )
```
