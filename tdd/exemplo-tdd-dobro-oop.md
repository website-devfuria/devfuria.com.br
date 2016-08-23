---
title:       "Simples exemplo de TDD <br>O dobro de um número qualquer (OOP)"
description: Este artigo é um exemplo de TDD escrito na linguagem Python  onde nosso objetivo é criar uma pequena classe, portanto faremos uso de OOP,  contendo um único método que nos informe o dobro de um número qualquer
---

{% include /alertas/tdd-paraquedas.html %}

Este exercício é um quebra gelo, o objetivo é dar o primeiro passo em relação a Programação Orientada a Objetos.

Continuamos com o mesmo problema visto nos artigos anteriores: o dobro de um número qualquer. Mas agora utilizaremos 
Programação Orientada a Objetos e também um substituiremos o `assert` por um framework de testes. 

Sua tarefa é fazer uma classe denominada `Calc` com um método que retorne o dobro de um número.

Começamos sempre com o teste, vamos combinar de colocar o prefixo `test` antes do nome da função.

    def testDobro(self):
        obj = Calc()
        self.assertEqual(17, obj.dobro(8))

Mas se esse é o seu primeiro contado com Python e OOP então talvez esteja na dúvida de onde colocar o teste acima
escrito. OK, veja o arquivo completo abaixo.


    # -*- coding: utf-8 -*-
    import unittest

    class MyCalcTest(unittest.TestCase):
        def testDobro(self):
            obj = Calc()
            self.assertEqual(16, obj.dobro(8))

    if __name__ == '__main__':
        unittest.main()

Salve o conteúdo acima em um arquivo chamado, por exemplo, `foo.py`.

Se executarmos o script  (no console do Linux) `python foo.py` ele devolve-rá a seguinte informação.

    E
    ======================================================================
    ERROR: testDobro (__main__.MyCalcTest)
    ----------------------------------------------------------------------
    Traceback (most recent call last):
      File "foo.py", line 7, in testDobro
        obj = Calc()
    NameError: global name 'Calc' is not defined

    ----------------------------------------------------------------------
    Ran 1 test in 0.000s

    FAILED (errors=1)


Informação suficiente para analisarmos aonde está acontecendo o erro.

A parte que nos interessa é `'Calc' is not defined`, ou seja, a classe não foi definida.

Vamo definir a classe, mas só isso e nada mais.

    class Calc():
        pass

E ao executar o script temos a seguinte mensagem.            

    AttributeError: 'Calc' object has no attribute 'dobro'

Tudo bem, falta a função! Porém, vamos definir a função sem implementá-la por completo (se segure, rsss).

    class Calc():
        def dobro(self, num):
            pass

Executamos o script e agora temos um teste falhando (e não um erro de execução).

    AssertionError: 16 != None

Teste falhando = Progresso! Agora sim podemos codificar o mínimo para o teste passar.

    def dobro(self, num):
        return num * 2


```python
# -*- coding: utf-8 -*-
import unittest

#
# Código limpo e funcionando
#
class Calc:
    def dobro(self, num):
        return num * 2

#
# Testes
#
class MyCalcTest(unittest.TestCase):
    def testDobro(self):
        obj = Calc()
        self.assertEqual(17, obj.dobro(8))

if __name__ == '__main__':
    unittest.main()
```


{% include call.html
    style="success"
    title="Próximo exemplo de TDD..."
    descr="Simples exemplo de TDD - Juros simples"
    href="/tdd/exemplo-tdd-juros-simples/"
    label="Ver matéria!"
%}