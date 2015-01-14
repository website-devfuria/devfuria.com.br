---
layout:      grid12-article
title:       O que é JavaScript?
description: 
---

No início, a linguagem JavaScript foi criada para funcionar no lado do cliente, ela era executada exclusivamente nos 
navegadores web. A base da programação no lado do cliente consiste em escrever um script e fazer ele funcionar no
navegador sem ter que viajar até o servidor para ser executado.

"Rodar no navegador" significa que o navegador terá possibilidades de interpretar e executar a linguagem. Ele faz isso
através de seus motores (engines) e cada navegador possui o seu. Se pesquisar na Internet por __engines javascript__ verá
nomes como V8, WebKit, SipderMoney, TraceMonkey, Gecko, Chakra, etc...

O engine mais notável é o [V8](https://developers.google.com/v8/ "link-externo") lançado pela Google e embutido em seu navegador Chrome. Sua popularidade, sem sombra
de dúvidas, se deve ao fato de ser utilizado pelo Node.js. Como dito, inicialmente a linguagem se prestava para resolver
problemas de interatividade de páginas web, ela ficava no lado do cliente (no navegador) fazendo o que não cabia as
linguagens do lado do servidor fazer. Em contra partida, JavaScript estava limitado a realizar melhorias em páginas web,
não que isso fosse fácil ou simples e tão pouco desmerecedor, mas a linguagem estava limitada ao espaço do navegador.

O Node.js pôs um fim a essa questão, trouxe a linguagem para o lado do servidor colocando-a como concorrente das demais
linguagens de servidor como PHP, Python, Ruby, ASP e etc... 

Quem trabalhava com JavaScript antes do Node.js, deve se sentir excitado com a possibilidade de executá-la no lado do
servidor. Mas para quem nunca programou em JavaScript, saber que existem dois caminhos a se trilhar (o do servidor e o 
do cliente) talvez não seja nada empolgante, afinal de contas sua curva de aprendizado será acentuada. Levando em conta
que a opinião mais importante é a sua e não a minha, convido o(a) caro(a) leitor(a) a emitir sua opinião sobre o assunto:
qual será a primeira impressão que um iniciante tem sobre JavaScript agora que ela pode ser executada tanto no lado do
servidor como no cliente?

Seja você iniciante ou não, ainda existem outras questões...

- Devo aprender JavaScript do lado do servidor ou do lado do cliente?
- Em qual eu inicio?
- Em qual eu devo me dedicar mais?

Não há uma única resposta para a questões e deixo aqui apenas a minha opinião. Você deve aprender as duas formas, comece
pela que se sentir mais a vontade e se especialize na que mais gostar, porém nunca ignore o outro lado, se você precisar
de mais informações procure entender as diferenças entre um programador __server-side__ e um __front-end__.


### Afinal, o que é JavaScript?

> "JavaScript (às vezes chamado apenas de JS) é uma linguagem de programação, leve, interpretada, orientada a objetos, 
> baseada em protótipos e em first-class functions (funções de primeira classe), mais conhecida como a linguagem de 
> script da Web. Também utilizada em vários outros ambientes como __node.js__ e __Apache CouchDB__.".
>
> Mozilla Fundation


JavaScript é a linguagem de programação que a [Netscape](http://pt.wikipedia.org/wiki/Netscape "link-externo") criou 
para dar vida (do lado do cliente - front end) em seu navegador. O nome tem uma sacada comercial, quiseram aproveitar o 
sucesso de [Java](http://www.oracle.com/br/technologies/java/overview/index.html "link-externo") e escolheram um nome similar.
O resultado é que até hoje (2014) há uma confusão enorme. __JavaScript não é Java__ (e vice e vesa). O pai dela chama-se
[Brendan Eich](http://en.wikipedia.org/wiki/Brendan_Eich "link-externo").

A Netscape foi vendida e deu lugar para a [fundação Mozila](https://www.mozilla.org/pt-BR/ "link-externo") tomar conta do
negócio e ela vem fazendo um ótimo trabalho.

A popularidade se deu pelo fato de que JavaScript fazia o que nenhuma outra linguagem fazia: transformar páginas __HTML__
estáticas em algo dinâmico sem ter que "viajar" até o servidor, estamos falando do lado do cliente (front end). O Node.js,
lançado em 2009, também colaborou em muito com a popularidade da linguagem levando ela para o servidor.

> "Parece algo que você pode dominar em uma tarde, JS parece simples, contudo, em seus 10 anos de história até aqui [a edição
> era de 2007], as melhores práticas de JS pareciam mudar com as estações.".
> 
> Kevin Yank e Cameron Adams (Simple JavaScript)



### JS é realmente Orientado a Objetos ?

O JavaScript é orientado à objetos? Bem, ele contém objetos que podem conter dados e métodos que agem sobre esses 
dados. Objetos podem conter outros objetos. O JavaScript não possui classes, mas possui construtores que são capazes 
de fazer o que as classes fazem, incluindo agir como contêineres para classes de variáveis e métodos. Ele não possui 
herança orientada a classe, mas tem herança orientada a protótipo.(Douglas Crockford's, o mago do JS)

JavaScript é uma linguagem orientada a objetos. Isso significa que, em vez de ter funções definidas globalmente para
operar em valores de vários tipos, os próprios tipos definem __métodos__ para trabalhar com valores. Para classificar
os elementos de um array `a`, por exemplo, não passamos `a` para uma função `sort()`. 
(Flanagan, pag 29 - JavaScript, o guia definitivo)

Em vez disso, chamamos o método `sort()` de `a`: 

```javascript
    a.sort() // A versão orientada a objetos de "sort(a)"
```



### JavaScript é seguro?

Vamos estender essa pergunta para: a linguagem de programação X é segura?

Nenhuma linguagem de programação é segura ou insegura, a pergunta correta seria:

O desenvolvedor programa de forma segura?

O que acontece com JavaScript é que o código fica exposto a qualquer usuário, por isso, percebemos erroneamente, que 
JavaScript é inseguro, mas isto não é verdade. Seguro ou inseguro, como já disse, é a forma como se programa.

No caso da programação client-side, tendo em vista que o código fica exposto, não criaremos nenhum __código sensível__
 (um código que possa ser explorado por um hacker causando danos a aplicação).


### Padronização

[ECMAScript](http://www.ecmascript.org/ "link-externo") é a padronização que rege a linguagem __JavaScript__, na verdade
este é o nome oficial adotado para a linguagem, mas que não "cola" de jeito nenhum. 

Porque temos um padrão? Porque cada navegador implementa a linguagem de forma diferente, em outras palavras, escrever um
trecho de código JavaScript que funciona no Firefox, por exemplo, pode não funcionar no IE (sempre o IE!). 
Isso mesmo, JavaScript sofre do mesmo problema que o HTML e o CSS, cada navegador implementa ao seu sabor. 

> "Em teoria, a padronização obriga as empresas fabricantes de navegadores a implementarem no mínimo aquele conjunto de
> funcionalidades" 
> 
> (Edgar Damiani)

...por isso o padrão ECMA é tão importante.

Se estiver curioso(a) veja neste artigo qual é a relação 
[padrão ECMA X versão da linguagem](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Guide/JavaScript_Vis%C3%A3o_Geral#Relationship_between_JavaScript_Versions_and_ECMAScript_Editions "link-externo").



Leia em seguida
---

Que tal descobrir o que você precisa para [iniciar em JavaScript](/javascript/iniciando-com-javascript/)?
