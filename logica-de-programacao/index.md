---
layout: materia
title: Lógica de programação
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






Exercícios na linguagem C
---

O que você precisa saber sobre a linguagem C para começar:

- [Introdução a linguagem c (apenas o suficiente para realizarmos os exercícios)]()
- [Como compilar no Linux](/logica-de-programacao/como-compilar-no-linux/)
- [Como compilar no Windows]()
- [Me explica melhor esse negócio de TDD ]()
- [Entenda o comando `assert()`]()
- ["Rodando os testes" ou "compilando e executando", socorro ?]()



### Exercícios nível 0 (mais fácil que a Seleção Brasileira...)

<div class="list-group">
    <a href="/logica-de-programacao/c-dobro/" class="list-group-item">O dobro de um número qualquer</a>
    <a href="/logica-de-programacao/c-area-quadrada/" class="list-group-item">Área quadrada</a>
    <a href="/logica-de-programacao/c-antecessor-sucessor/" class="list-group-item">Antecessor e sucessor de um número qualquer</a>
    <a href="/logica-de-programacao/c-media-simples/" class="list-group-item">Média simples de 3 números</a>
    <a href="/logica-de-programacao/c-dias-n-meses/" class="list-group-item">Descobrir os dias de 'n' meses</a>
    <a href="/logica-de-programacao/c-duas-variaveis/" class="list-group-item">Trocar o valor de duas variáveis</a>
</div> 



### Exercícios nível 1

<div class="list-group">
    <a href="/logica-de-programacao/c-custo-carro/" class="list-group-item">Custo de fabricação de um carro</a>
    <a href="/logica-de-programacao/c-juros-simples/" class="list-group-item">Juros simples</a>
    <a href="/logica-de-programacao/c-salario-reajuste/" class="list-group-item">Reajustando o salário</a>
    <a href="/logica-de-programacao/c-eleitores/" class="list-group-item">Votos em relação ao total de eleitores</a>
</div> 




### Exercícios nível 2

Utilizaremos funções! Se você não sabe nada sobre funções é melhor ler...

- [O que você precisa saber sobre funções]()

<div class="list-group">
    <a href="/logica-de-programacao/c-dobro-func/" class="list-group-item">O dobro de um número qualquer (funções)</a>
    <a href="/logica-de-programacao/c-positivo/" class="list-group-item">Valor positivo ou negativo</a>
    <a href="/logica-de-programacao/c-maior-que-dez/" class="list-group-item">Maior que 10</a>
    <a href="/logica-de-programacao/c-operacoes-mat/" class="list-group-item">Funções para as 4 operações artiméticas</a>
</div> 

Exercícios na linguagem C++
---

O que você precisa saber sobre a linguagem C++ para começar

Faremos todos os exercícios praticando programação orientada a objetos.

Se você não sabe nada sobre orientação a objetos, talvez queira ler...

- [O básico do básico sobre Orientação a Objetos (vulgo OOP)]()


<div class="list-group">
    <a href="/logica-de-programacao/cpp-calc-dobro/" class="list-group-item">O dobro de um número qualquer (oop)</a>
    <a href="/logica-de-programacao/cpp-area-quadra-cubo/" class="list-group-item">Area quadrada e área cúbica</a>
    <a href="/logica-de-programacao/cpp-antecessor-sucessor/" class="list-group-item">Antecessor e sucessor de um número qualquer (oop)</a>
    <a href="/logica-de-programacao/cpp-juros-simples/" class="list-group-item">Juros simples (oop)</a>
    <a href="/logica-de-programacao/cpp-triangulo/" class="list-group-item">Triangulo</a>
</div> 



Mas... e o básico sobre lógica de programação?
---

Eu não expliquei as partes conceituais, o que é DFD, o que é um teste de mesa, pseudocódigo, essa coisas...

Então acho justo deixar alguns links valiosos e que podem lhe ajudar, caso precise "dessas coisas".



- [PDF de professor da USP ](http://www.ime.usp.br/~slago/pl-1.pdf "link-externo")
- [PDF da Federal de RG](http://www.dca.ufrn.br/~affonso/DCA800/pdf/algoritmos_parte1.pdf "link-externo")
- [Sequencia de videos sobre Lógica](http://www.cursou.com.br/informatica/curso-logica-de-programacao/ "link-externo")
 (Não recomendado caso você já esteja com sôno)