---
title:       Instalando o nodejs
description: Veja 4 formas de instalar o nodejs no Linux
capitulo:    linux-instalando-nodejs
---

Eu descobri <strike> 3 formas</strike>  4 formas de instalar o __nodejs__ no Debian (Debian-wheezy).

Esta primeira é a mais interessante.


Instalando o node.js através do nvm
---

O [nvm](https://github.com/creationix/nvm) é a sigla de "Node Version Manager", trata-se de um gerenciador
de versão do __nodejs__.

__Nota__: execute tudo como usuário normal (não como __root__).

Primeiro teremos que instalar o __nvm__:

    git clone git://github.com/creationix/nvm.git ~/.nvm
    printf "\n\n# NVM\nif [ -s ~/.nvm/nvm.sh ]; then\n\tNVM_DIR=~/.nvm\n\tsource ~/.nvm/nvm.sh\nfi" >> ~/.bashrc
    NVM_DIR=~/.nvm
    source ~/.nvm/nvm.sh

E agora o __nodejs__:

    nvm install v0.10.29
    nvm alias default 0.10
    nvm use 0.10

- - -
Fonte
- [Bevry's Learning Centre - Install Node.js](http://learn.bevry.me/node/install#via-node-version-manager-https-github-com-creationix-nvm)


A seguir, as demais receitas....



Compilando os fontes do git-hub
---

Atualize o sistema e instale as dependências via __apt-get__:

    apt-get update && apt-get install git-core curl build-essential openssl libssl-dev


Vamos baixar os fontes diretamente do [git-hub](https://github.com/joyent/node):

    git clone https://github.com/nodejs/node.git

Entre na pasta `node` digitando `cd node`.

Compilando:

    ./configure --openssl-libpath=/usr/lib/ssl
    make
    make install

Para testar execute:

    node -v


Compilando os fontes do site oficial
---

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

- - -
Fonte
- [http://nodebr.com/instalando-node-js-atraves-do-gerenciador-de-pacotes/](http://nodebr.com/instalando-node-js-atraves-do-gerenciador-de-pacotes/)



Via pacote deb (Debian-wheezy)
---

Esta é a forma recomendado na documentação, mas comigo não funcionou! Então, boa sorte...

Você precisará do [curl](http://curl.haxx.se/):

    apt-get install curl

Agora baixe o pacote Debian.

    curl -sL https://deb.nodesource.com/setup | bash -

E instale...

    apt-get install nodejs nodejs-legacy

- - -
Fonte
- [https://github.com/joyent/node/wiki/Installing-Node.js-via-package-manager](https://github.com/joyent/node/wiki/Installing-Node.js-via-package-manager)


Veja também
---

- [Instalando o npm](/linux/instalando-npm/)
- [Aprenda Node.js](/javascript/node.js/)
- [Node.js no GitHub](https://github.com/joyent/node)
- [Node.js](http://nodejs.org/)
- [Tutorial nodeschool](http://nodeschool.io/)
