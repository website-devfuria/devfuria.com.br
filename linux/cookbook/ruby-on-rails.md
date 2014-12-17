---
layout:      grid12-article
title:       Instalando o Ruby On Rails
description: Aprenda a instalar a linguagem Ruby tanto via repositório como compilando os fontes
---

A instalação do __Ruby__ (tanto via fonte como repositório) deve ser feita em 3 passos:

1. Instalar o __Ruby__
2. Instalar o gerenciador de pacotes __RubyGems__
3. Instalar o __Rails__

A instalação do __Rails__ via código fonte foi muito mais fácil que via repositório (yum).

Então eu vou mostrar primeiro como instalar compilando os fontes.

A receita abaixo foi utilizada em um __Centos 6.4__.





Compilando os fontes
---


### Instalando o Ruby

Baixe o código fonte do __Ruby__ no site oficial

[http://cache.ruby-lang.org/pub/ruby/2.1/ruby-2.1.2.tar.gz](http://cache.ruby-lang.org/pub/ruby/2.1/ruby-2.1.2.tar.gz "link-externo")

Quando escrevo este artigo, a versão mais atual do __Ruby__ é a 2.1.2.

Utilize a versão mais atual.

Devemos dar [permissão de execução](/linux/como-dar-permissao-de-execucao) no arquivo.

Vamos descompactar o arquivo.

Eu prefiro mover o arquivo para minha home, no meu computador seria `/home/flavio/`, mas você pode descompactar onde quiser.

Para descompactar execute:

    # tar -xvcf ruby-2.1.2.tar.gz

Ele irá criar uma pasta chamada `ruby-2.1.2`. Entre nela `cd /ruby-2.1.2`

Execute tudo como root.

    # ./configure
    # make
    # make install

Pronto! __Ruby__ instalado.

Para checar execute:

    # ruby --version


### Instalando o RubyGems
 
O __RubyGems__ é o administrador de repositórios do Ruby. Com ele instalado, poderemos instalar qualquer "gens" dessa forma
`gem install nome-da-gem`.

Baixe o código fonte no site oficial 
[http://rubygems.org/pages/download](http://rubygems.org/pages/download "link-externo")

Também devemos dar [permissão de execução](/linux/como-dar-permissao-de-execucao) no arquivo.

Para descompactar execute:

    # tar -xvcf rubygems-2.2.2

Agora, entre na pasta e execute:

    # ruby setup.rb


### Instalando o Rails

Execute:

    # gem install rails


<hr>
Fonte:

- [https://www.ruby-lang.org/en/installation/#building-from-source](https://www.ruby-lang.org/en/installation/#building-from-source "link-externo")
- [https://www.ruby-lang.org/pt/downloads/](https://www.ruby-lang.org/pt/downloads/ "link-externo")





Via repositório (yum install ruby)
---


### Instalando o Ruby

Começamos com o Ruby.

    # yum install ruby 


As dependências.

    # yum install gcc g++ make automake autoconf curl-devel openssl-devel zlib-devel httpd-devel apr-devel apr-util-devel sqlite-devel
    # yum install ruby-rdoc ruby-devel


É recomendável instalar o "Development Tools"

    # yum groupinstall "Development Tools" 


Ruby instalado! Para checar execute:

    # ruby --version

Putz! Ele instalou uma versão bem mais antiga que a dos fontes.


### Instalando o RubyGems

Agora instalamos o RubyGems.

    # yum install rubygems 

Atualizamos:

    # gem update
    # gem update --system 

Até aqui tudo foi tranquilo.


### Instalando o Rails

Torça os dedos e execute:

    # gem install rails

Para mim, apareceu a seguinte mensagem de erro: `can't find header files for ruby at /usr/lib/ruby/ruby.h`

Procurando o erro na net, encontrei:

    # yum -y install gcc ruby-devel rubygems

Se você reparar, já instalamos essa dependências, mas agora utlizamos o `-y`

Tentei novamente:

    # gem install rails

Mais um erro: `Error installing rails: activesupport requires Ruby version >= 1.9.3.`

Ele precisa da versão do Ruby 1.9.3 e a minha era 1.8.

E vai na net fuçar, achei um dica para executar o utilitário __RVM__. Ele instala o Ruby na versão que quisermos, então
fiz uma pausa na instalação do __Rails__ para...


### Instalando (novamente) o __Ruby__ através do __RVM__

Fui de cara e executei:

    # rvm install 1.9.3

Obviamente, deu erro, o utilitário não existia.

Para instalar o __RVM__, excute:

    # \curl -sSL https://get.rvm.io | bash


OK, __RVM__ instalado, agora vai...
    
    # rvm install 1.9.3

Negativo, resolvi reiniciar a máquina.

Mais uma vez...

    # rvm install 1.9.3

Agora foi. Parecia que ia tudo bem... mas mostrou a mensagem de erro `Missing required packages: libyaml-devel libffi-devel readline-devel`

Ele está reclamando das dependências listadas. Tentei...

    # yum install libyaml-devel libffi-devel readline-devel


Resultado, __libffi-devel__ e __readline-devel__ tudo ok, agora o __libyaml-devel__ o __yum__ não achou.

Lendo a documentação com mais calma, descobri que poderia habilitar o __autolibs__ do __RVM__...

    # rvm autolibs enable

Acionei o Enter, não aconteceu nada, então arrisquei...
    
    rvm install 1.9.3

Funfou, que lindo!
O instalador ainda me deu bronca, me "disse" que eu deveria atualizar para a versão 2.1 (eu ainda chego lá).

Bom, será que instalou a versão 1.9.3?
    
    # ruby --version
      ruby 1.9.3p547 (2014-05-14 revision 45962) [x86_64-linux]

O __RVM__ troca de versão com uma facilidade incrivel. Achei isso super bacana, veja:

    # rvm use 1.9.3
      Using /usr/local/rvm/gems/ruby-1.9.3-p547

E finalmente pude continuar com o __Rails__.

    # gem install rails

O processo foi meio devagar mas chegou até o fim com sucesso, obtive:

    28 gems installed


<hr>
Fonte:

- [https://rvm.io/rvm/install](https://rvm.io/rvm/install "link-externo")
- [http://www.vivaolinux.com.br/dica/Como-instalar-o-Ruby-on-Rails-no-CentOS-6](http://www.vivaolinux.com.br/dica/Como-instalar-o-Ruby-on-Rails-no-CentOS-6 "link-externo")