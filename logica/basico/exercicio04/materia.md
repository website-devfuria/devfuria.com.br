Exercício 4
===

Sendo o número total de eleitores de um município = 25.639, o número de votos brancos = 1507, nulos = 2312 e
válidos = 21.820.

Calcular e escrever o percentual que cada um representa em relação ao total de eleitores.


### Comentários

A variável "total de eleitores" é a chave. Nós utilzaremos ela para achar os percentuais dos votos
brancos, nulos e válidos.

    totalEleitores = 25.639

O "percentual que cada um representa" significa, por exemplo:

    votos brancos / total de eleitores

Encontramos o resutlado:

    0.058777643

Multiplicamos por 100 para ilustrar uma porcentagem e não um decimal

    58.77 (arrendondamos mentalmente)



### Solução

<div class="code">
<h6>PORTUGOL</h6>
<pre><em>INÍCIO</em>

// Variável principal
totalEleitores = 25.639

// Cálculos
perVotosBrancos = 1507 / total_eleitores * 100
perVotosNulos = 2312 / total_eleitores * 100
perVotosValidos = 21.820 / total_eleitores * 100

// Exibir resultado
mostrar perVotosBrancos, perVotosNulos, perVotosValidos

</pre>
</div>