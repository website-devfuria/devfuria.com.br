
A lógica utiliza-se de três artefatos: *a linguagem, o diagrama e o teste de mesa*.


#### Linguagem

A linguagem é informal e baseada na língua humana (português, inglês, espanhol, etc...) normalmente chamada de *pseudocódigo*.
É uma linguagem, repito, livre de detalhes e convenções.
Ela pode possuir várias dialetos, o que é ruim para você que está començando.
Mas entenda apenas o básico, sua essencia. E verá que isso já é o suficiente.



#### Diagrama

O diagrama mais utilizado é o DFD (diagrama de fluxo de dados) ele também pode contribuir para a documentação do sistema.



#### Teste de Mesa

O teste de mesa é a execução
do algorítmo sem a ajuda do computador, ou seja, realizada com papel, lápis e muita atenção.

<br />

Está fora do escopo deste curso explicar o pseudocódigo, o DFD e o teste de mesa, consulte a web, você encontrará várias exemplos.

Um alerta importante é que *o programador não deve ser ansioso para codificar o algoritmo*. Sentar na frente do
computador e começar a escrever o código fonte, sem antes perder alguns minutos desvendando o problema, pode acarretar
improdutividade e disperdício de tempo. Antes de codificar é preciso se debruçar sobre o problema e se for necessário,
realizar o teste de mesa e também desenhar o DFD.

*O principal benefício da lógica de programação é que sua prática exercita a mente do programador tornando-o mais
eficiente e eficaz*. Segundo o guru do marketing Peter Drucker: "eficiência é fazer as coisas de maneira correta,
eficácia são as coisas certas. O resultado depende de fazer certo as coisas certas".


### Sobre o curso

Inicialmente, eu não havia planejado um curso de lógica. Ele estava embutido no curso de PHP. Como eu inclui o curso de
Javascript (agora temos duas linguagens) senti a necessidade de separar o curso da linguagem, mesmo porque, a *lógica
não depende de linguagem nenhuma*.

Eu ainda não tive tempo de rever os exercícios, eles estão na linguagem PHP, mas em breve voltarei para arrumar essa
seção.

Tentarei separar o máximo possível a lógia da linguagem. Outra coisa, penso em incluir alguns exemplos em C, então
poderei mostrar a implementação dos algorítmos em 3 linguagens: PHP, Javascript e C.

*Seja bem vindo ao curso!*


Botando a mão na massa
----------------------

Quais serão os passos necessários para sacar dinheiro em um caixa de banco?

O algoritmo abaixo ilustra um possível solução para o problema. As palavras destacadas em maiúsculo são controle de fluxo.

<div class="code">
<h6>PSEUDOCÓDIGO</h6>
<pre><em>INÍCIO</em>

<em>SE</em> estiver sem o cartão do banco <em>ENTÂO</em>
    pegar o cartão do banco

dirigir-se à agência bancária mais próxima
dirigir-se ao caixa eletrônico
inserir o cartão
digitar a senha
observar saldo

<em>SE</em> o saldo for suficiente <em>ENTÂO</em>
    sacar o valor desejado
    voltar para casa
<em>SENÂO</em>
    voltar para casa sem dinheiro

<em>FIM</em>
</pre>
</div>

O algorítmo apresentado aproxima-se mais a um *problema humano* e não a um *problema computacional*.

Para resolver problemas computacionais é preciso entender os princípios da interação com computadores e a noção do
conceito de "variável". A interação se dá através de três ações: entrada de dados, processamento e saída de dados.

<div class="imagem">
    <img src="../../imagens/fluxobasico.jpg" alt="Entrada, processamenteo e saída!"/>
    <p>Etapas essenciais de um programa em funcionamento.</p>
</div>

A entrada é caracterizada pela inserção de dados. O processamento provoca uma transformação nos dados. A saída formata
e apresenta os dados na tela.


#### O que é uma variável?

Uma variável é um espaço alocado(reservado) na memória do computador. Como o próprio nome já diz, seu conteúdo é
variável.



### Um exemplo simples

Um exemplo computacional seria: "exibir a soma de dois números".

* O usuário digita um número e o computador armazenada na variável “numero\_primeiro”.
* O usuário digita o segundo número.
* O computador armazena na variável “numero\_segundo”.
* O computador soma os dois números e armazena o resultado na variável “soma” ...
* ... que em seguida é apresentada na tela.





O algorítmo abaixo ilustra uma possível solução:

<div class="code">
<h6>PSEUDOCÓDIGO</h6>
<pre><em>INÍCIO</em>

numero_primeiro = o que o usuario digitar
numero_segundo = o que o usuario digitar

soma = numero_primeiro + numero_segundo

exibir soma

<em>FIM</em>
</pre>
</div>

O DFD abaixo foi escrito à mão propositalmente. O objetivo é mostrar que não há necessidade de ser formal a ponto de
desenhar os diagramas no computar. Essa simples tarefa pode levar muito tempo e o custo x benefício do diagrama começará
a ser questionado.

<div class="imagem">
    <img src="../../imagens/dfd_soma2num.png" alt="Diagrama de fluxo de dados" />
</div>

Perdoem minha letra!

O teste de mesa consiste em anotar os nomes das variáveis em colunas e anotar os valores que elas recebem em cada
passagem de linha de código. Você deve fazer o teste de mesa após o código construído ou até olhando para o DFD.
Veja o esquema passo a passo:

1. Anote os nomes da variáveis em uma linha
2. Traçe linha verticais para separa as colunas
3. Anote os valores para as variáveis <br />
O valor "5" é atribuído para a variável "numero\_primeiro".


4. Anote os valores para as variáveis <br />
O valor "7" é atribuído para a variável "numero\_segundo" <br />
O valor "5" permanece inalterado na variável "numero\_primeiro"

5. Anote os valores para as variáveis <br />
A variável "soma" recebo o resultado da soma (valor "12") das duas variáveis anteriores <br />
O valor "5" continua inalterado na variável "numero\_primeiro" <br />
O valor "7" permanece inalterado na variável "numero\_primeiro"


<div class="imagem">
    <img src="../../imagens/testemesa1.png" alt="Teste de mesa" />
</div>


### Nota sobre o "recebimento dos dados" (entrada)

Observe o algorítmo implementado em PHP logo a baixo. Repare que não há uma função “o que o usuário digitar” que
receberá os dados do usuário, por essa razão usamos valores arbitrários(5 e 7). Para fazer com que o usuário digita-se
os valores, seria necessário construir um formulário e receber os dados vindo desse formulário, tarefa esta que ficará
para um outro momento.

<div class="code">
<h6>PHP</h6>
<pre>&lt;?php
$numero_primeiro = 5;
$numero_segundo = 7;

$soma = $numero_primeiro + $numero_segundo
echo $soma;
?&gt;</pre>
</div>




### Nota sobre "atribuição"

O sinal matemático de igualdade "=" tem a função de atribuição, ele atribui um valor a variável. E como se ele
armazenas-se o valor naquele local. Diz-se "local" pois, uma variável nada mais é do que um espaço na memória reservado.
Normalmente o pseudocódigo utiliza-se da notação de uma seta para a esquerda para representar a atribuição.

<div class="code">
<h6>PSEUDOCÓDIGO</h6>
<pre>um_numero ⇠ 123
// O valor da variável “um_numero” é igual a 123;
</pre>
</div>

Como o leitor deve ter percebido estamos utilizando o sinal de igual e não a seta.


### Nota sobre “organização mental”

Existem alguns passos na qual é possível seguir para elaborar de forma organizada o algoritmo, vejamos um exemplo:

1. compreender o problema
2. identificar dados de entrada
3. identificar dados de saída
4. determinar o que é preciso para transformar os dados de entrada em dados de saída
5. construir o algoritmo
6. testar o algoritmo
7. executar o algoritmo

Esse exemplo foi extraído de um arquivo de slide na Internet, não passo a referência porquê o furia-material está uma
bagunça, mas tem algumas pérolas (como essa da sequência para construção do algoritmo).

O programador não deve ficar preso a essa estrutura, porquê ela pode ser facilmente colocada à prova, por exemplo, o
passo 3 talvez não seja necessário porque pode ser que o problema não retorne nada, apenas executa alguma tarefa
específica, logo o passo 4 também será afetado. Já o passo 6 é muito subjetivo, talvez “testar” seja “executar”, ou
ainda, como testar o algorítmo se ele não foi executado?. Nem sempre será interessante seguir todos os passos, o
programador também poderá começar em qualquer ordem. Poderá, por exemplo, iniciar pelo passo 4 e depois voltar para o
passo 3 e 2 e ainda retornar no passo 1.

De qualquer forma essa estrutura é interessante e ajuda a organizar um pouco a mente, mas sejam flexível e
utilize-a com bom senso.



Leituras adicionais sugeridas
-----------------------------

<dl id="leitura_adcionais">
    <dt>Internet</dt>

        <dd>
            <em>Artigo sobre</em> lógica de programação do blog “ogenial”. Leitura fácil e rápida. pode servir como um
            complemento deste artigo (e vice e versa).
            <a href="http://www.ogenial.com.br/blog/introducao-logica-de-programacao/">
            http://www.ogenial.com.br/blog/introducao-logica-de-programacao/</a>
        </dd>

        <dd>
            <em>Exercícios</em> do artigo mencionado acima. São do tipo “humano”, bem básicos... mas bastante didáticos.
            <a href="http://www.ogenial.com.br/blog/exercicios-de-logica/#more-249">
            http://www.ogenial.com.br/blog/exercicios-de-logica/#more-249</a>
        </dd>
</dl>
