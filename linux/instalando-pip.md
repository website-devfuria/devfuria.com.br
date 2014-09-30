---
layout:      grid12-article
title:       Instalando o pip (gerenciados de pacotes do python)
description: Descubra como instalar o pip (gerenciados de pacotes do python) no Linux
---

### O que pip?

__pip__ é um sistema de gerenciamento de pacotes usado para instalar e gerenciar pacotes de software escritos na
linguagem de programação Python
( [wikipedia](http://pt.wikipedia.org/wiki/Pip_%28Python%29 "link-externo") ).


### Instalando via apt-get

     apt-get install python-pip

### Instalando via yum

     yum install python-pip

### Qual versão foi instalada?

    pip --version



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