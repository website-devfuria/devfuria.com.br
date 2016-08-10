---
layout:      grid12-article
title:       Programação Orientada a Objetos em Python
description: Este artigo é um primeiro passo em direção a programação orientada a objetos através da linguagem Python
---

__Isto é um rascunho...__


Uma classe consiste da palavra chave `class` seguida de seu nome e da classe herdada entre parênteses.

Abaixo, criamos a classe vazia `Car` que herda de `object`.

```python
class Carro(object):
    pass
```

A palavra `pass` serve para criarmos um classe vazia.

Podemos definir a classe sem especificar a herança como no exemplo abaixo.

```python
class Carro():
    pass

```

Mas é uma convenção comum sempre herdar de `object`, a não ser, obviamente, que você decida herdar de outra classe.

As classes antigas que não seguem esse estilo são consideradas "old style".




Instanciando
---

Para instanciar a classe não é preciso o operador `new` muito comum em outras linguagens.

```python
Fusca = Carro()
```


Instâncias Abertas
---

> Instâncias podem receber atributos (propriedades) dinamicamente, por isso às vezes é útil criar classes vazias. 
(Luciano Ramalho)

Em outras palavras, podemos definir as propriedades dinamicamente.

```python
class Carro(object):
    pass

Fusca = Carro(object)
fusca.estado = "novo"
print(fusca.estado) # novo
```

O atributo definido dessa forma é considerado __da instância__.



Atributos da classe
---

Podemos definir a propriedade (o atributo) na classe.

```python
class Carro(object):
   estado = "novo"
 
print(Carro.estado) # 'novo'
```

Note bem o código acima, reparou que não precisamos instanciar a classe ? Simplesmente acessamos o atributo (que é da 
classe) diretamente `Carro.estado`.

Por outro lado, repare que a propriedade também se encontra disponível nas instâncias.


```python
c = Carro()
print(c.estado) # novo
```

Em Python precisamos atentar que "as coisas" ou são da classe ou são da instância.



self explícito
---

Esta é uma peculiaridade da linguagem.

Fazemos referência a classe através da palavra `self` e todo método deve aceitar como (primeiro) parâmetro a palavra 
`self` que se refere ao próprio objeto.

```python
class Carro(object):
    def dirigir(self):
        self.estado = "usado"


c = Carro()
print(c.estado) # AttributeError: 'Carro' object has no attribute 'estado'
c.dirigir()
print(c.estado) # 'usado'
```

Podemos alterar as propriedades através dos métodos.

```python
class Carro(object):
    estado = "novo"
    def dirigir(self):
        self.estado = "usado"

#
# 1 exemplo
#
porsche = Carro()
porsche.dirigir()
print(porsche.estado) # usado

#
# 2 exemplo
#
ferrari = Carro()
print(ferrari.estado) # novo
```



Método construtor \_\_init\_\_
---

Abaixo, criamos a classe `Carro` com um método construtor `__init__`. 
Neste exemplo, somos obrigados a instanciar a classe passando exatamente um parâmetro, nem mais nem menos.

```python
class Carro(object):
    def __init__(self, estado):
        self.estado = estado

bmw = Carro('semi-novo')
print(bmw.estado) # 'semi-novo'
```


Herança
---

```python
class Veiculo(object):
    estado = "novo"

class Carro(Veiculo):
    pass


bmw = Carro()
print(bmw.estado) # 'novo'
```