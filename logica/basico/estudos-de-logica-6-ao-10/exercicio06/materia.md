Exercício 6
===

Calcular o total de dias de n meses, considerando que os meses tenham 30 dias.



### Comentários

Quando o enúnciado diz "n" meses, significa que ele aceitará um valor qualquer. Em C resolveríamos isso facilmente,
basta escrever:
    
    scanf("%d" , &n_meses);

Como estamos no mundo web, precisaríamos de um formulários web para a entrada de dados, isso é algo trivial, porém
bastante trabalhoso (no sentido de braçal).

No nosso caso vamos colocar um valor arbitrário apenas para que nãto precisemos construir o formulário.



### Solução

<div class="code">
<h6>PSEUDOCÓDIGO</h6>
<pre><em>INÍCIO</em>

n_meses = 3 // valor arbitrário

total_de_dias  = n_meses * 30

mostrar total_de_dias

<em>FIM</em></pre>
</div>