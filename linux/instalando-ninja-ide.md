---
layout:      materia
title:       Instalando o Ninja IDE no Linux (Debian wheezy)
description: Como instalar o Ninja IDE no Linux (Debian wheezy)
---

### O que é?

NINJA-IDE é o acrónimo "Ninja-IDE Is Not Just Another IDE" (Ninja-IDE Não é apenas outro IDE).

É uma [IDE](http://pt.wikipedia.org/wiki/Ambiente_de_desenvolvimento_integrado "link-externo") para desenvolvimento
na linguagem [Python](python/).


### Receita de instalação 

No site oficial é sugerido o download de um [pacote Debian](http://pt.wikipedia.org/wiki/.deb "link-externo").

Fiz o download, dei [permissão de execução]() e rodei o pacote normalmente:

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


Novamente no site oficial, abaixo do link para download estava um receita de instalação via 
[ppa](http://www.diolinux.com.br/2013/02/como-adicionar-um-ppa-no-ubuntu.html "link-externo"), só que para Ubuntu.

Será que funciona para Debian? Sim, funciona.

    apt-add-repository ppa:ninja-ide-developers/ninja-ide-stable (Stable updates)
    apt-get update
    apt-get install ninja-ide

Mas o problema de dependência, obviamente, também afetará o 
[apt-get](http://www.hardware.com.br/tutoriais/tutorial-completo-apt-get/ "link-externo").

Mas nada que um `apt-get -f install` não resolva.
    

<hr>
Fonte

- [Site Oficial - NINJA-IDE](http://ninja-ide.org "link-externo")
- [Repositório no GitHub](https://github.com/ninja-ide "link-externo")