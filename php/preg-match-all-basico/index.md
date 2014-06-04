---
layout:     materia
title:      O básico sobre a função preg match all
---

__Quando usar?__

Vamos considerar o exemplo abaixo:

    assunto: "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo."
    regexp: "/ca.a/"

Notamos que a expressão regular casa com mais de um resultado.

Como trabalhamos com mais de um resultado? Vejamos o código...

{% highlight php %}
<?php
$subject = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.";
$pattern = "/ca.a/";
$retorno = array();

# Executa nossa expressão
$resultado = preg_match($pattern, $subject, $retorno);

if ($resultado === 1) {
    print "casou";
    var_dump($retorno);

} else if ($resultado === 0) {
    print "não casou";
    var_dump($retorno);

} elseif ($resultado === false) {
    print "ocorreu um erro";

}
?>
{% endhighlight %}

Note que o resultado retornado pela função `preg_math()` foi o primeiro valor que casou no caso a sttring "casa", veja a
figura abaixo:

![Figura com o resultado de preg match](php-preg-match.png "preg match")

Mas, se observarmos o exemplo lá no começo da matéria, a expressão casa com outras partes da string:

    "casa, cana, cama, casa, cava"

Como fazer para obter esses resultados?




## preg_math_all()


Utilize a função `preg_math_all()`, ela carregará a varirável `$retorno` com todos os resultados possíveis, veja a figura
abaixo:

![Figura com o resultado de preg match all](php-preg-match-all.png "preg match all")

Segue o código alterado para a função `preg_math_all()`:

{% highlight php %}
<?php
$subject = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.";
$pattern = "/ca.a/";
$retorno = array();

# Executa nossa expressão
$resultado = preg_match_all($pattern, $subject, $retorno);

if ($resultado >= 1) {
    print "casou";
    var_dump($retorno);

} else if ($resultado === 0) {
    print "não casou";
    var_dump($retorno);

} elseif ($resultado === false) {
    print "ocorreu um erro";

}
?>
{% endhighlight %}

Observe que eu também alterei o primeiro `if` de:

    if ($resultado === 1) {

para:

    if ($resultado >= 1) {

Isso se deve ao fato de que a função `preg_math_all()` retorna um número inteiro com a quantidade de ocorrências encontradas.

No exemplo, o valor da variável `$resultado` é igual a `5` (pois temos cinco resultados).


## Veja também


1. DevFuria
[Referencia a função preg_match_all()](/php/preg-match-all-referencia/ "Referencia a função preg match all")

2. Manual do PHP - preg_match_all()
[http://www.php.net/manual/pt_BR/function.preg-match-all.php](http://www.php.net/manual/pt_BR/function.preg-match-all.php "link-externo")

