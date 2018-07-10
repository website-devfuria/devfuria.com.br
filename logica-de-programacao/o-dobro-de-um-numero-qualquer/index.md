---
title:       O dobro de um número qualquer
description: Exercício de lógica de programação para calcular o dobro de um número qualquer.
capitulo:    logica-nivel-0
ordem:       1
---




### Exercício de lógica de programação

Faça uma função para calcular o dobro de um número qualquer.


### Comentários:

Este é o segundo exercício da série, nele já vamos utilizar as funções, pois não faz muito sentido testarmos o código
sem ter ao menos uma função. Mesmo porque o teste visa sempre testar uma unidade, essa unidade deve ser (pelo menos)
uma função.




Linguagem C
---


Para sabermos se o código funciona vamos escrever um teste: `assert(  10 == dobro(5)  );`

Parece complicado? Só parece, não é não!

Eu sei que `10` é o resultado esperado da função `dobro()` caso o parâmatro passado for `5`.

Em outras palavras, é o mesmo que dizer que a expressão `10 == dobro(5)` retornará `true`.

Entendido isso podemos avançar. A função `assert()` funciona da seguinte maneira: ela fica em silêncio se o parâmetro
for verdadeiro `assert(true)` e ela "grita" se o parâmetro for `false` `asssert(false)`.

Se o programa ficar em silêncio (não responder nada, absolutamente nada), entendemos então que o teste está funcionado.

Se o programa "gritar" alguma coisa, entendemos que o programa não está fazendo o que deveria fazer e que, portanto, a
lógica empregada precisa ser corrigida.

Vamos botar a mão na massa...

__1.__ Crie o arquivo `foo.c` e insira o seguinte conteúdo nele:

```c
#include <stdio.h>
#include <assert.h>

//
// Função que retorna o dobro de um número qualquer
//
int dobro(int num) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main (){

    assert(10 == dobro(5));
    assert(12 == dobro(6));

    return 0;
}
```

Eu acresentei dois assert´s só para mostrar que podemos fazer asserções à vontade.

__2.__ Agora, no terminal, compile o código (é o equivalente ao 'build') `gcc foo.c -o foo`.


__3.__ Vamos ver se os testes estão passando ou não?

Execute o programa! No terminal digite `./foo`

O que temos de resposta? Algo parecido com "Assertion failed..."?

É meu(inha) amigo(a), seu teste falhou!

Seu exercício de lógica começa exatamente "aqui"! Agora implemente o código que retorna o dobro de um número qualquer.
Ou seja, subistitua o trecho "// Aqui entra a lógica do programa." pelo seu código.

Como a lógica é ridiculamente fácil eu vou mostrar o resultado:

### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

//
// Função que retorna o dobro de um número qualquer
//
int dobro(int num) {
    return 2 * num; // <--- olha aqui o resultado
}

//
// Testes
//
int main (){

    assert(10 == dobro(5));
    assert(12 == dobro(6));

    return 0;
}
```

Se você compilar o código acima e excutar o binary (o arquivo executável) ele ficará em silêcio, ou melhor, não vai
acusar nenhum erro, portanto, nossa lógica está adequado ao nosso objetivo, está certa!

Está sacando o processo?

Acho que vou gravar um vídeo para demonstrar isso, o que você acha?


Linguagem Python
---

<iframe width="560" height="315" src="https://www.youtube.com/embed/pfPjRz0xsVk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.


```python
# -*- coding: utf-8 -*-

#
# Função que retorna o dobro de um número qualquer
#
def dobro(num):
    pass

#
# Seus testes
#
assert 10 == dobro(5), "o dobro de 5 deve ser 10"
```



### Solução na linguagem Python


```python
# -*- coding: utf-8 -*-

#
# Função que retorna o dobro de um número qualquer
#
def dobro(num):
    return num * 2

#
# Seus testes
#
assert 10 == dobro(5), "o dobro de 5 deve ser 10"
```


Linguagem JavaScript (Node.js)
---

Abaixo nosso código inicial escrito em JavaScript (Node.js), utilize ele para resolver o problema.

```javascript
var assert = require('assert');

//
// Função que retorna o dobro de um número qualquer
//
var dobro = function(num) {


}

//
// Testes
//
try {
    assert.equal(10, dobro(5));
} catch(e) {
    console.log(e);
}

```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

//
// Função que retorna o dobro de um número qualquer
//
var dobro = function(num) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
try {
    assert.equal(10, dobro(5));
} catch(e) {
    console.log(e);
}

```

