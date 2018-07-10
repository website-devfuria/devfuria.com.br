---
title:       Contar string
description: Exercício de lógica de programação para contar a quantidade de caracteres de uma string qualquer.
capitulo:    logica-nivel-4-strings
ordem:       1
---



Exercício de lógica de programação
---

Faça um programa para contar a quantidade de caracteres que ela contem.

**Comentário**: Este problema é para praticarmos laços de repetição e introduzirmos o conceito de __string__.

String é um conjunto de caracteres, mas seu significado por variar de uma linguagem para outra, como veremos neste artigo.

<iframe width="560" height="315" src="https://www.youtube.com/embed/FfgizKwmGeE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


Linguagem C
---

Em C o tipo __char__ é tido como um vetor, então temos as mesmas qualidades de um vetor.

Para utilizarmos um vetor como se fosse um string, seguimos o seguinte exemplo...

    char ola[] = "palavra";

Para encontrar a solução você poderá percorre esse vetor e checar se chegou ao fim da "string" comparando o valor atual
do vetor com zero dessa forma `ola[i] != 0`.

Espere aí, eu já estou lhe dando o resultado do problema! Não, não estou. É que a solução deste problema está mais
relacionada com o conhecimento que temos (ou não) da linguagem do que com a lógica.


```c
#include <stdio.h>
#include <assert.h>

//
// Função para contar caracteres de determinada string
//
int contaChar(char str[]) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main() {

    char ola[] = "palavra";
    assert(7 == contaChar(ola));

    return 0;
}
```



### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

//
// função para contar caracteres de determinada string
//
int contaChar(char str[]) {
    int i = 0;

    do {
        ++i;
    } while (str[i] != 0);

    return i;
}

//
// Início do programa
// e seus testes.
int main() {
    char ola[] = "palavra";
    assert(7 == contaChar(ola));
    return 0;
}
```

### Desafio na linguagem C

As funções abaixo também funcionam, porém a implementação é um pouco diferente.

Seu desafio é entender os seguintes códigos.

    int contaChar(const char *str) {
        int i = 0;
        for (; str[i] != 0; ++i);
        return i;
    }

A solução abaixo é do professor da [USP Paulo Feofiloff](http://www.ime.usp.br/~pf/algoritmos/aulas/bubi2.html).

    unsigned int strlen( string s) {
       int i;
       for (i = 0; s[i] != '\0'; ++i) ;
       return i;
    }


Linguagem Python
---

Em Python temos a função `len()` que aceita como parâmetro uma string e retorna o comprimento desta estring.

Em outras palavras, se o objetivo é saber o tamanho da string, não precisamos gastar nosso raciocínio.

Puxa vida, como a linguagem C é horrível e Python é maravilhosa... não pare de bobagem, não é nada disso e nem é esse a
proposta deste breve curso de lógica. A idéia é percebermos as diferenças entre as linguagens, mas sem preconceitos tolos.
Outra coisa, na linguagem C, se incluirmos a biblioteca `string.h` teremos uma vasta quantidade de funções prontas para
trabalharmos com strings, inclusive uma para determinar o tamanho de uma string `strlen()`.

```python
s = "palavra"
len(s)
# 7
```

Como a questão é para exercitar laço de repetição, vamos imaginar que precisamos fazer alguma coisa com as letras de
nossa string e, para tanto, precisamos iterar um laço de repetição.

```python
for letra in s:
    print(letra)
"""
'p'
'a'
'l'
'a'
'v'
'r'
'a'
"""
```

A linguagem C trata a string como sendo um vetor e, por tanto, podemos acessá-lo através de seu
índice. No mínimo curioso, é que em Python temos o mesmo aspecto, veja o trecho abaixo.

```python
s[0]  # 'p'
s[1]  # 'a'
s[2]  # 'l'
s[3]  # 'a'
s[4]  # 'v'
s[5]  # 'r'
s[6]  # 'a'
```

Então poderíamos fazer um laço `while` ao invés do laço `for`....

```python
while i < len(s):
    print(s[i])
    i = i + 1
"""
p
a
l
a
v
r
a
"""
```


E para finalizar, escrevi o código abaixo para ilustrar uma imitação do que fizemos em C.

```python
>>> s = "palavra"
>>> i = 0
>>> while i < len(s):
...     i = i + 1
...
>>> i
7
```




Linguagem JavaScript
---

Sem comentários...

```javascript
> "palavra".length
7
```

