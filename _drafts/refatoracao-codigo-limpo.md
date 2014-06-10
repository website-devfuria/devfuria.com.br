---
layout: materia
title: Refatoração e código limpo
description: Dandos os primeiros passos na refatoração de código. Aprenda a codificar de forma mais coesa.
---

veja:
http://books.google.com.br/books?id=0rGtKCNAoN0C&printsec=frontcover&dq=inauthor:%22Martin+Fowler%22&hl=pt-BR&sa=X&ei=v9WVU4qvDuTgsATCtoGgDQ&ved=0CCwQ6AEwAA#v=onepage&q&f=false


Quando escrevemos um código e, posteriomente, voltamos para ajustar algumas coisas, estamos praticando  a refatoração 
(refactoring). Quero dizer, estamos refatorando o código. O conceito intuitivo da palavra traz consigo a idéia de que
"refatorar" é simplificar uma expressão. Não é isso o que vem a sua mente? 

OK, mas simplificar o que exatamente? E de que forma?

Vamos alterar o código no sentido de clareza, pelo menos inicialmente. O problema é que não vamos utilizar nenhuma 
metodologia para isso, ou seja, vamos aplicar arte pura.

Refatorar é uma arte e o seu mestre chama-se Martin Fowler, há um manual completo dizendo como, quando e porque refatorar
o seu código fonte.

Meu objetivo é plantar na sua mente uma semente chamada "organização, limpeza e clareza".É nesse sentido que vamos 
tentar alterar o código fonte original de nosso exemplo


Antes de alterar seu código...
--

O código já está funcionando, se eu mexer poderei danificá-lo!

Poderá e com certeza irá danificá-lo.

Então, como alterar o código já existente (e funcionando) de forma que ele não se quebre?

Remédio: TDD (Test Driven Development) que nada mais é do que escrever um teste antes de codificar. Tudo bem vai, não é 
tão simples assim.

Se escrever um teste antes de codificar é importante, ter um teste antes de alterar o código é igualmente importante.

Mas, novamente caímos em um tema que é avançado e estamos ainda no nível básico. Vamos alterar nosso código sem ter os 
teste de cobertura.

TDD é uma arte (ninja) e o mestre é o Kent Bech (entre outros).

O conceito é muito interessante, procure ler sobre. A refatoração é irmã siamesa do TDD. Uma não vive sem a outra.



Código limpo
---


Código limpo independe de OOP e de refatoração.

O que eu quero dizer é que seu código pode fazer uso intensivo de OOP e mesmo assim estar bastante ilegível e desorganizado.

Da mesma forma que refatorar um código ilegível não o tornará mais legível ou organizado.

Em outras palavras, podemos dizer que OOP e refatoração não garantem um código limpo e organizado.

OOP e Refatoração são "caminhos" e não salvadores de código ilegível.

Dito isso, ainda nos resta a pergunta: o que fazer para codificar de forma limpa e coesa?

Pergunta difícil!

O problema é que o programdor, sendo inciante, não "verá" aonde o código pode ser mais legível.

Isso nos leva a acreditar que:

Código limpo é algo que se adquire com a prática e não com teoria. Na verdade adquirimos com a teoria sim, mas é muito pouco.


### E o que temos para hoje?

Quer dizer, o que temos por horar para nos guiar?

Na matéria Antes de enfiar o pé na jaca vimos um pouco de...

    Endentar o código
    Usar uma boa nomenclatura
    Comentar o código
    Ter ou seguir um estilo.

Isso pode ser um começo, mas e depois?

A boa notćia é que eu conheço um livro ótimo A Arte de Escrever Programas Legíveis de Dustine e Trevor. Veja a referência
no final da mateŕia.

No livro o autor tras respotas para perguntas como por exemplo:

O que torna um código “melhor”?

Por acaso o tempo-para-entender entra em conflito com outros objetivos?

E outras preocupações, como tornar o código eficiente, bem projetado, fácil de testar e assim por diante?

Objetivos como esses não entram, às vezes, em conflito com a meta de tornar o código fácil de entender?

Códigos devem ser escritos de modo a minimizar o tempo necessário para sua compreensão.

O livro também trás o conceito de código limpo:

    Códigos devem ser escritos de modo a minimizar o tempo necessário para sua compreensão.


Concluindo
---

Na matéria seguinte vamos colocar a mão na massa e praticar a refatoração.

Mas faremos isso de forma bem livre, sem muita preocupação com a técnica de refatoração.

Seria difícil eu dizer: "vamos refatorar o código" sem ao menos introduzir, mesmo que pobremente, a idéia de refatoração
e a prática de código limpo. Esse foi o objetivo desta matéria.
