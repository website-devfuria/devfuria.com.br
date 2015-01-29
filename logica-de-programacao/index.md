---
layout:      grid12-index
title:       "Lógica de programação"
description: Tudo o que você precisa para aprender lógica de programação
---

Seja bem vindo(a) a seção Lógica de programação!

Esta seção não pretende ser mais um site a falar de lógica de programação, negativo!

Eu criei esse seção (re)pensando uma forma mais eficiente de ensinar a lógica de programação.

Este curso é diferente de tudo o que você viu sobre lógica (bem diferente daqueles exercícios toscos da faculdade).

Eu parti do pressuposto de que é preciso programar de forma a __separar as responsabilidades__ do código fonte.

Nada de juntar __entrada-processamento-saída__, nada disso, vamos atacar cada problema individualmente.

Além disso, a forma como você está habituado a "testar" seu (pequeno) programa irá mudar. Rodar o software,
fazer alguns inputs e ver a saída __é um teste pouco prático__, pelo menos do ponto de vista de quem está
programando.

O ideal é escrever um __teste automático__, ver ele falhar, e codificar apenas o código necessário para ver ele
(o teste) passar. Isso chama-se __TDD__.

Resumindo, __este é um curso de lógica de programação aliado a técnica TDD__.

Você precisa ter conhecimento de TDD? Não, nenhum pouco. Eu vou ensinar lógica junto com o TDD (mais lógica do que TDD, rss).

Nós utilizaremos o comando `assert()` para simular um teste. Eu disse "simular".

Não é para utilizar o `assert()` a torto e direito, Vamos pegá-lo emprestado apenas para simular os testes, só isso!

O que você precisa saber sobre a linguagem C para começar:

- [Rápida introdução a linguagem C (apenas o suficiente para realizarmos os exercícios)](/logica-de-programacao/introducao-linguagem-c/)
- [Como compilar no Linux](/logica-de-programacao/como-compilar-no-linux/)
- [Uma breve noção sobre o que é TDD](/tdd/o-que-e-tdd/) (você irá para a seção __TDD__)
- [Entenda a função `assert()`](/logica-de-programacao/entendendo-o-assert-c/)
- ["Rodando os testes" ou "compilando e executando", socorro ?](/logica-de-programacao/rodando-os-testes/)



Exercícios na linguagem C
---

### Exercícios nível 0 (mais fácil que a Seleção Brasileira...)

{% include /menus/logica-exerc-nivel-00.html %}


### Exercícios nível 1

{% include /menus/logica-exerc-nivel-01.html %}



### Exercícios nível 2

Exercícios de lógica envolvendo [funções]().

{% include /menus/logica-exerc-nivel-02.html %}



### Exercícios nível 3

Exercícios para treinar [laços de repetição na linguagem C]().

{% include /menus/logica-exerc-nivel-03.html %}

### Exercícios nível 4

Exercícios para treinar [vetores na linguagem C]().

{% include /menus/logica-exerc-nivel-04v.html %}

Ainda exercícios para treinar vetores, mas desta vez utilizando [strings]().

{% include /menus/logica-exerc-nivel-04s.html %}





Exercícios na linguagem C++
---

Faremos todos os exercícios praticando programação orientada a objetos.

Se você não sabe nada sobre orientação a objetos, talvez queira ler...
[O básico do básico sobre Orientação a Objetos (vulgo OOP)]().

{% include /menus/logica-exerc-oop-00.html %}



Mas... e o básico sobre lógica de programação?
---

Eu não expliquei as partes conceituais, o que é DFD, o que é um teste de mesa, pseudocódigo, essa coisas...

Então acho justo deixar alguns links valiosos e que podem lhe ajudar, caso precise "dessas coisas".

- [PDF de professor da USP ](http://www.ime.usp.br/~slago/pl-1.pdf "link-externo")
- [PDF da Federal de RG](http://www.dca.ufrn.br/~affonso/DCA800/pdf/algoritmos_parte1.pdf "link-externo")
- [Sequencia de videos sobre Lógica](http://www.cursou.com.br/informatica/curso-logica-de-programacao/ "link-externo")
 (Não recomendado caso você já esteja com sôno)


![Figura satirizando a logica de programação](vida-prog-25.png "Tirinha satirizando a logica de programação")

Fonte da imagem: [Vida de programador](http://vidadeprogramador.com.br/2011/03/22/logica-de-programacao/ "link-externo")