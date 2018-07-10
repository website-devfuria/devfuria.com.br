---
title:       Recursividade e Algoritmos Recursivos
description: Exemplos práticos de recursão em Python, C e JavaScript
capitulo:    logica-nivel-6
ordem:       1
---



Função recursiva é aquela que invoca a si mesma.

Veja o exemplo abaixo em Python.

```python
>>> def contagemRegressiva(n):
...   if n == 0:
...     print('Decolar!')
...   else:
...     print(n)
...     contagemRegressiva(n-1)
...
>>> contagemRegressiva(5)
5
4
3
2
1
Decolar!
```

Uma outra forma de entender a recursão é comparar o código ao seu equivalente com laço de repetição.

```python
>>> def contagemRegressiva(n):
...   while(n):
...     print(n)
...     n = n - 1
...   print('Decolar!')
...
>>> contagemRegressiva(5)
5
4
3
2
1
Decolar!
```

Uma definição mais formal de recursão seria....

> Em programação, a recursividade é um mecanismo útil e poderoso que permite a uma função chamar a si mesma direta ou
> indiretamente, ou seja, uma função é dita recursiva se ela contém pelo menos uma chamada explícita ou implícita a si
> própria.
>
> Prof. Wellington Lima dos Santos (Unicamp)


Vejamos abaixo um outro exemplo iterativo em C.

```c
#include <stdio.h>

int foo(int i) {
    for(; i < 4; i++) {
        printf("%d\n", i);
    }
}

int main() {
    foo(0);
    return 0;
}
```

E agora, seu equivalente recursivo também em C.

```c
#include <stdio.h>

int foo(int i) {
    if (i < 4) {
        printf("%d\n", i);
        foo(i + 1);
    }
}

int main() {
    foo(0);
    return 0;
}
```

Ambos os códigos produzem a mesma saída...

```
0
1
2
3
```

Para não deixar o JavaScript de lado, eu trouxe um exemplo que utiliza função `setTimeout()`. Ela executará determinada
função (passada como primeiro parâmetro) em um intervalo de tempo definido no segundo parâmetro. Neste exemplo, estou
passando para `SetTimout` a própria função e gerando assim a recursividade.

```javascript
var recursiva = function () {
    console.log("Se passaram 1 segundo!");
    setTimeout(recursiva, 1000);
}
recursiva();
```

O resultado será como o exibido abaixo.

```
Se passaram 1 segundo!
Se passaram 1 segundo!
Se passaram 1 segundo!
etc...
```

E aí, conseguiu entender o que é recursividade?

Os exemplos mais clássicos de recursão é o algoritmo que calcula o fatorial e o a escala de Fibonacci. Em breve
escreverei sobre estes dois exemplos, porém neste artigo, eu quis trazer exemplos mais simples para facilitar o entendimento.

<iframe width="560" height="315" src="https://www.youtube.com/embed/lDQZrhrCK_4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
