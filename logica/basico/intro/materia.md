Introdução a Lógica de Programação
==================================

*A lógica de programação é um exercício mental*. Ela equivale aos exercícios físicos e todo programador deve praticar,
não apenas no início do aprendizado mas no decorrer de toda a “estrada”. Programar um computador é uma atividade, antes
de tudo, criativa. Quando a criatividade se une ao raciocínio lógico temos a lógica de programação. E *programar nada
mais é do que instruir o computador a resolver problemas... usando a lógica de forma criativa*.

O ponto importante da lógica (estarei me referindo a lógica de programação apenas por “lógica””) é que podem existir
n´s alternativas para se resolver um problema e cada alternativa deve ser avaliada conforme o resultado que se espera
obter. Esses caminhos são chamados de *algoritmos*.

Se para a solução do problema for interessante ter uma boa performance, então o algorítmo deve ser elaborado com foco
na perfomance. Se o que se espera alcançar é pouco uso de memória, então o algorítmo deve ser elaborado com foco na
econômia da memória. Se o objetivo é ter um algorítmo claro (de fácil leitura e compreensão para os humanos), então a
construção deverá se preocupar com a clareza, mesmo que a performance e o uso de memoria seja comprometido. Às vezes o
programador quer atingir todos os pontos possível de qualidade: performance, uso econômico de memória, clareza, etc...
mas nem sempre é possível.

<div class="imagem">
    <img src="../../imagens/vida_prog_25.png" alt="Desenho em quadrinhos satirizando a lógica!" />
    <p>Há... essas mulheres!.</p>
    <p>Fonte:<a href="http://vidadeprogramador.com.br/2011/03/22/logica-de-programacao/">Vida de programador</a></p>
</div>




Sobre o curso
-------------


Não vamos criar programas completos e profissionais, nada disso. Construiremos apenas pequenos trechos de códigos para
exercitar o raciocínio e desenvolver uma intimidade com a linguagem.


### Nota antes de começarmos

Os exercícios iniciais foram adaptados para a realidade do desenvolvimento web. Em programas desktop a simples instrução
 “leia o valor digitado do usuário” significa que o sistema fará uma pausa é esperará o usuário digitar alguma coisa.
Já em programas para web (aplicações web) pedir para o usuário digitar algo significa ter que construir um formulário
HTML, enviar esses dados para um script, receber esses dados “via protocolo HTTP”, e finalmente, processar a informação.
Pensando nisso e com o objetivo de facilitar a vida do iniciante em programação, optei por trabalhar com valores
arbitrários, ou seja, valores são definidos pelo programador e atribuídos diretamente no código fonte sem a interferência
do usuário.


*IMPORTANTE: O aprendizado da lógica se faz a passos lentos, bem lentos. Leia o exercício mas não veja a solução enquanto
não tiver “suado a camisa”. Normalmente, leva-se de 10 a 20 minutos em cada exercício, cronometre o seu tempo e não
desista antes dos 20 minutos pensando  na solução (o tempo para desenhar o diagrama e para executar o teste de mesa não
contam). Em um curso formal (acadêmico), a disciplina lógica de programação dura um semestre inteiro. Se você nunca viu
programação antes, dê-se pelo menos 6 meses de amadurecimento em lógica.*



### Fonte

Inspirado nos <a href="http://fit.faccat.br/~fpereira/apostilas/exerc_resp_alg_mar2007.pdf">91 exercícios</a> de
Flávia Pereira de Carvalho.