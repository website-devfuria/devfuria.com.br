---
title:       Python O básico sobre estrutura condicionais
description: O básico sobre estrutura condicionais (Python)
---

Segundo a documentação do Python, o protótipo da estrutura if é demonstrado abaixo.

    if_stmt ::=  "if" expression ":" suite
             ( "elif" expression ":" suite )*
             ["else" ":" suite]

Quer dizer que podemos fazer if's simples...

```python
# exemplo 1
if expressao: comando

# exemplo 2
if expressao:
    comando
```

If's comuns...

```python
if expressao:
    comando
else:
    comando

# sintaxe alternativa
if expressao: comando
else: comando
```

Laço "else if"...

```python
if expressao1:
    comando
elif: expressao1
    comando
else:
    comando

# sintaxe alternativa
if expressao: comando
elif: comando
else: comando
```

E, antes que você me pergunte, veja um exemplo semelhante ao __operador ternário__ que encontramos em outras linguagens...

```python
>>> fruit = "Orange"
>>> 'Yes' if fruit == 'Apple' else 'No'
'No'
```

Para não restar dúvidas...

```python
>>> a = 123 if True else 456
>>> a
123
>>> a = 123 if False else 456
>>> a
456
```