---
layout:      materia
title:       "O dobro de um número qualquer - linguagem c"
description: Exercício de lógica de programação resolvido onde o objetivo é calcular o dobro de um número qualquer.
---

Faça um programa que calcule o dobro de um número.



Solução passo a passo
---

Primeiro, escrevemos o teste.

	assert(10 == dobro);

Compile! O compilador deve reclamar de que está faltando a variável `dobro`:

    'dobro' undeclared

Vamos declarar a variável.

    int dobro;

	assert(10 == dobro);

Agora o compilador não reclama. Mas ao rodar o programa, o nosso teste falha.

    Assertion `10 == dobro' failed

Isso é um progresso. Agora precisamos codificar o mínimo para o teste passar.

    dobro = 2 * 5;

Compile e rode o programa. Agora os testes passam, mas... o `5` deveria ser "um número qualquer".

Não sei como fazer isso imediatamente, mas que tal dar um passo pequenino?

Vamos colocar ele em uma variável denominada `num`.

    int num, dobro;
    
    num   = 5;
    dobro = 2 * num;

	assert(10 == dobro);

Comipile e rode. Não quebrou nada? Testes passando? Sim?

Então seu trabalho acabou!


Entendendo melhor
--

Vamos entender o que fizemos.

Deveríamos ter um número qualquer, mas o melhor que chegamos foi com um número arbitrário.

    num = 5;

O principal de seu programa resume-se em uma única linha.

    dobro = 2 * num;

Como eu sei que ele funciona?

Hora, temos um teste confirmando que sua lógica funciona, veja:
    
    assert(10 == dobro);



Código completo
---

{% highlight c %}
#include <stdio.h>
#include <assert.h>

int main (){

    int num, dobro;

    // Um número arbitrário
    num   = 5;

    // Sua lógica (seu código)
    dobro = 2 * num;

    // Seu teste
    assert(10 == dobro);

    return 0;
}
{% endhighlight %}




Palavras finais
---

Para realizar outros testes, experimente trocar o valor de `num` e do teste também.

Isso você fazia nas aulas de lógica, mas com uma significativa diferença. Para testar, você realizava o __input__ dos
dados e imprimia (__output__) os resultados e, por fim, conferia visualmente.

Eis a grande diferânça! Com os teste você __não__ confere visualmente e __sim__ automaticamente.

Outra coisa, a entrada e a saída do programa confundia-se com a lógica principal (`dobro = 2 * num`).

Com os testes, você verá que seu programa ficará muito mais __coeso__, muito mais __claro__, mais __limpo__ e,
o melhor de tudo, funcionando!

E quem garante que seu código funciona? O teste.

