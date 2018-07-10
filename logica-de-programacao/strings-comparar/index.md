---
title:       Comparar duas strings
description: Exercício de lógica de programação para comparar duas strings.
capitulo:    logica-nivel-4-strings
ordem:       3
---



Exercício de lógica de programação
---

Faça um programa para comparar se duas strings são iguais.

__Comentários:__ este é mais um exercício para exercitarmos laços de repetição. Esta série referem-se as strings pois,
sabemos que em C as strings se assemelham a um vetor (`char string[]`).

<iframe width="560" height="315" src="https://www.youtube.com/embed/0qjDromTTy4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>



Linguagem C
---

Na linguagem C, como dito, sabemos que as strings em questão são 2 vetores e que o caminho mais provável seja comparar
os valores de ambos os vetores um a um. Utilize o código abaixo para encontrar a sua solução.

```c
#include <stdio.h>
#include <assert.h>

//
// Função que compara se duas string são iguais
//
int compararStrings(char str1[], char str2[]) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main() {

    char ola[]  = "ola";
    char ola2[] = "ola";
    assert(1 == compararStrings(ola, ola2));

    return 0;
}
```


### Solução na linguagem C

```c
//
// Função que compara se duas string são iguais
//
int compararStrings(char str1[], char str2[]) {
    int i = 0;

    do {
        if(str1[i] != str2[i]) {
            return 2;
        }
        i++;
    } while(str1[i] != 0);

    return 1;
}
```


### Desafio na linguagem C

A função abaixo também funciona, porém a implementação dela é bem diferente.

O desafio é entender o que está acontecendo.


    int compararStrings(char str1[], char str2[]) {
        int i = 0;

        for (i = 0; str1[i] == str2[i]; i++) {
            if (str1[i] == 0) {
                return 1;
            }
        }

        return 2;
    }





Linguagem Python
---

Em Python, no terminal, vemos que nosso objetivo (compara duas strings) é facilmente alcançado.

```python
>>> "palavra" == "palavra"
True
```

Como seria a solução se tivéssemos que construir um laço de repetição?

Vamos praticar...

```python
# -*- coding: utf-8 -*-

#
# Seu código
#
def compararString(a, b):
    pass


#
# Seu teste
#
cor1 = "laranja"
cor2 = "amarelo"
assert not compararString(cor1, cor2)
assert compararString(cor1, cor1)
```


### Solução na linguagem Python


```python
# -*- coding: utf-8 -*-

#
# Seu código
#
def compararString(a, b):
    i = 0
    while i < len(a):
        if a[i] != b[i]:
            return False
            break
        i += 1
    return True

#
# Seu teste
#
cor1 = "laranja"
cor2 = "amarelo"
assert not compararString(cor1, cor2)
assert compararString(cor1, cor1)
```


Linguagem JavaScript
---

Em JS temos a mesma facilidade....

```javascript
> "laranja" == "laranja"
true
> "laranja" != "amarelo"
true
>
```

O laço de repetição é trivial.



