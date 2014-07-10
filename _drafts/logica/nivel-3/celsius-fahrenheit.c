// Crie duas funções para conversão de temperaturas. Uma converterá celsius
// em fahrenheit e a outra fará o inverso.
//
// Saiba que 100c é igual a 212f, veja fórmula:
//
//     C          F - 32
//  -------  =  ---------
//     5            9
//
// gcc foo-01.c -o executavel.run
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
/*

1
    int celsius    = 100;
    int fahrenheit = 212;

	assert(celsius == toCelsius(fahrenheit));
	assert(fahrenheit == toFahrenheit(celsius));

2
int toCelsius(int fahrenheit) {
    return 100;
}
int toFahrenheit(int celsius) {
    return 212;
}

 */