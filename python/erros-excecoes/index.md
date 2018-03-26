---
title:       Python - erros e exceções
description: Entenda como trabalhar com erros e exceções em Python
capitulo:    python-basico
ordem:       9
---


Segundo a documentação do Python há pelo menos dois tipos distintos de erros: erros de sintaxe e exceções.

Os erros de sintaxe apontam para a linha de nosso script e, normalmente são fáceis de se corrigir, veja um exemplo
abaixo. Neste erro eu esqueço de iniciar a string com o sinal de aspas `"`.

```python
>>> print(Esqueci o sinal de aspas")
  File "<stdin>", line 1
    print(Esqueci o sinal de aspas")
                  ^
SyntaxError: invalid syntax
```

Por outro lado, mesmo que seu código esteja sintaticamente correto, é possível ocorrer um erro em tempo de execução.
Também denominadas simplesmente por __exceções__.

O tratamento dessas exceções devem nos auxiliar a entender e depurar o código.

Veja abaixo um exemplo de exceção não tratada.

```python
>>> 1/0
Traceback (most recent call last):
  File "<stdin>", line 1, in <module>
ZeroDivisionError: division by zero
```

Agora, o mesmo exemplo, só que com tratamento de exceção.

```python
>>> try:
...   1/0
... except ZeroDivisionError:
...   print('Um erro ocorreu!')
...   """ ...mas agora vc pode, estrategicamente, fazer algo."""
...
```

A mensagem que vemos é exibida abaixo.

    Um erro ocorreu!
    ' ...mas agora vc pode, estrategicamente, fazer alog.'

Não faz muito sentido trocar a mensagem padrão para uma outra qualquer, a não ser que façamos algo realmente estratégico
como, por exemplo, gravar um log ou liberar alguns recursos.