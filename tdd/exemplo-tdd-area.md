---
layout:      grid93-article
title:       "Simples exemplo de TDD <br>Cálculo da área"
description: Este artigo é um exemplo de TDD escrito na linguagem Python <br>que tem como objetivo criar uma classe para representar <br>a área (geometria)
menu:        tdd-exemplos-simples
---

{% include /menus/tdd-exemplos-simples-paraquedas.html %}

Seu objetivo é construir uma classe denominada `Area` que calcule tanto a área quadrada (primeiro método) como a
área cúbica (segundo método). Como o exemplo é na __linguagem C++__ faremos uso de programação orientada a objetos, 
obviamente.

Ok, vamos dividir para conquistar. Ataquemos a primeira função, a área quadrada.

Começamos pelo teste.

    def testAreaQuadrada(self):
        area = Area()
        area.lado1 = 3
        area.lado2 = 9
        self.assertEqual(27, area.quadrada())

O código não executa porque não temos nem a classe e nem o método, então vamos lá.

    class Area():
        def quadrada(self):
            pass

Agora ele executa mas não passa no teste (red). Tudo bem, já sabemos que __teste falhando é sinal de progresso__ e que
podemos escrever o mínimo de código para o teste passar.

    def quadrada(self):
        return lado1 * lado2;

Agora o teste passa (green), primeira função concluída!

Vamos para a segunda, o cubo. Novamente, iniciamos escrevendo o teste.

    def testAreaCubica(self):
        area = Area()
        area.lado1 = 3
        area.lado2 = 6
        area.lado3 = 2
        self.assertEqual(36, area.cubica())

Ao executar o sript, temos...

    AttributeError: 'Area' object has no attribute 'cubica'


Precisamos criar a função, apenas o corpo da função.

    def cubica(self):
        pass

Agora vai! Execute o script, vemos o teste falhar (red), então partimos para o esforço de vê-lo passar (green).
    
    def cubica(self):
        pass
        return self.lado1 * self.lado2 * self.lado3



Tudo verde? Coisa linda.

    ..
    ----------------------------------------------------------------------
    Ran 2 tests in 0.000s

    OK



### Código completo

```python
# -*- coding: utf-8 -*-
import unittest

# Classe para abstrair
# cálculos geométricos referente a área.
class Area():

    # Retorna a área quadrada
    def quadrada(self):
        return self.lado1 * self.lado2

    # Retorna a área cúbica
    def cubica(self):
        return self.lado1 * self.lado2 * self.lado3


#
# Testes
#
class MyCalcTest(unittest.TestCase):

    def testAreaQuadrada(self):
        area = Area()
        area.lado1 = 3
        area.lado2 = 9
        self.assertEqual(27, area.quadrada())

    def testAreaCubica(self):
        area = Area()
        area.lado1 = 3
        area.lado2 = 6
        area.lado3 = 2
        self.assertEqual(36, area.cubica())

if __name__ == '__main__':
    unittest.main()
```



Próximo exemplo de TDD
---

- [Simples exemplo de TDD - Triângulo](/tdd/exemplo-tdd-triangulo/)
