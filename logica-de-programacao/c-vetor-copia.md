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

Já sabemos que em C, se quisermos trabalhar com vetor e funções, teremos que passar um valor extra como parâmetro 
indicando o tamanho do vetor. Então, para simplificar o resultado, não utilizamos funções.

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
# -*- coding: utf-8 -*-

def copiarLista(lista1):
	nova_lista = []
	for i in lista1:
		nova_lista.append(i)
	return nova_lista

#
# Testes
#
assert [10, 20, 30] == copiarLista([10, 20, 30])
```


