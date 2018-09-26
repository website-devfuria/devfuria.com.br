---
title:       Instalando o Sublime no Linux
description: Receitas para instalção do Sublime no Debian (wheezy) e no Fedora
capitulo:    linux-instalando-editores
---


- [sublimetext.com/](https://www.sublimetext.com/ )


### Instalando o Sublime no Debian (wheezy)

Esta é uma forma bastante prática de instalar o Sublime no Debian, o link é meio suspeito e a versão é mais antiga
(build 3047) mas tudo funcionou perfeitamente.


Para arquitetura x64:

    wget http://c758482.r82.cf2.rackcdn.com/sublime-text_build-3047_amd64.deb
    sudo dpkg -i sublime-text_build-3047_amd64.deb

Para arquitetura x86:

    wget http://c758482.r82.cf2.rackcdn.com/sublime-text_build-3047_i386.deb
    sudo dpkg -i sublime-text_build-3047_i386.deb

- - -
Fonte:

- [www.simonewebdesign.it/](http://www.simonewebdesign.it/how-to-install-sublime-text-3-on-debian/)





### Instalando o Sublime no Fedora

Adicione o repositório

    yum-config-manager --add-repo http://repo.cloudhike.com/sublime2/fedora/sublime2.repo

Habilite o repositório

    yum-config-manager --enable

Instale

    yum install sublime-text

- - -
Fonte:

- [http://drayanaindra.blogspot.com.br/2013/01/install-sublime-text-2-via-repo-fedora_1.html](http://drayanaindra.blogspot.com.br/2013/01/install-sublime-text-2-via-repo-fedora_1.html)
