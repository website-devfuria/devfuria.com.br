---
title:       Basic Python Exercises - strings 1
description: Exercício onde veremos o básico de funções e estrutura if
capitulo:    python-google
ordem:       1
---

{% include /python-google.html %}


```python
#!/usr/bin/python -tt
# coding: utf-8
import unittest

# Dado um `count` como sendo o números de donuts, retornar uma string
# na forma "Número de donuts: <count>", caso `count` seja
# maior ou igual a 10 retornar "many".
def donuts(count):
    pass

# Outra versão
def donutsV2(count):
    pass

# Dado uma string qualquer `s`, retonar uma string
# composta dos 2 primeiros e os 2 últimos caracteres, exemplo:
#
# panela ----> pala
# bala   ----> bala
# mao    ----> maao
# ja     ----> jaja
#
# Caso a string `s` contenha menos que 2 caracteres,
# retornar "" (string de cumprimento zero).
def both_ends(s):
    pass

# Dado uma string `s`, retornar uma string onde
# todas as ocorrências de seu primeiro caractere
# seja alterado para '*', exceto o primeiro caracter. Exemplo:
#
# babble ---> ba**le
#
# Presuma que o tamanho da string seja 1 ou mais.
# Dica: s.replace (strA, strB) retorna uma versão da string s
def fix_start(s):
    pass


# Dado duas string `a` e `b`,  trocar os 2 primeiros caracteres entre as variáveis
# e retornar uma única string separada por espaço como no exemplo:
#
# "pezzy", "firm" ----> "fizzy perm"
def mix_up(a, b):
    pass


class MyTest(unittest.TestCase):
    
    def test_donuts(self):
      self.assertEqual(donuts(4), 'Number of donuts: 4')
      self.assertEqual(donuts(9), 'Number of donuts: 9')
      self.assertEqual(donuts(10), 'Number of donuts: many')
      self.assertEqual(donuts(99), 'Number of donuts: many')
    
    def test_both_ends(self):
      self.assertEqual(both_ends('spring'), 'spng')
      self.assertEqual(both_ends('Hello'), 'Helo')
      self.assertEqual(both_ends('a'), '')
      self.assertEqual(both_ends('xyz'), 'xyyz')
      self.assertEqual(both_ends('xy'), 'xyxy')

    def test_fix_start(self):
      self.assertEqual(both_ends('xy'), 'xyxy')
      self.assertEqual(fix_start('babble'), 'ba**le')
      self.assertEqual(fix_start('aardvark'), 'a*rdv*rk')
      self.assertEqual(fix_start('google'), 'goo*le')
      self.assertEqual(fix_start('donut'), 'donut')

    def test_mix_up(self):
      self.assertEqual(mix_up('mix', 'pod'), 'pox mid')
      self.assertEqual(mix_up('dog', 'dinner'), 'dig donner')
      self.assertEqual(mix_up('gnash', 'sport'), 'spash gnort')
      self.assertEqual(mix_up('pezzy', 'firm'), 'fizzy perm')

if __name__ == '__main__':
  unittest.main()
```


Resposta
---

```python
def donuts(count):
  if count < 10:
    return 'Number of donuts: ' + str(count)
  else:
    return 'Number of donuts: many'

# Outra versão
def donutsV2(count):
  if count < 10:
    count = str(count)
  else:
    count = "many"
  
  return 'Number of donuts: %s' % count

def both_ends(s):
  if len(s) < 2:
    return ""
  else:
    return s[:2] + s[-2:]

def fix_start(s):
  front = s[0]
  back = s[1:]
  fixed_back = back.replace(front, '*')
  return front + fixed_back

def mix_up(a, b):
  a_swapped = b[:2] + a[2:]
  b_swapped = a[:2] + b[2:]
  return a_swapped + ' ' + b_swapped
```