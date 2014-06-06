---
layout: materia
title: Instalando Ruby
---



Via repositório
---

    gem install rails

msg de erro: `can't find header files for ruby at /usr/lib/ruby/ruby.h`
procurando o erro na net:

    yum -y install gcc ruby-devel rubygems

ai, novamente:

    gem install rails

msg de erro: `Error installing rails: activesupport requires Ruby version >= 1.9.3.`

e vai na net fuçar, achei um dica para executar o utilitário

    rvm install 1.9.3

Deu erro, o utilitário rvm não existia.

Acessando o site `https://rvm.io/rvm/install`, logo na home, encontrei e excutei:

    \curl -sSL https://get.rvm.io | bash

ok, de novo
    
    rvm install 1.9.3

Negativo, resolvi reiniciar a máquina só depois tentar novamente:

    rvm install 1.9.3

Parecia que ia tudo bem...

msg de erro: `Missing required packages: libyaml-devel libffi-devel readline-devel`

Tentei...

    yum install libyaml-devel libffi-devel readline-devel

__libffi-devel__ e __readline-devel__ tudo ok, agora o __libyaml-devel__ o yum não achou.

Lendo a msg de erro com mais calma, descobri que podia habilitar o autolibs, l vou eu de novo...

    rvm autolibs enable

Acionei o Enter, não aconteceu nada. Então arrisquei...
    
    rvm install 1.9.3

Funfou, que lindo!
O instalador ainda me deu bronca, me "disse" que eu deveria atualizar para a versão 2.1 (eu ainda chego lá).

Bom será que instalou a versão 1.9.3?
    
    ruby --version
    ruby 1.9.3p547 (2014-05-14 revision 45962) [x86_64-linux]

belexa, então...

    rvm use 1.9.3
    Using /usr/local/rvm/gems/ruby-1.9.3-p547

e finalmente

    gem install rails

o processo foi meio devagar mas chegou até o fim com sucesso, obtive:

    28 gems installed



Compilando os fontes
---


### Primeiro o Ruby
Fonte: https://www.ruby-lang.org/en/installation/#building-from-source

Execute tudo como root.

    $ ./configure
    $ make
    $ sudo make install


### Segundo o rubygems
 
Baixe o rubygems http://rubygems.org/pages/download
Descompacte o arquivo, entre na pasta e execute:

     ruby setup.rb

### Rails

    gem install rails

