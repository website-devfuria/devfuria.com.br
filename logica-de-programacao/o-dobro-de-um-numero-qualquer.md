---
title:       O dobro de um número qualquer
description: Primeiro exercício de lógica de programação para quebramos o gelo.
serie:       Lógica Nível 0
ordem:       0
---

{% include /alertas/logica-apresentacao.html %}


### Exercício de lógica de programação

Faça uma função para calcular o dobro de um número qualquer.


### Comentários:

Este é o primeiro exercício de lógica que abre a série. Ele é muito fácil de resolver e tem como 
objetivo te ajudar na familiarização dos exercícios. Repare que temos um teste já escrito e para praticar basta codificar
até ver os testes passarem. Eu vou seguir passo a passo com você.


{% include /alertas/logica-linguagens.html %}


Linguagem C
---

Como esse é o primeiro exercício vou me extender um pouco mais na explicação do processo de resolução, ok?

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
    return 2 * num; // <------- olha aqui o resultado !!!!!!!!!!
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

Em Python seguimos o mesmo esquema, só que aqui é mais fácil pois, não temos que compilar o programa. Python é 
intrepretada e não compilada.

Se você tiver o Python devidamente instalado, basta executar `python foo.py` onde `foo.py` é um arquivo de texto simples
com o seguinte conteúdo:

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

Em JavaScript muda tudo!

Não, brincadeira, segue também o mesmo esquema!

Crie um arquivo chamado ``foo.js` com o conteúdo abaixo e execute no terminal `node foo.js`

Obviamente você deve ter o node.js devidamente instalado,

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

{% include /alertas/logica-feedback.html %}