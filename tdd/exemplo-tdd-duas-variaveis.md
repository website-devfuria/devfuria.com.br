---
layout:      grid93-article
title:       "Simples exemplo de TDD - Trocar o valor de duas variáveis"
description: trocar o valor de duas variáveis.
menu:        tdd-exemplos-simples-c
---

{% include /menus/tdd-exemplos-simples-paraquedas.html %}

Escreva um algoritmo que armazene o valor 999 na variável `a` e o valor 555 na variável `b`.

A seguir (utilizando apenas atribuições entre variáveis) troque os seus conteúdos
fazendo com que o valor que está em `a` passe para `b` e vice-versa.



### Solução passo a passo

Pelo raciocínio lógico, o que queremos fazer deve se parecer com isto.

	int a, b;

	a = 999;
	b = 555;

	assert(a == 555);
	assert(b == 999);

Vamos precisar trocar os valores!

Para isso faz-se necessário mais uma variável. Só que do tipo "reciclável", então darei o nome de `temporaria`.
Mas para ser mais econômico, apenas `temp`;

	int a, b, temp;


Vou guardar o valor de `a` em `temp`;

	temp = a;

Agora posso sobrescrever `a` com o valor de `b`.

	a = b;

E, finalmente, sobrescrever o valor de `b` pelo valor de `temp` (nosso `a` original).

	b = temp;



### Código completo

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int a, b, temp;

    a = 999;
    b = 555;

    // Lógica
    temp = a;	  // registramos o valor de 'a' em 'temp'
    a    = b;	  // sobrescrever 'a' com o valor de 'b'
    b    = temp;  // sobrescrever 'b' com o valor que era de 'a' (e foi registrado em 'temp')


    // Testes 
    assert(a == 555);
    assert(b == 999);

    return 0;
}
```



Próximo exemplo
---

-[]()
