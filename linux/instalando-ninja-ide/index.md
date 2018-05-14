---
title:       Instalando o Ninja IDE no Linux (Debian wheezy)
description: Como instalar o Ninja IDE no Linux (Debian wheezy)
capitulo:    linux-instalando-editores
---

### O que é?

NINJA-IDE é o acrónimo "Ninja-IDE Is Not Just Another IDE" (Ninja-IDE Não é apenas outro IDE).

É uma [IDE](http://pt.wikipedia.org/wiki/Ambiente_de_desenvolvimento_integrado) para desenvolvimento
na linguagem [Python](/python/).


### Instalando via pacote .deb

No site oficial é sugerido o [download](http://ninja-ide.org/downloads/) de um pacote Debian.

Fiz o download, dei [permissão de execução](/linux/como-dar-permissao-de-execucao) e rodei o pacote normalmente:

    dpkg -i ninja-ide_2.3+r597~saucy1_all.deb

Infelizmente deu erro de dependências:

    dpkg: dependency problems prevent configuration of ninja-ide:
     ninja-ide depends on python-pyinotify; however:
      Package python-pyinotify is not installed.

    dpkg: error processing ninja-ide (--install):
     dependency problems - leaving unconfigured
    Processing triggers for desktop-file-utils ...
    Processing triggers for gnome-menus ...
    Processing triggers for menu ...
    Processing triggers for man-db ...
    Errors were encountered while processing:
     ninja-ide

Mas repare na mensagem que ele instalou a IDE mas deixou desconfigurada ("leaving unconfigured").

Apenas para constar: fazendo o teste em outra máquina, ele reclamou de outros pacotes: `python-pyinotify-doc python-qt4-dbg`.

Para resolver o problema basta executar:

    apt-get -f install

...e executar novamente a instalação `dpkg -i ninja-ide_2.3+r597~saucy1_all.deb`.


### Instalando via PPA

O legal desta receita é que ela também serve para __Ubuntu__.

Novamente no site oficial, abaixo do link para download, estava um receita de instalação via
[ppa](http://www.diolinux.com.br/2013/02/como-adicionar-um-ppa-no-ubuntu.html), só que para Ubuntu.

Será que funciona para Debian? Sim, funciona.

    apt-add-repository ppa:ninja-ide-developers/ninja-ide-stable (Stable updates)
    apt-get update
    apt-get install ninja-ide

Mas o problema de dependência, obviamente, também afetará o
[apt-get](http://www.hardware.com.br/tutoriais/tutorial-completo-apt-get/).

Mas nada que um `apt-get -f install` não resolva.


- - -
Fonte

- [Site Oficial - NINJA-IDE](http://ninja-ide.org)
- [Repositório no GitHub](https://github.com/ninja-ide)