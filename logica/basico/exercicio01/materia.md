Exercício 1
===

Escreva um algoritmo que armazene o valor 10 em uma variável denominada “num\_a” e

também o valor 20 em uma variável denominada “num\_b”.

Agora, (apenas com o uso de atribuições) passe o valor de num\_a para num\_b e imprima os resultados.



### Comentários

Você entendeu o problema e o que se espera dele?

É importante que o enunciado seja lido com atenção e que ele não deixe dúvidas ou seja ambíguo.


Comece rascunhando a solução, passe a limpo, faça o diagrama e aplique o teste de mesa. Se estiver seguro, parta para 
a codificação (transformar o algoritmo em código fonte).

As primeiras atribuições são fáceis...

<div class="code menor">
<h6>PSEUDOCÓDIGO</h6>
<pre>num_a = 10

num_b = 20</pre>
</div>

Vamos pensar no resultado final

<div class="code">
<h6>PSEUDOCÓDIGO</h6>
<pre>imprimir num_a, num_b

// mostra na tela “20, 10”</pre>
</div>




### Solução

O que fazer para trocar os valores de uma variável para a outra?

Esse é o foco do problema. 

Se utilizar uma variável a mais, podemos resolver dessa forma...

<div class="code">
<h6>PSEUDOCÓDIGO</h6>
<pre><em>INÍCIO</em>

// Inicializar as variáveis
num_a = 10
num_b = 20
num_c = 0

// Efetuar a troca
num_c = num_a
num_a = num_b
num_b = num_c

// Mostrar na tela
imprimir num_a, num_b

<em>FIM</em></pre>
</div>


Agora em php...

<div class="code">
<h6>PHP - Solução para o exercício 1</h6>
<pre>&lt;?php

// Inicializar as variáveis
$num_a = 10;
$num_b = 20;
$num_c = null; // inicializamos os variáveis com null em PHP.

// Efetuar a troca
$num_c = $num_a;
$num_a = $num_b;
$num_b = $num_c;

// Mostrar na tela
echo “$num_a, $num_b”;
?&gt;</pre>
</div>