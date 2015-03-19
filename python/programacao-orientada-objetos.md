---
layout:      grid12-article
title:       Programação Orientada a Objetos em Python
description: Python - propriedades
---


Isto é um rascunho...


Uma classe consiste da palavra chave `class` seguida de seu nome e da classe herdada entre parênteses.

A palavra `pass` serve para criarmos um classe vazia.

Abaixo, criamos a classe vazia `Car` que herda de `object`

```python
class Carro(object):
    pass
```

Para instanciar a classe não é preciso o operador `new`, muito comum em outras linguagens.

```python
Fusca = Carro()
```

Podemos definir as propriedades dinamicamente.

```python
Fusca = Carro()
fusca.estado = "novo"
print(fusca.estado) # novo
```

Podemos definir a propriedade na classe.

```python
class Carro(object):
   estado = "novo"
 
c = Carro()
print(c.estado) # novo
```

Dentro da classe, fazemos referência a ela através da palavra `self`e todo método deve aceitar como parâmetro a 
palavra `self`, que se refere ao próprio objeto.

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
    dirigir(self):
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



### Método construtor __init__

Abaixo, criamos a classe `Carro` com um método construtor `__init__`. Neste exemplo somos obrigados a instanciar a classe
passando exatamente um parâmetro, nem mais nem menos.

```python
class Carro(object):
    def __init__(self, estado):
        self.estado = estado

bmw = Carro('semi-novo')
print(bmw.estado) # 'semi-novo'
```


### Herança

```python
class Veiculo(object):
    estado = "novo"

class Carro(veiculo):
    pass


bmw = Carro()
print(bmw.estado) # 'novo'
```