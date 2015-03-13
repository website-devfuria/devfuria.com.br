---
layout:      grid93-article
title:       "Vetor cópia "
description: Exercício de lógica de programação envolvendo vetor e os diversos tipos de laços.
menu:        logica-exerc-nivel-04v
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Crie um algoritmo para copiar um vetor (utilize laço de repetição).

Use a nomenclatura `vetor1` para o vetor original e `vetor2` para o vetor copiado.



Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>

int main() {


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



### Desafio

Nesse exercício nós utilizamos valor arbitrários, o ideal seria construir um código reutilizável.

Refaça o exercício utilizando funções, teste 2 vetores diferentes (ao invés de um só).




Linguagem Python
---

Em Python, a princípio, não precisamos nem de lógica.

Podemos compara as listas diretamente.

```python
lista1 = [10, 20, 30]
lista2 = [10, 20, 30]

assert lista1 == lista2
```