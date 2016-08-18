---
title:       "Simples exemplo de TDD  Juros simples"
description: Pequeno exemplo de TDD na linguagem Python utilizando-se de programação orientada a objeto  para criar uma classe com um método  que retorne o juros simples.
menu:        tdd-exemplos-simples
---

{% include /menus/tdd-exemplos-simples-paraquedas.html %}

Neste artigo iremos construir um pequeno código na __linguagem Python__ utilizando a técnica de 
programação orientada a objetos. Nosso objetivo é definir uma classe para calcular o juros simples segundo a fórmula abaixo.

    J = C.i.n

Onde:

    J = juros,
    C = capital,
    i = taxa de empréstimo
    n = períodos

Vamos imaginar o seguinte cenário: um empréstimo de R$ 16.000,00 sobre a taxa de 4% durante 4 meses.

Utilize orientação a objetos para resolver o problema.

Começando pelo teste.

```python
# -*- coding: utf-8 -*-
import unittest

class MyCalcTest(unittest.TestCase):
    def testSimples(self):
        calcJuros = Juros()
        calcJuros.capital    = 16000;
        calcJuros.taxa       = 0.04;
        calcJuros.n_periodos = 4;

        self.assertEqual(2560, calcJuros.simples())

if __name__ == '__main__':
    unittest.main()
```

O código não é executado pois não temos a classe `Juros` nem o método `simples()`, muito menos as propriedades.

Vamos fazer o mínimo para código rodar sem problemas.

    class Juros:
        def simples(self):
            pass

Agora temos um teste falhando (sinal de progresso) e só nos resta implementar a função `simples()`.

    def simples(self):
        return self.capital * self.taxa * self.n_periodos


### Código final

```python
# -*- coding: utf-8 -*-
import unittest

#
# Código limpo e funcionando
#
class Juros:
    def simples(self):
        return self.capital * self.taxa * self.n_periodos

#
# Testes
#
class MyCalcTest(unittest.TestCase):
    def testSimples(self):
        calcJuros = Juros()
        calcJuros.capital    = 16000;
        calcJuros.taxa       = 0.04;
        calcJuros.n_periodos = 4;

        self.assertEqual(2560, calcJuros.simples())

if __name__ == '__main__':
    unittest.main()
```

Este exemplo é simples e curto, mas ele passa um lição importante, que está mais relacionado a testes unitários do que 
com TDD: __os testes ajudam a documentar o funcionamento do código.__



Próximo exemplo de TDD
---

- [Simples exemplo de TDD - Cálculo da área](/tdd/exemplo-tdd-area/)