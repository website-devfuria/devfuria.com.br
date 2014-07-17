---
layout: materia
title: Instalando o nodejs
description: Veja 3 formas de instalar o nodejs no Linux
---

Eu descobri 3 formas de instalar o __nodejs__ no Debian:


### Compilando os fontes via git-hub (Debian-wheezy)

Atualize o sistema e instale as dependências via __apt-get__:

    apt-get update && apt-get install git-core curl build-essential openssl libssl-dev


Vamos baixar os fontes diretamente do __git-hub__:

    git clone https://github.com/joyent/node.git

Entre na pasta `node` digitando `cd node`.

Compilando:

    ./configure --openssl-libpath=/usr/lib/ssl
    make
    make install

Para testar execute:

    node -v


### Compilando os fontes - segunda forma (Debian-wheezy)

Atualize o sistema e instale as dependências via __apt-get__:

    apt-get update && apt-get install git-core curl build-essential openssl libssl-dev make g++

Crie um diretório chamado `nodejs` e entre nele `cd nodejs`, você pode fazer isso em um único passo:

    mkdir ~/nodejs && cd $_

Baixo os fontes com o utilitário __wget__:

    wget -N http://nodejs.org/dist/node-latest.tar.gz

Descompacte o arquivo:

    tar xzvf node-latest.tar.gz

Entre na pasta `node-v*`:

    cd `ls -rd node-v*`

Compile:

    ./configure
    make
    make install

Para testar execute:

    node -v

<hr>
Fonte
- [http://nodebr.com/instalando-node-js-atraves-do-gerenciador-de-pacotes/](http://nodebr.com/instalando-node-js-atraves-do-gerenciador-de-pacotes/ "link-externo")



### Compilando os fontes - terceira forma (Debian-wheezy)

Esta é a forma idicada na documentação do repositório (veja link da fonte).

Comigo não funcionou, o __Debian-wheezy__ não encontra a biblioteca __checkinstall__

Então boa sorte:

    apt-get install python g++ make checkinstall fakeroot
    src=$(mktemp -d) && cd $src
    wget -N http://nodejs.org/dist/node-latest.tar.gz
    tar xzvf node-latest.tar.gz && cd node-v*
    ./configure
    fakeroot checkinstall -y --install=no --pkgversion $(echo $(pwd) | sed -n -re's/.+node-v(.+)$/\1/p') make -j$(($(nproc)+1)) install
    dpkg -i node_*

<hr>
Fonte
- [https://github.com/joyent/node/wiki/Installing-Node.js-via-package-manager]("https://github.com/joyent/node/wiki/Installing-Node.js-via-package-manager" link-externo")



Veja também
---

- [Instalando o npm](/linux/instalando-npm/)