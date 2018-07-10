---
title:       Trocar o valor de duas variáveis
description: Primeiro exercício de lógica de programação para quebrarmos o gelo.
capitulo:    logica-nivel-0
ordem:       0
---



### Exercício de lógica de programação

Escreva um algoritmo que armazene o valor 999 na variável `a` e o valor 555 na variável `b`.

A seguir (utilizando apenas atribuições entre variáveis) troque os seus conteúdos
fazendo com que o valor que está em `a` passe para `b` e vice-versa.


### Comentários:


Este é o primeiro exercício de lógica que abre a série, ele é extremamente fácil de resolver e tem como
objetivo te ajudar na familiarização dos exercícios.

Começamos com as dua variáveis...

    a = 999
    b = 555

Você precisará trocar o valor entre elas, ou seja...

    a = 555
    b = 999

Se você estivesse na faculdade resolvendo este exercício como você faria ?

Você provavelmente se preocuparia em ler a entrada e mostrar a saída, certo?

Certo se você estivesse na faculdade, aqui estamos no devfuria, onde as coisas acontecem de verdade.

No mundo real não programamos dessa forma, nos escrevemos um testes, vemos ele falhar e, por último, fazemos o teste
passar implementando nossa lógica. Além disso para termos a certeza de que o código está funcionando nós simplesmente
rodamos o teste, se ele passar, significa que o código está funcionado!

Na linguagem C utilizamos a função `assert` para simularmos os testes, então nosso teste ficará assim...

    assert(a == 555);
    assert(b == 999);

Agora basta implementar o código e ver os testes passarem.





Linguagem C
---

<iframe width="560" height="315" src="https://www.youtube.com/embed/wYb5EGir9JY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

Como esse é o primeiro exercício vou me estender um pouco mais na explicação do processo de resolução, ok?

Conforme avançarmos pelos exercícios eu vou deixar você na sua responsabilidade para resolver os problemas sozinho.

Abaixo nosso código inicial escrito em C.

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int a, b, temp;
    a = 999;
    b = 555;

    //
    // Sua lógica
    //




    //
    // Testes
    //
    assert(a == 555);
    assert(b == 999);

    return 0;
}
```

Devemos compilar o código acima.

    gcc foo.c -o foo

Entendeu o comando ? Não ? Explico...

    # este é um utilitário de linha de comando
    # que tem como objetivo compilar códigos escritos
    # na linguagem C
    gcc

    # Imaginando que escrevemos nosso código no arquivo
    # chamado `foo.c` devemos indicar o nome do arquivo
    # logo após o nome do compilador...
    gcc foo.c

    # o parâmetro `-o` indica qual será o objeto
    # ou melhor, qual será o arquivo executável
    # Em nosso eemplo, utilizo o nome `foo`
    -o foo

    # No Linux não precisamos indicar a extensão do arquivo
    # Já no Windows devemos chamá-lo `foo.exe`, ficaria assim
    -o foo.exe

Se você entendeu, continuamos. Você deve executar o arquivo.

    # No Linux execute:
    ./foo

    # No Windows acho que é só clicar em cima.

O que você vê?

Um erro disparado de nossa função `assert` ? Então, sinal vermelho, seu teste não está passando.

Aqui começa o seu trabalho, você precisa fazê-lo passar.




### Solução na linguagem C

Esta é a solução completa.

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int a, b, temp;
    a = 999;
    b = 555;

    //
    // Sua lógica
    //
    temp = a;     // registramos o valor de 'a' em 'temp'
    a    = b;     // sobrescrever 'a' com o valor de 'b'
    b    = temp;  // sobrescrever 'b' com o valor que era de 'a' (e foi registrado em 'temp')

    //
    // Testes
    //
    assert(a == 555);
    assert(b == 999);

    return 0;
}
```
Se você compilar o código acima e executá-lo dessa forma...

    gcc foo.c -o foo
    ./foo

O que você vê agora ? Nada, certo?

Pois bem, isso significa que seu teste passou.


Linguagem Python
---

<iframe width="560" height="315" src="https://www.youtube.com/embed/bh_4HR9RJtU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


Em Python seguimos o mesmo esquema, só que aqui é mais fácil pois, não temos que compilar o programa. Python é
intrepretada e não compilada.

Se você tiver o Python devidamente instalado, basta executar `python foo.py` onde `foo.py` é um arquivo de texto simples
com o seguinte conteúdo:


```python
# -*- coding: utf-8 -*-

#
# Variáveis
#
a = 999
b = 555


#
# Sua lógica
#




#
# Testes
#
assert a == 555
assert b == 999
```


### Solução na linguagem Python

```python
# -*- coding: utf-8 -*-

#
# Variáveis
#
a = 999
b = 555

#
# Sua lógica
#
temp = a    # registramos o valor de 'a' em 'temp'
a    = b    # sobrescrever 'a' com o valor de 'b'
b    = temp # sobrescrever 'b' com o valor que era de 'a' (e foi registrado em 'temp')

#
# Testes
#
assert a == 555
assert b == 999
```



Linguagem JavaScript (Node.js)
---

<iframe width="560" height="315" src="https://www.youtube.com/embed/u4WOiKcvlVU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

Em JavaScript muda tudo!

Não, brincadeira, segue também o mesmo esquema!

Crie um arquivo chamado `foo.js` com o conteúdo abaixo e execute no terminal `node foo.js`.

Obviamente você deve ter o node.js devidamente instalado,


```javascript
var assert = require('assert');

//
// Variáveis
//
var a, b, temp;
a = 999;
b = 555;


//
// Sua lógica
//





//
// Seu teste
//
try {
    assert.equal(555, a);
    assert.equal(999, b);
} catch(e) {
    console.log(e);
}

```


### Solução na linguagem JavaScript (Node.js)


```javascript
var assert = require('assert');

//
// Variáveis
//
var a, b, temp;
a = 999;
b = 555;

//
// Sua lógica
//
temp = a;    // registramos o valor de 'a' em 'temp'
a    = b;    // sobrescrever 'a' com o valor de 'b'
b    = temp; // sobrescrever 'b' com o valor que era de 'a' (e foi registrado em 'temp')

//
// Seu teste
//
try {
    assert.equal(555, a);
    assert.equal(999, b);
} catch(e) {
    console.log(e);
}

```

