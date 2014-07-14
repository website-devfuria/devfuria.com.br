// Descobrir se um número qualquer é maior ou não que o valor inteiro 10.
//
// gcc maior-que-10.c -o executavel.run
#include <stdio.h>
#include <assert.h>

int eMaiorQue10(int valorQualquer) {
    if (valorQualquer > 10) {
        return 1;
    } else {
        return 0;
    }
}

int main (){
	assert(1 == eMaiorQue10(17));
	assert(0 == eMaiorQue10(9));
	return 0;
}