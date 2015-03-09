---
layout:      grid93-article
title:       "Simples exemplo de TDD - Conversor Celsius/Fahrenheit"
description: Neste exemplo de TDD criaremos duas funções para conversão de temperaturas. Uma função converterá celsius em fahrenheit e a outra fará o inverso.
menu:        tdd-exemplos-simples
---

{% include /menus/tdd-exemplos-simples-paraquedas.html %}

Neste exemplo de TDD criaremos duas funções para conversão de temperaturas. Uma função converterá celsius em fahrenheit 
e a outra fará o inverso.

Lembrando que estamos utilizando a linguagem C e funções.

Sabendo que 100c é igual a 212f, veja fórmula:

       C          F - 32
    -------  =  ---------
       5            9 
       

Podemos crair os primeiros os testes.

    int celsius    = 100;
    int fahrenheit = 212;

	assert(celsius == toCelsius(fahrenheit));
	assert(fahrenheit == toFahrenheit(celsius));

O mínimo para eles (os testes) passarem.

    int toCelsius(int fahrenheit) {
        return 100;
    }

    int toFahrenheit(int celsius) {
        return 212;
    }

Só nos resta a lógica, agora é com você.


### Código completo

```c
#include <stdio.h>
#include <assert.h>

int toCelsius(int fahrenheit) {
    return 5 * (fahrenheit - 32) / 9;
}

int toFahrenheit(int celsius) {
    return celsius / 5 * 9 + 32;
}

int main (){

    int celsius    = 100;
    int fahrenheit = 212;

    assert(celsius == toCelsius(fahrenheit));
    assert(fahrenheit == toFahrenheit(celsius));

    return 0;
}
```


Próximo exemplo
---

- [Simples exemplo de TDD - Equação de 2 grau](/tdd/exemplo-tdd-equacao-2grau/)
