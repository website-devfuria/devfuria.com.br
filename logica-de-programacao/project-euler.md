---
title:       Apresentando o projeto Euler
description: "Projeto Euler existe para encorajar, desafiar e desenvolver as habilidades e gozo de qualquer pessoa com interesse no fascinante mundo da matemática"
capitulo:    logica-nivel-9
ordem:       1
---

> "Project Euler exists to encourage, challenge, and develop the skills and enjoyment of anyone with an interest in the
> fascinating world of mathematics."
>
> "Projeto Euler existe para encorajar, desafiar e desenvolver as habilidades e gozo de qualquer pessoa com interesse
> no fascinante mundo da matemática."
>
> Projetc Euler


O [Projeto Euler](https://projecteuler.net/) é uma excelente proposta para desenvolver suas
habilidades de programador(a).

São um pouco mais de 500 exercícios e um mais *nervoso* que o outro.

Ao termino de cada problema, você poderá enviar o resultado obtido e o sistema dirá se você obteve ou não sucesso.

Caso você acerte, é liberado um Fórum para que os resultados sejam compartilhados, afinal de contas "todos os caminhos
levam a Deus" rsssss. Sempre haverá uma 1/2 dúzia de alternativas para resolver determinado problema.

No início do projeto havia um Ranking das pessoas que haviam resolvido alguns problemas, consequência... Descobriram
uma forma de explorar certa vulnerabilidade e retiraram o Ranking, pelo menos eu não o encontrei mais.

Outra coisa, bastante óbvia, é que você poderá encontrar os resultados para alguns problemas na web. Algo que é
refutado veementemente pelos organizadores do Projeto. Não precisava nem falar... você pode enganar o mundo inteiro, mas
não a si próprio. Também não sei o que ganhará colando os resultados, a idéia é se exercitar.

<!--
Pensando nisso, eu não vou publicar os resultados dos exercícios além do primeiro e do sétimo. O primeiro é bastante
fácil, é um quebra gelo. O sétimo eu escolhi porque envolve números primos e nós já tivemos, aqui no DevFuria, um
problema para encontrar o número primo. Além do que, ele lhe dará uma perspectiva diferente: de que a lógica não é o
único desafio.
-->

Pensando nisso, eu não vou publicar os resultados apenas do primeiro. Ele é bastante fácil, é um quebra gelo.
Além do que, ele lhe dará uma perspectiva diferente: de que a lógica não é o único desafio.


Isso mesmo, a lógica não é o único desafio, você irá se deparar com outros desafios como por exemplo a performance.
Todos os exercícios são para serem executados em menos de 1 minuto. Por tanto, você irá sentir a necessidade de medir o
tempo de execução de seus programas.

No Linux, na linha de comando (terminal) você poderá usar o utilitário `time` antes da execução de seu programa. Imagine
que você queira executar um programa em C que se chame `meu_programa.run`.

Ao invés de simplesmente executá-lo como mostrado abaixo

    ./meu_programa.run

Inclua o `time` antes do comando.

    time ./meu_programa.run

Algo semelhante será exibido (além da exibição de seu programa).

    real	0m0.054s
    user	0m0.044s
    sys	0m0.008s


Bons estudos!