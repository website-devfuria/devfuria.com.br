---
title:       Algoritmo para copiar um vetor
description: Exercício de lógica de programação  para copiar um vetor
capitulo:    logica-nivel-4-vetores
ordem:       3
---



Exercício de lógica de programação
---

Crie um algoritmo para copiar um vetor (utilize laço de repetição).

Use a nomenclatura `vetor1` para o vetor original e `vetor2` para o vetor copiado.

<iframe width="560" height="315" src="https://www.youtube.com/embed/J7uf_rCHvDI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>




Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>

int main() {

    int vetor1[3] = {10, 20, 30},
        vetor2[3];

    // Aqui entra a lógica do programa.


    //
    // Testes
    //
    assert(vetor2[0] == 10);
    assert(vetor2[1] == 20);
    assert(vetor2[2] == 30);

    return 0;
}
```

### Solução na linguagem C

Já sabemos que em C, se quisermos trabalhar com vetor e funções, teremos que passar um valor extra como parâmetro
indicando o tamanho do vetor. Então, para simplificar o resultado, não utilizamos funções.

Repare também que incluímos a variável `i`.

```c
#include <stdio.h>
#include <assert.h>

int main() {

    int i,
        vetor1[3] = {10, 20, 30},
        vetor2[3];

    for(i = 0; i < 3; i++) {
        vetor2[i] = vetor1[i];
    }

    //
    // Testes
    //
    assert(vetor2[0] == 10);
    assert(vetor2[1] == 20);
    assert(vetor2[2] == 30);

    return 0;
}
```



Linguagem Python
---

Em Python, a princípio, não precisamos nem de lógica, podemos criar a outra lista fazendo uma simples atribuição.

```python
# -*- coding: utf-8 -*-

lista1 = [10, 20, 30]
lista2 = lista1

#
# Será que as listas são iguais?
#
assert lista1 == lista2
```

O que estamos fazendo na verdade é criar uma referência para a `lista2`, ou seja, as alterações na `lista1` refletem na
`lista2`. Podemos tirar uma cópia real (um clone) utilizando-se o operador de fatia `[:]`, veja...

```python
# -*- coding: utf-8 -*-

lista1 = [10, 20, 30]
lista2 = lista1[:]

#
# Será que as listas são iguais?
#
assert lista1 == lista2
```

Leia mais sobre [listas](/python/listas/) na seção Python.

Mas os exercícios envolvendo vetores (listas) são para treinarmos os laços de repetição, então vamos ver como seria um
código semelhante ao mostrado na linguagem C.

```python
# -*- coding: utf-8 -*-

lista1 = [10, 20, 30]

lista2 = []
for i in lista1:
    lista2.append(i)

#
# Será que as listas são iguais?
#
assert lista1 == lista2
```

Em Python podemos utilizar lista e funções sem o inconveniente de ter que passar o tamanho da lista como parâmetro extra.

```python
# -*- coding: utf-8 -*-

def copiarLista(lista1):
    nova_lista = []
    for i in lista1:
        nova_lista.append(i)
    return nova_lista

#
# Será que as listas são iguais?
#
lista1 = [10, 20, 30]
lista2 = copiarLista(lista1)
assert lista1 == lista2
```

Que tal simplificarmos o teste?

```python
...

#
# Testes
#
assert [10, 20, 30] == copiarLista([10, 20, 30])
```


Linguagem JavaScript (Node.js)
---

Em JavaScript também não podemos simplesmente atribuir de uma variável para outra pois estaríamos, na verdade, criando
um vínculo com a variável anterior e não, de fato, criando uma cópia independente (um clone).

```javascript
var a = [1, 2]
console.log(a); // [ 1, 2 ]

var b = a
console.log(b); // [ 1, 2 ]

a.push(3)
console.log(a); // [ 1, 2, 3 ]
console.log(b); // [ 1, 2, 3 ]
```

Para efetuarmos um cópia, ou melhor, um clone, podemos fazer simplesmente isso...

    var b = a.slice();

E também poderíamos criar o clone através de um laço de repetição.

Mas repare bem que mudamos o teste.

```javascript
var assert = require('assert');

//
// Seu código
//
var clonar = function(data){
    var clone = [];
    for(var i = 0; i < data.length; i++){
        clone.push(data[i]);
    }
    return clone;
}
//
// Seu teste
//
try {

    assert.deepEqual([10, 20, 30, 0], clonar([10, 20, 30, 0]));

} catch(e) {
    console.log(e);
}
```

Para comparar dois arrays precisamos usar `deepEqual()` ao invés de `equal()`.



