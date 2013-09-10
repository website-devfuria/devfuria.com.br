Exercício 2
===

Escreva um algoritmo que mostre a área quadrada de um espaço qualquer 
(os valores desse espaço são atribuídos arbitrariamente pelo programador).


### Comentários

A primeira lição que tiramos deste exercício é a diferença entre “lógica pura” e “conhecimento alheio”.

Neste caso, conhecimento alheio é saber que o metro quadrado é obtido através de uma simples multiplicação(lado x lado)
e lógica pura seria o algoritmo que expressa a multiplicação de dois números.

Se este exercício estivesse escrito assim “escreva um algoritmo para calcular as área de um retângulo de dimensões
quaisquer” ele teria a mesma solução, então vamos à ela.

Sabendo que temos que multiplicar dois números para encontrar o metro quadrado a solução aparece rapidamente...



### Solução

<div class="code">
<h6>PHP - Solução para o exercício 2</h6>
<pre>&lt;?php

$lado_um = 7;   // poderia ser qualquer valor
$lado_dois = 2; // poderia ser qualquer valor

$metro_quadrado = $lado_um * $lado_dois;

echo $metro_quadrado; // mostra na tela “14”
?&gt;</pre>
</div>