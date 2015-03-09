---
layout:      grid93-article
title:       "Simples exemplo de TDD - Funções para as 4 operações aritméticas"
description: Este é um exemplo de TDD que envolverá a construção de 4 funções, uma para cada operação matemática simples (adição, subtrair, multiplicar e dividir).
menu:        tdd-exemplos-simples
---

{% include /menus/tdd-exemplos-simples-paraquedas.html %}

Este é um exemplo de TDD que envolverá a construção de 4 funções, uma para cada operação matemática simples (adição, 
subtrair, multiplicar e dividir).

Quatro operações é muito trabalho, então vamos dividir para conquistar, comecemos pela adição.
   
	assert(12 == somar(10, 2));

Explicando, `10` é a parcela original e `2` é a parcela adicionada.

Vamos fazer o sistema compilar e passar no teste, o que acha? Podemos dar um salto desse tamanho? Claro que sim, se nos
sentirmos seguro em relação a isso.

Lembrando que __TDD__ não diz para ficar dando passo pequenos mas sim __saber__ dar passos pequenos. 

    int somar(int num, int add) {
        return num + add;
    }

Agora podemos atacar a subtração, escreva o teste.

	assert(8 == subtrair(10, 2));

Antes de continuar, vamos substituir o valor `10` para um única variável? Meu código ficou assim...

    int main (){

        int num = 10;

        assert(12 == somar(num, 2));
        assert(8 == subtrair(num, 2));

        return 0;
    }

Continuando, a subtração poderá ser resolvida da seguinte forma.

    int subtrair(int num, int sub) {
        return num - sub;
    }

Testes rodando? Sim? Então poderemos atacar a multiplicação e a divisão.

Acredito que, neste ponto, você já consegue andar sozinho(a), o que acha?

Então termine o exercício.


### Código completo

```c
#include <stdio.h>
#include <assert.h>

// as funções são tão pequenas e tão concisas que nem precisam de comentários

int somar(int num, int add) {
    return num + add;
}
int subtrair(int num, int sub) {
    return num - sub;
}
int multiplicar(int num, int mult) {
    return num * mult;
}
int dividir(int num, int divisor) {
    return num / divisor;
}

int main (){
    
    int num = 10;
    
	assert(12 == somar(num, 2));
	assert(8 == subtrair(num, 2));
	assert(20 == multiplicar(num, 2));
	assert(5 == dividir(num, 2));
    
	return 0;
}
```
        

Próximo exemplo
---

- [Simples exemplo de TDD - Conversor Celsius/Fahrenheit](/tdd/exemplo-tdd-celsius-fahrenheit/)
