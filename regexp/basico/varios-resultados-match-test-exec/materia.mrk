Vários resultados - match(), test() e exec()
============================================

Aqui, temos o mesmo problema da matéria anterior:

*Como trabalhamos com mais de um resultado?*

Se você caiu de paraquêdas nesta página aconselho a ler atentamente pelo menos as duas matérias anteriores a esta,
veja no final desta página na árvore de navegação: "Veja também..."

Continuando... vamos utilizar o mesmo exemplo matéria "ponto":

    assunto: "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo."
    regexp: "/ca.a/"

Notamos que a ER casa com mais de um resultado.

E aí? Repito a pergunta: como programamos isso? Vamos ao ćodigo...


<div class="code">
<h6>JS forma1-string-match.js</h6>
<pre>
var string = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.",
    pattern = /ca.a/,
    resultado;

// Executa nossa expressão
resultado = string.match(pattern);

if (resultado) {
    console.log("casou", resultado);
} else {
    console.log("não casou", resultado);
}
</pre>
</div>

Se a ER casar com a string então a variável *resultado* conterá um array com a parte que casou, mas *apenas a primeira
ocorrência.* Se você precisar das demais ocorrências terá que fazer uma pequena alteração na ER, veja:

    pattern = /ca.a/g,

Tivemos que incluir a opção "g" de "global", veja mais na
<a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/match?redirectlocale=en-US&redirectslug=JavaScript%2FReference%2FGlobal_Objects%2FString%2Fmatch">documentação oficial</a>.

Vamos aos resultados em cada função....


### match()

Incluí a opção global g como descrito acima e percorri o valor da variavel resultado que agora é um array.

<div class="code">
<h6>JS</h6>
<pre>
var string = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.",
    pattern = /ca.a/g,
    resultado,
    i;

// Executa nossa expressão
resultado = string.match(pattern)

for(i = 0; i < resultado.length; i++){
    console.log(resultado[i]);
}
</pre>
</div>


### exec()

Repare apenas que a opção global "g" teve que ser utilizada, sem ela o navegador (FireFox 19) entra em um loop infinito.

<div class="code">
<h6>JS</h6>
<pre>
var string = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.",
    pattern = /ca.a/g,
    resultado;

// Executa nossa expressão
while(resultado = pattern.exec(string)){
    console.log("casou", resultado);
}
</pre>
</div>


###  test()

Diferentemente da primeira função (string.match), o valor da variável *resultado* será true ou false e a opção global
"g" não funcionou, sou seja, não descobri uma forma de olhar as demais ocorrência, apenas a primeira.

<div class="code">
<h6>JS</h6>
<pre>
var string = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.",
    pattern = /ca.a/,
    resultado;

// Executa nossa expressão
resultado = pattern.test(string);

if (resultado) {
    console.log("casou", resultado);
} else {
    console.log("não casou", resultado);
}
</pre>
</div>



Exercício prático
-----------------

Dúvido muito que você conseguirá absorver o conteúdo desta matéria apenas lendo, então ponha a *mão na massa*. 

Só assim você terá a garantida de que realmente incorporou os conceitos.

Execute o códigos dessa matéria em sua máquina e *observe os resultado no console do FireBug.*

Para facilitar a sua vida, eu criei um Gist com os código fontes, assim você não precisará criar os arquivos.

Acesse o link [https://gist.github.com/flaviomicheletti/cbb755999ceb4f2a6806](https://gist.github.com/flaviomicheletti/cbb755999ceb4f2a6806 "Gist")
e clique no botão "Download Gist", descompacte o arquivo e boa diversão.