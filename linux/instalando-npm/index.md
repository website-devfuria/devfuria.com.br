---
title:       Instalando o npm
description: Receita de como instalar o npm, o gerenciador de pacotes do Node.js.
capitulo:    linux-instalando-nodejs
---

### O que é a NPM do Node.JS ?

[NPM](http://nodebr.com/o-que-e-a-npm-do-nodejs/) é o nome reduzido de Node Package Manager (Gerenciador
de Pacotes do Node). A NPM é duas coisas: primeiro, o mais importante, é um repositório online para publicação de projetos
de código aberto para o [Node.js](/javascript/node.js/); segundo, ele é um utilitário de linha de comando que interage
com este repositório online, que ajuda na instalação de pacotes, gerenciamento de versão e gerenciamento de dependências.


### Instalação rápida no Linux

Baixe e execute o script instalador (shel script) com a ajuda do utilitário `curl`.

Dá para fazer tudo (baixar e executar) em uma única linha...

    curl http://npmjs.org/install.sh | sudo sh


Para testar a instalação:

    npm -v


### Atualizando o npm

Olá, voltei (do futuro) para dizer como atualizar o npm.

    npm install -g npm


### Instalação mais adequada

Na hora de instalar o npm e o nodejs, o ideal, antes de tudo, é instalar um cara chamado __nvm__ (Node Version Manager).
Com ele você pode instalar várias versões do node e do npm. E o melhor de tudo, você pode alternar facilmente entre as
versões instaladas.

Então, vá para o artigo [Instalando o Node.js](/linux/instalando-nodejs/) e veja  a receita "Instalando o node.js através do nvm".


### Como aprender node js ?

Eu preparei uma série de artigos para você [aprender Node.js](/javascript/node.js/).

Divirta-se!!!
