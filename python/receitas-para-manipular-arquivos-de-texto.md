---
layout:      grid12-article
title:       Receitas para manipular arquivos de texto em Python
description: 
---

Receitas rápidas e práticas para quem está com pressa.

Se você está tranquilo e quiser entendê-las, sugiro a leitura do artigo 
[Manipulando arquivos de texto em Python](/python/manipulando-arquivos-de-texto/).



### Iterar sobre um arquivo

Certifique-se de que o arquivo exista.

```python
arquivo = open('arquivo.txt', 'r')
for linha in arquivo:
    print(linha)
arquivo.close()
```


### Ler todas as linhas em um única string

```python
arquivo = open('arquivo.txt', 'r')
unica_string = arquivo.read()
arquivo.close()
```


### Ler todas as linhas em uma lista

```python
arquivo = open('arquivo.txt', 'r')
lista = arquivo.readlines() # readlinesssssss
arquivo.close()
```


### Ler linha a linha do arquivo

```python
arquivo = open('arquivo.txt', 'r')
primeira_linha = arquivo.readline()
segunda_linha  = arquivo.readline()
terceira_linha = arquivo.readline()
# etc...
arquivo.close()
```


### Criar um arquivo vazio

Certifique-se de que o arquivo não exista, se não ele irá apagar seu conteúdo.

```python
arquivo = open('novo-arquivo.txt', 'w')
arquivo.close()
```


### Apagar o conteúdo de um arquivo

A mesma que a anterior.

```python
arquivo = open('novo-arquivo.txt', 'w')
arquivo.close()
```


### Escrever em um arquivo

Se o arquivo já existir ele irá sobrescrever todo o conteúdo.

```python
arquivo = open('novo-arquivo.txt', 'w')
arquivo.write('nova linha')
arquivo.close()
```



### Inserir conteúdo ao já existente (adicionar)

```python

arquivo = open('nome.txt', 'r') # Abra o arquivo (leitura)
conteudo = arquivo.readlines()
conteudo.append('Nova linha')   # insira seu conteúdo

arquivo = open('nome.txt', 'w') # Abre novamente o arquivo (escrita)
arquivo.writelines(conteudo)    # escreva o conteúdo criado anteriormente nele.

arquivo.close()
```