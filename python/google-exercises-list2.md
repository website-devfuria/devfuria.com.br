---
title:       Basic Python Exercises - list 2
description: Exercício onde veremos como fazer um 'merge' com as listas
serie:       Google Python Exercise
ordem:       4
---

{% include /alertas/python-google-paraquedas.html %}

```python
#!/usr/bin/python -tt
# coding: utf-8
import unittest

# Dado um a lista de números, retorna uma lista onde
# todo elemento adjacente e repetido será deletado reduzindo a um único elemento.
# Então, [1, 2, 2, 3] retornará [1, 2, 3]
# Você pode criar uma nova lista ou modificar a lista atual.
def remove_adjacent(nums):
    pass

# Dado duas listas ordenadas em ordem crescente, criar e retornar uma 
# lista de todos os elementos em ordem algabética.
# Você pode modificar as listas passadas.
# Idealmente, a solução deve trabalhar em tempo "linear", que passa uma única vez em ambas as listas.
def linear_merge(list1, list2):
    pass

class MyTest(unittest.TestCase):
  def test_remove_adjacent(self):
    self.assertEqual(remove_adjacent([1, 2, 2, 3]), [1, 2, 3])
    self.assertEqual(remove_adjacent([2, 2, 3, 3, 3]), [2, 3])
    # Repare que são excluídos apenas os valores repetidos e adjacentes
    self.assertEqual(remove_adjacent([1, 2, 3, 2, 3]), [1, 2, 3, 2, 3])
    self.assertEqual(remove_adjacent([]), [])

  def test_linear_merge(self):
    self.assertEqual(linear_merge(['aa', 'xx', 'zz'], ['bb', 'cc']), ['aa', 'bb', 'cc', 'xx', 'zz'])
    self.assertEqual(linear_merge(['aa', 'xx'], ['bb', 'cc', 'zz']), ['aa', 'bb', 'cc', 'xx', 'zz'])
    self.assertEqual(linear_merge(['aa', 'aa'], ['aa', 'bb', 'bb']), ['aa', 'aa', 'aa', 'bb', 'bb'])

if __name__ == '__main__':
  unittest.main()
```


Resposta
---

Abaixo seguem minhas soluções...

```python
def remove_adjacent(nums):
  result = []

  if len(nums) > 1:
      result.append(nums[0])

  for num in nums:
    if num != result[-1]:
      result.append(num)

  return result 

def linear_merge(list1, list2):
  result = list1 + list2
  result.sort()
  return result
```

Abaixo seguem as soluções do Google...

Esta é a solução do Google para a função `remove_adjacent()`! Eu achei que, apesar de ficar mais enxuto, ficou mais 
difícil de descobrir a intenção do código.

```python
def remove_adjacent1(nums):
  result = []

  for num in nums:
    if len(result) == 0 or num != result[-1]:
      result.append(num)

  return result
```

O próximo código é a solução do Google para a função `linear_merge()`. Eu não sei onde eles quiseram chegar ???

Eles vão percorrer as listas em quanto o tamanho delas forem verdadeiros, então terão que diminuir (alterar) o valor das
listas pois se não entrariam em um loop infinito, mas é exatamente o que eles fazem com a função `pop()`.

Talvez você se pergunte: porque acessamos sempre com índice 0 (zero)? Como alteramos o tamanho da lista a cada laço, o 
valor do índice 0 (zero) será diferente (em cada repetição). A função `pop()` retorna o valor retirado da lista, o 
código aproveita isso e adiciona o valor através da função `append()`.

No fim, eles incluem no final da lista 'result' as listas 'list1' e 'list2'.

```python
def linear_merge'(list1, list2):
  result = []

  while len(list1) and len(list2):
    # testa a string, ex:
    # se "aa" < "bb"
    if list1[0] < list2[0]:
      # armazenar "aa"
      result.append(list1.pop(0))
    else:
      result.append(list2.pop(0))

  result.extend(list1)
  result.extend(list2)
  return result
```

Bom, espero que não seja isso o que chamam de "código pytonico"