---
layout:      grid12-article
title:       Instalando o pip
description: Descubra como instalar o<br />gerenciados de pacotes do python<br />no Linux
---

### O que pip?

__pip__ é um sistema de gerenciamento de pacotes usado para instalar e gerenciar pacotes de software escritos na
linguagem de programação [Python](/python/).
( [wikipedia](http://pt.wikipedia.org/wiki/Pip_%28Python%29 "link-externo") ).


### Instalando via apt-get

     apt-get install python-pip

### Instalando via yum

     yum install python-pip

### Qual versão foi instalada?

    pip --version


Uma forma alternativa de instalação indicada para quem usa o [Python 3](/linux/cookbook/python) é a seguinte:

    cd /opt
    wget https://bootstrap.pypa.io/get-pip.py
    python3 get-pip.py

Se você seguiu a forma alternativa, executar `pip --version` talvez retorne

    bash: pip: command not found

Muito provavelmente, a instalação criou o atalho `pip3` ou `pip3.2` ou ainda `pip3.4`, o nome do link (atalho) vai 
depender da versão do [Python](/linux/cookbook/python) instalado (`python --version`).



Atualizando
---

Após instalar o __pip__ no Debain (wheezy) via __apt-get__ eu decobri que ele instalou a versão 1.1.

Para atualizar para a versão mais recente (enquanto escrevo este artigo a 1.5) utilizei o próprio __pip__.
(aliás boa hora para ver se o "negócio" está funcionando).

    pip install -U pip

O seguinte comando também funciona

    pip install --upgrade pip

Mas no meu caso, ele perdeu a referência para o arquivo, veja a mensagem de erro ao digitar `pip`:

    bash: /usr/bin/pip: Arquivo ou diretório não encontrado

Por isso não aconselho a atualizar o __pip__ (pelo menos não no Debian wheezy).


Se você encontrou o mesmo problema, fique tranquilo, nada que um `apt-get remove pip` e um `apt-get install pip` na sequência
não resolvam.


### Fontes:

- [Site oficial: https://pip.pypa.io/en/latest/](https://pip.pypa.io/en/latest/ "link-externo")


Leia também
---

Aprenda a programar em nossa seção sobre a [linguagem Python](/python/).