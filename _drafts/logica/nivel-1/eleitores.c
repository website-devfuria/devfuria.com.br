// Considerando a tabela abaixo...
//
// total de eleitores = 1000
// válidos            = 800
// votos brancos      = 150
// nulos              = 50
//
// Calcular o percentual do votos válidos, brancos e nulos em relação ao total
// de eleitores.
//
// gcc eleitores.c -o executavel.run
//
#include <stdio.h>
#include <assert.h>
#include <math.h>

int main (){

	float totalEleitores = 1000,
		  validos = 800,
		  brancos = 150,
		  nulos = 50,
		  percValidos,
		  percBrancos,
		  percNulos;

	percValidos = validos / totalEleitores;
	percBrancos = brancos / totalEleitores;
	percNulos   = nulos   / totalEleitores; 

	// Testes
	assert(0.8f == percValidos);
	assert(0.15f == percBrancos);
	assert(0.05f == percNulos);

	return 0;
}
/*


1
	assert(0.8f == 800.0f / 1000.0f);


2
	float totalEleitores = 1000,
		  validos = 800;

	// Testes
	assert(0.8f == validos / totalEleitores);


3
	float totalEleitores = 1000,
		  validos = 800,
		  percValidos;

	
	percValidos = validos / totalEleitores;


	// Testes
	assert(0.8f == percValidos);

4
	float totalEleitores = 1000,
		  validos = 800,
		  percValidos;

	percValidos = validos / totalEleitores;

	// Testes
	assert(0.8f == percValidos);
	assert(0.15f == percBrancos);
	assert(0.05f == percNulos);

*/
