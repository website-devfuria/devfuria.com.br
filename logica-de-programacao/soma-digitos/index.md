---
title:       Somar dígitos
description: Exercício de lógica de programação para somar os dígitos de um número inteiro.
capitulo:    logica-nivel-3
ordem:       2
---



Exercício de lógica de programação
---

Faça um programa para somar os dígitos de um inteiro

Sem utilizar recursos de string, ou seja, trabalhe apenas com tipos numéricos.

Somar dígitos significa que dados um número qualquer, exemplo, 2015, devemos somar seus dígitos:

    2  +  0 +  1 +  5

O resultado esperado para o número acima seria 8.



Linguagem C
---


```c
#include <stdio.h>
#include <assert.h>

//
// Função que soma os dígitos de um número
//
int somarDigitos(int numero) {


    // Aqui entra a lógica do programa.


}

//
// Testes
//
int main() {

    assert(8 == somarDigitos(2015));
    assert(15 == somarDigitos(456));

    return 0;
}
```


### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

//
// Função que soma os dígitos de um número
//
int somarDigitos(int numero) {
    int soma = 0;

    while (numero != 0) {
        soma   += numero % 10;
        numero  = numero / 10;
    }

    return soma;
}

//
// Testes
//
void main() {
    assert(8 == somarDigitos(2015));
    assert(15 == somarDigitos(456));
}
```


Linguagem Python
---

```python
# -*- coding: utf-8 -*-

def somarDigitos(numero):
    pass


assert 8 == somarDigitos(2015), "a soma dos dígitos de 2015 devem ser 8"
assert 15 == somarDigitos(456), "a soma dos dígitos de 456 devem ser 15"
```


### Solução em Python (imitando a linguagem C)

Nós poderíamos simplesmente imitar a solução apresentada para a linguagem C, e porque não?

A idéia deste curso de lógica (o formato dela) é exatamente isso, mostrar as diversas perspectivas.

```python
# -*- coding: utf-8 -*-

#
# Código bugado..
#

def somarDigitos(numero):
    soma = 0

    while numero is not 0:
        soma   += numero % 10
        numero  = numero / 10

    return soma


assert 8 == somarDigitos(2015), "a soma dos dígitos de 2015 devem ser 8"
assert 15 == somarDigitos(456), "a soma dos dígitos de 456 devem ser 15"
```

O mais legal é que o código acima possui um bug, entra em loop infinito.

Você consegue dizer o porquê?

No momento em que atribuímos `numero / 10` à variável `numero` a linguagem C converte o valor decimal para inteiro, pois
o tipo da variável `numero` é `int`. Só que essa conversão implica em um arredondamento... e esse arredondamento está
implícito em nossa lógica ao resolver o problema desse jeito.

Viu como é legal estudar mais de uma linguagem juntas?

Então, para resolver este problema, temos que avisar o Python para fazer essa conversão.

```python
# -*- coding: utf-8 -*-

def somarDigitos(numero):
    soma = 0

    while numero is not 0:
        soma   += numero % 10
        numero  = int(numero / 10) # <---- atenção

    return soma


assert 8 == somarDigitos(2015), "a soma dos dígitos de 2015 devem ser 8"
assert 15 == somarDigitos(456), "a soma dos dígitos de 456 devem ser 15"
```


### Solução em Python (procurando outro caminho)


Pensando apenas em Python e esquecendo a forma como implementamos em C, imaginei que poderíamos fazer isso...

```python
#
# Sonho meu...
#
num = 2015
soma = 0

for n in num:
    soma += n
```

Mas o tipo numérico não é iterável (iterable), mas uma lista é, então...

```python
numList = [2, 0, 1, 5]
soma = 0

for n in numList:
    soma += n

return soma
```

O código acima é perfeito, mas como transformar o número em uma lista?

O mais óbvio seria...

```python
numStr  = str(2015)
soma = 0

for n in numStr:
    soma += int(n)

return soma
```

Mas o exercício diz para não utilizarmos o recurso de strings.

Poderia criar a lista conforme o código abaixo, mas ainda haveria a conversão para string.

```python
numList = [int(i) for i in str(2015)]
soma = 0

for n in numStr:
    soma += n
```

Simplificando mais um pouco, acabo encontrando outra forma. Porém, ainda vemos a conversão.

```python
numStr = map(int, str(2015))
soma = 0

for n in numStr:
    soma += n

return soma
```

Legal, descobri que não há uma conversão direta de número para lista em Python e, após um longa divagação, percebe-se
que todas as soluções recaem na solução inicial, portanto, sou obrigado a admitir que a primeira solução é a mais indicada.



Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

var somarDigitos = function(numero) {



}


//
// Testes
//
try {

    assert.equal(8, somarDigitos(2015));
    assert.equal(15, somarDigitos(456));

} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript (Node.js)

Da mesma forma que Python, em Javascript precisamos converter o resultado da divisão para o tipo inteiro.

```javascript
var assert = require('assert');

var somarDigitos = function(numero) {
    var soma = 0;

    while (numero != 0) {
        soma   += numero % 10;
        numero  = parseInt(numero / 10); // <--- atenção
    }

    return soma;
}


//
// Testes
//
try {

    assert.equal(8, somarDigitos(2015));
    assert.equal(15, somarDigitos(456));

} catch(e) {
    console.log(e);
}
```



