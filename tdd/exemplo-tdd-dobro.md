---
layout:      grid93-article
title:       "Simples exemplo de TDD   O dobro de um número qualquer"
description: Primeiro artigo de uma série de exemplos básicos de  TDD (Test Driven Development) escrito na linguagen Python
menu:        tdd-exemplos-simples
---

{% include /menus/tdd-exemplos-simples-paraquedas.html %}

Este é o primeiro exemplo de TDD da série de exemplos na __linguagem Python__. Ele é extremamente simples por razões
didáticas. Ela reflete pouco, ou quase nada (me lembrei do seu Madruga), de TDD. Mas deve ajudar, assim espero, a quem
não sabe nada sobre TDD e, além disso, está começando a programar.

O objetivo é fazer um programa que calcule o dobro de um número.


### Um iniciante iniciando em TDD...

Eu e você sabemos que o dobro de um número é `numero * 2`, ok. Não precisamos de TDD para fazer isso, obviamente.
Mas a idéia é simplificar ao máximo para que um desenvolvedor com conhecimento básico/mediano possa pelo menos
vislumbrar a técnica de TDD.

Sempre começamos pelo teste e vamos simplificar os testes com a ajuda da declaração (statement) `assert`.

	assert 10 == dobro

Ao executar o script `python foo.py` (onde `foo.py` é o nome dado ao script) o interpretador reclama de que está 
faltando a variável `dobro`:

    NameError: name 'dobro' is not defined

Vamos declarar a variável inicializando-a com o valor `None`.

    dobro = None

Agora o interpretador não reclama, porém, o nosso teste falha e é aqui que realmente começa o TDD, com um teste falhando.

Faça uma pausa e pense. Você tinha um objetivo e agora além do objetivo você tem um teste confirmando que você ainda
não o alcançou.

Continuando, agora precisamos __codificar o mínimo para o teste passar__.

    dobro = 2 * 5

Ao executar o programa, os testes passam, mas... o `5` deveria ser "um número qualquer".

Não sei como fazer isso imediatamente, mas que tal dar um passo pequenino?

Vamos colocar ele em uma variável denominada `num`.

    num   = 5

    dobro = 2 * num

    assert 10 == dobro

Execute o script. Não quebrou nada? Testes passando? Sim?

Então seu trabalho acabou! (pelo menos por enquanto)


### Código completo

```python
# -*- coding: utf-8 -*-

#
# Um número arbitrário
#
num   = 5

#
# Seu código
#
dobro = 2 * num

#
# Seu teste
#
assert 10 == dobro
```



### Entendendo melhor

Vamos entender o que fizemos.

Traçamos um objetivo e ao invés de partir para a solução do problema, apesar de óbvio, resolvemos escrever um teste e
ver ele falhar 

Após ver o teste falhar, ao invés de codificarmos a solução em uma tacada só, codificamos o mínimo necessário para ver 
o teste passar.

Com o teste passando resolvemos alterar o código (também conhecido como refatorar o código). Após essa pequena alteração
como sabemos que não quebramos nada? Rodando o teste, ou melhor, em nosso caso simplesmente executando o script.

Deveríamos ter um número qualquer, mas o melhor que chegamos foi com um número arbitrário.

    num = 5

O principal de seu programa resume-se em uma única linha.

    dobro = 2 * num

Como eu sei que ele funciona?

Hora, temos um teste confirmando que sua lógica funciona, veja:
    
    assert 10 == dobro

Para realizar outros testes, experimente trocar o valor de `num` e do teste também.



### Palavras finais

Este primeiro exercício de TDD serviu para eu justificar esse tutorial de TDD para iniciantes. Nas aulas de lógica das
Faculdades você aprendeu que para testar o seu pequeno código você o executava,  realizava a entrada de dados 
(__input__ ), imprimia os resultados (__output__) e, por fim, conferia visualmente.

Eis a grande diferença! Com os teste você não confere visualmente e sim automaticamente.

O pior de tudo é que essa prática adotada pelas faculdades prejudicam o raciocínio. Em outras palavras a lógica
principal de seu programa confundia-se com a entrada e a saída, seu código fica em estado "macarrônico". Além disso, o
desenvolvedor dificilmente corrompe com essa cultura, quer dizer ele vai produzir código sujo por um bom tempo ainda.

Com os testes, você verá que seu programa ficará muito mais __coeso__, muito mais __claro__, mais __limpo__ e,
o melhor de tudo, funcionando!

E quem garante que seu código funciona? Os testes.


Próximo exemplo
---

- [Simples exemplo de TDD - O dobro de um número qualquer (funções)](/tdd/exemplo-tdd-dobro-func/)


