---
title:       Lista de exercícios da Google word count
description: Exercício extraído da lista Google Python Exercise  onde veremos manipulação básica de arquivo, tuplas,  além funções como sorted(), .split() e .keys().
menu:        python-google
---

{% include /menus/python-google-paraquedas.html %}

### Exercício

Este é o primeiro grande exercício da série, o resultado será um script contador de palavras.

Iremos utilizar o conteúdo do arquivo `small.text` como texto de exemplo conforme abaixo.

    We are not what we should be
    We are not what we need to be
    But at least we are not what we used to be
      -- Football Coach

Nossa estrutura de arquivos ficará como o seguinte.

    /foo
        wordcount.py
        small.txt

Tendo a certeza de estar na pasta `foo` e ambos os arquivos também estarem na mesma pasta, quando executarmos o 
script dessa forma `python wordcount.py --count small.txt`, veremos o seguinte resultado:

    -- 1
    are 3
    at 1
    be 3
    but 1
    coach 1
    football 1
    least 1
    need 1
    not 3
    should 1
    to 2
    used 1
    we 6
    what 3

E quando executarmos dessa forma `python wordcount.py  --topcount small.txt`, teremos...

    we 6
    be 3
    what 3
    are 3
    not 3
    to 2
    coach 1
    least 1
    -- 1
    football 1
    but 1
    should 1
    need 1
    used 1
    at 1


O script `wordcount.py` possui o seguinte conteúdo.


```python
# coding: utf-8
import sys

# Opção '--count'
# Imprimir as palavras em ordem alfabética + total de ocorrências, ex:
# 
# <word a> <count>
# <word b> <count>
# <word c> <count>
def print_words(filename):
  word_count = word_count_dict(filename)
  #
  # seu código
  # 


# Opção '--topcount'
# Imprimir as palavras em ordem alfabética + total de ocorrências, ex:
# 
# <word b> <6>
# <word c> <4>
# <word a> <3>
# 
# Utilize a função sorted().
# Imprima somente os 20 primeiros resultados
# 
def print_top(filename):
  word_count = word_count_dict(filename)
  #
  # seu código
  # 


# Função auxiliar para "print_top()"
# Obs: Ela já está definida, não precisa mexer em nada.
def get_count(word_count_tuple):
  return word_count_tuple[1]


# Função para ler o conteúdo de determinado arquivo e contar 
# a ocorrência de cada palavra encontrada.
# Armazena as palavras em caixa baixa ( string.lower() ).
# Deve retornar um dicionário como por exemplo:
# 
# word_count[palavra1] = n ocorrências
# word_count[palavra2] = n ocorrências
# word_count[palavra3] = n ocorrências
# etc...
def word_count_dict(filename):
  word_count = {}  # Mapa de cada palavra contada
  #
  # seu código
  # 
  return word_count  

# 
#  
# 
def main():
  if len(sys.argv) != 3:
    print 'usage: ./wordcount.py {--count | --topcount} file'
    sys.exit(1)

  option = sys.argv[1]
  filename = sys.argv[2]

  if option == '--count':
    print_words(filename)
  elif option == '--topcount':
    print_top(filename)
  else:
    print 'unknown option: ' + option
    sys.exit(1)

if __name__ == '__main__':
  main()
```

Seu trabalho é implementar as funções `print_words()` e `print_top()`.

Vamos dividir para conquistar...


Resposta
---

A __primeira coisa__ que precisamos entender é o conteúdo de `def main():`.

O código usa a propriedade [sis.argv](/python/sys-argv/) para testar os argumentos passado na linha de comando.

Se a opção for `--count`, a função executada será `print_words()`.

Se a opção for `--topcount`, a função executada será `print_top()`.

O __segundo passo__ é implementar `word_count_dict()` pois ela será utilizada tanto por `print_words()` como por 
`print_top()`.

Você precisará saber como ler um arquivo em Python.

Depois podemos percorrer cada palavra de cada linha e usar de lógica para contar as palavras.

```python
...
for line in input_file:
  words = line.split()
  for word in words:
    word = word.lower()

    if ("ainda não contamos"):
      word_count[word] = 1 # contar
    else:
      # senão , somar...
      word_count[word] = word_count[word] + 1    
...
```

O __terceiro passo__ será implementar `print_top()`. Você precisará ordenar por ordem de ocorrência, utilize a função
`sorted()` conforme abaixo:

    items = sorted(word_count.items(), key=get_count, reverse=True)

Leia mais sobre a função [sorted()](https://docs.python.org/3.4/library/functions.html#sorted "link-externo")

A função auxiliar `get__count()` já está definida, não é preciso alterar nada.

Veja a solução completa.

```python
def print_words(filename):
  word_count = word_count_dict(filename)
  # pegamos as chaves de forma ordenada
  words = sorted(word_count.keys())
  # percorremos cada palavra (já ordenada)
  for word in words:
    # ...e  imprimimos <word> <count>
    print word, word_count[word]

def print_top(filename):
  word_count = word_count_dict(filename)

  # Ordenamos as chaves conforme as ocorrências (valor de 'count')
  # Utilizamos a função "get_count()" para auxiliar a extrair o valor de 'count'
  items = sorted(word_count.items(), key=get_count, reverse=True)

  # Imprimimos apenas os 20 primeiros resultados
  for item in items[:20]:
    print item[0], item[1]

def get_count(word_count_tuple):
  return word_count_tuple[1]

def word_count_dict(filename):
  word_count = {}  # Mapa de cada palavra contada
  input_file = open(filename, 'r')
  # percorrer cada linha do arquivo...
  for line in input_file:
    words = line.split()
    # percorrer cada palavra da linha...
    for word in words:
      word = word.lower()
      # Caso espcial se nos estivermos vendo esta palavra pela primeira vez.
      if not word in word_count:
        word_count[word] = 1
      else:
        word_count[word] = word_count[word] + 1
  
  input_file.close()  # Não estritamente necessário, mas é uma boa forma.
  return word_count  
```