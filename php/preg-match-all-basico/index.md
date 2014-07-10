---
layout:      materia
title:       O básico sobre a função preg match all
description: Aprenda o básico sobre a função preg_match_all() + exemplo
---


A função `preg_match_all()` retornará um número inteiro com a quantidade de ocorrências encontradas pela expressão regular.
    
    $resultado = preg_match_all();

- A variável `$resultado` será `0` se a expressão não casar,
- `1` se casar com apenas 1 ocorrência,
- `2` se casar com duas ocorrências e etc...

A função aceita 5 parâmetros, sendo 3 obrigatórios e 2 opcionais.

Os obrigatórios são:

    $resultado = preg_match_all($pattern, $subject, $matches);

- `$pattern` será a expressão regultar,
- `$subject` será o texto (assunto) que a expressão irá pesquisar 
- `$matches` será um array com as ocorrências (trechos encontrados).


Exemplo
---

Vamos considerar o exemplo abaixo:

    assunto: "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo."
    regexp: "/ca.a/"

Notamos que a expressão regular casa com mais de um resultado, obtendo dessa forma as seguintes ocorrências (matches):

    "casa, cana, cama, casa, cava"

Como fazer para obter esses resultados?

Utilize a função `preg_math_all()` conforme o exemplo abaixo:


{% highlight php %}
<?php
$subject = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.";
$pattern = "/ca.a/";
$matches = array();

# Executa nossa expressão
$resultado = preg_match_all($pattern, $subject, $matches);

if ($resultado >= 1) {
    print "casou";
    var_dump($matches);

} else if ($resultado === 0) {
    print "não casou";
    var_dump($matches);

} elseif ($resultado === false) {
    print "ocorreu um erro";

}
?>
{% endhighlight %}

A função `preg_math_all()` carregará a varirável `$matches` com todos as ocorrências possíveis, veja a figura abaixo:

![Figura com o resultado de preg match all](php-preg-match-all.png "preg match all")



Veja Também
---

- [Referência da função preg_match_all()](/php/preg-match-all/ "Referência da função preg_match_all()")
