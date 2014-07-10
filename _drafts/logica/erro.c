// https://groups.google.com/forum/#!topic/ccppbrasil/v3FGulHMGvA
#include <stdio.h>
#include <assert.h>
 
int main (){
 
    float a, b, resultado;
    a         = 9.0;
    b         = 80.0;
    resultado = 0.1125; // a / b
   
    // aqui está certo
    assert(resultado == a / b);
 
    // aqui está certo
    assert( 0.1125 == 9.0 / 80.0 );
 
 
    // Aqui está estranho!!!
    // A linguagem está considerando como diferentes (false)
    assert( a / b == 9.0 / 80.0 );
    // mensagem:
    // executavel.run: fonte.c:22: main: Assertion `a / b == 9.0 / 80.0' failed
   
   return 0;
}
// Estou compilando em um linux (centOS) com gcc desta forma:
// gcc erro.c -o executavel.run


