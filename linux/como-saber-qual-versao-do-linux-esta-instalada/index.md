---
title:       Como saber qual versão do Linux está instalada
description: Comando que mostra qual é a versão do Linux
capitulo:    linux-artigos
ordem:
---

Na maioria das distribuições Linux você poderá utilizar o comando abaixo:

    cat /etc/issue

Mas, dependendo da distro, o comando pode variar um pouco, veja:

    cat /etc/issue.net


No CentOS (Red Hat) também funciona o comando abaixo

    cat /etc/redhat-release

O retorno deve ser algo parecido com `CentOS release 6.5 (Final)`.



### Como descobrir a arquitetura ?

Um retorno mais "completo" que inclui a arquitetura seria `uname -a`

Possíveis retornos para 32 bits são:

    i386
    i486
    i586
    i686 

E para 64 bits:

    x86_64 

### Fonte

- [http://www.fogonacaixadagua.com.br/2009/10/como-saber-qual-versao-do-red-hat-centos-esta-instalada/](http://www.fogonacaixadagua.com.br/2009/10/como-saber-qual-versao-do-red-hat-centos-esta-instalada/)
    