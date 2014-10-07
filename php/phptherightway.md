---
layout:      grid12-article
title:       Boas práticas em PHP
description: PHP do jeito certo (PHP The right way))
---


> “A questão é que o PHP é fácil demais. O que incentiva a implementar suas idéias, retornando, assim, bons resultados. 
> Algumas dessas facilidades são a possibilidade de digitar grande parte de seu código diretamente em suas páginas da Web,
> adicionar funções úteis (como um código de acesso a banco de dados) a arquivos, incluindo-as de página em página e, 
> antes de se dar conta, você já tem um aplicativo Web em execução.
> 
> Bem, na verdade você está indo em direção ao desastre, porém nem percebe, é claro, pois seu site parece fantástico; ele 
> funciona bem, seus clientes estão satisfeitos e gastando dinheiro.
> 
> O problema surge quando você retorna ao código para iniciar uma nova fase, Mas, agora, você tem equipe e orçamento 
> maiores e mais usuários. E, sem aviso algum, as coisas começam a dar errado, como se seu projeto tivesse sido envenenado.
> 
> Nesse momento, seu novo programador quebra a cabeça para entender o seu código, que para você pode ser óbvio, embora, 
> talvez, um pouco pretensioso em suas declarações e expressões. Porém, ele, o programador, está demorando mais que o 
> esperado para exibir seu potencial e poder vir a se tornar um membro da equipe.”
>  
> <small>Fonte: Matt Zandstra, abrindo seu livro Objetos PHP, padrões e prática.</small>

Zandstra foi muito feliz ao abrir o primeiro capítulo de seu livro com um alerta. Qualquer um pode desenvolver um 
software, mas poucos o fazem com maestria. O autor refere-se aos problemas que atingem a todos os programadores: falta 
de planejamento; falta de organização, falta de preparo, muita ansiedade em começar a codificação, falta de tempo 
(prazos irreais) e etc... Por outro lado, existem sempre aquelas receitas mágicas que parecem que vão "salvar o mundo".


O objetivo deste pequeno artigo é apresentar o projeto [PHP The Right Way](http://br.phptherightway.com/ "link-externo") 
(PHP do jeito certo). Eu acho o projeto um pouco pretensioso... "do jeito certo" como se qualquer outro caminho fosse errado.

Se mudassem o título para "Trilha PHP" seria perfeito! mas isso não importa e também não invalida o projeto.
Talvez a tradução de "right way" pudesse ser "melhor caminho", mas como disse, não importa!

O projeto trás informações valiosas sobre qual caminho seguir. 

__Aconselho o projeto para quem quer ficar ninja em PHP__.

O problema é que ele é extenso demais para quem está começando! 

Então deixo 4 dicas essenciais para quem está começando:

- Endente seu código (eu lhe imploro).
- Use uma boa nomenclatura, desde variáveis até nome de scripts, bases, formulários, métodos, classes, etc...
- Comente o código.
- Programar é como pintar um quadro, cada um tem um estilo, procure o seu.

Leia mais sobre [Boas práticas para quem está começando a codificar]().

Só você é iniciante, essas 4 dicas são o suficiente.




PHP spaghetti
---

Usamos o PHP no meio do HTML, ou HTML no meio do PHP?

Essa facilidade de misturar HTML e PHP é uma das caracteristicas mais criticadas da linguagem PHP. Chamamos de código
spaghetti o código que faz essa mistura em excesso e de forma desordenada.

Por isso, me sinto obrigado a lhe fazer um convite: __tente ser bastante organizado em relação a isso__. Procure deixar 
bem claro no seu script o que é PHP e o que é HTML.

Como exemplo, podemos colocar o "PHP mais pesado" na parte de cima, no começo. Após esse trecho iniciamos o HTML e 
utilizamos apenas o "PHP mais leve".

{% highlight php %}
<?php

... code
... code
... code
... code
... code

?>
<!DOCTYPE html>
<lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Simple Form</title>
    </head>
    <body>

        <?php // echo "PHP mais leve";?>

        <?php // echo "PHP mais leve";?>

        <?php // echo "PHP mais leve";?>

    </body>
</html>
{% endhighlight %}

Às vezes, para atender ao "padrão" acima, teremos que sacrificar um pouco a lógica, poderemos usar um pouco mais de 
memória e até codificar um algoritmo não performático.

Para isso, temos uma regra simples, a organização vem sempre em primeiro lugar. Ela só será afetada em prol de outras 
vantagens (performance, economia de memória, etc..) apenas se realmente o programador tiver certeza que vale apena.