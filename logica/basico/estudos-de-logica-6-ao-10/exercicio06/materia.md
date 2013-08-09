Exercício 6
===

O custo de um carro novo ao consumidor é a soma do custo de fábrica com a porcentagem do distribuidor e dos impostos
(aplicados ao custo de fábrica). Supondo que o percentual do distribuidor seja de 28% e os impostos de 45%, escreva um
algoritmo para calcular e escrever o custo final ao consumidor. Como custo de fábrica utilize um valor arbitrário,
por exemplo, 20.000.


### Comentários

O enunciado é grande. 

Esses tipos de enunciados normalmente servem para confundir ou "botar medo". Estufe o peito e encare ele com coragem.

Tudo bem, isso não o animou?

Esse exercício trabalha mais a atenção do que a lógica em si. Separe o texto do enunciado e veja como fica bem mais fácil.

Aliás, eu vou aproveitar e fazer um "negócio" que eu gosto muito: colocar o enunciado no código como comentário e
depois escrever o código fonte.

    "como custo de fábrica utilize um valor arbitrário, por exemplo, 20.000."
    "Supondo que o percentual do distribuidor seja de 28%..."
    "..e os impostos de 45%"
    "O custo de um carro é..."
    "...a soma do custo de fábrica com a porcentagem do distribuidor e..."
    "... (soma) dos impostos"
    "...escrever o custo final ao consumidor"

E agora, que tal tentarmos escrever algum código em baixo de cada linha?



### Solução

<div class="code menor">
<h6>PORTUGOL</h6>
<pre><em>INÍCIO</em>

// "como custo de fábrica utilize um valor arbitrário, por exemplo, 20.000."
custo_fabrica = 20.000;

// "Supondo que o percentual do distribuidor seja de 28%..."
perc_distribuidor = 0.28

// "..e os impostos de 45%"
perc_impostos = 0.45



/**
 * "O custo de um carro é:"
 */

// "...a soma do custo de fábrica com a porcentagem do distribuidor e..."
custo_final = custo_fabrica * perc_distribuidor

// "... (soma) dos impostos"
custo_final = custo_final + (custo_fabrica * perc_impostos)



/**
 * "...escrever o custo final ao consumidor"
 */
mostrar custo_final

<em>FIM</em></pre>
</div>

Confesso que nem sempre acertamos de primeira, mas essa forma de resolver o problema ajuda muito quando estamos meio
enguiçados.

Abaixo segue a forma  idêntica, porém mais "clássica":

<div class="code menor">
<h6>PORTUGOL</h6>
<pre><em>INÍCIO</em>

// Inicializar variáveis
custo_fabrica = 20.000;
perc_distribuidor = 0.28 // equivalente aos 28%
perc_impostos = 0.45 // equivalente aos 45%

// Efetuar cálculos
custo_final = custo_fabrica * perc_distribuidor
custo_final = custo_final + (custo_fabrica * perc_impostos)

// Mostrar na tela
mostrar custo_final

<em>FIM</em></pre>
</div>

E para ilustrar que programar é uma atividade criativa, mostraremos uma outra forma de resolver o mesmo problema:

<div class="code menor">
<h6>PORTUGOL</h6>
<pre><em>INÍCIO</em>

custo_fabrica = 20.000

valorDistribuidor = custo_fabrica * 0.28

valorImpostos = custo_fabrica * 0.45

custo_final = custo_fabrica + valorDistribuidor + valorImposto

mostrar custo_final

<em>FIM</em></pre>
</div>