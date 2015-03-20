---
layout:      grid93-article
title:       Python - Operadores e fatiamento de sequências
description: Aprenda sobre operadores e fatiamento de sequências em Python
menu:        python-artigos
---

O que é uma sequência? 

Sequências são coleções ordenadas embutidas: strings, [listas](/python/listas/), tuplas e buffers.

Contamos o índice de determinada sequência a partir do zero.

```python
+---+---+---+---+---+---+
| p | y | t | h | o | n |
+---+---+---+---+---+---+
  0   1   2   3   4   5
```

Outra coisa que precisamos saber sobre o fatiamento de sequências é um pouco óbvio mas vale reforçar:

-   ao fatiar uma __string__ teremos como resultado uma nova string fatiada:
    
    `"python"[:3]` retornará `"pyt"`

-   ao fatiar um __lista__ teremos como resultado uma nova lista com os "pedaços":
  
    `["p", "y", "t", "h", "o", "n"][:3]` retornará `["p", "y", "t"]`.

Veja mais exemplos:

```python
p = "python"
p[0] # 'p'
p[1] # 'y'
p[2] # 't'
p[3] # 'h'
p[4] # 'o'
p[5] # 'n'
```

```python
p = "python"
p[-1] # 'n'
p[-2] # 'o'
p[-3] # 'h'
p[-4] # 't'
p[-5] # 'y'
p[-6] # 'p'
```

Curiosidade, `p[-0]` é igual a `p[0]`, ambos resultam em `'p'`.

O operador `[a:b]` possui o comprimento de `a` (inclusive) até `b`(exclusive):

```python
p = "python"
p[0:0] # ''
p[0:1] # 'p'
p[1:2] # 'y'
p[2:3] # 't'
p[3:4] # 'h'
p[4:5] # 'o'
p[5:6] # 'n'
p[6:6] # ''
```

O operador `[:b]` possui o comprimento até `b` (exclusive)":

```python
p = "python"
p[:1] # 'p'
p[:2] # 'py'
p[:3] # 'pyt'
p[:4] # 'pyth'
p[:5] # 'pytho'
p[:6] # 'python'
```

...equivalente a:

```python
p = "python"
p[0:0] # ''
p[0:1] # 'p'
p[0:2] # 'py'
p[0:3] # 'pyt'
p[0:4] # 'pyth'
p[0:5] # 'pytho'
p[0:6] # 'python'
```

O operador `[a:]` possui o comprimento a partir de `a`(inclusive):

```python
p = "python"
p[:]  # 'python'
p[1:] # 'ython'
p[2:] # 'thon'
p[3:] # 'hon'
p[4:] # 'on'
p[5:] # 'n'
p[6:] # ''
```

O trecho abaixo é para ilustrar como vários caminhos chegam no mesmo lugar.

```python
p = ["p", "y", "t", "h", "o", "n"] 
(p == p[0:6]) # True
(p == p[:6])  # True
(p == p[:])   # True
```

...ou seja, se aplicarmos um "print" nas formas acima, o resultado será exatamente o mesmo, veja:

```python
print p       // ['p', 'y', 't', 'h', 'o', 'n']
print p[0:6]  // ['p', 'y', 't', 'h', 'o', 'n']
print p[:6]   // ['p', 'y', 't', 'h', 'o', 'n']
print p[:]    // ['p', 'y', 't', 'h', 'o', 'n']
```

O operador `[:]` representa o total da lista (ou string).

E há ainda o operador `[a:b:n]` que representa de `n` em `n` itens.




### Operações com sequências


<table>
    <thead>
        <tr>
            <th>Operadores</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>s[-i]</code></td>
            <td>acesso a um item pelo final</td>
        </tr>
        <tr>
            <td><code>s+z</code></td>
            <td>concatenação</td>
        </tr>
        <tr>
            <td><code>s*n n</code></td>
            <td>cópias de <code>s</code> concatenadas</td>
        </tr>
        <tr>
            <td><code>i in s</code></td>
            <td>teste de inclusão</td>
        </tr>
        <tr>
            <td><code>i not in s</code></td>
            <td>teste de inclusão negativo</td>
        </tr>
    </tbody>
</table>


### Atribuição em fatias:

<table>
    <thead>
        <tr>
            <th>Operadores</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>s[2:5] = [4,3,2,1]</code></td>
            <td>válida apenas em sequências mutáveis</td>
        </tr>
    </tbody>
</table>


### Funções nativas p/ sequências



<table>
    <thead>
        <tr>
            <th>Operadores</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>len(s)</code></td>
            <td>número de elementos</td>
        </tr>
        <tr>
            <td><code>min(s)</code></td>
            <td>valores mínimo contido em <code>s</code></td>
        </tr>
        <tr>
            <td><code>max(s)</code></td>
            <td>valores máximo contido em <code>s</code></td>
        </tr>
        <tr>
            <td><code>sorted(s)</code></td>
            <td>devolve uma lista com itens de s em ordem ascendente</td>
        </tr>
        <tr>
            <td><code>reversed(s)</code></td>
            <td>retorna um iterador para percorrer os elementos do último ao primeiro</td>
        </tr>
    </tbody>
</table>


<hr>
Fonte:

- [Slide 34 de "Python: apresentando a sintaxe" (Luciano Ramalho)](https://github.com/pythonprobr/pypratico/raw/master/academia/py_sintaxe.pdf "link-externo")
