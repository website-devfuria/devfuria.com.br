/*

Faça um algoritmo que receba a idade de 1500 pessoas e que calcule e mostre a quantidade de
pessoas em cada faixa etária:

Faixa Etária		Idade
1a.					Até 15 anos
2a. 				De 16 a 30 anos
3a. 				De 31 a 45 anos
4a. 				De 46 a 60 anos
5a.					Acima de 61 anos

*/
#include <math.h>
#include <stdio.h>

int main()
{
	int quantidade = 5;			// quantas vezes repetiremos
	int idades[quantidade];		// vetor para armazenar as idades
	int i;					    // i de interator	

	// Resultados
	int ate_15        = 0;
	int entre_16_e_30 = 0;
	int entre_31_e_45 = 0;
	int entre_46_e_60 = 0;
	int acima_de_60   = 0;

	// recebe as idades
	for(i = 0; i < quantidade; i++){
		printf("Digite a idade:");
		scanf("%d" , &idades[i]);
	}

	// Calcula os resultados conforme a tabela e
	// aproveitamos para armazenar os resultados
	for(i = 0; i < quantidade; i++){
		if(idades[i] <= 15){
			ate_15++;
		}else if(idades[i] >= 16 && idades[i] <= 30){
			entre_16_e_30++;
		}else if(idades[i] >= 31 && idades[i] <= 45){
			entre_31_e_45++;
		}else if(idades[i] >= 46 && idades[i] <= 60){
			entre_46_e_60++;
		}else if(idades[i] >= 61){
			acima_de_60++;
		}else{
			printf("nenhuma opção");
		};
	};


	// Mostrar os resultados
	printf("Até 15 anos = %d\n", ate_15);
	printf("De 16 a 30 anos = %d\n", entre_16_e_30);	
	printf("De 31 a 45 anos = %d\n", entre_31_e_45);	
	printf("De 46 a 60 anos = %d\n", entre_46_e_60);	
	printf("Acima de 61 anos = %d\n", acima_de_60);	


	return 0;
}

/*
Primeiro, vamos resolver a tabela.

	"até 15 anos" significa idade <= 15, ou seja, idade menor ou igual a 15 anos

	de 16 a 30 anos significa idade >= 16 E idade <= a 30, ou seja, maior ou igual que 16 e menor ou igual a 30 anos

	de 31 a 45 anos significa idade >= 31 E idade <= a 45, ou seja, maior ou igual que 31 e menor ou igual a 45 anos

	de 46 a 60 anos significa idade >= 46 E idade <= a 60, ou seja, maior ou igual que 46 e menor ou igual a 60 anos

	acima de 61 anos signinifica, idade > 61, ou seja, maior que 61 anos

Nossa tabela ficará assim:

Faixa Etária		Idade
1a.					idade <= 15
2a. 				idade >= 16 E idade <= a 30
3a. 				idade >= 31 E idade <= a 45
4a. 				idade >= 46 E idade <= a 60
5a.					idade >= 61


Agora, vamos montar o laço if:

	#include <math.h>
	#include <stdio.h>

	int main()
	{

		int idade;

		if(idade <= 15){
	
		}else if(idade >= 16 && idade <= 30){
	
		}else if(idade >= 31 && idade <= 45){
	
		}else if(idade >= 46 && idade <= 60){
	
		}else if(idade >= 61){
	
		};


		return 0;
	}


Compile o código acima.
Compilou? ok, vamos continuar.



Agora vamos colocar uns "printf" para ver se o negócio funciona.

Eu coloquei um scanf para podermos entrar com algum valor.
E coloquei também um útltimo "else" no caso desse valor não bater
com a nossa regra.

int main()
{
	int idade;

	printf("Digite a idade:");
	scanf("%d" , &idade);

	if(idade <= 15){
		printf("Até 15 anos");
	}else if(idade >= 16 && idade <= 30){
		printf("De 16 a 30 anos");	
	}else if(idade >= 31 && idade <= 45){
		printf("De 31 a 45 anos");	
	}else if(idade >= 46 && idade <= 60){
		printf("De 46 a 60 anos");	
	}else if(idade >= 61){
		printf("Acima de 61 anos");	
	}else{
		printf("nenhuma opção");
	};

	return 0;
}



Agora teste todos os valores.

Reparou que a tabela da prova está furada?
Olhe para a 5 e 4 faixa etária:

4a. 				De 46 a 60 anos
5a.					Acima de 61 anos

A pessoa pode ter entre 46 e 60.
E também acima de 61, ou seja começando de 62, 63, 64, 65, etcc.. . 

E quem tiver exatamente 61 anos?
Não cairá na tabela ...erro do seu professor.

Tudo vamos concertar a tabela dele:

Faixa Etária		Idade
1a.					Até 15 anos
2a. 				De 16 a 30 anos
3a. 				De 31 a 45 anos
4a. 				De 46 a 60 anos
5a.					Acima de 60 anos <--- mudei apenas esta linha, de 61 para 60.

Por isso que eu digo que os professores são uns malas.

Mas, voltemos ao nosso código.
Não precisamos fazer nada para arrumar, pois eu já arrumei.
O último "else" na forma errada era: 

	idade > 61

e na forma correta ficou assim:

	idade >= 61


Faça uma pausa!
Tenha certeza de que entendeu tudo até aqui, se não
não conseguirá continuar.
Qualquer coisa eu te ligo e explico até este nosso "primeiro ponto de parada", ok?






Continuando...
O mais difícil vc já fez, agora falta:

01) receber várias idades (eu sei que é 1500, mas, obviamente, vamos começar com apenas 5).
02) passar essas idades pelo nosso "if" e
03) anotar a quantidade dos resultados.
04) mostar na tela os resultados.


### ITEM 01
Para receber várias idades eu fiz o seguinte:

int main()
{
	int quantidade = 5;
	int idades[quantidade];
	int i;// i de interator

	for(i = 0; i < quantidade; i++){
		printf("Digite a idade:");
		scanf("%d" , &idades[i]);
	}

	... aqui eu suprimi o código

	return 0;
}

Explico:
A variável servirá de ponto único para alterarmos quantas vezes o
código pedirá para inserir a idade.
Como eu falei, vamos começar com cinco, se dar certo no final bastará mudar para 1500.

Vamos utilizar um vetor chamado idades (no plural) e inicializamos ele com
o valor de "quantidade".

A variável i é apenas para percorremos o laço for.

O laço for receberá 5 vezes a idades e armazenará isso em um vetor, tudo bem?



### ITEM 2
Com o vetor preenchido basta passar o valor pelo nosso "if".
Para isso eu coloquei código "if" dentro de um laço for veja:

	for(i = 0; i < quantidade; i++){
		if(idades[i] <= 15){
			printf("Até 15 anos\n");
		}else if(idades[i] >= 16 && idades[i] <= 30){
			printf("De 16 a 30 anos\n");	
		}else if(idades[i] >= 31 && idades[i] <= 45){
			printf("De 31 a 45 anos\n");	
		}else if(idades[i] >= 46 && idades[i] <= 60){
			printf("De 46 a 60 anos\n");	
		}else if(idades[i] >= 61){
			printf("Acima de 61 anos\n");	
		}else{
			printf("nenhuma opção");
		};
	};

Repare que eu tive fazer um pequeno ajuste, mudei o nome da variál "idade" para "idades".



Juntando o item 1 e 2 temos o seguinte código:

#include <math.h>
#include <stdio.h>

int main()
{
	int quantidade = 5;

	int idades[quantidade];
	int i;// i de interator

	for(i = 0; i < quantidade; i++){
		printf("Digite a idade:");
		scanf("%d" , &idades[i]);
	}

	for(i = 0; i < quantidade; i++){
		if(idades[i] <= 15){
			printf("Até 15 anos\n");
		}else if(idades[i] >= 16 && idades[i] <= 30){
			printf("De 16 a 30 anos\n");	
		}else if(idades[i] >= 31 && idades[i] <= 45){
			printf("De 31 a 45 anos\n");	
		}else if(idades[i] >= 46 && idades[i] <= 60){
			printf("De 46 a 60 anos\n");	
		}else if(idades[i] >= 61){
			printf("Acima de 61 anos\n");	
		}else{
			printf("nenhuma opção");
		};
	};

	return 0;
}

Entendeu o código?
Compilou?
Testou?

Então vamos continuar. 

### ITEM 03

O item 3 é "anotar a quantidade dos resultados".

Temos cinco possíveis resultado, logo vou utilizar cinco variáveis
para "ir contando" os resultados.

	int ate_15        = 0;
	int entre_16_e_30 = 0;
	int entre_31_e_45 = 0;
	int entre_46_e_60 = 0;
	int acima_de_60   = 0;

Coloquei um nome para falicitar o entendimento.
Repara que eu aproveito para inicializar com zero todas as variáveis.

Agora, dentro dos nosso "if", no lugar dos "printf"
coloque suas respctivas variáveis.

	for(i = 0; i < quantidade; i++){
		if(idades[i] <= 15){
//			printf("Até 15 anos\n");
			ate_15++;
		}else if(idades[i] >= 16 && idades[i] <= 30){
//			printf("De 16 a 30 anos\n");	
			entre_16_e_30++;
		}else if(idades[i] >= 31 && idades[i] <= 45){
//			printf("De 31 a 45 anos\n");	
			entre_31_e_45++;
		}else if(idades[i] >= 46 && idades[i] <= 60){
//			printf("De 46 a 60 anos\n");	
			entre_46_e_60++;
		}else if(idades[i] >= 61){
//			printf("Acima de 61 anos\n");	
			acima_de_60++;
		}else{
			printf("nenhuma opção");
		};
	};

Eu comentei os "printf" para ajudar no entendimento (deixe eles aí, NÂO apague)
Coloque o operador "++" na frente de cada variável para "ir contando", tudo bem?
Conhece esse operador?

Compile o código e teste.


### ITEM 04

Agora só falta mostrar o tela os resultados.  Bábinha!

Lembra que eu falei para não apaguar os "printf" que comentamos? então...
Vamos recortar e colar cada um dos printf no final do código, dessa forma:

	printf("Até 15 anos = %d\n", ate_15);
	printf("De 16 a 30 anos = %d\n", entre_16_e_30);	
	printf("De 31 a 45 anos = %d\n", entre_31_e_45);	
	printf("De 46 a 60 anos = %d\n", entre_46_e_60);	
	printf("Acima de 61 anos = %d\n", acima_de_60);	

repare que eu acresentei as variáveis, obviamente!

Pronto, se sobreviveu até aqui parabés! bjs!

Código final:


#include <math.h>
#include <stdio.h>

int main()
{
	int quantidade = 5;			// quantas vezes repetiremos
	int idades[quantidade];		// vetor para armazenar as idades
	int i;					    // i de interator	

	// Resultados
	int ate_15        = 0;
	int entre_16_e_30 = 0;
	int entre_31_e_45 = 0;
	int entre_46_e_60 = 0;
	int acima_de_60   = 0;

	// recebe as idades
	for(i = 0; i < quantidade; i++){
		printf("Digite a idade:");
		scanf("%d" , &idades[i]);
	}

	// Calcula os resultados conforme a tabela e
	// aproveitamos para armazenar os resultados
	for(i = 0; i < quantidade; i++){
		if(idades[i] <= 15){
			ate_15++;
		}else if(idades[i] >= 16 && idades[i] <= 30){
			entre_16_e_30++;
		}else if(idades[i] >= 31 && idades[i] <= 45){
			entre_31_e_45++;
		}else if(idades[i] >= 46 && idades[i] <= 60){
			entre_46_e_60++;
		}else if(idades[i] >= 61){
			acima_de_60++;
		}else{
			printf("nenhuma opção");
		};
	};


	// Mostrar os resultados
	printf("Até 15 anos = %d\n", ate_15);
	printf("De 16 a 30 anos = %d\n", entre_16_e_30);	
	printf("De 31 a 45 anos = %d\n", entre_31_e_45);	
	printf("De 46 a 60 anos = %d\n", entre_46_e_60);	
	printf("Acima de 61 anos = %d\n", acima_de_60);	


	return 0;
}

*/

