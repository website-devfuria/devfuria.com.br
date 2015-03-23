---
layout:      grid93-article
title:       "Valores repetidos em vetor "
description: Exercício de lógica de programação para descobrir se em um determinado vetor existem ou não valores repetidos.
menu:        logica-exerc-nivel-04v
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Faça um programa que identifique se em um determinado vetor, existem ou não valores repetidos.


Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>

int main() {


    // Aqui entra a lógica do programa.


    //
    // Teste
    //
    assert(1== resp);

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
    assert(1== resp);

    return (0);
}
```




Linguagem Python
---

Dica: em Python tente remover os duplicados e depois comparar os tamanho da lista original.

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

Olhando para o código percebo que tenho uma função com duas responsabilidades: remover duplicados e comparar tamanhos.

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

Estou olhando para `removerDuplicados()` e me pergunto: dá para simplificar?

Fuçando na "net" descobri que posso resolver a função em uma única linha utilizando `set()`.

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

Quem não conhece a função `set()` do Python vai ficar meio na dúvida do funcionamento do código, mas codificar pensando
no desenvolvedor iniciante está fora de cogitação. Neste caso, nada que um bom comentário não resolva.

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




Outras linguagens
---

Este exercício me fez refletir um pouco mais.

Se por um lado "escovamos bit" na linguagem C, pelo outro usamos algo bem particular da linguagem Python. Então creio que
ficamos em 8 e 80, dois extremos. Eu já estou me perguntando como seria essa solução em outras linguagens como, por 
exemplo, PHP, JavaScript, Ruby, Java, etc...

Em breve voltarei aqui para experimentar outra soluções, mas se você quiser colaborar fique à vontade!