#include <stdio.h>
#include <stdlib.h>
 
int main()
{
    
	FILE *pf;
	float pi = 3.141516;
	float pilido;

	/* Abre arquivo binário para escrita */
	if((pf = fopen("arquivo.bin", "wb")) == NULL) 
	{
		printf("Erro na abertura do arquivo");
		exit(1);    
	}

	/* Escreve a variável pi */
	if(fwrite(&pi, sizeof(float), 1,pf) != 1) {
		printf("Erro na escrita do arquivo");
	}
	
	/* Fecha o arquivo */
	fclose(pf); 
                              
	/* Abre o arquivo novamente para leitura */
	if((pf = fopen("arquivo.bin", "rb")) == NULL) 
	{
	   printf("Erro na abertura do arquivo");
	   exit(1);
	}

	/* Le em pilido o valor da variável armazenada anteriormente */
	if(fread(&pilido, sizeof(float), 1,pf) != 1) {
		printf("Erro na leitura do arquivo");
	}

	printf("\nO valor de PI, lido do arquivo e': %f", pilido);
	fclose(pf);

	return 0;
}
