---
title:       Valores repetidos em vetor
description: Exercício de lógica de programação para descobrir se em um determinado vetor existem ou não valores repetidos.
capitulo:    logica-nivel-4-vetores
ordem:       5
---



Exercício de lógica de programação
---

Faça um programa que identifique se em um determinado vetor, existem ou não valores repetidos.

<iframe width="560" height="315" src="https://www.youtube.com/embed/_fO3TV4q7jU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>



Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>

int main() {
    int vet[5], tamanho = 5; // vetor e tamanho do vetor
    int i, j, resp = 0;      // auxiliares


    // Aqui entra a lógica do programa.


    //
    // Teste
    //
    assert(1 == resp);

    return (0);
}

```


### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int main() {

    int vet[5], tamanho = 5; // vetor e tamanho do vetor
    int i, j, resp = 0;      // auxiliares

    vet[0] = 100;
    vet[1] = 200;
    vet[2] = 300;
    vet[3] = 300; // valor repetido
    vet[4] = 500;

    for (i = 0; i <= tamanho; i++) {
        for (j = i + 1; j < tamanho; j++) {
            if (vet[j] == vet[i]) {
                resp = 1; // há um valor repetido
            }
        }
    }

    //
    // Teste
    //
    assert(1 == resp);

    return (0);
}
```




Linguagem Python
---

Dica: em Python tente remover os duplicados e depois comparar os tamanhos das listas.

Se os tamanhos forem iguais sabemos que não houve alteração, nem tão pouco valores repetidos.

Se os tamanhos forem diferentes é porque houve valores repetidos.

```python
# -*- coding: utf-8 -*-

#
# Sua lógica...
#
def haDuplicados(lista):
    pass



#
# Testes
#
assert haDuplicados([100, 200, 300, 300, 500])
assert not haDuplicados([100, 200, 300, 400, 500])
```

### Solução na linguagem Python

Este exercício de lógica é para praticar laços de repetição, então aí vai a primeira solução....

```python
def haDuplicados(lista):
    _lis = []

    # removendo duplicados
    for x in lista:
        if x not in _lis:
            _lis.append(x)

    # comparando os tamanhos
    if len(lista) != len(_lis):
        return True
    else:
        return False
```

Olhando para o código percebo que tenho uma função com duas responsabilidades: a) remover duplicados e b) comparar tamanhos.

Resolvo separar as obrigações em duas funções...

```python
def removerDuplicados(duplicado):
    _lis = []

    for x in duplicado:
        if x not in _lis:
            _lis.append(x)

    return _lis

def haDuplicados(lista):
    if len(lista) != len(removerDuplicados(lista)):
        return True
    else:
        return False
```

Já melhorou! Agora é nítido que o código funciona em duas etapas. Isso faz toda a diferença, por que agora estou olhando
individualmente para cada função.

Estou olhando para `removerDuplicados()` e me pergunto dá para simplificar?

Fuçando na Internet descobri que posso resolver a função em uma única linha utilizando `set()`.

```python
def removerDuplicados(duplicado):
    return set(duplicado)

def haDuplicados(lista):
    if len(lista) != len(removerDuplicados(lista)):
        return True
    else:
        return False
```

Olha que lindo! Eu gosto do código acima porque ele deixa bem claro qual é a intenção e o significado, mesmo para quem
não conhece a linguagem a fundo.

Porém, a função ficou tão pequena que resolvi eliminá-la.

```python
def haDuplicados(lista):
    if len(lista) != len(set(lista)):
        return True
    else:
        return False
```

Quem não conhece a função `set()` do Python vai ficar meio na dúvida do funcionamento do código.
Neste caso, nada que um bom comentário não resolva.

```python
# Descobre se há duplicados em duas etapas.
# 1- remove os duplicados `set()`
# 2- compara se os tamanhos foram alterados
def haDuplicados(lista):
    ...
```

Estando tudo no lugar, sobrou tempo para raciocinar melhor e percebemos que a expressão é o próprio resultado, então...

```python
def haDuplicados(lista):
    return len(lista) != len(set(lista))
```

Agora ficou ninja! Resolvemos tudo em um única linha.




Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.


```javascript
var assert = require('assert');

var haDuplicados = function(arr) {

    // aqui entra a sua lógica

}

//
// Seu teste
//
try {

    assert.equal(true, haDuplicados([100, 200, 300, 300, 500]));
    assert.equal(false, haDuplicados([100, 200, 300, 400, 500]));

} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript (Node.js)

Nós poderíamos imitar a linguagem C na solução, mas não precisamos nem perder o nosso tempo com isso. Também poderíamos
resolver em 2 passos, semelhante a solução em Python (removemos e depois comparamos o tamanho das listas).
Mas eu quero tentar algo diferente, será que conseguiremos descobrir se há ou não repetidos sem mexer no array?

Sim! Veja o código...

```javascript
var assert = require('assert');

var haDuplicados = function(arr) {
    var i;
    for(i = 0; i < arr.length; i++) {
        if(arr.indexOf(arr[i]) != i) {
            return true;
        };
    }
    return false;
}

//
// Seu teste
//
try {

    assert.equal(true, haDuplicados([100, 200, 300, 300, 500]));
    assert.equal(false, haDuplicados([100, 200, 300, 400, 500]));

} catch(e) {
    console.log(e);
}
```

Vou explicar o truque.

O segredo está na utilização da função embutida `indexOf()`, ela retorna o índice do valor procurado, por exemplo...

    var arr = [100, 200, 300, 300, 500];
    console.log(arr.indexOf(100)); // 0
    console.log(arr.indexOf(200)); // 1
    console.log(arr.indexOf(300)); // 2
    console.log(arr.indexOf(300)); // 2 <--- atenção
    console.log(arr.indexOf(500)); // 4

A função retorná sempre o primeiro valor encontrado e aqui está a mágica. Quando houver repetido, teremos um pequeno
desencontro entre valor e índice, veja as expressões abaixo...

    arr.indexOf(100) == 0; // true
    arr.indexOf(200) == 1; // true
    arr.indexOf(300) == 2; // true
    arr.indexOf(300) == 3; // false <--- aqui temos o valor repetido
    arr.indexOf(500) == 4; // true

Resumindo, sempre que houver valores repetidos teremos ao menos um valor `false`, logo basta percorrer o array e checar
se o valor atual bate com o índice (do laço, da iteração). Se ainda não entendeu, veja o código comentado abaixo.

```javascript
var haDuplicados = function(arr) {
    var i;
    //
    // Vamos percorrer o array e...
    //
    for(i = 0; i < arr.length; i++) {
        // ..se o índice do valor atual "indexOf(arr[i])"
        // for diferente do índice corrente "i"
        // retornamos "true"
        if(arr.indexOf(arr[i]) != i) {
            return true;
        };
    }
    // Se não houver repetido
    // retornamos false
    return false;
}
```
