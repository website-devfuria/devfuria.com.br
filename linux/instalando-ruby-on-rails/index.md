---
title:       Instalando o Ruby On Rails
description: Aprenda como instalar a linguagem Ruby compilando os fontes
capitulo:    linux-instalando-ruby
---

A instalação do __Ruby__  deve ser feita em 3 passos:

1. Instalar o __Ruby__
2. Instalar o gerenciador de pacotes __RubyGems__
3. Instalar o __Rails__



Instalando o Ruby no Debian (wheezy)
---

Primeiro resolvemos as dependências.

    apt-get install gcc g++ make build-essential  git-core automake autoconf curl gawk libgcrypt11-dev libreadline-dev libruby1.9.1 libreadline6-dev zlib1g-dev libssl-dev libyaml-dev libsqlite3-dev sqlite3  libncurses5-dev  libtool bison pkg-config libffi-dev

Há uma forma simplificada de fazer isso...

    apt-get install build-essential


Baixe o código fonte do __Ruby__ no site oficial

[https://cache.ruby-lang.org/pub/ruby/2.4/ruby-2.4.2.tar.gz](https://cache.ruby-lang.org/pub/ruby/2.4/ruby-2.4.2.tar.gz)

Quando escrevo este artigo, a versão mais atual do __Ruby__ é a 2.4.2.

Utilize a versão mais atual.

Devemos dar [permissão de execução](/linux/como-dar-permissao-de-execucao) no arquivo.

Vamos descompactar o arquivo.

Eu prefiro mover o arquivo para minha home, no meu computador seria `/home/flavio/`, mas você pode descompactar onde quiser.

Para descompactar execute:

    tar -xvcf ruby-2.4.2.tar.gz

Ele irá criar uma pasta chamada `ruby-2.4.2`. Entre nela...

	cd /ruby-2.4.2

... e execute tudo como root:

    ./configure CONFIGURE_OPTS=--disable-install-doc
    make
    make install

Reinicialize a máquina.

    gem update --system

Reinicialize novamente a máquina.


### Instalando o Rails

    gem install rails --source https://rubygems.org



Instalando o Ruby no CentOS (6.4)
---

Primeiro vamos resolver algumas dependências.

    yum install gcc g++ make automake autoconf curl-devel openssl-devel zlib-devel httpd-devel apr-devel apr-util-devel sqlite-devel

Baixe o código fonte do __Ruby__ no site oficial

[http://cache.ruby-lang.org/pub/ruby/2.1/ruby-2.1.2.tar.gz](http://cache.ruby-lang.org/pub/ruby/2.1/ruby-2.1.2.tar.gz)

Quando escrevo este artigo, a versão mais atual do __Ruby__ é a 2.1.2.

Utilize a versão mais atual.

Devemos dar [permissão de execução](/linux/como-dar-permissao-de-execucao) no arquivo.

Vamos descompactar o arquivo.

Eu prefiro mover o arquivo para minha home, no meu computador seria `/home/flavio/`, mas você pode descompactar onde quiser.

Para descompactar execute:

    tar -xvcf ruby-2.1.2.tar.gz

Ele irá criar uma pasta chamada `ruby-2.1.2`. Entre nela `cd /ruby-2.1.2`

Execute tudo como root.

    ./configure
    make
    make install

Pronto! __Ruby__ instalado.

Para checar execute:

    ruby --version


### Instalando o RubyGems

O __RubyGems__ é o administrador de repositórios do Ruby. Com ele instalado, poderemos instalar qualquer "gens" dessa forma
`gem install nome-da-gem`.

Baixe o código fonte no site oficial
[http://rubygems.org/pages/download](http://rubygems.org/pages/download)

Também devemos dar [permissão de execução](/linux/como-dar-permissao-de-execucao) no arquivo.

Para descompactar execute:

    tar -xvcf rubygems-2.2.2

Agora, entre na pasta e execute:

    ruby setup.rb


### Instalando o Rails

Execute:

    gem install rails


- - -
Fonte:

- [https://www.ruby-lang.org/en/installation/#building-from-source](https://www.ruby-lang.org/en/installation/#building-from-source)
- [https://www.ruby-lang.org/pt/downloads/](https://www.ruby-lang.org/pt/downloads/)
