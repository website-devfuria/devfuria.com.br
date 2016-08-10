---
layout:      grid93-article
title:       "Simples exemplo de TDD  Triângulo"
description: Exemplo de TDD na linguagem Python fazendo uso de programação orientada a objetos onde construiremos uma classe que representa um triângulo (geometria)
menu:        tdd-exemplos-simples
---

{% include /menus/tdd-exemplos-simples-paraquedas.html %}

Vamos construindo um pequeno código na linguagem Python utilizando programação orientada a objetos.

Inicialmente, nosso objetivo é escrever uma classe com um método para testar se os valores de `a`, `b` e `c`  (lados do
triângulo) são válidos, ou seja, se realmente formam um triângulo.

Saiba que para formar um triângulo, o valor de cada lado deve ser menor que a soma dos outros 2 lados.

O primeiro passo será criar uma função para determinar se é os dados compõem ou não um triângulo.

Minha classe se chamará `Triangulo` e minha função será `ehTriangulo()`.

Se a função vai dizer sim ou não, então ela poderá retornar um tipo "booleano", vejamos o teste.

    def testEhTriangulo(self):
        tri = Triangulo()
        tri.a = 3
        tri.b = 4
        tri.c = 5
        self.assertTrue(tri.ehTriangulo())


Esse teste deve retornar um valor verdadeiro, pois os valores  de `a`, `b` e `c` obedecem a regra "o valor de cada lado 
deve ser menor que a soma dos outros 2 lados". Antes, deixa eu mostrar a estrutura do arquivo.

    # -*- coding: utf-8 -*-
    import unittest

    #
    # Sua classe
    #
    class Triangulo:

        def ehEquilatero(self):
            pass


    #
    # Testes
    #
    class MyCalcTest(unittest.TestCase):

        def testEhEquilatero(self):
            tri = Triangulo()
            tri.a = 4
            tri.b = 4
            tri.c = 4
            self.assertTrue(tri.ehEquilatero())

    if __name__ == '__main__':
        unittest.main()

O código executa mas o teste não passa (red), precisamos implementar o método `ehTriangulo`, que tal...

    def ehTriangulo(self):
        if self.a < (self.b + self.c):
            if self.b < (a + self.c):
                if self.c < (a + self.b):
                    return True

Neste ponto terminamos nosso trabalho. Tínhamos um objetivo, escrevemos um teste, vimos ele falhar e codificamos até os
testes passarem.





Um mês depois... (primeira alteração)
---

Seu chefe olha para você e diz que "o programa __também__ deverá informar se os valores formam um triângulo equilátero, 
isósceles ou escaleno" e entrega a você as seguintes regras:

- Triângulo Equilátero: três lados iguais;
- Triângulo Isósceles: quaisquer dois lados iguais;
- Triângulo Escaleno: três lados diferentes; 

OK, vamos alterar a classe `Triangulo` para acomodar as novas funcionalidades.

Mas lembre-se que se passaram um mês e como sua equipe é grande, estamos preocupado se alguém mexeu no seu código.

Você poderia olhar os logs do sistema de versionamento, mas de qualquer forma fica a pergunta: "será que o código ainda 
está funcionando? Será que ninguém o quebrou?".

Pergunte para os testes! Como? Rode os testes, se eles passarem (green) seu sistema funciona e você poderá trabalhar
tranquilamente. Antes de mexer no código rode os testes), crie este hábito.

Testes rodando, vamos trabalhar.

Olhando o teste já escrito, eu percebo que os valores compõem um triângulo escaleno. Escrevo um novo teste.

    def ehEscaleno(self):
        pass

    def testEhEscaleno(self):
        tri = Triangulo()
        tri.a = 3
        tri.b = 4
        tri.c = 5
        self.assertTrue(tri.ehEscaleno())

Podemos dar um pequeno passo (baby step).

    def ehEscaleno(self):
        return True

E seguimos com a implementação da função.

    def ehEscaleno(self):
        if self.a != self.b and self.a != self.c and self.b != self.c:
            return True
        else:
            return False

O escaleno foi fácil. Encorajado, corri para o isósceles... 


    def ehIsosceles(self):
        return True

    def testEhIsosceles(self):
        tri = Triangulo()

        tri.a = 3
        tri.b = 3
        tri.c = 5
        self.assertTrue(tri.ehIsosceles())

Na hora de implementar a função... travei! Não consegui pensar em uma solução imediata para o problema.

Olhando a regra "triângulo Isósceles possui quaisquer dois lados iguais" ...em minha mente, logo veio que eu teria que
comparar os 3 lados com os próprios 3 lados.

Aí o  __TDD__ "entra como uma luva", ao invés de pensar muito, posso fazer suposições e ver se elas se tornam verdadeiras.

        if self.a == self.b:
            return True
        else:
            return False

A primeira suposição passou, então fiz mais uma e tive que alterar meu teste...

    def testEhIsosceles(self):
        tri = Triangulo()

        tri.a = 3
        tri.b = 3
        tri.c = 5
        self.assertTrue(tri.ehIsosceles())

        tri.a = 3
        tri.b = 5
        tri.c = 3
        self.assertTrue(tri.ehIsosceles())

O teste não passa (red). Sem pensar muito, experimentei o óbvio.

    def ehIsosceles(self):
        if self.a == self.b:
            return True
        elif self.a == self.c:
            return True
        else:
            return False

OK, testes passando. Só me restava acrescentar mais uma asserção,

    tri.a = 5
    tri.b = 3
    tri.c = 3
    self.assertTrue(tri.ehIsosceles())

Com os testes no vermelho, tentei...

    def ehIsosceles(self):
        if self.a == self.b:
            return True
        elif self.a == self.c:
            return True
        elif self.b == self.c:
            return True
        else:
            return False

E tudo passou (green).

Fui para o equilátero (3 lados iguais). 

Pô, esse é o inverso do escaleno. Arriscarei dar um passo grande, eis o teste:

    def testEhEquilatero(self):
        tri = Triangulo()
        tri.a = 4
        tri.b = 4
        tri.c = 4
        self.assertTrue(tri.ehEquilatero())

...e a implementação:

    def ehEquilatero(self):
        if self.a == self.b and self.a == self.c and self.b == self.c:
            return True
        else:
            return False
 

Tudo passou!.



### Código final

```python
# -*- coding: utf-8 -*-
import unittest

#
# Classe que representa um triângulo
#
class Triangulo:

    # 
    # Confirma se as medidas compõem um triângulo
    #
    def ehTriangulo(self):
        if self.a < (self.b + self.c):
            if self.b < (self.a + self.c):
                if self.c < (self.a + self.b):
                    return True

    #
    # Confirma se o triângulo é escaleno
    #
    def ehEscaleno(self):
        if self.a != self.b and self.a != self.c and self.b != self.c:
            return True
        else:
            return False

    #
    # Confirma se o triângulo é isosceles
    #
    def ehIsosceles(self):
        if self.a == self.b:
            return True
        elif self.a == self.c:
            return True
        elif self.b == self.c:
            return True
        else:
            return False

    #
    # Confirma se o triângulo é equilátero
    #
    def ehEquilatero(self):
        if self.a == self.b and self.a == self.c and self.b == self.c:
            return True
        else:
            return False


#
# Testes
#
class MyCalcTest(unittest.TestCase):

    def testEhTriangulo(self):
        tri = Triangulo()
        tri.a = 3
        tri.b = 4
        tri.c = 5
        self.assertTrue(tri.ehTriangulo())

    def testEhEquilatero(self):
        tri = Triangulo()
        tri.a = 4
        tri.b = 4
        tri.c = 4
        self.assertTrue(tri.ehEquilatero())

    def testEhIsosceles(self):
        tri = Triangulo()

        tri.a = 3
        tri.b = 3
        tri.c = 5
        self.assertTrue(tri.ehIsosceles())

        tri.a = 3
        tri.b = 5
        tri.c = 3
        self.assertTrue(tri.ehIsosceles())

        tri.a = 5
        tri.b = 3
        tri.c = 3
        self.assertTrue(tri.ehIsosceles())

    def testEhEscaleno(self):
        tri = Triangulo()
        tri.a = 3
        tri.b = 4
        tri.c = 5
        self.assertTrue(tri.ehEscaleno())

if __name__ == '__main__':
    unittest.main()
```




Próximo exemplo
---

Este é o último exercício sobre TDD da série "básico".