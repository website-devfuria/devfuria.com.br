---
title:       Manipulando arquivos de texto em Python
description: Aprenda a manipular (ler, escrever, adicionar, etc..)  arquivos de texto na linguagem Python
capitulo:    python-artigos
ordem:       2
---

Se você está com pressa e quer ler receitas rápidas sugiro o artigo
[Receitas para manipular arquivos de texto em Python](/python/receitas-para-manipular-arquivos-de-texto/).

Caso contrário...

Podemos abrir um arquivo de duas maneiras: para somente leitura (`'r'`) ou com permissão de escrita (`'w'`).

```python
#
# leitura
#
f = open('nome-do-arquivo', 'r')

#
# escrita
#
f = open('nome-do-arquivo', 'w')
```

Ambos os modos retornam o objeto do arquivo.

    >>> arquivo = open('nome-do-arquivo', 'r')
    >>> arquivo
    <_io.TextIOWrapper name='nome-do-arquivo.text' mode='r' encoding='UTF-8'>

    >>> arquivo = open('nome-do-arquivo', 'w')
    >>> arquivo
    <_io.TextIOWrapper name='nome-do-arquivo.text' mode='w' encoding='UTF-8'>

Se não especificarmos o segundo parâmetro, a forma padrão leitura ('r') será utilizada.

    >>> arquivo = open('nome-do-arquivo')
    >>> arquivo
    <_io.TextIOWrapper name='nome-do-arquivo.text' mode='r' encoding='UTF-8'>

O terceiro parâmetro é opcional e nele especificamos a codificação do arquivo.

```python
arquivo = open(nome-do-arquivo, 'r', encoding="utf8")
```

Se tentarmos abrir um arquivo para leitura que não existe, um erro será lançado.

```python
>>> f = open('nome-errado.text', 'r')
Traceback (most recent call last):
  File "<stdin>", line 1, in <module>
FileNotFoundError: [Errno 2] No such file or directory: 'nome-errado.text'
```

Se tentarmos abrir um arquivo para escrita que não existe, então ele será criado, porém, se ele já existir, todo seu
conteúdo será apagado no momento em que abrimos o arquivo.

Devemos sempre fechar o arquivo aberto.

```python
...
arquiv.close()
```


## Exemplos

Como exemplo utilizaremos o arquivo de texto `seu-arquivo.text` que possui o seguinte conteúdo:

    primeira linha
    segunda linha
    terceira linha
    quarta linha
    quinta linha

Podemos abrir um arquivo e iterar por cada linha conforme exemplo abaixo.

```python
>>> f = open('seu-arquivo.text', 'r')
>>> for line in f:
...   line
...
'primeira linha\n'
'segunda linha\n'
'terceira linha\n'
'quarta linha\n'
'quinta linha\n'
```
Se quisermos ler todo o conteúdo do arquivo em uma única string podemos utilizar a função `read()`.

```python
>>> f = open('seu-arquivo.text', 'r')
>>> f.read()
'primeira linha\nsegunda linha\nterceira linha\nquarta linha\nquinta linha'
```

Podemos utilizar a função `readline()` caso queiramos ler linha a linha do arquivo.

A função retornará uma lista vazia `[]` quando encontrar o final do arquivo (após a última linha ter sido lida).

```python
>>> f = open('seu-arquivo.text', 'r')
>>> f.readline()
'primeira linha\n'
>>> f.readline()
'segunda linha\n'
>>> f.readline()
'terceira linha\n'
>>> f.readline()
'quarta linha\n'
>>> f.readline()
'quinta linha'
>>> f.readline()
''
```

Se quisermos ler todas linhas restantes em uma lista podemos utilizar a função `readlines` (estamos no plural).

```python
>>> f = open('seu-arquivo.text', 'r')
>>> f.readlines()
['primeira linha\n', 'segunda linha\n', 'terceira linha\n', 'quarta linha\n', 'quinta linha']
>>> f.readlines()
[]
```

Repare que ao chamarmos pela segunda vez a função retornar uma lista vazia pois ela, na verdade, retorna as linhas
restantes. Como, ao abrir o arquivo, restavam todas as linhas então ela retornou todas as linhas.

Confundiu? Veja se este exemplo clareia as coisas.

```python
>>> f = open('seu-arquivo.text', 'r')
>>> f.readline()
'primeira linha\n'
>>> f.readline()
'segunda linha\n'
>>> f.readlines()
['terceira linha\n', 'quarta linha\n', 'quinta linha']
```

Para escrever em um arquivo sem apagar seu contéudo, ou seja, adicionando (incluído) novo conteúdo seguimos 3 passos:

1. Ler todo o conteúdo do arquivo,
2. efetuar a adição e
3. escrever o novo conteúdo  no arquivo.

Veja um exemplo.

```python
# Abra o arquivo (leitura)
arquivo = open('musica.txt', 'r')
conteudo = arquivo.readlines()

# insira seu conteúdo
# obs: o método append() é proveniente de uma lista
conteudo.append('Nova linha')

# Abre novamente o arquivo (escrita)
# e escreva o conteúdo criado anteriormente nele.
arquivo = open('musica.txt', 'w')
arquivo.writelines(conteudo)
arquivo.close()
```