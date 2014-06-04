---
layout:     materia
title:      O básico sobre a função preg match all
---


Vamos considerar o exemplo abaixo:

    assunto: "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo."
    regexp: "/ca.a/"

Notamos que a expressão regular casa com mais de um resultado.

    "casa, cana, cama, casa, cava"

Como fazer para obter esses resultados?

Utilize a função `preg_math_all()` conforme o exemplo abaixo:


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

A função `preg_math_all()` carregará a varirável `$retorno` com todos os resultados possíveis, veja a figura abaixo:

![Figura com o resultado de preg match all](php-preg-match-all.png "preg match all")

Outra coisa, o primeiro `if` deve ser `>= 1` pois o valor da variável `$resultado` é igual a `5` (temos cinco resultados).
Isso se deve ao fato de que a função `preg_math_all()` retorna um número inteiro com a quantidade de ocorrências encontradas.


## Veja também


1. DevFuria
[Referencia a função preg_match_all()](/php/preg-match-all-referencia/ "Referencia a função preg match all")

2. Manual do PHP - preg_match_all()
[http://www.php.net/manual/pt_BR/function.preg-match-all.php](http://www.php.net/manual/pt_BR/function.preg-match-all.php "link-externo")

