---
layout:       grid12-article
title:        A trilha para alcançar<br />um código limpo
description:  Pequena lista, despretenciosa, que lhe ajudará<br>na busca pela boa codificação
---

Como codificar de forma limpa e coesa? Pergunta difícil!

Trata-se de uma pergunta bastante aberta, não há uma única resposta.

Neste artigo elenco "técnicas" que nos ajudam a alcançar o objetivo: código limpo! Não é um lista muito longa, nem tão
pouco um lista completa. Mas penso que é uma boa lista, eu gostaria de ter lido isso quando iniciei minha carreira.

Antes de tudo, é preciso atentarmos para o fato de que existem dois momentos:

1. quando escrevemos código e 
2. quando reescrevemos código. 

São momentos distintos e você já deve ter experimentado as duas situações.

Outra ponto a ser considerado é que o programador, sendo iniciante, não "verá" aonde o código pode ser mais legível. 
E mesmo que ele veja que pode melhorar, melhorar de que forma? Não adianta trocar 6 por meia dúzia, é preciso saber 
identificar código ruim e saber como resolver.

Código limpo é algo que se adquire com a prática e não com teoria, na verdade adquirimos com a teoria sim, mas é muito 
pouco. O ideal é praticar muito, ou seja, programar, programar, programar... Com o tempo você começará a perceber que 
seu próprio código ou de terceiro está saindo dos trilhos e sentirá vontade de alterá-lo. É aí que entra as técnicas
apresentadas neste artigo.



### Pecados que todos cometem no início

Verdade, tudo mundo cometeu, poucos admitem. Eu cometi muito! O importante é aprender a identificar o problema e, além 
de saber corrigir, começar a evitá-lo. Lá vai os "5 mandamentos"...

1. __Endentar o código corretamente__, não mostre seu código a ninguém antes de ter certeza de que ele está devidamente 
endentado. Código com endentação imprecisa é vergonhoso, não faça isso!
    
2. Procure __bons nomes__ para suas variáveis, métodos, classes, nomes de campos de tabelas, nomes de formulários, etc...
Ao programar, pare um instante para pensar em um nome significativo, se dê esse tempo.

3. __Comente o código__, mas faça isso de forma maestral. Não comente o que óbvio, não escreve muito, não escreva pouco,
escreve o necessário. De tempo em tempo volte para ler seus comentários, não se surpreenda se o seguinte pensamento
surgir em sua mente: "Nossa! Fui eu mesmo quem escreveu esse negócio!"

4. __Siga o estilo__ e tenha seu próprio estilo. Procure por um, crie um, tudo bem! Melhor do que ter um estilo é saber 
seguir outro. Nada mais desanimador que um novo integrante da equipe que não segue o padrão estabelecido, mesmo que ele 
não exista.

5. __Não duplique código__.  
   Artigo 153 do código penal Internacional
   Duplicar código, mesmo que seja uma única linha.
   Pena - reclusão, de 1 (um) a 2 (dois) anos.
   Parágrafo único. Incide na mesma pena quem ordena, autoriza ou realiza operação de duplicação de código, próprio ou de terceiro.




### A Arte de Escrever Programas Legíveis

![](programas-legiveis.gif)

Este pequeno livro de Dustine e Trevor vale cada centavo! Ele é de fácil leitura, recomendo fortemente.

O livro traz o seguinte conceito de código limpo: >> Códigos devem ser escritos de modo a minimizar o tempo necessário 
para sua compreensão.

Além disso aborda temas como por exemplo...

- O que torna um código “melhor”?
- Por acaso o tempo-para-entender entra em conflito com outros objetivos?
- Como tornar o código eficiente, bem projetado, fácil de testar e assim por diante?
- Objetivos como esses não entram, às vezes, em conflito com a meta de tornar o código fácil de entender?

Livro de cabeceira!


### Código Limpo, Habilidades Práticas do Agile Software

Outro livro sensacional, com quase 400 páginas o autor Robert C. Martin amplia o assunto e cobre tópicos como por 
exemplo:

- Nomes significativos
- Funções
- Formatação
- Objetos e estrutura de dados
- Tratamento de erros
- Teste de unidades
- Classes
- Comentários

Para ficar com vontade...

> Esse era meu teste! Depois que o vi funcionar e mostrei aos meus colegas, joguei o código de teste fora.
> Como eu disse, nossa profissão evoluiu. Eu isolaria meu código do resto do sistema operacional em vez de apenas 
> invocar funções padrões de contagem [...] progredimos bastante mas ainda podemos ir mais longe.
> (Robert)


### Refatoração, Aperfeiçoando o Projeto de Código Existente

Quando escrevemos um código e, posteriormente, voltamos para ajustar algumas coisas, estamos praticando a refatoração 
(refactoring), ou seja, estamos __refatorando o código__. 

O conceito intuitivo do termo traz consigo a idéia de que "refatorar" é simplificar uma expressão, não é isso o que vem 
a sua mente? 

OK, mas simplificar o que exatamente? E de que forma?

Quando alteramos o código, fazemos isso buscando algum objetivo, mesmo que ele não esteja muito claro. Normalmente,
alterarmos código com o objetivo de alcançar maior clareza. Só que "maior clareza" é muito subjetivo, muito solto.
Deveria-mos ter os objetivos de forma bem clara.

> Refatoração é uma alteração feita na estrutura interna do software para torná-lo mais fácil de ser entendido e menos 
> custoso de ser modificado sem alterar seu comportamento observável. (Martin Fowler)

Aconselho a leitura do livro Refatoração, Aperfeiçoando o Projeto de Código Existente de Martin Fowler.

O primeiro mandamento da refatoração é "ter um testes no cobrindo"... pois o código já está funcionando e se eu mexer 
poderei danificá-lo!

Poderá e com certeza irá danificá-lo.

Então, como alterar o código já existente (e funcionando) de forma que ele não se quebre?

Esteja certo de que seu código está coberto por testes unitários. 



### Testes Unitários (depois de codificado)

Não seria ótimo se você pudesse perguntar para o computador se o seu código está ou não funcionado?

Ou ainda, qual é a garantia de que seu código realmente está funcionando?

É possível saber se determinado código está cumprindo seu objetivo, estamos falando de testes unitários!

Depois que codificamos, podemos escrever um testes unitário para comprovar o funcionamento de determinada unidade. 
Escrever testes unitários irá mudar radicalmente sua forma de programar. O legal dos testes unitários é que eles são 
automáticos, ou melhor, podemos executar todos os testes em uma única linha de comando e ver se todos estão passando.

O problema é que você precisa ter um mínimo de conhecimento sobre Programação Orientada a Objetos. Antes de escrevermos 
um teste unitário temos que considerar essa unidade. E a unidade, normalmente, está apoiada em um classe e "classe" já 
é outro assunto: programação orientada a objetos. 

Um testes é baseado em uma asserção, uma assertiva, de forma mais simples: uma afirmação.

    #
    # Eis sua unidade
    #
    somaDoisNumeros(a, b)
        return a + b

    #
    # Eis o seu teste
    #
    valorObtido    = somaDoisNumeros(3, 4)
    varlorEsperado = 7
    assertEquals(varlorEsperado, valorObtido)

Se o código acima foi suficientemente intuitivo, você deve ter percebido que a função `assert()` compara se o valor
esperado é igual ao valor obtido. 

E não precisamos de todas essas variáveis, normalmente fazemos assim...

    #
    # Eis o seu teste
    #
    assertEquals(7, somaDoisNumeros(3, 4))

Essa é a afirmação: que o resultado da função `somaDoisNumeros()` com os valores `3` e `4` será `7`.

> Os testes são essenciais porque, embora eu siga refatorações estruturadas para evitar a maioria das chances de 
> introdução de falhas, ainda sou humano e ainda cometo erros. Assim, preciso de testes sólidos.

Cada linguagem de programação possui seu próprio framework de testes, procure o seu e comece agora mesmo a praticar.



### Teste Unitários (antes de codificar)

Se escrever um teste após codificar é importante, escrever um teste antes de codificar é igualmente importante.

O ato de escrever um teste antes de codificar é conhecido pelas siglas __TDD__ (Test Driven Development), 
desenvolvimento guiado por testes.

A prática do TDD tem como objetivo primário "Código limpa e que funciona", olha que lindo! Além de código limpo teremos
código funcionando de verdade.

Não é apenas escrever um teste para um método, mas sim escrever um teste e, somente após termos o teste, seguir com o 
desenvolvimento. É como o próprio nome diz, o desenvolvimento é guiado pelos testes. Se escrevemos um código e depois 
testamos aí não é TDD, é simplesmente teste unitário. Para ser TDD o teste deve vir antes do código.

Mas não é só isso, nem é tão simples quanto parece. Dentre outras coisas, o  universo do TDD compreende:

- Cilco de desenvolvimento (green, red, refactor)
- Babys steps (passos pequenos)
 
Eu escrevi um tutorial (para os inciantes) sobre [TDD](/tdd).

Se você já programa a um tempo e ainda não experimentou o TDD sugiro a leitura do livro __Test Driven Development By exemple__
de Kent Bach (há a versão em português).




### DRY (Don't Repeat Yourself)

Esse conceito foi cunhado por Andrew Hunt and David Thomas no seu ótimo livro The Pragmatic Programmer:

> DRY—Don’t Repeat Yourself
> Every piece of knowledge must have a single, unambiguous, authoritative representation within a system.

A idéia é simples "Don't Repeat Yourself" significa "Não se Repita!", estamos falando novamente sobre duplicação de 
código. Não adianta eu buzinar isso no seu ouvido, quando você tiver com vontade de duplicar código, vá em frente!
Depois quando você se arrepender, pronto! estará aprendido.


### DIE = Duplication is Evil

Duplicar é ruim, sinônimo de DRY.


### KISS = Keep It Simple, Stupid

mantenha-o simples, idiota


### YAGNI = You Aren’t Going Need It

“Você não vai precisar disso”, para de inventar!



###  SOLID

[S]ingle Responsability Principle
[O]pen/Closed Principle
[L]iskov Substitution Principle
[I]nterface Segregation Principle
[D]ependency Inversion Principle

http://butunclebob.com/ArticleS.UncleBob.PrinciplesOfOod

Conclusão
---

Acho que a lista ficou extensa, mais do que eu imaginei no começo.

Se você me perguntasse "por onde começar?" eu diria 2 coisas :

1. fique com o livro do Dustine e Trevor (A Arte de Escrever Programas Legíveis)
2. Aprenda (muito) sobre testes unitários, antes mesmo de aprender programação orientada a objeto.

Essas duas coisas seriam um bom começo. Por outro lado, preciso avisar que a lista completa você irá carregá-la até o
fim de sua carreira. Alguns itens irão perder a importância, outros irão ganhar destaque, alguns irão se renovar. Mas,
invariavelmente, eles estarão aí, não é prudente ignorá-los.

Imagino que você deve ter percebido, mas não custa nada avisar: eu apenas listei as técnicas, não expliquei, então 
ficará a seu cargo buscar mais informações sobre cada uma delas.

Abs!