---
layout:      grid12-article
title:       Como saber qual versão do Linux está instalada
description: Comando que mostra qual é a versão do Linux
---

Na maioria das distribuições Linux você poderá utilizar o comando abaixo:

    cat /etc/issue

Mas, dependendo da distro, o comando pode variar um pouco, veja:

    cat /etc/issue.net


No CentOS (Red Hat) também funciona o comando abaixo

    cat /etc/redhat-release

O retorno deve ser algo parecido com `CentOS release 6.5 (Final)`.

Um retorno mais "completo" que inclui a arquitetura seria `uname -a`


### Fonte

- [http://www.fogonacaixadagua.com.br/2009/10/como-saber-qual-versao-do-red-hat-centos-esta-instalada/](http://www.fogonacaixadagua.com.br/2009/10/como-saber-qual-versao-do-red-hat-centos-esta-instalada/ "link-externo")
    