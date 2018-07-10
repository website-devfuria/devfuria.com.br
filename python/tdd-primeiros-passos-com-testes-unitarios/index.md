---
title:       Primeiros passos com testes unitários em Python
description: Se você precisa escrever teste de unidades em Python e não sabe por onde começar, este artigo é para você!
ogimage:     img.png
capitulo:    python-artigos
ordem:       6
---

Em Python, quando queremos escrever testes unitários podemos lançar mãos desde um simples `assert`, passando por funções
auxiliares até um framework de testes unitários completo. Neste artigo vou mostrar rapidamente como funciona o statement
`assert` e mostrar também algumas funções que também podem ser úteis, termino mostrando um "Hello world" do
__Unit testing framework__.

assert
---

Em Python podemos fazer simples asserções utilizando o statement
[assert](https://docs.python.org/2/reference/simple_stmts.html#the-assert-statement).

    assert True

Se executarmos no terminal `assert True`, o comando fica em silêncio, nada responde. Esse é o comportamento esperado,
pois a asserção teve sucesso e o "silêncio" é o sintoma de que tudo está funcionando.

Se executarmos `assert False` o comando dispara um erro...

    Traceback (most recent call last):
      File "<stdin>", line 1, in <module>
    AssertionError

O statement aceita como segundo parâmetro uma string que pode ser um mensagem explicativa e é exibida quando a asserção
falha.

    >>> assert False, "mensagem explicativa"
    Traceback (most recent call last):
      File "<stdin>", line 1, in <module>
    AssertionError: mensagem explicativa

Para exemplificar o funcionamento do statement, veja o trecho de código abaixo.

```python
b = 150
expressao = 100 > b
mensagem  = "100 deve ser maior que 'b'"
assert expressao, mensagem
```

Obtemos como como resposta...

    Traceback (most recent call last):
      File "<stdin>", line 1, in <module>
    AssertionError: 100 deve ser maior que b




O que vem depois ?
---

Se ao invés do "assert", você quisesse utilizar uma função, por exemplo, `test()` para realizar pequenos testes, como
seria a implementação dessa função?

Que tal o exemplo abaixo?

```python
def test(expression1, expression2):
    if expression1 == expression2:
        return 'Pass'
    else:
        return 'Fail'
```

Já o [tutorial do Google](http://code.google.com/edu/languages/google-python-class/) sugere uma função
igualmente simples, porém, ligeiramente mais sofisticada, veja código seguinte.

```python
def test(got, expected):

  if got == expected:
    prefix = ' OK '
  else:
    prefix = '  X '

  print("%s got: %s expected: %s" % (prefix, repr(got), repr(expected)))
```

Pesquisando na web encontrei mais dois exemplos que merecem nossa atenção.

O primeiro deles, você confere no código abaixo. Repare que temos a utilização do objeto __sys__ e que a saída dessa
função é bem mais elaborada, ela alerta até o número da linha onde o erro foi encontrado.

```python
import sys

def test(did_pass):
    """  Print the result of a test.  """
    linenum = sys._getframe(1).f_lineno   # Get the caller's line number.
    if did_pass:
        msg = "Test at line {0} ok.".format(linenum)
    else:
        msg = ("Test at line {0} FAILED.".format(linenum))
    print(msg)
```

O segundo exemplo é muito parecido com o anterior, até parece que o autor se baseou no primeiro exemplo e implementou
sua própria customização.  Pequenos detalhes foram alterados.


```python
def test(actual, expected):
    import sys
    linenum = sys._getframe(1).f_lineno   # get the caller's line number.
    if (expected == actual):
        msg = "Test on line {0} passed.".format(linenum)
    else:
        msg = ("Test on line {0} failed. Expected '{1}', but got '{2}'."
                                     . format(linenum, expected, actual))
    print(msg)
```

Aí você percebe que precisa de um framework de verdade para escrever seus testes unitários...



Unit Testing Framework
---

O [Unit Testing Framework](https://docs.python.org/3.4/library/unittest.html) pode ser o que você esteja
procurando.

Longe de querer se aprofundar no framework (leia a documentação), vou apenas mostrar dois exemplos do tipo "Hello world".

Abaixo um exemplo demonstrando como testar uma simples função.

```python
import unittest

def fun(x):
    return x + 1

class MyTest(unittest.TestCase):
    def test(self):
        self.assertEqual(fun(3), 4)

if __name__ == '__main__':
    unittest.main()
```

O resultado de `python foo.py` você confere abaixo.

    .
    ----------------------------------------------------------------------
    Ran 1 test in 0.000s

    OK

O exemplo seguinte demonstra como testar uma pequena classe.

```python
import unittest

class MyFun:
    def fun(self, n):
        return n + 1

class MyFunTest(unittest.TestCase):
    def testFun(self):
        obj = MyFun()
        self.assertEqual(obj.fun(3), 4)

if __name__ == '__main__':
    unittest.main()
```

O resultado é semelhante ao anterior.

    .
    ----------------------------------------------------------------------
    Ran 1 test in 0.000s

    OK

