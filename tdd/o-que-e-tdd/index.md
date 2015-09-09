---
layout:      grid12-article
title:       Uma breve noção sobre <br />o que é TDD
description: Noção básica sobre o que é TDD,<br />apenas o suficiente para um primeiro contato com TDD<br />(test driven development).
---

Este é um artigo introduzindo a idéia de TDD (test driven development), ele é bastante básico e vou apresentar a idéia
intuitiva do que é o TDD.

![Imagem ilustrando o cliclo de TDD](tdd-conceito.jpg "Cliclo de TDD")

__TDD__: acrônimo para __Test Driven Development__ (desenvolvimento guiado por testes).

Com vocês o culpado pelo surgimento da técnica... Kent Bech!

> Código limpo que funcione, [...] é o objetivo do TDD. Código limpo que funciona é uma meta valiosa por um bocado de razões.
> 
> * É uma forma previsível de desenvolver. Você sabe quando acabou sem ter que se preocupar com uma longa trilha de erros.
> * Dá a você uma chance de aprender todas as lições que o código tem para ensinar. Se você fizer às pressas a primeira coisa que pensar, então nunca terá tempo para pensar em uma segunda coisa melhor.
> * Melhora as vidas dos usuários de seu software
> * Permite que seus colegas de equipe contem com você, e você com eles.
> * É bom escrevê-los
> 
> Mas como obtemos código limpo que funciona? Muitas forças nos desviam do código limpo, ou mesmo de código que funciona. Sem pedir conselhos aos nossos medos, aqui está o que fazemos: conduzimos o desenvolvimento com testes automatizados, um estilo de desenvolvimento chamado Desenvolviemnto Guiado por Testes. No TDD:
> 
> * Escrevemos código novo apenas se um teste automatizado falhou
> * Eliminamos duplicação
> 
> Essa são duas regras simples, mas geram um complexo comportamento individual e de grupo com implicações técnicas, tais como:
> 
> * Devemos projetar organicamente o código, executando e fornecendo feedback entre as decisões.
> * Devemos escrever nossos prórpios testes, pois não podemos esperar 20 vezes por dia para outra pessoa escrever um teste.
> * Nosso ambiente de desenvolviemnto deve fornecer resposta rápida a pequenas mudanças.
> * Nosso projeto deve consistir em muitos componentes altamente coesos e fracamente acoplados para tornar os testes fáceis
> 
> As duas regras implicam em uma ordem para as tarefas de programação.
> 
> 1. Vermelho - Escrever um pequeno teste que não funcione e que talvez nem mesmo compile inicialmente.
> 2. Verde - Fazer rapidamente o teste funcionar, mesmo cometendo alguns pecados necessário no processo.
> 3. Refatorar - Eliminar todas as duplicações criadas apenas para que o teste funcione.
> 
> Vermelho/verde/refatorar - o mantra do TDD
> 
> Fonte: Kent Bech no prefácio de seu livro "TDD Desenvolvimento Guiado por Testes"


Preciso falar mais alguma coisa?



Exemplo
---

Nosso objetivo será fazer um inversor de palavras. Ele inverte, por exemplo,  "animal" em "lamina".

Mas antes...

### Precisamos de uma linguagem imaginária

Como estamos no curso de lógica e talvez você conheca muito pouco sobre linguagens de programação, vou inventar uma.

Parece-se com pseudocódigo, mas não se preocupe com isso.


### Precisamos de um framework de testes imaginário.

Imagine que você tem um botão chamado "Rodar testes". Toda vêz que eu disser "rode os testes" você aperta o botão.

O que acontece depois?

Os testes são executados, se todos eles passaram, bandeira verde (green), se um ou mais testes falharem bandeira vermelha (red).

Esse será nosso __framework de testes__ imaginário.



### Praticando.




Começe pelo teste. 

    palavra = "animal"
    ok("lamina" == inverterPalavra(palavra))

Rode os testes!

Não compila.

Faça compilar, apenas compilar.

    function inverterPalavra(palavra) {
    }

Rode os testes!

Compila, mas não passa (red). 

Faça o mínimo para passar, apenas o mínimo (não pense muito).

    function inverterPalavra(palavra) {
        return "lamina"
    }

Rode os testes!

Eles passam (green). Refatore (elimine redundâncias).

Como nosso exemplo é muito simples, "refatorar" significa "achar a solução".

    function inverterPalavra(palavra) {

        pedacos = quebreStringEmPedacos(palavra)
        
        percorra pedacos {
            // 'key' será o índice de 'pedacos' (0, 1, 2, 3, 4, e 5)
            i = (pedacos.tamanho - 1) - key
            palavraInvertida[] = pedacos[i] 
        }

        return palavraInvertida
    }

Neste instante você deve estar pensando "nossa será que este código vai funcionar?".

Não pergunte para mim, pergunte para os testes (execute eles).

Depois de tanto imaginar, vamos ter que imaginar que os testes passaram (esse era meu objetivo).

Outra coisa, se você estiver incomodado(a) com o código (eu espero que esteja) você poderá alterá-lo.

Mas quem garante que o código irá funcionar depois que você mexer neles?

Novamente, pergunte para os testes.

E aí passaram?

Fim o jogo.














