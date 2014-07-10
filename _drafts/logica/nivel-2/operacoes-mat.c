// Escreva uma função para cada uma das quatro operações matemáticas simples
// (adição, subitrair, multiplicar e dividir)
//
// gcc operacoes-mat.c -o executavel.run
#include <stdio.h>
#include <assert.h>

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