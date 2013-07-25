Vários resultados - preg\_match\_all()
=====================================


Se olharmos o primeiro exemplo da matéria anterior:

    assunto: "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo."
    regexp: "/ca.a/"

Notamos que a ER casa com mais de um resultado.

*Como trabalhamos com mais de um resultado?* Bom, vejamos o código...

<div class="code">
<h6>PHP</h6>
<pre>&lt;?php
$subject   = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.";
$pattern   = "/ca.a/";
$retorno = array();

# Executa nossa expressão
<em>$resultado = preg_match($pattern, $subject, $retorno);</em>

if ($resultado === 1) {

    print "casou";
    var_dump($retorno);

} else if ($resultado === 0) {

    print "não casou";
    var_dump($retorno);

} elseif ($resultado === false) {

    print "ocorreu um erro";

}
?&gt;</pre>
</div>


...podemos notar que o resultado retornado pela função preg_math() foi o primeiro valor que casou no caso a sttring "casa",
veja a figura abaixo:

<div class="imagem">
    <img src="php-preg-math.png" alt="Resultado do primeiro exemplo em PHP" />
</div>


Mas, se observarmos o exemplo lá no começo da matéria, a expressão casa com outras partes da string:

    "casa, cana, cama, casa, cava"

Como fazer para obter esse resultados?

Uma saída é utilizar a função *preg\_math\_all()*, ela carregará a varirável *$retorno* com todos os resultados possíveis,
veja a figura abaixo:

<div class="imagem">
    <img src="php-preg-math-all.png" alt="Resultado do primeiro exemplo em PHP" />
</div>

Segue o código alterado para a função preg\_math\_all():

<div class="code">
<h6>PHP</h6>
<pre>&lt;?php
$subject   = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.";
$pattern   = "/ca.a/";
$retorno = array();

# Executa nossa expressão
<em>$resultado = preg_match_all($pattern, $subject, $retorno);</em>

if ($resultado >= 1) {

    print "casou";
    var_dump($retorno);

} else if ($resultado === 0) {

    print "não casou";
    var_dump($retorno);

} elseif ($resultado === false) {

    print "ocorreu um erro";

}
?&gt;</pre>
</div>

Obsever que eu também alterei o "primeiro if" de:

    if ($resultado === 1) {

para:

    if ($resultado >= 1) {

Isso se deve ao fato de que a função preg\_math\_all() retorna um número inteiro com a quantidade de ocorrências
encontradas, no exemplo o valor da variável *$resultado* =e igual a 5 (pois temos cinco resultados).

Para saber mais, inclusive sobre os demais parâmetros não comentados, veja a documentação oficial:

[http://www.php.net/manual/pt_BR/function.preg-match-all.php](http://www.php.net/manual/pt_BR/function.preg-match-all.php)
