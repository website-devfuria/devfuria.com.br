---
title:       Instalando o git
description: Aprenda como instalar o git no Linux
capitulo:    linux-instalando-utils
---

No Linux podemos instalar o git através dos pacotes do sistema.

Na família HadHat (Fedora, CentOS, etc...) execute:

    yum install git-core

Na família Debian (Ubuntu) execute:

    apt-get install git

Você também pode compilar os fontes, leia o capítulo
[Primeiros passos - Instalando Git](http://git-scm.com/book/pt-br/Primeiros-passos-Instalando-Git)
do livro Pro Git para saber como.

Neste mesmo capítulo você encontrará as receitas para instalação no __Windows__ e no __Mac__.


### Configure sua identidade

A primeira coisa que você deve fazer quando instalar o Git é definir o seu nome de usuário e endereço de e-mail. Isso é
importante porque todos os commits no Git utilizam essas informações, e está imutavelmente anexado nos commits que você
realiza.

    git config --global user.name "Seu nome para exibição"
    git config --global user.email "seu-email@email.com"

Para ver suas configurações execute `git config --list`.


### Interface gráfica para o git


Talvez você queira aproveitar e instalar os utilitários de interface __gitk__ e __git gui__, basta executar:

    yum install gitk git-gui        // hadhat
    apt-get install gitk git-gui    // debian

Para rodar o gitk execute, no terminal,  `gitk`.

Para rodar o git-gui execute `git gui`.

Veja tamém
---

Que tal aprender um pouco mais sobre o git?

Leia a nossa [seção sobre git](/git/).

