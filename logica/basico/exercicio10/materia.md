Exercício 10
===

Calcular o juros simples produzido pelo empréstimo de R$ 16.000,00 sobre a taxa de 4% durante 4 meses.



### Comentários

Este exercício é provocativo e tem como objetivo dispertar em você a seguinte questão:

*Na maioria das vezes não é a lógica que vai resolver tudo e sim algum conhecimento sobre o assunto que se quer resolver.*

Neste caso, conhecendo o cálculo do juros simples fica fácil encontrarmos a solução.


Juros Simples

    J = C.i.n

Traduzindo...

    J = juros,
    C = capital,
    i = taxa de empréstimo e
    n = períodos.

Efetuando o calculo...

    J = 16.000 * 0.03 * 4

.. temos o resulado:

    J = 1.920,00

Agora é só programar (já sabemos até o resultado do algorítimo) !



### Solução

Seguindo o cálculo acima o pseudocódigo ficariam assim:

<div class="code">
<h6>PORTUGOL</h6>
<pre><em>INÍCIO</em>

// incializar as variáveis
juros_simples = 0
capital       = 16.000
taxa          = 3/100
periodo       = 4 // meses

// Efetuar o cálculo
juros_simlpes = capital * taxa * periodo

// Mostrar na tela
mostrar juros simples

<em>FIM</em></pre>
</div>