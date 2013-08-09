Exercício 10
===

Faça um algoritmo, sendo a data de nascimento um valor qualquer, que expresse a idade de uma pessoa em dias.


### Comentários

Este exercício é provcativo. Eu quis provocar em você a atenção para o problema de se trabalhar com datas, algo que
não é fácil em nenhma linguagem.

Para começar temos a questão dos formatos básicos abaixo:

    dd-mm-aaaa
    mm-dd-aaaa
    aaaaa-mm-dd
    
Mas não vamos no preocupar com isso agora, vá apenas se preparando psciologicamente, ok?

Voltando ao nosso exercício, vamos utilizar os dias, meses e anos separadamente, ou seja precisaremos de pelo menos
3 variáveis para armazenar uma data. Veja as dicas:


1. Use a data de nascimento separadamente, dia em uma variável, mês em outra e ano em outra.
2. Utilize uma data qualquer
3. Faça os cálculos considerando que os anos teriam 365 dias e o meses apenas 30 dias. 



### Solução

<div class="code">
<h6>PORTUGOL</h6>
<pre><em>INÍCIO</em>

data_nasc_dia = 27
data_nasc_mes = 9
data_nasc_ano = 1977

data_atual_dia = 22
data_atual_mes = 01
data_atual_ano = 2012

anos = data_atual_ano - data_nasc_ano
total_meses = anos * 12
total_meses = total_meses + anos

</pre>
</div>