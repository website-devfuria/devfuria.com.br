---
title:       Como compilar códigos em C/C++ no Linux
description: Compile códigos no terminal do Linux  linguagem C.
capitulo:    c-intro
ordem:       2
---

Não, não é coisa de outro mundo, usar __C/C++__ no __Linux__ é muito fácil.

Obviamente, você precisará ter o [Linux](/linux) instalado, nem que seja em uma máquina virtual.

Depois o mais importante é o compilador, no caso o __gcc__, sua instalação é muito fácil.

Se estivar no Ubuntu, Debian:

    apt-get install gcc

Se estiver no Fedora, CentOS:

    yum install gcc      



Editor de texto
---

Esse também não pode faltar, o __gedit__ é o editor de texto padrão em diversas distro's, quer dizer nem precisa instalar.
É como se fosse __notpad__ no Windows.

Obviamente, utilize o seu editor preferido.



Compilando
---

A linha de comando que compila é essa:

    gcc seucodigo.c -o seuprograma.run

Vamos quebrá-la para entendê-la.

    gcc seucodigo.c      // compile o código  
    -o seuprograma.run   // e gere o arquivo binário (executável)


A extensão `run` é facultativa, quero dizer, posso colocar qualquer coisa.

O Linux não é como o Windows, no Linux não precisa nem de extensão, ok?

Ao invés de `.run` poderia ser `.exe`, `.bin` ou poderia até não ter extensão alguma.


Executando
---

Como executar um arquivo binário (executável) no Linux ?

    ./seuprograma.run



Código minimalista para teste
---

Experimente compilar este código.

    int main (){
        return 0;
    }

Esse é o menor código na [linguagem c](../introducao-linguagem-c) possível de ser compilado.

Por ser minúsculo, você não conseguirá fazer nada com ele, então vamos dar um "up".

    #include <stdio.h>

    int main (){
        printf ("Hello, world!\n");
        return 0;
    }



Dicas rápidas de uso do terminal
---

- `clear` limpa a tela
- `seta para cima` pesquisa histórico de comandos
- `CTRL + U` limpa linha
- `TAB` Acione a tecla __TAB__ para usufruir do "autocomplete"


