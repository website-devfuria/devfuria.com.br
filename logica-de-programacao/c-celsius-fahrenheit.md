---
layout:      grid93-article
title:       "Conversor Celsius/Fahrenheit "
description: Exercício de lógica de programação para converter celsius em fahrenheit e vice versa.
menu:        logica-exerc-nivel-02
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---
        
Crie duas funções para conversão de temperaturas. 

Uma converterá celsius em fahrenheit e a outra fará o inverso.

Saiba que 100c é igual a 212f, veja fórmula:

       C          F - 32
    -------  =  ---------
       5            9 
       

 
Linguagem C
---



```c
#include <stdio.h>
#include <assert.h>

//
// Converte fahrenheit em celsius
//
int toCelsius(int fahrenheit) {

    // Aqui entra a lógica do programa.

}

//
// Converte celsius em fahrenheit
//
int toFahrenheit(int celsius) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main (){

    int celsius    = 100;
    int fahrenheit = 212;

    assert(celsius == toCelsius(fahrenheit));
    assert(fahrenheit == toFahrenheit(celsius));

    return 0;
}
``` 



### Solução na linguagem C
       
```c
#include <stdio.h>
#include <assert.h>

//
// Converte fahrenheit em celsius
//
int toCelsius(int fahrenheit) {
    return 5 * (fahrenheit - 32) / 9;
}

//
// Converte celsius em fahrenheit
//
int toFahrenheit(int celsius) {
    return celsius / 5 * 9 + 32;
}

//
// Testes
//
int main (){

    int celsius    = 100;
    int fahrenheit = 212;

    assert(celsius == toCelsius(fahrenheit));
    assert(fahrenheit == toFahrenheit(celsius));

    return 0;
}
```        