---
layout:      grid12-article
title:       "Valor positivo ou negativo - linguagem c"
description: Exercício de lógica de programação para descobrir se um número é positivo ou negativo.
---
        
Crie uma função que descubra se um valor é positivo ou negativo (considere o valor zero como positivo)

        
Solução passo a passo
---

Utilizando-se funções, o nosso curso de lógica começa a fazer mais sentido, pois o teste unitário refere-se a uma unidade
(como o nome sugere). Essa unidade é a nossa função.


Faremos uma função que aceite como parâmetro um inteiro e retorne `0` caso o número seja positivo, se o resultado for
diferente de `0` então não é positivo e sim negativo.

    0 nos diz que é positivo 
    qualquer coisa diferente de 0 nos diz o contrário

O primeiro teste me parece simples.

	assert(ehPositivo(8) == 0);

A função deveria se chamar "éPositivo()". Como não podemos utilizar a palavra acentuada lançamos mão do "eh" para compensar
a intenção da nomenclatura.

Vamos fazer o código compilar.

    int ehPositivo(int numero) {

    }


Vamos fazer o teste passar.

    int ehPositivo(int numero) {
        return 0;
    }

Se incluirmos outro teste, por exemplo:

	assert(ehPositivo(7) != 0);

Veremos o novamente o teste falhar. Progresso. Vamos codificar para fazer o teste passar. E é aqui que entra o seu raciocínio
lógico.

O que torna um número positivo?

Ou, o que torna o número negativo?

Ou ainda, o que difere o número positivo do negativo.

Ao dividir um número positivo por 2 o resto sempre será 0 (zero). Já o número negativo sempre dará um valor maior que
zero.

A linguagem c nos ajuda com o operador `%`. Ele retorna o resto da divisão de dois números quaisquer. Exemplos:

    10 % 2 // retorna 0
    11 % 2 // retorna 1 (o valor correto dependerá do tipo da variável em que será atribuído o resultado
    12 % 2 // retorna 0

Então vamos experimentar...

    int ehPositivo(int numero) {
        return numero % 2;
    }


Os dois testes passaram? Sim?

Os testes passam, seu código funciona. Poderíamos para por aqui, mas... surgiu a seguinte questão: o que acontecerá se
o passar-mos o 0 (zero) como parâmetro da função?

Não sei o que acontecerá, vou perguntar para o sistema. Farei isso adivinha como?

Escrevendo outro teste.

	assert(ehPositivo(0) == 0);

Compile e execute. Tudo certo?


Código completo
---

```c
#include <stdio.h>
#include <assert.h>

/**
 * Função que descobre se um número é positivo ou negativo
 *
 * retornará 1 caso positivo
 * retornará 0 caso negativo
 */
int ehPositivo(int numero) {
    return numero % 2;
}

int main (){

    assert(ehPositivo(8) == 0);
    assert(ehPositivo(7) != 0);
    assert(ehPositivo(0) == 0);

    return 0;
}
```


Repare como o teste nos ajuda representando a documentação do sistema.

Se você quisesse saber o que a função `ehPositivo()` faz, bastaria olhar para o teste.

Nosso teste está dizendo (afirmando) o seguite:

- A função retorna `0` caso o número seja positivo, como `8` por exemplo.
- A função retrona um valor diferente de `0` caso o parâmetro seja negativo.
- A função entende que `0` é um valor positivo. 

Caso você desconfie de que o teste esteja "mentindo", basta executá-lo. Se tudo passar (green) os testes estavam certos.
Se algo falhar (red) o teste "mentiu", mas na verdade é o seu código (no caso a função `ehPositivo`) quem deve ser corrigida.

Caso você desconfie de algum funcionamento, por exemplo, o que será que acontece se perguntar-mos se `-1` é positivo?

Escreve o teste e execute.

    assert(ehPositivo(-1) == 0);

Se o teste passar, fim da linha. eu trabalho foi concluído.

Se o teste falhar, você ainda terá que codificar mais um pouco. 

Agora é com você, eu fico por aqui. tchau!

        